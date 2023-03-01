<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Todo List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="/images/Group 33.svg" type="image/x-icon" >
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container my-5">
      <div class="title my-4">
        <h2 class="display-6 fw-semibold fs-3"><i class="fa-solid fa-list-ul text-warning"></i><span class="ms-3">Todo List</span></h2>
      </div>
<!-- card -->
    <div class="card shadow-lg p-1 mb-5 bg-body rounded border-dark">
      <div class="card-body">
        <form class="d-flex" action="insert.php" method="post">
          <input class="form-control me-2" type="text" name="Data" placeholder="What Will You Do Today?" aria-label="Search" autocomplete="off">
          <button class="btn btn-outline-warning" type="submit"><i class="fa-sharp fa-regular fa-plus"></i></button>
        </form>
      </div>
    </div>

<!-- connect -->
<?php
include('config.php');
$alldata = mysqli_query($connect, "SELECT * FROM list");
?>

<!-- table -->
<table class="table">
  <tbody>
    <?php
    while ($row = mysqli_fetch_array($alldata)) {
    ?>
    <tr class="tables">
      <th style="vertical-align: middle; width :4%" scope="row"><?php echo $row['Id']?></th>
      <td style="vertical-align: middle"><?php echo $row['Data_list']?></td>
      <td style="width :5%"><a href="edit.php?Id=<?php echo $row['Id']?>" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square mb-2"></i></a></td>
      <td style="width :5%"><a href="delete.php?Id=<?php echo $row['Id']?>" class="btn btn-outline-danger"><i class="fas fa-check mb-2"></i></a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<footer class="d-flex fixed-bottom flex-wrap align-items-center py-4 border-top">
  <div class="container-fluid">
    <p style="vertical-align: middle;" class="foot col-md-4 mb-0 text-center text-muted w-100">&copy; 2022 Abdillah Naufal, Inc</p>
    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    </a>
  </div>
  </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
  </body>
</html>
