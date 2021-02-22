<h2>-----3-----</h2>
<!-- Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų.
Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm). -->
<?php
$masyvas=[];
$az = range("A", "Z");
foreach(range(1, 10) as $index => $value) {

    $ilgis = rand(2, 20);
    foreach(range(1, $ilgis) as $index2 => $value2) {
        $masyvas[$index][$index2] = chr(rand(65, 90));
        //$masyvas[$index][$index2] = $as[rand(0, 25)];         <<<kitoks budas

        sort($masyvas[$index]);
    }
}

echo '<pre>';
print_r($masyvas);
?>

<h2>-----4-----</h2>
<!-- Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. -->
<?php
sort($masyvas);
print_r($masyvas);
?>
