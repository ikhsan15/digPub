<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lihat data</title>
</head>
<body>

  <h3>data produk</h3>
  <?php echo anchor('produk/insert', 'tambah data') ?>
  <table border="1">
    <tr>
      <th>no</th>
      <th>nama penulis</th>
      <th>judul idn</th>
      <th>kategori idn</th>
      <th>kategori eng</th>
      <th>sinopsis idn</th>
      <th>cover</th>
      <th>cover size</th>
      <th colspan="2">operasi</th>
    </tr>
    
    <?php
      $no = 1;
      foreach ($record->result() as $r){
    ?>
            <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $r->nama_penulis ?></td>
            <td><?php echo $r->judul_idn ?></td>
            <td><?php echo $r->nama_kategori_idn ?></td>
            <td><?php echo $r->nama_kategori_eng ?></td>
            <td><?php echo $r->sinopsis_idn ?></td>
            <td>
              <img src="<?php echo base_url().'./gambar/cover/Hamka/'.$r->cover_img; ?>" class="img-thumbnail" width="70px" height="70px"></td>
            <td><?php echo $r->cover_size ?></td>
            <td><?php echo anchor('produk/edit/'.$r->produk_id, 'Edit')?></td>
            <td><?php echo anchor('produk/delete/'.$r->produk_id, 'Delete') ?></td>
          </tr>
    <?php
        $no++;
      }
    ?>
  </table>
  
</body>
</html>