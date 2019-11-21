<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{$title}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- FontAwesome CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>

        <!-- Fonts CSS -->
        <link href="https://fonts.googleapis.com/css?family=Lexend+Exa|Questrial|Righteous&display=swap" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="{$pathChange}css/temp_style.css">
        <link rel="stylesheet" href="{$pathChange}css/login.css">

    </head>

    <body>
        <header class="shadow">
            <div class="container">
                <div class="row">
                    <div class="col-2" id="logoImg">
                        <img id="icon" src="{$pathChange}img/icon.png" alt="icon">
                    </div>
                    <div class="col-5" id="logo">
                        <div class="row">
                            <div class="col">
                                <h1>KRAKEN</h1>
                                <h2 id="subtitle">social music library</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div>
                <p>&nbsp;</p>
            </div>
            <div class="container offset-7">
                <div class="row">
                    <div class="col-6">
                        <div class="card" id="login">
                            {block name="form"}{/block}
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <p>&copy; 2019 KrakenMedia LLC</p>
        </footer>

        <!-- jQuery CDN  -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
</html>