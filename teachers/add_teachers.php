<?php


include '../connect.php';


if(isset($_POST['submit'])){
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $department = $_POST['department'];
    $class = $_POST['class'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./image/" . $image;
    $requet = "INSERT INTO `teachers`(`nom`, `prenom`, `departement`, `classe`, `image`) VALUES ('$f_name','$l_name','$department','$class','$image')";
    $query = mysqli_query($connect , $requet);

    if($query){
        if(move_uploaded_file($tempname, "$image")){
            echo "<h3>  Image uploaded successfully!</h3>";
        }
        else{
            echo "<h3> Fail!</h3>";
        }
        header("location:teachers.php?msg=new teacher added successfuly");
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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>

   <style>

    
    .card{
        width:100%;
        border : none;
        background-color:transparent;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .card img{
        width:200px;
        border-radius:50%;
        object-fit:cover;
    }
    .card label{
        margin-top:30px;
        text-align:center;
        height:40px;
        cursor:pointer;
        font-weight:bold;
        margin-bottom:20px;
    }
    .card input{
        display:none;
    }
   </style>
</head>

<body class="bg-dark text-light">
   <div class="container mt-5">
      <div class="text-center mb-4">
         <h3>Add New Teacher</h3>
         <p class="text-muted">Complete the form below to add a new student</p>
      </div>

      <div class="container d-flex justify-content-center" style="margin-top:5%;">
         <form action="" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">
                <div class="card">
                    <img src="../assets/images/profile.jfif" alt="image" id="image">
                    <label for="input-file">Choose Image</label>
                    <input type="file" accept="image/jpg , image/png , image/jpeg" id="input-file" name="image" required>
                </div>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="firstname" required>
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="lastname" required>
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Department:</label>
               <input type="text" class="form-control" name="department" placeholder="SVT - PC - BIOF" required>
            </div>

            <div class="mb-3">
               <label class="form-label">Class:</label>
               <input type="text" class="form-control" name="class" placeholder="Class Name" required>
            </div>

            <div class="row ms-1 mt-4">
               <button type="submit" class="btn btn-success col-3 me-3" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger col-3">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <script>
      let image = document.getElementById("image");
      let input = document.getElementById("input-file");

      input.onchange=()=>{
         image.src= URL.createObjectURL(input.files[0]);
      }
   </script>
</body>

</html>