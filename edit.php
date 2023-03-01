<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Todo List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="/images/list-2389219_1280-removebg-preview.png" type="image/x-icon" >
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
  </head>

<!-- connect  -->

  <?php
    include('config.php');
    $Id = $_GET['Id'];
    $getdata = mysqli_query($connect, "SELECT * FROM List WHERE Id='$Id'");
    $row = mysqli_fetch_array($getdata);
  ?>

  <body>
    <div class="container my-5">
        <div class="title my-4">
            <h2 class="display-6 fw-semibold fs-3"><i class="fa-solid fa-list-ul text-warning"></i><span class="ms-3">Edit Todo List</span></h2>
        </div>
<!-- card -->
        <div class="card shadow-lg p-1 mb-5 bg-body rounded border-dark">
        <div class="card-body">
            <form class="d-flex" action="update.php" method="post">
            <input class="form-control me-2" type="text" name="Data" value="<?php echo $row['Data_list']?>" placeholder="Edit Your Plan Here..." aria-label="Search" autocomplete="off">
            <button class="btn btn-outline-warning" type="submit"><i class="fas fa-check mb-2"></i></button>
            <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">
            </form>
        </div>
        </div>
    </div>
  </body>