<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pencarian Data</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../dist/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="../dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<?php include '../nav.php'; ?>
		  <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
</body>
<?php
    require_once './koneksi.php';
?>
<div class="container">
<div class="row-fluid"><br>
    <h2> Daftar Mahasiswa</h2>
 <table class="table table-condensed">
	<tr class="success">
    <th width=100>NIM</th>
    <th width=100>Nama</th>
    <th width=100>Alamat</th>
    </tr>
    <?php
	$key = $_POST['nama'];
    $sql = "SELECT * FROM mahasiswa
	WHERE nama like '%$key%'";
    $res = mysql_query($sql);
	while ($row = mysql_fetch_row($res)) { 
	?>
    <tr>
    <td>
    <?php echo $row[0];?>
    </td>
    <td>
    <?php echo $row[1];?>
    </td>
    <td>
    <?php echo $row[2];?>
    </td>
    </tr>
    <?php
    } 
	?>
    </table>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
	<script src="../dist/js/jquery.js"></script>
	<script src="../dist/js/bootstrap-transition.js"></script>
    <script src="../dist/js/bootstrap-dropdown.js"></script>
    <script src="../dist/js/bootstrap-collapse.js"></script>
    <script src="../dist/js/bootstrap-button.js"></script>
</body>
</html>
