<?php


include '../connect.php';
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $book_name = $_POST['book_name'];
    $category = $_POST['category'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $student = $_POST['student'];
    $teacher = $_POST['teacher'];
    $requet = "UPDATE `booking` SET `book_name`='$book_name',`category`='$category',`start_date`='$start_date',`end_date`='$end_date' , `student_id`='$student' ,`teacher_id`='$teacher' WHERE id = $id";
    $query = mysqli_query($connect , $requet);

    if($query){
        header("location:booking.php?msg=Booking Updated successfuly");
    }
    else{
        echo "failed :".mysqli_error();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>

   <style>
      .card {
         width: 100%;
         border: none;
         background-color: transparent;
         display: flex;
         justify-content: center;
         align-items: center;
      }

      .card img {
         width: 200px;
         border-radius: 50%;
         object-fit: cover;
      }

      .card label {
         margin-top: 30px;
         text-align: center;
         height: 40px;
         cursor: pointer;
         font-weight: bold;
         margin-bottom: 20px;
      }

      .card input {
         display: none;
      }
   </style>
</head>

<body class="bg-dark text-light">
   <div class="container mt-5">
      <div class="text-center mb-4">
         <h3>Update Booking Informations</h3>
         <p class="text-muted">Complete the form below to add a new student</p>
      </div>

      <?php
        include "../connect.php";
        $requet = "SELECT * FROM `booking` WHERE id = $id LIMIT 1";
        $query = mysqli_query($connect , $requet);
        $row = mysqli_fetch_assoc($query);
      ?>

      <div class="container d-flex justify-content-center" style="margin-top:10%;">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="card mb-5">
                  <!-- <img src="assets/images/profile.jfif" alt="image"> -->
               </div>
               <div class="col">
                  <label class="form-label">Book Name:</label>
                  <input type="text" class="form-control" name="book_name" placeholder="Book name"
                     value="<?php echo $row['book_name']?>">
               </div>

               <div class="col">
                  <label class="form-label">Category:</label>
                  <input type="text" class="form-control" name="category" placeholder="Category"
                     value="<?php echo $row['category']?>">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Start Date:</label>
               <input type="datetime" class="form-control" name="start_date" placeholder="Start Date"
                  value="<?php echo $row['start_date']?>">
            </div>

            <div class="mb-3">
               <label class="form-label">End Date:</label>
               <input type="datetime" class="form-control" name="end_date" placeholder="End Date"
                  value="<?php echo $row['end_date']?>">
            </div>

            <div class="mb-3">
               <label class="form-label">Student:</label>
               <input type="text" class="form-control" name="student" placeholder="Student id"
                  value="<?php echo $row['student_id']?>">
            </div>

            <div class="mb-3">
               <label class="form-label">Teacher:</label>
               <input type="text" class="form-control" name="teacher" placeholder="Teacher id"
                  value="<?php echo $row['teacher_id']?>">
            </div>

            <div class="row ms-1 mt-4">
               <button type="submit" class="btn btn-success col-3 me-3" name="submit">Update</button>
               <a href="index.php" class="btn btn-danger col-3">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>

</body>

</html>