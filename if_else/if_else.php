<!DOCTYPE html>
<html>
<body>
  
<h1 align="center">Biodata Diri</h1>
    <hr width="600px">
    <table align="center" cellpadding="10px" width="600px">
        <tr>
            <td>Nama</td>
            <td>:Intan Nur Rahmawati</td>
            <td rowspan="8"><img src="intan.jpeg" height="200px" width="170px"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:Rekayasa Perangkat Lunak</td>
        </tr>
        <tr>
            <td>Tanggal Pengumpulsan</td>
            <td>:7 Februari 2024</td> 
        </tr>
    </table>

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 
</body>
</html>