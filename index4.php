<h2>-----8-----</h2>
<!-- Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5.
Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite.
Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai. -->
<?php
// echo '<pre>';
$masyvas8= [];
foreach(range(1, 10) as $key => $value) {
    $randomNumber = rand(0, 5);
    if($randomNumber === 0) {
        $masyvas8[$key] = rand(0, 10);
    }
    if($randomNumber > 0) {
        foreach(range(1, $randomNumber) as $key2 => $value2) {
            $masyvas8[$key][$key2] = rand(0, 10);
        }
    }
}
 print_r($masyvas8);
?>
<h2>-----9-----</h2>
<!-- Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų
mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos. -->
<?php
$masSum= 0;
foreach($masyvas8 as $index => $value) {
   if(is_array($masyvas8[$index])) {
       $masyvoSuma = 0;
       foreach($masyvas8[$index] as $key => $value2) {
           $masSum += $value2;
           $masyvoSuma += $value2;
       }
       $masyvas8[$index] = $masyvoSuma;
   }else {
       $masSum += $value;
   }
}
print_r($masyvas8);

function arraySort($a, $b) {
    return ($a <=> $b);
}

usort($masyvas8, "arraySort");
print_r($masyvas8);
?>
<h2>-----10-----</h2>
<!-- Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų.
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color.
Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX.
Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color. -->
<?php

$masyvas10= [];
$charpool = ['#', '%', '+', '*', '@', '裡'];
foreach(range(1, 10) as $index => $v) {
    foreach(range(1, 10) as $index2 => $v2) {
        $offset = rand(0, count($charpool)-1);
        $rndchar = $charpool[$offset];
        $color = dechex(rand(0x000000, 0xFFFFFF));
        $masyvas10[$index][$index2]["value"] = $rndchar;
       $masyvas10[$index][$index2]["color"] = 123;
 
    }
}
for($i = 0; $i < count($charpool); $i++) {
    for($j = 0; $j < count($charpool); $j++) {
        $color = dechex(rand(0x000000, 0xFFFFFF));
        $offset = rand(0, count($charpool)-1); //random pozicija sugeneruoja
            $rndchar = $charpool[$offset];
        echo "<span style='color:#$color;font-size: 30px';>$rndchar </span> ";
    }
    echo '<br>';
}

?>