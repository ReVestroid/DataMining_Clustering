<?php 
	session_start();
	include "koneksi.php";
	// ini_set('display_errors', '1');
	// ini_set('display_startup_errors', '1');
	// error_reporting(E_ALL);
?>
 
<?php
if(!empty($_SESSION["useradmin"]) && !empty($_SESSION["passadmin"])){
?>
  <?php
	include "content.php";
  ?>



<?php
}else{
	include "login.php";
}
?>