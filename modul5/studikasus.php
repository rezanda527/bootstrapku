<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                
                <title>Pemrograman Web</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../dist/css/bootstrap.css" rel="stylesheet" media="screen">

</head>

<body>
        <?php include '../nav.php'; ?>
	<script src="../dist/js/jquery.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
</body>
               
<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    $rec_limit = 5;

        if(! $conn )
            {
                die('Could not connect: ' . mysql_error());
            }
        
        mysql_select_db('mysql');
        $sql = "SELECT count(nim) FROM mahasiswa ";
        $retval = mysql_query( $sql, $conn );
         if(! $retval )
                        {
                die('Could not get data: ' . mysql_error());
                        }
                        
        $row = mysql_fetch_array($retval, MYSQL_NUM );
        $rec_count = $row[0];
    if( isset($_GET{'page'} ) )
                {
                        $page = $_GET{'page'} + 1;
                        $offset = $rec_limit * $page;
        }
    else
       {
                        $page = 0;
                        $offset = 0;
                }
                
        $left_rec = $rec_count - ($page * $rec_limit);
        
        $sql = "SELECT nim, nama, alamat ".
                        "FROM mahasiswa ".
                        "LIMIT $offset, $rec_limit";

        $retval = mysql_query( $sql, $conn );
        if(! $retval )
                {
                        die('Could not get data: ' . mysql_error());
                }
?>


<div class="container">
<div class="row-fluid"><br>
<h2> Daftar Mahasiswa</h2>

<table class="table table-hover">
<tr class="success">
    <th width=50>#</th>
    <th width=120>NIM</th>
    <th width=200>Nama</th>
    <th width=200>Alamat</th>
</tr>
<div class="pagination pagination-centered">        
        
<?php
    	$i=0;    
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
        {
	
        $i++;
?>
        <tr>
                <td>
                        <?php echo $i; ?>
                </td>
                <td>
                        <?php echo $row['nim']; ?>
                </td>
                <td>
                        <?php echo $row['nama']; ?>
                </td>
                <td>
                        <?php echo $row['alamat']; ?>
                </td>
        </tr>
  
<?php

        
		}
?>


</table>

<?php

        if( $page > 0 )
                {
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Last 5 Records</a> |";
            echo "<a href=\"?page=$page\">Next 5 Records</a>";
        }
     else if( $page == 0 )
        {
            echo "<a href=\"?page=$page\">Next 5 Records</a>";
        }
        else if( $left_rec < $rec_limit )
                {
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Last 5 Records</a>";
        }
    mysql_close($conn);
?>
</div>
</body>
</html>