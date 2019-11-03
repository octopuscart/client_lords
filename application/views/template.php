<html>
    <head>
        <style>
            body{
                background: black;
                color:white;
                font-family: sans-serif;
            }
            .container{

            }
            .address{
                margin: 0px;
            }
            table{
                border-spacing: 1px;
                display: inline;
                border: 3px solid #fff;
            }
            table th, table td{
                text-align: center;
                text-align: center;
                padding: 10px;
                font-size: 18px;
                border: 1px solid #fff;

            }
            .container{
                text-align: center;
            }
            .hotelname{
                padding: 00;
                margin: 0;
                font-size: 14px;
                margin-bottom: 5px;
                    font-size: 20px;
            }
            .template{
                display: inline;
                width: 1000px;
                   
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="template">
                <table border="2" border-color="white" width="1000px">
                    <thead>
                        <tr>
                            <td>Date</td>
                            <td>City/State</td>
                            <td>Hotel Name & Address
                            </td>
                        </tr>
                         <tr>
                            <td>Date</td>
                            <td>City/State</td>
                            <td>Hotel Name & Address
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($appointment as $key => $value) {
                        ?>
                        <tr>
                            <td>
                                <?php
                                $dataes = $value['dates'];
                                $index = 0;
                                $datetemp = [];
                                foreach ($dataes as $dtkey1 => $dtvalue1) {
                                    $locale = 'en_US';
                                    $nf = new NumberFormatter($locale, NumberFormatter::ORDINAL);
                                    $fdate = $nf->format(date_format(date_create($dtvalue1['date']), "d"));
                                    $fmonth = date_format(date_create($dtvalue1['date']), "F");
                                    $fyear = date_format(date_create($dtvalue1['date']), "Y");
                                    $tempday = array("d" => $fdate, "m" => $fmonth, "y" => $fyear);
                                    array_push($datetemp, $tempday);
                                }
                                if (count($datetemp) == 1) {
                                    $tempff = $datetemp[0];
                                    echo $tempff["d"] . " " . $tempff["m"] . " " . $tempff["y"];
                                } else {
                                    $tempff1 = $datetemp[0];
                                    $tempff2 = $datetemp[count($datetemp) - 1];
                                    echo $tempff1["d"] . " & " . $tempff2["d"] . " " . $tempff2["m"] . " " . $tempff2["y"];
                                }
                                ?>
                            </td>
                            <td>
                                <?php echo $value['city_state']; ?>
                            </td>
                            <td>
                                <h2 class="hotelname"> <?php echo $value['hotel']; ?></h2>
                                <p class="address">
                                    <?php echo str_replace("United States", "USA", $value['address']) ; ?>
                                </p>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <div style="clear: both"></div>
            </div>
        </div>
    </body>
</html>
