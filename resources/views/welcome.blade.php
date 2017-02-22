<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- turbolinks no cache -->
        <!-- <meta name="turbolinks-cache-control" content="no-cache"> -->

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/app.css">

    </head>
    <body>
        <div class="content">
            <div class="tile is-vertical">
                <div class="column is-one-third is-offset-one-third">
                    <h1 class="title">Turbolinks + Vue</h1>
                    <hr>
                </div>

                <div id="test-app">
                    <my-component></my-component>                    
                </div>

                <div class="column is-one-third is-offset-one-third">
                    <div class="content has-text-centered">
                        <a href="/example" class="title"> ->Go !<- </a>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
