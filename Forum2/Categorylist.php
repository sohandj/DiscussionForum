<!-- HOME Page -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
        
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
    <title>catogries</title>
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
    <!-- connecting database -->
    <?php include 'partials/_dbconnect.php'; ?>

    <!-- inserting form data to database -->
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        // Insert into thread db
        $name = $_POST['cat_name'];
        $desc = $_POST['cat_desc'];
        // thread user id not yet working 
        $sql = "INSERT INTO `categories` (`category_name`, `category_description`, `category_datetime`) VALUES ( '$name', '$desc', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>New Category Added Successfully!</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }
    ?>


    <!-- form to Create new catogries   -->
    <div class="container">
    <form action="Categorylist.php" method="post">
        <div class="mb-3">
            <h3>Create New Category </h3>
            <label for="exampleInput" class="form-label">Category Name :</label>
            <input type="text" class="form-control" id="exampleInput" name="cat_name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Category Descrption :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cat_desc"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>
  
    <div class="container my-4">
        
        <table class="display table" id="myTable">
            <thead>
              <tr>
                <th>sl.no</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>View</th>
              </tr>
            </thead>
              
              <tbody>
              <?php
                $sql = 'SELECT * FROM `categories`';
                $result = mysqli_query($conn, $sql);
                $no = 1;           
                while ($row = mysqli_fetch_assoc($result)) {
                    $n = $row['category_name'];
                    $catid = $row['category_id'];
                    $desc = $row['category_description'];          
                    echo "<tr>
                                <th scope='row'>" .$no ."</th>
                                <td> " . $n ."</td>
                                <td>" . $desc . "</td>
                                <td><a href='threadlist.php?catid=" . $row['category_id'] . "' class='btn btn-primary'>View Thead</a></td>
                          </tr>";
                    $no = ++$no;
                }
              ?>      
              </tbody>
            </table>
      </div>





    <!-- footer -->
    <div class="sticky-bottom">
        <?php include 'partials/_footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#myTable');
    </script>
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