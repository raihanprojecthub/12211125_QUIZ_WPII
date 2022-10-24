<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>
<body>
  <div>
    <h1><center>Data Mahasiswa</center></h1>
    <table border="1" cellspacing="0" cellpadding="5" align="center">
      <thead>
      <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th align="center" width="200">Action</th>
      </tr>
      </thead>
      <?php
      $count = 0;
      foreach ($mahasiswa->result() as $row) :
      $count++;
      ?>
      <tr>
        <th><?php echo $row->nim;?></th>
        <td><?php echo $row->nama;?></td>
        <td><?php echo ($row->program_studi);?></td>
        <td>
          <a href="<?php echo site_url('mahasiswa/delete/'.$row->nim);?>">Delete</a>
        </td>
      </tr>
      <?php endforeach;?>
      </tbody>
    </table>
  </div>

</body>
</html>