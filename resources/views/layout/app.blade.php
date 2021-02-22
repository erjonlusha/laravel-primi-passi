<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .tx_capitalize{text-transform:capitalize;}
        .bg_blue_port_gore{background-color: #1f2154;}
        .gray_chateau{color: #9da1aa;}
        .d_flex, .container{ display: flex;}
        .container{justify-content: center;}
        .bg_hint_of_red{background-color: #f6f3f6;}
        .vw60{width: 60vw;}
        nav a, nav{color: white;}
        nav ul>li{display:inline}
        .f_column{
            flex-direction: column;
            align-items: center;
        }
        .f_top{width: 100%;}
        .f_top, ul>li{
            font-size: 13px;
            list-style: none;
            line-height: 1.8rem;
        }
        .f_left{width: 40%;}
        .f_right{
            width: 60%;
            justify-content: space-around;
        }
        .copyright{font-size: 14px;}
    </style>
</head>
<body>


    @include('layout.nav')

        @yield('main')

    @include('layout.footer ')



</body>
</html>