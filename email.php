<!DOCTYPE html>
    <html>
    <head>
    <title>REZANDA WEBSITE ALAY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
    </head>
    <body>
          <?php include 'nav.php'; ?>
		  <script src="http://code.jquery.com/jquery.js"></script>
		  <script src="dist/js/bootstrap.min.js"></script>

<div class="container">
<div class="hero-unit">
<form action='kirim.php' method='post'>
<table class="table table-hove">
<tr><td>Nama:</td><td><input class="form-control" id="focusedInput" type="text" name='nama' value="Masukkan nama anda..."></td></tr>
<tr><td>Email: </td><td><input class="form-control" id="focusedInput" type="text" name='email' value="Masukkan email anda..."></td></tr>
<tr><td>Subjek:</td><td><input class="form-control" id="focusedInput" type="text" name='subjek' value="Subjek Pesan..."></td></tr>
<tr><td>Pesan: </td><td><textarea class="form-control" id="focusedInput" rows="3" name="pesan"></textarea>
<tr><td><button type= "Submit" class="btn btn-info" type="button" value='KIRIM'>KIRIM</button></td></tr>
</table>
</form>
</div>
<footer>
        <p>Copyright 2013 Rezanda Alay</p>
      </footer>
    </div>
</body>
</html>