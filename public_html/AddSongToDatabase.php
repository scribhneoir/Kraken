<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        
        <!-- FontAwesome CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        
        <!-- Fonts CSS -->
        <link href="https://fonts.googleapis.com/css?family=Lexend+Exa|Questrial|Righteous&display=swap" rel="stylesheet">         
        
        <!-- Template CSS -->
        <link rel="stylesheet" href="css/temp_style.css">

    </head>
    <body>
        <header class="shadow">
            <div class="container">
                <div class="row">
                    <div class="col-2" id="logoImg">
                        <img id="icon" src="img/icon.png" alt="icon">
                    </div>
                    <div class="col-5" id="logo">
                        <div class="row">
                            <div class="col">
                                <h1>KRAKEN</h1>
                                <h2 id="subtitle">social music library</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" id="search">
                        <form class="form-inline">
                        <i class="fas fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                                aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <main class="wrapper">
            <div class="row">

                <nav class="col" id="sidebar">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="sidebar-header">
                                    <h2>Social Feed</h2>
                                </div>

                                <div class="card shadow feed-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-3">
                                                <img class="feed-icon" src="img/icon.png" alt="icon">
                                            </div>
                                            <div class="col-9">
                                                <h3>@Scribhneoir favorited a new album!</h3>
                                                <p>The Click - AJR</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card shadow feed-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-3">
                                                <img class="feed-icon" src="img/icon.png" alt="icon">
                                            </div>
                                            <div class="col-9">
                                                <h3>@Bandboy sent you a playlist!</h3>
                                                <p>Groovy Tunes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-1">
                                <button type="button" id="sidebarCollapse" class="btn shadow">
                                    <i id="sbToggle" class="fas fa-arrow-alt-circle-left"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                
                            </div>
                        </div>
                    </div>
                </nav>

                <div class = "col-9" id="content">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h1>Add or Update a Song</h1>
                                    <p>Note if you are updating a song it will replace the original.</p>
                                    <div class="form-group row">
                                        <label for="songName" class="col-4 col-form-label">Song Name:</label>
                                        <div class="col-8">
                                            <input id="songName" name="songName" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="songLength" class="col-4 col-form-label">Length:</label>
                                        <div class="col-8">
                                            <input id="songLength" name="songLength" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="songGenre" class="col-4 col-form-label">Genre:</label>
                                        <div class="col-8">
                                            <input id="songGenre" name="songGenre" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="songAlbum" class="col-4 col-form-label">Album:</label>
                                        <div class="col-8">
                                            <input id="songAlbum" name="songAlbum" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="songArtist" class="col-4 col-form-label">Artist/Band:</label>
                                        <div class="col-8">
                                            <input id="songArtist" name="songArtist" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="songDescription" class="col-4 col-form-label">Description</label>
                                        <div class="col-8">
                                            <textarea id="songDescription" name="songDescription" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text" class="col-4 col-form-label">User Who Added the Song:</label>
                                        <div class="col-8">
                                            <input id="text" name="text" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="songID" class="col-4 col-form-label">Song ID:</label>
                                        <div class="col-8">
                                            <input id="songID" name="songID" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Adding or Updating?</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="add">
                                                <label for="radio_0" class="custom-control-label">Add Song</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="update">
                                                <label for="radio_1" class="custom-control-label">Update Song</label>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <footer>
            <p>&copy; 2019 KrakenMedia LLC</p>
        </footer>

        <!-- jQuery CDN  -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $('#sbToggle').toggleClass('fa-arrow-alt-circle-right');
                    $('#sbToggle').toggleClass('fa-arrow-alt-circle-left');
                });
            });
        </script>
    </body>
</html>