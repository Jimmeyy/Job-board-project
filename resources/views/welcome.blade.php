<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <title>Job board</title>
         
        <style>
            .box {
                display: block;
                width: 100%;
                height: 80px;
                border: 5px solid orangered;
            }
        </style>


    </head>
    <body>
        <div class="container">
            <div class="row center-lg">
                <div class="col-xs-12 col-sm-9 col-md-6 col-lg-offset-3 col-lg-3">
                    <div class="box"></div>
                </div>
            </div>
        </div>
    </body>
</html>
