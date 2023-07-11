<?php
 include('connection.php');
 $nokp = $_GET['no_kp'];
 $sql = "DELETE FROM info_pekerja WHERE no_kp= '$nokp'";
 $result = mysqli_query($con, $sql);
 if ($result)
     echo "<script>alert('Berjaya padam rekod')</script>";
else 
   echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='index.php'</script>";
?>