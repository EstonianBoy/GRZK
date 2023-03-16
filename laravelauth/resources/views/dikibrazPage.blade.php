@extends('layout')

@section('navbarLinks')
    <li><a href="#p5" class="nav-link px-2 link-light">Кто такой?</a></li>
    <li><a href="#p55" class="nav-link px-2 link-light">Что ест?</a></li>
    <li><a href="#p555" class="nav-link px-2 link-light">Как спит?</a></li>
@endsection

@section('main')

    <br>

    <div id = "main_block_4">

    </div>

    <br>

    <div id = "main_block">
        <table>
            <tr>
                <td style = "width: 75%; background-color: #f5deb3">
                    <center> <text_style> Дикобраз – крупнейший грызун после капибары и бобра. <br> Самцы весят до 30 кг, туловище — 90 см.</text_style> </center>
                </td>

                <td style = "width: 25%; background-color: #f5deb3">
                    <div id = "p5"> <img src="dico3.jpg" width=360px border="2.5px" height=210px>
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
                            Питается дикобраз растительн пищей. <br>
                            Весной и летом поедает зелёные части растений, корни, луковицы и клубни. <br>
                            Осенью, после созревания культурныз растений, питается их плодами.<br>
                            Зимой дикобраз ест много древесной коры, обгрызая нижнии части деревьев.<br>
                        </text_style> </center>
                </td>

                <td style = "width: 25%; background-color: #f5deb3">
                    <div id = "p55"> <img src="dico2.jpg" width=360px border="2.5px" height=210px> </div>
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
                            Дикобраз ведёт приемущестенно ночную жизнь, а днём предпочитает прятаться в скальных расщелинах, пещерах, и спать.<br><br>
                            В зимнюю спячку он не впадает, но активность его в эту пору значительно снижена.<br>
                            Холода он переживает сидя в убежище<br><br>
                            Нора дикобраза представляет собой подземнный лабиринт с несколькими комнатами, коридорами и отнорками.<br>
                            В таком жилище имеется от 2х до 4х выходов.<br><br><br>
                        </text_style> </center>
                </td>

                <td style = "width: 20%; background-color: #f5deb3">
                    <div id = "p555"><img src="dico1.jpg" width=360px border="2.5px" height=210px></div>
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
                <td> <center> <img src="dico.jpg" width=360px border="2.5px" height=360px> </center> </td>
                <td> <center> <img src="dico4.jpg" width=360px border="2.5px" height=360px> </center> </td>
                <td> <center> <img src="dico5.jpg" width=360px border="2.5px" height=360px> </center> </td>
            </tr>

            <br>

            <tr style = "background-color: #f5deb3">
                <td> <center> <img src="dico6.jpg" width=360px border="2.5px" height=360px> </center> </td>
                <td> <center> <img src="dico7.jpg" width=360px border="2.5px" height=360px> </center> </td>
                <td> <center> <img src="dico8.jpg" width=360px border="2.5px" height=360px> </center> </td>
            </tr>

        </table>
    </div>
@endsection
