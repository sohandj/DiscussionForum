<!-- About Page -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="">

    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <!-- from datatables  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css
    ">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <!-- navbar -->
    <div class="fixed-top"></div>
    <?php include 'partials/_header.php'; ?>

    <!-- Content -->
    <div class="container mt-5">
        <!--  -->
        <div class="row">
            <div class="col-4">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Project Information</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Front End</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Back-End</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Developer Team</a>
                </div>
            </div>
            <div class="col-8">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true"
                    class="scrollspy-example" tabindex="0" style="height:235px;overflow-y: auto;">
                    <h4 id="list-item-1">Project Information</h4>
                    <p>Our Discussion Forum project is designed to provide an interactive platform for users to engage in discussions, share ideas, and exchange information on various topics. The project incorporates a modern and responsive user interface using Bootstrap for a seamless and visually appealing experience <br>
                    By combining the power of Bootstrap, JavaScript, PHP, and SQL, our Discussion Forum project aims to create a user-friendly and feature-rich platform for fostering meaningful online discussions.
                    </p>
                    <hr>
                    <h4 id="list-item-2">Front-End</h4>
                    <p><strong>Bootstrap Framework:</strong> Utilizing Bootstrap ensures a responsive and mobile-friendly design. It offers a grid system, responsive navigation bar, and pre-designed components for streamlined development.br <br>
                    <strong>JavaScript:</strong> Enhancing user interactivity with dynamic features such as real-time updates, asynchronous content loading, and client-side form validation. alias iste dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, suscipit.</p>
                    <h4 id="list-item-3">Back-End </h4>
                    <hr>
                    <p>
                    <strong>PHP :</strong> Serving as the server-side scripting language, PHP manages the logic behind user interactions. It handles user authentication, data processing, and communication with the database   <br>
                    <strong>SQL (Structured Query Language):</strong> Managing the database operations, SQL allows for efficient storage, retrieval, and manipulation of forum data. It includes creating tables, inserting, updating, and retrieving information from the database.</p>
                    <hr>
                    <h4 id="list-item-4">Developer Team</h4>
                    <p>Group of 4 students from Kalpataru Institute of Technology has created online discussion forum for their mini project in DBMS  <br>
                    For More info go to contact page    
                    </p>
                </div>
            </div>
        </div>



        <!-- github -->
        <p class="d-inline-flex gap-1">
            The presenting code is in
            <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                GitHub Link
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <a href="github.com/sohandj">https://github.com/sohandj/DiscussionForum</a>
            </div>
        </div>

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
