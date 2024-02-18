<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Rani</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .navbar-custom {
            background-color: #393536 !important;
        }

        .navbar-custom .nav-link {
            color: yellow !important;
        }
    </style>
</head>

<body style="margin-left:5%;margin-right:5%; margin-top:10px;">

    <!-- Navber -->

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom justify-content-around">
        <a class="navbar-brand" href="#"><img src="<?= base_url() . '/assets/custom/image/logo.png' ?>" alt="" width="200px" class="mx-auto img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tips & Predictions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cricket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Football</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><img src="<?= base_url() . '/assets/custom/image/sign_in.png' ?>" alt="" width="80px" class="mx-auto img-fluid"></a>
                </li>

            </ul>
        </div>

    </nav>

    <!-- Latest Score -->
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h6>Latest Score</h6>
                <div class="dropdown">
                    <button class="btn bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cricket
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Football</a>
                        <a class="dropdown-item" href="#">Cricket</a>


                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 d-flex justify-content-start">
            <div class="card text-white navbar-custom mb-3" style="max-width: 24rem;">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h6>Zimbabwe tour of Srilanka,2024</h6>
                            <p>2nd ODI, 08 Jan 2024</p>
                        </div>
                        <div class="col-md-2">
                         <a href="http://" class="btn btn-warning">Live</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>