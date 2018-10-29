<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/dontforget.css') }}">

    <title>Budgeting App</title>
</head>
<body background="Landing%20Page/Landing%20Page%20Background.png">

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
    <div class="billboard">
        <h1>Hey! It's lunch time!<div></div>Don't forget to input your spending today!</h1>
        <input type="number"><br>
        <button class="btn btn-success btn-lg btn-block button-text">Add Spending</button>
    </div>

    <div class="text-right next-button">
        <button><a style="color: dimgray;" href="{{ route('wouldyou.create') }}">Back</a></button>
        <button type="submit"><a style="color: dimgray;" href="{{ route('spending.create') }}">Next</a></button>
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