<?php
 $sumber = "kasus.json";
 $update = file_get_contents($sumber);
 $data  = json_decode($update,true);

 echo count($data);
?>

<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Data Covid & Vaksinasi Indonesia</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<div class="header-name">Data Covid-19 Di Indonesia</div>
</div>
</div>
<br>
<h2>Data Covid-19 Di Indonesia </h2>
<div class="table">

<table border="1">
<tr>
 <th rowspan="2">Tanggal</th><th rowspan="2">Jumlah Positif</th colspan="3">Jumlah Dirawat<th rowspan="2">Jumlah Sembuh</th colspan="3"><th rowspan="2">Jumlah Meninggal</th colspan="3">
</tr>
    <?php
    for($a = 0; $a < count($data); $a++){
        print"<tr>";
        print "<td>".$data[$a]['tanggal']."</td>
        print "<td>".$data[$a]['jumlah_positif']."</td>
        print "<td>".$data[$a]['jumlah_dirawat']."</td>
        print "<td>".$data[$a]['jumlah_sembuh']."</td>
        print "<td>".$data[$a]['jumlah_meninggal']."</td>
        print "<tr/>";

    }
    ?>
    <tr>
        <td></td><td></td><td></td>
</tr>
</table>
</div>

</body>
</html>