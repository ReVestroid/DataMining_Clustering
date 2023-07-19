 <?php
include("koneksi.php");
 mysqli_query($kon, "UPDATE centroid set c1x='$_POST[c1x]',	
c2x='$_POST[c2x]',
c3x='$_POST[c3x]',	
c1y='$_POST[c1y]',	
c2y='$_POST[c2y]',	
c3y='$_POST[c3y]' WHERE id_centroid='1' ");
 echo"<script>alert('Data Berhasil Di Proses');window.location.href='index.php?module=hasil'</script>";
?>