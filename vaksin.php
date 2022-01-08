<?php
 $sumber = "vaksin.json";
 $total = file_get_contents($sumber);
 $data  = json_decode($total,true);

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
<div class="utama">
<div class="table-vaksin">

<table border="1" >
<tr>
 <th>Jumlah Vaksin Pertama</th>
 <th>Jumlah Vaksin Kedua</th>
</tr>
    <?php
    for($a = 0; $a < count($total); $a++){
        print "<tr>";
        print "<td>".$total[$a]['jumlah_vaksinasi_1']."</td>";
        print "<td>".$total[$a]['jumlah_vaksinasi_2']."</td>";
        print "<tr/>";

    }
    ?>
    
</table>
</div>
</div>
  <!--FOOTER-->
  <div class="footer">
		<div class="footer-name">©Copyright 2022 Data Covid-19 Di Indonesia</div>

			</div>
			
		</div>


</body>
</html>