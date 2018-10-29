<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>Budgeting App</title>
</head>
<body background="{{ asset('landing_page_background.png') }}">

    <nav class="navbar navbar-expand-lg navbar-dark mt-3 mx-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link mx-3 px-5 py-3" href="{{ route('login') }}" id="signup-nav">Sign Up <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 px-5 py-3" href="#">Blog</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand" href="#"><strong>Budgeting</strong> App</a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
            </div>
            <div class="col-sm-5">
                <br><br><br><br><br>
                <div class="cover">
                    <div class="cover-text">
                        <h1 class="mt-5">A <strong>Budgeting Tool</strong> Everyone Has Been Waiting For</h1>
                        <a href="#why-us" role="button" class="btn btn-lg m-3">I want to get started</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="why-us">
            <h1 class="m-5">
                <span class="catch-phrase" style="color: dimgray;">We Know.</span>
                 You Want To <br>Save For The Future
            </h1>
            <h1 class="m-5">
                <span class="catch-phrase">Notifications.</span>
                 We are able to act as <br>an alarm for your spendings.
            </h1>
            <h1 class="m-5">
                <span class="catch-phrase">Categorisation.</span>
                 We track what you <br>have used your spendings for.
            </h1>
            <h1 class="m-5">
                <span class="catch-phrase">Free.</span>
                 We are free for a short period <br>of time. Get it while it lasts.
            </h1>
        </div>

        <div class="testimonies text-center">
            <h1 class="text-center">Testimonies</h1>
            <div class="row justify-content-center">
                <div class="col-sm-3 mx-3">
                    <div class="card text-center">
                        <img class="card-img-top my-5" src="{{ asset('icons/Profile1.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Amira S. Hidayat</h5>
                            <p class="card-text">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus dignissimos ipsam natus.&rdquo;</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mx-3">
                    <div class="card text-center">
                        <img class="card-img-top my-5" src="{{ asset('icons/Profile2.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Aflahjes Widyana</h5>
                            <p class="card-text">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus dignissimos ipsam natus.&rdquo;</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mx-3">
                    <div class="card text-center">
                        <img class="card-img-top my-5" src="{{ asset('icons/Profile3.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ghinaya F. Zahra</h5>
                            <p class="card-text">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus dignissimos ipsam natus.&rdquo;</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" role="button" class="btn btn-lg text-center">more on our blog</a>
        </div>

        <footer class="footer-section">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Need help?</h5>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Getting Started</p>
                            <p>Blog</p>
                            <p>FAQ</p>
                            <p>Contact Us</p>
                            <p>Become Our Partners</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Work With Us</p>
                            <p>Advertising</p>
                            <p>Archives</p>
                            <p>Press</p>
                            <p>Blog</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <h1>Get a Daily<br> Newsletter Curated<br> Only For You</h1>
                    <form>
                        <input type="email">
                    </form>
                    <img src="{{ asset('icons/Twitter.png') }}">
                    <img src="{{ asset('icons/Instagram.png') }}">
                    <img src="{{ asset('icons/Facebook.png') }}">
                </div>
            </div>
        </footer>
    </div>

    <footer class="lowest-footer text-center">
        <h1>Budgeting App &copy;</h1>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>