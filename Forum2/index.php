<!-- HOME Page -->

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Technical Discussion Forum</title>
    <link rel="stylesheet" href="">
    <style>
        
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <!-- from datatables  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    

</head>

<body>

    <!-- navbar -->
    <div class="sticky-top">
        <?php include 'partials/_header.php'; ?>
    </div>

    <!-- database connect -->
    <?php include 'partials/_dbconnect.php'; ?>

    
    

    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel  slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/500x200/?iot" class="d-block w-100" alt="..." width="100vw"
                    height="350px">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Internet Of Things</h1>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/500x200/?cybersecurity" class="d-block w-100" alt="..."
                    width="100vw" height="350px">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Cyber Security</h1>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/500x200/?html" class="d-block w-100" alt="..." width="100vw"
                    height="350px">
                <div class="carousel-caption d-none d-md-block">
                    <h1 >Web Development</h1>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/500x200/?app" class="d-block w-100" alt="..." width="100vw"
                    height="350px">
                <div class="carousel-caption d-none d-md-block">
                    <h1 >Application Development</h1>
                    <p></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- categories cards-->
    <div class="container mt-3">
        <div class="sticky-top mt-10">
            <h2 style="font-size:49px;font-family: cursive;" class="bg-primary text-light p-3 fluid-container">Welcome to Online Technical Discussion Forum</h2>
        </div>

        <div class="row">
            <?php
            $sql = 'SELECT * FROM `categories`';
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                //     echo $row['category_id'];
                //     echo $row['category_name'];
                $n = $row['category_name'];
                $catid = $row['category_id'];
                $desc = $row['category_description'];

            
                echo '

                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://source.unsplash.com/500x500/?'. $n .'">
                        <div class="card-body">
                            
                            <h5 class="card-title"> <a href="threadlist.php?catid=' . $row['category_id'] . '">' . $row['category_name'] . '</a> </h5>
                            <p class="card-text"> ' . substr($desc , 0 , 50) . '... </p>
                            <a href="threadlist.php?catid=' . $row['category_id'] . '" class="btn btn-primary">View Thead</a>
                        </div>
                    </div>
                </div>
                
                ';



            }
            ?>

            


        </div>
    </div>






    <?php include 'partials/_footer.php'; ?>

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