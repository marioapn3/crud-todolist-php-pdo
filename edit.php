<?php
require_once __DIR__ . "/function.php";

if (isset($_GET['id_tugas'])) {
       $id_tugas = $_GET['id_tugas'];
       $data = ambilsatuData($id_tugas)->fetch();
} else {
       header("location:index.php");
}

//Tambah Data
if (isset($_POST['editData'])) {
       $nama_tugas = $_POST['tugas'];
       $deadline = $_POST['deadline'];

       editData($data['id_tugas'], $nama_tugas, $deadline);

       header("location: index.php");
}


//hapusdata

?>
<!doctype html>
<html lang="en">

<head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Bootstrap demo</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
       <div class="container">
              <div class="card" style="margin-top: 80px;">
                     <div class="card-header text-center" style="font-size: 20px;">
                            <b>E D I T - D A T A </b>
                     </div>
                     <div class="card-body">
                            <form action="" method="POST">
                                   <div class="mb-3">
                                          <label for="tugas" class="form-label">Tugas</label>
                                          <input type="text" name="tugas" class="form-control" id="tugas" value="<?= $data['nama_tugas'] ?>" required>
                                   </div>
                                   <div class="mb-3">
                                          <label for="deadline" class="form-label">Deadline</label>
                                          <input type="date" name="deadline" class="form-control" id="deadline" value="<?= $data['deadline'] ?>" required>
                                   </div>

                                   <button type=" submit" name="editData" class="btn btn-primary">Edit</button>
                            </form>
                     </div>
              </div>



</body>

</html>