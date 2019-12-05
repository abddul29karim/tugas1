<?php
 session_start();

 // set session
 $_SESSION['login'] = false;
?>
<!DOCTYPE html PUBLIC>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css_login.css">
</head>

<body>
    <br/>
    <br/>
<ul class="dropmenu">
<li><img alt="Liferay" height="64" src="btpn.png" width="115"></li>
<li><a href="index.php">Tujuan</a>
    <ul>
    <li><a href="hidup.php">Hidup</a></li>
    <li><a href="kerja.php">Kerja</a></li>
    </ul>
</li>
<li><a href="biodata.php">Profil</a></li>
<li><a href="index.php">Login</a></li>
</ul>

<br/>
<br/>

</body>
<body>
<div class="container">
<h1><center>PANEL LOGIN</center></h1>
<hr />
<form action="cek_login.php" method="POST">
<div class="form-control">
  <input type="text" name="user" placeholder="Masukan username">
</div>
<div class="form-control">
  <input type="password" name="pass" placeholder="Masukan password">
</div>
<div class="form-control">
  <button type="submit">LOGIN</button>
</div>
<?php
// jika mendapatkan parameter $_GET['p']
if(isset($_GET['p'])){
?>
<div class="pesan">
<?php echo $_GET['p']; ?>
</div>
<?php } ?>
</form>
</div>
</html>