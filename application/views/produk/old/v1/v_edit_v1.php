<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- start - image preview -->
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
  <!-- end - image preview -->

  <title>form input produk</title>
</head>
<body>
  
  <h3>edit data produk</h3>
  <?php
    // echo form_open('produk/edit');
    echo form_open_multipart('produk/edit');
  ?>
  <input type="hidden" name="produk_id" value="<?php echo $record['produk_id'] ?>"  name="id">
    <table border="1">
      <tr>
        <td>nama penulis</td>
        <td><input type="text" name="nama_penulis" value="<?php echo $record['nama_penulis'] ?>" placeholder="nama_penulis"></td>
      </tr>
      <tr>
        <td>judul idn</td>
        <td><input type="text" name="judul_idn" value="<?php echo $record['judul_idn'] ?>" placeholder="judul_idn"></td>
      </tr>
      <tr>
        <td>kategori</td>
        <td>
          <select name="kategori">
            <?php
              foreach($kategori as $k){
                echo "<option value='$k->kategori_id'";
                echo $record['kategori_idn'] == $k->kategori_id?'selected':'';
                echo ">$k->nama_kategori_idn</option>";
              }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>sinopsis idn</td>
        <td><textarea name="sinopsis_idn" placeholder="Enter text here..."><?php echo $record['sinopsis_idn'] ?></textarea></td>
      </tr>
      <tr>
        <!-- <td>cover</td>
        <td>
          <input type="file" name="cover" size="20" value="<php echo $record['cover_img'] ?>">
        </td> -->
        <!-- <td><input type='file' name="userfile" onchange="readURL(this);" /></td>
        <td><img id="cover" src="#" alt="image cover" /></td> -->
        <!-- <td><input type="hidden" id="fotolama" name="fotolama" value="<php echo $record['cover_img'] ?>" ></td> -->
        <td><img class="img-thumbnail" width="70px" height="70px" id="fotolama" name="fotolama" src='<?php echo base_url() ?>./gambar/cover/Hamka/<?php echo $record['cover_img'] ?>'></td>
        <td><input type="file" id="fotopost" name="fotopost" class="form-control"></td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit" name="submit">simpan</button>
        </td>
      </tr>
    </table>
  <!-- </form> -->
  <?php echo form_close(); ?>

  <script id="jsbin-javascript">

  // start - image preview
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#cover')
          .attr('src', e.target.result)
          .width(150)
          .height(200);
        };
        reader.readAsDataURL(input.files[0]);
        }
      }
    // end - image preview

</script>

</body>
</html>