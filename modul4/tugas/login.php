<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lagi Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>
<body>
<div class="container">

<!--
.style1 {color: #FFFFFF}
-->
            </style>
   <!--        
    <div class="inner">
    <form action="" method="post">
    <table border=0 cellpadding=5>
    <tr>
            <td colspan="2" bgcolor=" #66CCFF"><div align="center" class="style1">LOGIN FORM</div></td>
      </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="E N T E R" /></td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#3366FF"><div align="center" class="style1">========================</div></td>
      </tr>
    </table>
    </form>
    </div>-->

	<form class="form-signin" action="proses.php" method="post">
        <h2 class="form-signin-heading">Login</h2>
        <input type="text" class="input-block-level" name="nama" placeholder="Email address">
        <input type="password" class="input-block-level" name="pass" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Ijinkan saya masuk
        </label>
        <button class="btn btn-large btn-primary" type="submit">masuk sistem</button>
      </form>

    </div> <!-- /container -->
    
    