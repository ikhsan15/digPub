<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h3 style="text-align: center; font-size: 2.0em !important;">Data Produk</h3>
  <table width="100%" cellspacing="1" cellpadding="4" align="center" border="1">
    <thead>
      <tr>
        <th>No. </th>
        <th>Penulis</th>
        <th>Judul IDN</th>
        <th>Judul ENG</th>
        <th>E-ISBN</th>
        <th>Halaman</th>
        <th>Ukuran</th>
        <th>Kategori</th>
        <th>Terlaris</th>
        <th>Sinopsis IDN</th>
        <th>Sinopsis ENG</th>
        <th>Cover</th>
        <th>Cover Size</th>
        <th>Url GPlay</th>
        <th>Url YT</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $no = 1;
        // foreach($result as $data){
        foreach ($e_excel->result() as $r){
      ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $r->nama_penulis ?></td>
          <td><?php echo $r->judul_idn ?></td>
          <td><?php echo $r->judul_eng ?></td>
          <td><?php echo $r->eisbn ?></td>
          <td><?php echo $r->halaman ?></td>
          <td><?php echo $r->ukuran ?></td>
          <td><?php echo $r->nama_kategori_idn ?></td>
          <td><?php echo $r->terlaris ?></td>
          <td><?php echo $r->sinopsis_idn ?></td>
          <td><?php echo $r->sinopsis_eng ?></td>
          <td><?php echo $r->cover_img ?></td>
          <td><?php echo $r->cover_size ?></td>
          <td><?php echo $r->link_gplay ?></td>
          <td><?php echo $r->link_yt ?></td>
        </tr>
      <?php
          $no++;
        }
      ?>
    </tbody>
  </table>

</body>
</html>