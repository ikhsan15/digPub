<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form input kategori</title>
</head>
<body>
  
  <h3>tambah data kategori</h3>
  <?php
    echo form_open('kategori/do_insert');
  ?>
    <table border="1">
      <tr>
        <td>nama kategori</td>
        <td><input type="text" name="kategori" placeholder="kategori"></td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit" name="submit">simpan</button>
        </td>
      </tr>
    </table>
  </form>

</body>
</html>
