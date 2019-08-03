/* 
 Producrt list controllers
 */

App.controller('ProductController', function ($scope, $http, $timeout, $interval) {

    $scope.productResults = {'products':[]};
    $scope.productAttr = {};
    $scope.init = 0;
   
    $scope.pricerange = {'min': 0, 'max': 0};
    $scope.productProcess = {'state': 1, 'showstate':1, 'pagination': {'paginate': [1, 12], 'perpage': 12}, 'products': [],'finalProducts':[] };


   

    $scope.getProducts = function (attrs) {
        $scope.productResults.products = [];
        $scope.productProcess.state = 1;
        var argsk = [];
        if ($scope.attribute_search.color) {
            var colorc = "colors=" + $scope.attribute_search.color;
            argsk.push(colorc);
        }
        var stargs = "";
        if (argsk.length) {
            stargs = argsk.join("&");
        }
        var url = baseurl + "Api/productListApi/" + category_id + "/" + custom_id;

        if (stargs) {
            url = url + "?" + stargs;
        }
        $http.get(url).then(function (result) {
            $scope.productProcess.products = result.data.products;
            $scope.productProcess.state = 2;
            $timeout(function () {
                $('#paging_container1').pajinate({
                    items_per_page: 12,
                    num_page_links_to_display: 5,
                });
                $scope.checkProduct();

                $(".page_link").click(function () {
                    $("html, body").animate({scrollTop: 0}, "slow")
                })
            }, 1500)
            $scope.init = 1;
        }, function () {
            $scope.productProcess.state = 0;
        });
    }

    $scope.attribute_checked = {};
    $scope.attribute_search = {"search": "", "color": ""};
    $scope.getProducts();

    $scope.attribute_checked_pre = {};

    $scope.attributeProductGet = function (atv, atc, checkattr) {
$scope.productProcess.showstate = 1;
        console.log(checkattr)
        //check attribute id
        if (checkattr) {

            $scope.attribute_checked[atv] = atc


        } else {
            delete $scope.attribute_checked[atv];
        }
        var temp = [];
        for (atr in $scope.attribute_checked) {
            console.log(atr);
            temp.push(atr);
        }

        $scope.attribute_search.color = temp.join("-");

        console.log($scope.attribute_search);


//        var stargs = encodeURIComponent(fargs);
        $scope.getProducts();




    }


    $scope.filterPrice = function () {
        $scope.getProducts();
    }

    $scope.checkProduct = function () {
        var countdata = $(".info_text").text().split(" ")[1];
        if (countdata) {
            var countdata1 = countdata.split("-");
            countdata = [Number(countdata1[0]), Number(countdata1[1])];
        } else {
            countdata = [1, 12];
        }
        $scope.productProcess.showstate = 1;
        $timeout(function () {
           $scope.productProcess.showstate = 2;
            $scope.productProcess.pagination.paginate = countdata;
            $scope.productProcess.pagination.perpage = '12';
            console.log($scope.productProcess.products.slice(countdata[0] - 1, countdata[1]))
            $scope.productProcess.finalProducts = $scope.productProcess.products.slice(countdata[0] - 1, countdata[1]);
        }, 1100)




    }

    $(document).on("click", ".page_link", function () {
        $scope.productProcess.currentpage = $(this).attr("longdesc");
        $scope.checkProduct();
    });

    $(document).on("click", ".last_link", function () {
        $scope.productProcess.currentpage = "last";
        $scope.checkProduct();
    });
    $(document).on("click", ".first_link", function () {
        $scope.productProcess.currentpage = "last";
        $scope.checkProduct();
    });

    $(document).on("click", ".next_link", function () {
        $scope.productProcess.currentpage = Number($scope.productProcess.currentpage) + 1;
        $scope.checkProduct();
    });
    $(document).on("click", ".previous_link", function () {
        $scope.productProcess.currentpage = Number($scope.productProcess.currentpage) - 1;
        $scope.checkProduct();
    });
    
      $scope.checkProduct();



    var search = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('item_code'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: searchUrlProduct,
            wildcard: '%QUERY%'
        }
    });





    /////////////////// Search Customer type ahead ////////////////////////////////////
    $('#searchproduct').typeahead(
            {highlight: true},
            {
                name: 'search',
                displayKey: 'item_code',
                limit: 8,
                source: search.ttAdapter(),
                templates: {
                    header: '<span class="typeaheadgroup"><i class="icon-search"></i> Searched Result</span>',
                    suggestion: Handlebars.compile($("#result-template").html()),
                },
            }

    ).bind('typeahead:selected', function (obj, select_data) {
        var checked = select_data.sid;
//            $("input[name=searchtag]").val(checkd);

        console.log(checked)

    });



})


