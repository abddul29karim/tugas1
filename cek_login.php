<?php
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'database';

 $conn = mysqli_connect($host, $user, $pass);
 mysqli_select_db($db, $conn);

 // ambil data
 $user = ($_POST['user']);
 $pass = ($_POST['pass']);

 if(!empty($user) and !empty($pass)){
  $sql = 'SELECT * FROM login';
  $sql .= ' WHERE usname="'.$user.'"';
  $sql .= ' AND passwd="'.$pass.'"';
  $rs = mysqli_query($sql);
  $row = mysqli_fetch_array($rs);

  $valid_id = $row['id'];
  $valid_user = ($row['usname']);
  $valid_pass = $row['passwd'];

  if($user == $valid_user and $pass == $valid_pass){
   $_SESSION['login'] = true;
   $_SESSION['id'] = $valid_id;
   $_SESSION['user'] = $valid_user;

   header('Location: biodata.php');
  }else{
   header('Location: index.php?p=username dan password anda salah');
  }
 }else{
  header('Location: index.php?p=username dan password tidak boleh kosong');
 }
