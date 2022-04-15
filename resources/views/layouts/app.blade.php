<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  
        <style>
            html {
                display: inline-block;
                text-align: center;
            }
            body {
                font-family: 'Nunito';
            }
            .container {  
                background-color:#cfeeff;
            }
            .button {
                background-color: #8db2f2;
                border: none;
                color: white;
                padding: 8px 22px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                margin: -15px 2px;
                margin-bottom:75px;
                cursor: pointer;
            }
            .button span {
                margin-right: 15px;
                margin-left: 15px;
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }
            .button span:after {
              content: '\00bb';
              position: absolute;
              opacity: 0;
              top: 0;
              right: -20px;
              transition: 0.5s;
            }
            button:hover span {
              padding-right: 25px;
            }
            .button:hover span:after {
              opacity: 1;
              right: 0;
            }
        </style>

    </head>

    <body>

    @yield('content')

    </body>
       
</html>