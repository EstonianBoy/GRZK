@extends('layout')

@section('navbarLinks')
    <li><a href="#p5" class="nav-link px-2 link-light">Кто такой?</a></li>
    <li><a href="#p55" class="nav-link px-2 link-light">Что ест?</a></li>
    <li><a href="#p555" class="nav-link px-2 link-light">Как спит?</a></li>
@endsection

@section('main')
    <div id="header">
        <table>
            <tr>

                <td style = "width: 50%"></td>

                <td>
                    <center> <text_style_z> <div id="p1"> Сурок </div> </text_style_z> </center>
                </td>

                <td style = "width: 50%"></td>

            </tr>
        </table>
    </div>

    <br>

    <br>

    <div id = "main_block">
        <table>
            <tr>
                <td style = "width: 75%; background-color: #f5deb3">
                    <center> <text_style> Сурки – это уникальные животные, которые представляют семейство «Беличьи» и отряд грызунов. <br> Несмотря на тот факт, что сурки являются близкими родственниками белок, они предпочитают жить на земле, а точнее даже в норах, которые они роют сами, в составе многочисленных семейств.</text_style> </center>
                </td>

                <td style = "width: 25%; background-color: #f5deb3">
                    <div id = "p5"> <img src="surok1.jpg" width=360px border="2.5px" height=210px>
                </td>
            </tr>
        </table>
    </div>

    <br>

    <div id = "main_block">
        <table>
            <tr>
                <td style = "width: 75%; background-color: #f5deb3">
                    <center> <text_style>
                            Сурки по своей природе являются вегетарианцами. <br>
                            Поэтому их рацион питания состоит из различных объектов пропитания растительного происхождения. <br>
                            Которые произрастают на поверхности земли.<br>
                        </text_style> </center>
                </td>

                <td style = "width: 25%; background-color: #f5deb3">
                    <div id = "p55"> <img src="surok2.jpg" width=360px border="2.5px" height=210px> </div>
                </td>
            </tr>
        </table>
    </div>

    <br>

    <div id = "main_block_2">
        <table>
            <tr>
                <td style = "width: 80%; background-color: #f5deb3">
                    <center> <text_style> <br><br>
                            Входы в занятую нору они закрывают пробками из смеси земли и камней и впадают в глубокую спячку, которая по полгода.<br><br>
                            За этот срок они не питаются, так как кормовых запасов в норы не собирают.<br>
                            Энергетические расходы во время спячки снижаются в десятки раз, и весной, в конце февраля — начале марта, когда всюду еще лежит снег, они пробуждаются даже неплохо упитанными, с запасом около 100-200 г жира.<br><br><br>

                        </text_style> </center>
                </td>

                <td style = "width: 20%; background-color: #f5deb3">
                    <div id = "p555"><img src="surok3.jpg" width=360px border="2.5px" height=210px></div>
                </td>
            </tr>
        </table>
    </div>

    <br>

    <div id = "main_block_3">
        <table>
            <tr>
                <td style = "width: 50%"></td>

                <td>
                    <center> <text_style_z> Фото </text_style_z> </center>
                </td>

                <td style = "width: 50%"></td>
            </tr>

            <tr style = "background-color: #f5deb3">
                <td> <center> <img src="suror4.jpg" width=360px border="2.5px" height=360px> </center> </td>
                <td> <center> <img src="surok5.jpg" width=360px border="2.5px" height=360px> </center> </td>
                <td> <center> <img src="surok6.jpg" width=360px border="2.5px" height=360px> </center> </td>
            </tr>

            <br>

            <tr style = "background-color: #f5deb3">
                <td> <center> <img src="surok7.jpg" width=360px border="2.5px" height=360px> </center> </td>
                <td> <center> <img src="surok8.jpg" width=360px border="2.5px" height=360px> </center> </td>
                <td> <center> <img src="surok9.jpg" width=360px border="2.5px" height=360px> </center> </td>
            </tr>

        </table>
    </div>
@endsection
