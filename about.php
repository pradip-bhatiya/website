<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">CreatingWebsite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="jumbotron">
        <h1>I am Pradip Bhatiya</h1>
        <p>Bootstrap is the most popular HTML, CSS...</p>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="img/img.png" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Pradip Bhatiya</h2>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora tempore voluptatem voluptatum quaerat molestiae dolorem,
                        minus necessitatibus debitis dolorum fugit.</p>
                    <a href="about.php" class="btn btn-success">Check More</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@pradipcreatingwebsite</p>
    </footer>
</body>

</html>