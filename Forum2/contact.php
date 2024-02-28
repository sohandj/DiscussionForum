<!-- HOME Page -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .container {
            display: flex;
            gap: 15px;

        }
    </style>

    <!-- from datatables  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css
    ">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <!-- navbar -->
    <?php include 'partials/_header.php'; ?>


    <!-- Content -->

    <h1 class="text-center">Developer Team Information</h1>
    <div class="container">
        <div class="card my-3" style="width: 20rem;">

            <div class="card-body">
                <h5 class="card-title"><a href="https://www.linkedin.com/in/sohan-dj-70956a228/" class="text-danger">Sohan D J</a></h5>
                <p class="card-text">Frontend Bootstrap and Backend developer PHP and SQL</p>
            </div>
            <p class="d-inline-flex gap-1">
                <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                    aria-expanded="false" aria-controls="collapseExample1">
                    Contact Me
                </a>
            </p>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body">
                    <p style="font-size: 17px;font-style: italic;">shivasohandj@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="card my-3" style="width: 20rem;">

            <div class="card-body">
                <h5 class="card-title"><a href="">Ebinesh V</a></h5>
                <p class="card-text">Frontend developer HTML , CSS and JS</p>
            </div>
            <p class="d-inline-flex gap-1">
                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                        aria-expanded="false" aria-controls="collapseExample2">
                        Contact Me
                    </a>
                </p>
                <div class="collapse" id="collapseExample2">
                    <div class="card card-body">
                        <p style="font-size: 17px;font-style: italic;">ebineshv@gmail.com</p>
                    </div>
                </div>
        </div>
        <div class="card my-3" style="width: 20rem;">

            <div class="card-body">
                <h5 class="card-title"><a href="">Sneha J B</a></h5>
                <p class="card-text">Frontend Developer HTML,CSS</p>
            </div>
            <p class="d-inline-flex gap-1">
                <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample3" role="button"
                    aria-expanded="false" aria-controls="collapseExample3">
                    Contact Me
                </a>
            </p>
            <div class="collapse" id="collapseExample3">
                <div class="card card-body">
                    <p style="font-size: 17px;font-style: italic;">sshenajb@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="card my-3 " style="width: 20rem;">

            <div class="card-body">
                <h5 class="card-title"><a href="">Vaishnavi D G</a></h5>
                <p class="card-text">Frontend Developer HTML,CSS</p>
                <p class="card-text">vaishnavidg@gmail.com</p>
            </div>
            <p class="d-inline-flex gap-1">
                <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample4" role="button"
                    aria-expanded="false" aria-controls="collapseExample4">
                    Contact Me
                </a>
            </p>
            <div class="collapse" id="collapseExample4">
                <div class="card card-body">
                    <p style="font-size: 17px;font-style: italic;">vaishnavidg@gmail.com</p>
                </div>
            </div>

        </div>
    </div>

    <div class="container">

    </div>









    <!-- footer -->
    <div class="fixed-bottom">
        <?php include 'partials/_footer.php'; ?>
    </div>

    <!-- Script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>