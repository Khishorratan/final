<?php
include('connection.php'); 
if(isset($_POST['no_kp'])) {    
    $id = $_POST['id'];
    $namapekerja = $_POST['nama_pekerja'];
    $nokp = $_POST['no_kp'];
    $jantina = $_POST['jantina'];
	$nohp = $_POST['no_hp'];
    $sql = "UPDATE info_pekerja SET id='$id', nama_pekerja='$namapekerja',no_kp='$nokp', 
	jantina = '$jantina', no_hp = '$nohp' WHERE no_kp = $nokp";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='megaholdings.php'</script>";
}
$nokp = $_GET['no_kp'];
$sql = "SELECT * FROM info_pekerja WHERE no_kp = '$nokp' ";
$result = mysqli_query($con, $sql);
while ($pekerja = mysqli_fetch_array($result)) {
    $id = $pekerja['id'];
    $namapekerja = $pekerja['nama_pekerja'];
    $nokp = $pekerja['no_kp'];
    $jantina = $pekerja['jantina'];
    $nohp = $pekerja['no_hp'];
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
    <div style="background-color:white; border-radius:10px;width:50%;padding:8px;display:block;margin-left:auto;margin-right:auto;">
        <h5 style="text-align:center;">UPDATE MAKLUMAT ANIQ NAUFAL BIN MUHAMMAD AZRAEI</h5>
    <form action="update.php" method="post">
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" style="width:98%;display:block;margin-left:auto;margin-right:auto;" class="form-control" value='<?php echo $id;?>'>
        </div>
    <div class="mb-3">
        <label for="ic" class="form-label">IC</label>
        <input type="text" style="width:98%;display:block;margin-left:auto;margin-right:auto;" class="form-control" value="<?php echo $nokp;?>">
        </div>
        <div class="mb-3">
        <label for="ic" class="form-label">NAMA</label>
        <input type="text" style="width:98%;display:block;margin-left:auto;margin-right:auto;" class="form-control" value="<?php echo $namapekerja;?>">
        </div>
        <div class="mb-3">
        <label for="ic" class="form-label">HP</label>
        <input type="text" style="width:98%;display:block;margin-left:auto;margin-right:auto;" class="form-control" value="<?php echo $nohp;?>">
        </div>
        <div class="mb-3">
        <label for="disabledSelect" class="form-label">JANTINA</label>
        <select name="jantina" style="width:98%;display:block;margin-left:auto;margin-right:auto;text-align:center;" id="disabledSelect" class="form-select" name="" value="<?php echo $jantina;?>">
            <option value="" selected>--Sila Pilih--</option>
            <option value="Lelaki" selected>Lelaki</option>
                <option value="Perempuan" selected>Perempuan</option>
        </select>
        </div>
        <input type="submit" style="margin-right:81%" value="Update" class="btn btn-primary"> <input type="reset" class="btn btn-light" value="Clear">
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>