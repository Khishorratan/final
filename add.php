<?php
include('connection.php'); 
if(isset($_POST['no_kp'])) {
    $id = $_POST['id'];
    $namapekerja = $_POST['nama_pekerja'];
    $nokp = $_POST['no_kp'];
    $jantina = $_POST['jantina'];
	$nohp = $_POST['no_hp'];
    $sql = "INSERT INTO info_pekerja (id, nama_pekerja, no_kp, jantina, no_hp)
    VALUES ('$id', '$namapekerja', '$nokp', '$jantina', '$nohp')";
    $result = mysqli_query($con, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background-color:gray;">
<div class="p-3 m-0 border-0 bd-example m-0 border-0">
<div class="card">
    <div class="card-body">
    <a href="index.php">
        <button class="btn btn-primary">BACK</button>
        </a>
        </div>
        </div>
</div>
<div style="background-color:white; border-radius:10px;width:30%;padding:8px;display:block;margin-left:auto;margin-right:auto;">
        <h5 style="text-align:center;">Add Maklumat</h5>
    <form action="add.php" method="POST">
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" name="id" style="width:98%;display:block;margin-left:auto;margin-right:auto;" class="form-control">
        </div>
    <div class="mb-3">
        <label for="ic">IC</label>
        <input type="text" name="no_kp" style="width:98%;display:block;margin-left:auto;margin-right:auto;" class="form-control" id="">
        </div>
        <div class="mb-3">
        <label for="ic">Nama</label>
        <input type="text" name="nama_pekerja" style="width:98%;display:block;margin-left:auto;margin-right:auto;" class="form-control" id="">
        </div>
        <div class="mb-3">
        <label for="ic">HP</label>
        <input type="text" name="no_kp" style="width:98%;display:block;margin-left:auto;margin-right:auto;" class="form-control" id="">
        </div>
        <div class="mb-3">
        <label for="ic">JANTINA</label>
            <select name="jantina" style="width:98%;display:block;margin-left:auto;margin-right:auto;text-align:center;" id="disabledSelect" class="form-select">
                <option value="" selected>--Sila Pilih--</option>
                <option value="Lelaki" selected>Lelaki</option>
                <option value="Perempuan" selected>Perempuan</option>
            </select>
            </div>
            <input type="submit" style="margin-right:66%" value="Update" class="btn btn-primary"> <input type="reset" class="btn btn-light" value="Clear">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>