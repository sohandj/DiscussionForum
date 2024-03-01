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


    <div class="container my-4">
        <h3>Search for questions here</h3>
        <table class="display table" id="myTable">
            <thead>
              <tr>
                <th>Sl.no</th>
                <th>Thread Title</th>
                <th>Thread Description</th>
                <th>View</th>
              </tr>
            </thead>
              
              <tbody>
              <?php
                $sql = 'SELECT * FROM `threads`';
                $result = mysqli_query($conn, $sql);
                $no = 1;           
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['thread_id'];
                    $title = $row['thread_title'];
                    $desc = $row['thread_desc'];          
                    echo "<tr>
                                <td scope='row'>" .$no ."</td>
                                <td> " . $title ."</td>
                                <td>" . $desc . "</td>
                                <td><a href='thread.php?threadid=" . $id . "' class='btn btn-dark'>View Question</a></td>
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