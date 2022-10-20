<?
include "index.php";
session_start();

if(isset($_POST['simpan']))
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];


?>
<html>
<body>
<table border="1" align="center" width="50%" height="40%">
<form action="index.php" method="POST ">
    <td> 
    <table align="center"> 

    <tr>
        <td> tanggal</td>
        <td><input type="date" name="tanggal"></td>
    </tr>
    <tr> 
        <td>jam</td>
        <td><input type="time" name="jam"></td>
    </tr>
    <tr>
        <td>lokasi</td>
        <td><input type="text" name="lokasi"></td>
    </tr>
        <td>suhu</td>
        <td><input type="text" name ="suhu"></td>

    </tr>
    <td align="right"><input type="submit" name = "simpan" values ="simpan"></td>
    <td>

</table>
</body>
</html>