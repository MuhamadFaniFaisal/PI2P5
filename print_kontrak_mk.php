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
<h1>KONTRAK_MK Yang Di Pilih</h1>
  <table> 
        <thead> 
          <tr> 
              <th>NO.</th> 
              <th>MK_ID</th> 
              <th>MHS_ID</th> 
          </tr> 
        </thead> 
        <tbody> 
        <?php 
        $result = $model->tampil_kontrak_mk(); 
        if ( !empty($result)) { 
          foreach ($result as $rslt) : ?> 
            <tr> 
              <td><?= $index++ ?></td> 
              <td><?= $rslt->mk_id ?></td> 
              <td><?= $rslt->mhs_id ?></td>  
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