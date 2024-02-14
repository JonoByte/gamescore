<!doctype html>
<html lang="en">

<head>
    <title>Gamescore</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="mainstyle.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-xxl">
        <header>
            <img src="img/header-pic.jpg" alt="lololol">
            <div class=header-text>
            <h1>Gamescore</h1>
            <h2>Play, Review, Connect Your Gaming Community Awaits!</h2>
            <h3>Browse</h3>
        </div>
        </header>
        <div class="nav">
            <a href="main.php">Browse</a>
            <a href="#">Forum</a>
            <a href="#">Friends</a>
            <a href="#">Login</a>
        </div>

        <div id="main">
            <div class="container">
                <div class="row justify-content-center">
                    <?php for($i=0; $i<20; $i++): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card mb-4">
                            <img class="card-img-top" src="placeholder.jpg" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">Game Title</h5>
                                <p class="card-text">lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem</p>
                                <a href="#" class="btn btn-primary">test test</a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        </div>

    </div>











    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>