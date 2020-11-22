<!DOCTYPE html>
<html>
<head>
	<title>Faktorial</title>
</head>
<body>
<?php
    function faktorial ($x) {
        if ($x == 0){
        return(1);
         } else 
        return $x * faktorial ($x-1);
        }
        $x=6;
    echo "Hasil dari $x! adalah " ;
    echo faktorial($x);
    ?>
</body>
</html>