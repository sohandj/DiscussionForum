<!-- HOME Page -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thread</title>
    <link rel="stylesheet" href="">
    <style>
        #ques{
            min-height: 300px;
        }
        *{
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
    <div class="sticky-top">
        <?php include 'partials/_header.php'; ?>
    </div>

    <!-- database connect -->
    <?php include 'partials/_dbconnect.php'; ?>


    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    
    ?>

    <!-- inserting thread values to db -->
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        // Insert into thread db
        $th_name = $_POST['name'];
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];
        // thread user id not yet working 
        $sql = "INSERT INTO `threads` (`thread_name`,`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ( '$th_name','$th_title', '$th_desc', '$id', '0', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>New Thread Added Successfully!</strong> Scroll down to see your thread
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }

    }

    ?>

    <!-- content -->
    <div class="container my-2 mt-3">

        <div class="jumbotron">
            <h1 class="display-4">Topic : <?php echo $catname ?> Forum</h1>
            <p class="lead"><?php echo $catdesc ?></p>
            <hr class="my-4">
            
            <p class="lead">
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>


    <!-- form for adding new thread  -->
    <div class="container">
    <form action='<?php echo $_SERVER['REQUEST_URI'] ?>' method="post">
        <h3>Ask Solution for your Issue</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Problem title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Explain in Detail</label>
            <textarea class="form-control" id="desc" name="desc" rows="2"></textarea>
        </div>
        <button type="submit" class="btn btn-success my-3">Submit</button>
        </form>
    </div>
    


    <!-- list of questions -->
    <div class="container" id="ques">
        <h2 class="py-2" >Browse Questions</h2>
        <?php
            $id = $_GET['catid'];
            $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id"; 
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;                
                $id = $row['thread_id'];
                $title = $row['thread_title'];
                $desc = $row['thread_desc'];
                $thread_time = $row['timestamp'];
                $t_name = $row['thread_name'];

                echo '<div class="media my-3">
                    <img class="mr-3" src="/Forum/img/user.png" width="100px" height="100px">
                        <div class="media-body">
                        <h5 class="mt-0">'.$t_name.' <span style="color:rgb(179, 179, 179);">'.$thread_time.'</span></h5>
                            <h5 class="mt-0"><a href="thread.php?threadid='.$id.'">'.$title.' </a> </h5>
                            '.$desc.'
                        </div>
                    </div>';
            }
            if($noResult){
                echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                 
                  <h1 class="display-4">No discussion Started </h1>
                  <p class="lead">Be the first to start the discussion.</p>
                </div>
              </div>';
            }
        ?>
    </div>
        





    <!-- footer -->
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