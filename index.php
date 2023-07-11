<?php
include "connection.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:gray;">
    <div class="p-3 m-0 border-0 bd-example m-0 border-0">
<div class="card">
    <div class="card-body">
        <p style="font-size:15px;font-weight:bold;">ANISHOLDING SDN.BHD</p>
        <a href="add.php">
        <button class="btn btn-primary">ADD</button>
        </a>
    </div>
        </div>
</div>
    <table style="width:70%;margin-left:auto;margin-right:auto;text-align:center;" class="table table-dark table-striped">
            <td >ID</td>
            <td >NAMA PEKERJA</td>
            <td >NO KP</td>
            <td >NO HP</td>
            <td>JANTINA</td>
            <td></td>
            <td></td>
            <?php
            $sql = "SELECT * FROM info_pekerja ORDER BY id ASC";
            $data = mysqli_query($con, $sql);
            $bil = 1;
            while ($pekerja = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class="bilnum"><?php echo $bil; ?></td>
                    <td><?php echo $pekerja['id']; ?></td>
                    <td><?php echo $pekerja['nama_pekerja']; ?></td>
                    <td><?php echo $pekerja['no_kp']; ?></td>
                    <td><?php echo $pekerja['jantina']; ?></td>
                    <td><?php echo $pekerja['no_hp']; ?></td>
                    <td>
                        <a href="update.php?no_kp=<?php echo $pekerja['no_kp'];?>"><button class="btn btn-primary">Kemaskini</button></a> 
                        <a href="delete.php?no_kp=<?php echo $pekerja['no_kp'];?>"><button class="btn btn-primary">Padam</button></a> 
                            </td> 
                </tr> 
            <?php $bil = $bil + 1; 
            } 
            ?> 
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>