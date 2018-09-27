<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOT TEST</title>
  </head>
  <body>
    <form action="/search/provinsi" method="get">
      <label for="id">ID Provinsi</label>
      <input type="text" name="id" value="">
      <button type="submit">cari</button>
      <button type="button" onclick="location.href='/'">kembali</button>
    </form>
    <br>
    <?php if(isset($provinsi)): ?>
      Hasil : <strong><?php echo e($provinsi->province); ?></strong>
    <?php endif; ?>
  </body>
</html>