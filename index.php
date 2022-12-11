<?php
require_once __DIR__ . "/function.php";


//Tambah Data
if (isset($_POST['addData'])) {
       $nama_tugas = $_POST['tugas'];
       $deadline = $_POST['deadline'];

       addData($nama_tugas, $deadline);

       header("location: index.php");
}


//hapusdata
if (isset($_GET['id_tugas'])) {
       $id_tugas = $_GET['id_tugas'];
       deleteData($id_tugas);
       header("location: index.php");
}

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
                            <b>T O - D O - L I S T - M A R I O</b>
                     </div>
                     <div class="card-body">
                            <form action="" method="POST">
                                   <div class="mb-3">
                                          <label for="tugas" class="form-label">Tugas</label>
                                          <input type="text" name="tugas" class="form-control" id="tugas" required>
                                   </div>
                                   <div class="mb-3">
                                          <label for="deadline" class="form-label">Deadline</label>
                                          <input type="date" name="deadline" class="form-control" id="deadline" required>
                                   </div>

                                   <button type="submit" name="addData" class="btn btn-primary">Submit</button>
                            </form>
                     </div>
              </div>
              <div class="card mt-4">
                     <div class="card-body">
                            <table class="table table-hover">
                                   <thead>
                                          <tr>
                                                 <th scope="col">#</th>
                                                 <th scope="col">Tugas Saya</th>
                                                 <th scope="col">Deadline</th>
                                                 <th scope="col">Aksi</th>
                                          </tr>
                                   </thead>
                                   <tbody>
                                          <?php
                                          $nomor = 1;
                                          foreach (ambilData() as $data) : ?>
                                                 <tr>
                                                        <th scope="row"><?= $nomor++ ?></th>
                                                        <td><?= $data['nama_tugas'] ?> </td>
                                                        <td><?= $data['deadline'] ?></td>
                                                        <td>
                                                               <a href="edit.php?id_tugas=<?= $data['id_tugas']; ?>" class="btn btn-warning">Edit</a>
                                                               <a href="?id_tugas=<?= $data['id_tugas']; ?>" onclick=" return confirm('Apakah anda yakin ingin hapus ?')" class="btn btn-danger">Hapus</a>
                                                        </td>
                                                 </tr>
                                          <?php endforeach ?>
                                   </tbody>
                            </table>
                     </div>
              </div>
       </div>


</body>

</html>