<?php
  include 'model.php';
  $model = new Model();
  $index = 1;
  ?>
<!doctype html>
<html lang="en">
<head>
    <title>Cetak Data</title>
    <style>
        h1{
            text-align: center;
        }
        table,
        td,
        th{
            border: 1px solid #ddd;
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width:100%;
        }
        th,
        td{
            padding: 15px;
        }
        </style>
</head>

<body>
<h1>Matakuliah Yang Di Pilih</h1>
  <table> 
        <thead> 
          <tr> 
              <th>No.</th> 
              <th>ID</th> 
              <th>Nama_Mk</th> 
          </tr> 
        </thead> 
        <tbody> 
        <?php 
        $result = $model->tampil_matakuliah(); 
        if ( !empty($result)) { 
          foreach ($result as $rslt) : ?> 
            <tr> 
              <td><?= $index++ ?></td> 
              <td><?= $rslt->id ?></td> 
              <td><?= $rslt->nama_mk ?></td>  
            </tr> 
          <?php endforeach; 
       } else{ ?> 
            <tr> 
               <td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td> 
            </tr> 
             <?php } ?> 
         </tbody> 
      </table> 
      <script>
        window.print();
      </script>
</body>  