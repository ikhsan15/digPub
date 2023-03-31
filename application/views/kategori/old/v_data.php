<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lihat data kategori</title>
</head>
<body>

  <h3>tambah data kategori</h3>
  <?php
    echo form_open('kategori/formawal/do_save/'.$id);
  ?>
    <table border="1">
      <tr>
        <td>nama kategori</td>
        <td><input type="text" name="kategori" value="<?= $kategori; ?>" placeholder="kategori"></td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit" name="submit">simpan</button>
        </td>
      </tr>
    </table>
  </form>

  <h3>Kategori produk</h3>
  <?php
    echo anchor('kategori/post', 'Tambah data');
  ?>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Nama Kategori</th>
      <th colspan="2">Operasi</th>
    </tr>
    <?php
      $no = 1;
      foreach ($record->result() as $r){
        echo
          "<tr>
            <td>$no</td>
            <td>$r->nama_kategori_idn</td>
            <td>".anchor('kategori/formawal/do_update/'.$r->kategori_id, 'Edit')."</td>
            <td>".anchor('kategori/formawal/do_delete/'.$r->kategori_id, 'Delete')."</td>
          </tr>";
        $no++;
      }
    ?>
  </table>

</body>
</html>