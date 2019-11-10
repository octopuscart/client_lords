/* 
 Producrt list controllers
 */

App.controller('ProductController', function ($scope, $http, $timeout, $interval) {

    $scope.productResults = {'products': []};
    $scope.productAttr = {};
    $scope.init = 0;
    
    $scope.selecteProduct = {"selected":{}};
    $scope.fabricsZoomModel = function(productobj){
        console.log(productobj)
        $("#productcustome").modal("show");
        $scope.selecteProduct.selected = productobj;
    }
    

    $scope.pricerange = {'min': 0, 'max': 0};
    $scope.productProcess = {'state': 1, 'showstate': 1, 'pagination': {'paginate': [1, 12], 'perpage': 12}, 'products': [], 'finalProducts': []};

    $scope.attribute_search = {"search": "", "color": "", "search_title": ""};


    $scope.getProducts = function (attrs) {
        $scope.productResults.products = [];
        $scope.productProcess.state = 1;
        var argsk = [];
        if ($scope.attribute_search.color) {
            var colorc = "colors=" + $scope.attribute_search.color;
            argsk.push(colorc);
        }

        if ($scope.attribute_search.search) {
            var colorc = "search=" + $scope.attribute_search.search;
            argsk.push(colorc);
        }
        
        if(brandname){
            var brand = "brand=" + brandname;
            argsk.push(brand);
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
            
            console.log($scope.productProcess.products.length);
            if($scope.productProcess.products.length == 0){
                $scope.productProcess.showstate  = 4;
            }
            
            $scope.productProcess.showstate = 1;
            $timeout(function () {
                $('#paging_container1').pajinate({
                    items_per_page: 20,
                    num_page_links_to_display: 5,
                });

                $timeout(function () {
                    $scope.checkProduct();
                }, 100)


                $(".page_link").click(function () {
                    $("html, body").animate({scrollTop: 0}, "slow")
                })
            }, 1000)
            $scope.init = 1;
        }, function () {
            $scope.productProcess.state = 0;
        });
    }

    $scope.attribute_checked = {};

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
            countdata = [1,20];
        }
        $scope.productProcess.showstate = 1;
        $timeout(function () {
//            $scope.productProcess.showstate = 2;
            $scope.productProcess.pagination.paginate = countdata;
            $scope.productProcess.pagination.perpage = '12';
            console.log($scope.productProcess.products.slice(countdata[0] - 1, countdata[1]))
            console.log(countdata[0] - 1, countdata[1])
            $scope.productProcess.finalProducts = $scope.productProcess.products.slice(countdata[0] - 1, countdata[1]);
            $scope.attribute_search.search = "";


            $scope.productProcess.showstate = 2;

        }, 500)

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


    $scope.$watch('attribute_search.search', function (n, o) {
        console.log(n, o)
    })

    $scope.removeSearch = function () {
        $scope.attribute_search.search = "";
        $scope.attribute_search.search_title = "";
        $scope.getProducts();
    }



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
                displayKey: 'title',
                limit: 8,
                source: search.ttAdapter(),
                templates: {
                    header: '<span class="typeaheadgroup"><i class="icon-search"></i> Searched Result</span>',
                    suggestion: Handlebars.compile($("#result-template").html()),
                },
            }

    ).bind('typeahead:selected', function (obj, select_data) {
        var checked = select_data.sid;
        $timeout(function () {
            $scope.attribute_search.search = checked;
            $scope.attribute_search.search_title = select_data.title;
            $scope.getProducts();
        })

//            $("input[name=searchtag]").val(checkd);

        console.log(checked)

    });



})



App.controller('ProductControllerAccessories', function ($scope, $http, $timeout, $interval) {

    $scope.productResults = {'products': []};
    $scope.productAttr = {};
    $scope.init = 0;
    
    $scope.selecteProduct = {"selected":{}};
    $scope.fabricsZoomModel = function(productobj){
        console.log(productobj)
        $("#productcustome").modal("show");
        $scope.selecteProduct.selected = productobj;
    }
    

    $scope.pricerange = {'min': 0, 'max': 0};
    $scope.productProcess = {'state': 1, 'showstate': 1, 'pagination': {'paginate': [1, 12], 'perpage': 12}, 'products': [], 'finalProducts': []};

    $scope.attribute_search = {"search": "", "color": "", "search_title": ""};


    $scope.getProducts = function (attrs) {
        $scope.productResults.products = [];
        $scope.productProcess.state = 1;
        var argsk = [];
        if ($scope.attribute_search.color) {
            var colorc = "colors=" + $scope.attribute_search.color;
            argsk.push(colorc);
        }

        if ($scope.attribute_search.search) {
            var colorc = "search=" + $scope.attribute_search.search;
            argsk.push(colorc);
        }
        
        if(brandname){
            var brand = "brand=" + brandname;
            argsk.push(brand);
        }

        var stargs = "";
        if (argsk.length) {
            stargs = argsk.join("&");
        }
        var url = baseurl + "Api/productListApiAccessories/" + custom_id + "/" +  category_id;

        if (stargs) {
            url = url + "?" + stargs;
        }
        $http.get(url).then(function (result) {
            $scope.productProcess.products = result.data.products;
            
            console.log($scope.productProcess.products.length);
            if($scope.productProcess.products.length == 0){
                $scope.productProcess.showstate  = 4;
            }
            
            $scope.productProcess.showstate = 1;
            $timeout(function () {
                $('#paging_container1').pajinate({
                    items_per_page: 20,
                    num_page_links_to_display: 5,
                });

                $timeout(function () {
                    $scope.checkProduct();
                }, 100)


                $(".page_link").click(function () {
                    $("html, body").animate({scrollTop: 0}, "slow")
                })
            }, 1000)
            $scope.init = 1;
        }, function () {
            $scope.productProcess.state = 0;
        });
    }

    $scope.attribute_checked = {};

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
            countdata = [1,20];
        }
        $scope.productProcess.showstate = 1;
        $timeout(function () {
//            $scope.productProcess.showstate = 2;
            $scope.productProcess.pagination.paginate = countdata;
            $scope.productProcess.pagination.perpage = '12';
            console.log($scope.productProcess.products.slice(countdata[0] - 1, countdata[1]))
            console.log(countdata[0] - 1, countdata[1])
            $scope.productProcess.finalProducts = $scope.productProcess.products.slice(countdata[0] - 1, countdata[1]);
            $scope.attribute_search.search = "";


            $scope.productProcess.showstate = 2;

        }, 500)

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


    $scope.$watch('attribute_search.search', function (n, o) {
        console.log(n, o)
    })

    $scope.removeSearch = function () {
        $scope.attribute_search.search = "";
        $scope.attribute_search.search_title = "";
        $scope.getProducts();
    }



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
                displayKey: 'title',
                limit: 8,
                source: search.ttAdapter(),
                templates: {
                    header: '<span class="typeaheadgroup"><i class="icon-search"></i> Searched Result</span>',
                    suggestion: Handlebars.compile($("#result-template").html()),
                },
            }

    ).bind('typeahead:selected', function (obj, select_data) {
        var checked = select_data.sid;
        $timeout(function () {
            $scope.attribute_search.search = checked;
            $scope.attribute_search.search_title = select_data.title;
            $scope.getProducts();
        })

//            $("input[name=searchtag]").val(checkd);

        console.log(checked)

    });



})


