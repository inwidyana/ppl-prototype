<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myprofile.css') }}">

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
                <a class="nav-link mx-3 px-5 py-3" href="#" id="signup-nav">My Account<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-3 px-5 py-3" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-3 px-5 py-3" href="#">Add a Spending</a>
            </li>
        </ul>
    </div>
    <a class="navbar-brand" href="#"><strong>Budgeting</strong> App</a>
</nav>

<div class="container">
    <div class="cover">
        <div class="row">
            <div class="col-sm-6">
                <h1>Aflah <br>Widyana</h1>
                <p>member since October 2018</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto commodi delectus.</p>
                <p><a>My Budget</a> | <a><strong>My Profile</strong></a></p>
            </div>
        </div>
    </div>

    <div class="basic-information">
        <h1>Basic Information</h1>
        <div class="row">
            <div class="col-sm-2">
                <h5>First Name</h5>
                <p>Aflah</p>
            </div>
            <div class="col-sm-2">
                <h5>Last Name</h5>
                <p>Widyana</p>
            </div>
        </div>
        <h5>E-mail</h5>
        <p>loremipsum@ugm.ac.id</p>
        <input type="radio"><label class="mx-3">Subscribe to Budgeting App Daily Newsletter</label>
    </div>

    <div class="privacy">
        <h1>Privacy and Security</h1>
        <h5>Password</h5>
        <p>*********************</p>
        <h5>Secondary e-mail</h5>
        <p>not set</p>
        <h5>Security Question</h5>
        <p>not set</p>
    </div>
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