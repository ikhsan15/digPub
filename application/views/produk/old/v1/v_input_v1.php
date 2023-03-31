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
  
  <h3>tambah data produk</h3>
  <!-- <php
    echo form_open('produk/insert');
  ?> -->
  <?php echo form_open_multipart('produk/insert'); ?>
    <table border="1">
      <tr>
        <td>nama penulis</td>
        <td><input type="text" name="nama_penulis" placeholder="nama_penulis"></td>
      </tr>
      <tr>
        <td>judul idn</td>
        <td><input type="text" name="judul_idn" placeholder="judul_idn"></td>
      </tr>
      <tr>
        <td>kategori idn</td>
        <td>
          <select name="kategori_idn">
            <?php
              foreach($kategori as $k){
                echo "<option value='$k->kategori_id'>$k->nama_kategori_idn</option>";
              } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>sinopsis idn</td>
        <td><textarea name="sinopsis_idn" placeholder="Enter text here..."></textarea></td>
      </tr>
      <tr>
        <td><input type='file' name="userfile" onchange="readURL(this);" /></td>
        <td><img id="cover" src="#" alt="image cover" /></td>
      </tr>
      
      <tr>
        <td colspan="2">
          <button type="submit" name="submit">simpan</button>
        </td>
      </tr>
    </table>
  </form>

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