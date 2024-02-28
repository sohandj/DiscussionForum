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
    <?php include 'partials/_header.php'; ?>

    <!-- database connect -->
    <?php include 'partials/_dbconnect.php'; ?>

    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $thread_name = $row['thread_name'];
        $thread_title = $row['thread_title'];
        $thread_desc = $row['thread_desc'];
    }
    
    ?>

    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method=='POST'){
            // Insert into thread db
            $c_name = $_POST['c_name'];
            $comment = $_POST['comment']; 
        $comment = str_replace("<", "&lt;", $comment);
        $comment = str_replace(">", "&gt;", $comment); 
        // $sno = $_POST['sno']; 
        $sql = "INSERT INTO `comments` ( `c_name`,`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$c_name','$comment', '$id', '0', current_timestamp())";
        $result = mysqli_query($conn, $sql);
            // thread user id not yet working 
   
            $showAlert = true;
            if($showAlert){
                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>your Comment Added Successfully!</strong> Scroll down to see your comment
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }

        }

    ?>

    <!-- content -->
    <div class="container my-2">

        <div class="jumbotron">
            <h1 class="display-4">Question : <?php echo $thread_title ?></h1>
            <p class="lead"><?php echo $thread_desc ?></p>
            
            <hr class="my-4">
            <p>posted by : <b><?php echo $thread_name ?></b></p>
        </div>
    </div>

    
    <!-- form for adding new comment  -->
    <div class="container">
    <form action='<?php echo $_SERVER['REQUEST_URI'] ?>' method="post">
        
        <label for="name" class="form-label">Name :</label>
        <input type="text" class="form-control" id="name" name="c_name">
        <h5>Comment :</h5>
        <div class="mb-3">
        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success my-3">Post</button>
        </form>
    </div>

    <!-- list of comments -->
    <div class="container" id="ques">
        <h2 class="py-2" >Comments</h2>
        <?php
            $id = $_GET['threadid'];
            $sql = "SELECT * FROM `comments` WHERE thread_id=$id"; 
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $c_name = $row['c_name'];
                $id = $row['comment_id'];
                $content = $row['comment_content'];
                $comment_time = $row['comment_time'];

                echo '<div class="media my-3">
                <img class="mr-3" src="/Forum/img/user.png" width="100px" height="100px">
                <div class="media-body">
                    <h5 class="mt-0">'.$c_name.' <span style="color:rgb(179, 179, 179);">'.$comment_time.'</span></h5>
                    
                    <p>'.$content.'</p>
                </div>
            </div>';
            }
            if($noResult){
                echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">No Comments </h1>
                  <p class="lead">Be the first to Reply</p>
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