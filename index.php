<?php
include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Boots</title>
  </head>

  <body>
    
<nav class="navbar navbar-light bg-light shadow">
  <div class="container-fluid">
      <a class="navbar-brand" style="color: darkgreen; font-weight: bold; font-size: 28px;">Rekayasa Perangkat Lunak<span style="color: yellowgreen;">'56</span></a>
      <form class="d-flex" style="color: darkgreen;">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container mt-3">
  <div class="row">
  <div class="col-md-4">
        <hr>
        <h3 class="h3" style="color: darkgreen; text-align: center;" >FORM</h3>
        <hr>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>Nama
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nilai</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter your score">
  </div>
  <button type="submit" class="btn" style="background-color: darkgreen; color: white;">Kirim</button>
</form>
</div>

    <div class="col-md-8">
        <hr>
        <h3 class="h3" style="color: darkgreen; text-align: center;">RANKING </h3>
        <hr>
    <table class="table table-striped table-border  ">
        <thead class="text-center text-white">
          <tr class="tr" style="background-color: darkgreen;">
            <th>No.</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data as $key => $d): ?>
          <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $d['name'] ?></td>
            <td><?= $d['score'] ?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
</table>
</div>
</div>
</div>
<br>
<footer class="p-1 pt-3" style="text-align: center; color: white; background-color: darkgreen; padding: -2;">
    <p>Copyright @ 2023 SMK Negeri 10 Jakarta - FauzanCode</p>
</footer>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>