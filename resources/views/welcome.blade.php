<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-12 general-text">
                    <h1>Simple Parser</h1>
                </div>
            </div>
            <div class="row p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <p>The data was parsed from this site:</p>
                        </div>
                        <div class="col-9">
                            <a href="https://www.php.net/">https://www.php.net/</a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <p>{{$parserData['0']}}</p>
                            </div>
                            <div class="col-4">
                                <p>{{$parserData['1']}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>{{$parserData['2']}}</p>
                            </div>
                            <div class="col-12">
                                <p>{{$parserData['3']}}</p>
                            </div>
                            <div class="col-11">
                                <p>{{$parserData['4']}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
