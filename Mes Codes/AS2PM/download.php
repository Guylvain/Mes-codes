<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
header("Content-type: text/javascript"); 
$fiche_tech_TFP_APS = $_GET["https://www.atonformation.fr/wp-content/uploads/2022/05/Fiche-TFP-APS.png"];
readfile($fiche_tech_TFP_APS);
?>

</body>
</html>