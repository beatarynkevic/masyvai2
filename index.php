<h2>-----1-----</h2>
<!-- Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25. -->
<?php

$mas = [];
foreach(range(1, 10) as $index1 => $val1) {
    foreach(range(1, 5) as $index2 => $val2) {
        $mas[$index1][$index2] = rand(5, 25);
    }
}

$counter = 0;
$largest = 0;
$vienoduIndeksuSuma = [];
$masyvuSuma = array_fill(0, count($mas), 0);

foreach($mas as $index => $mazas_masyvas) {

    foreach($mazas_masyvas as $index2 => $reiksmes) {
        $counter += ($reiksmes > 10 ? 1 : 0);           //2.a
        $largest = ($reiksmes >= $largest ? $reiksmes : $largest);       //2b

        $vienoduIndeksuSuma[$index2] = ($vienoduIndeksuSuma[$index2] ?? 0) + $reiksmes; //2c
        $masyvuSuma[$index] += $reiksmes; //2d
    } 
}
echo '<pre>';
print_r($mas);
?>

<h2>-----2-----</h2>
<!-- Naudodamiesi 1 uždavinio masyvu:
a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
b) Raskite didžiausio elemento reikšmę;
c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
d) Visus masyvus “pailginkite” iki 7 elementų
e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą.
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai  -->
<?php
echo "a) Elementu didesniu uz 10 yra: $counter <br>";
echo 'b) Didziausio elemento reiksme: ' . $largest. '<br>';//2b
echo "c) Vienodu antro lygio masyvu indeksu suma: <br><br>";
print_r($vienoduIndeksuSuma);//2c


for($i = 0; $i < count($mas); $i++ ){       //2d
    for($j = 0; $j < 7; $j++) {
        if(count($mas[$i]) < 7) {
            $mas[$i][] = rand(5, 25);
        }
    }
}

// echo '<br>******Kitoks variantas*********';
// foreach($mas as &$vidinisMasyvas) {     //?
//     while(count($vidinisMasyvas) < 7)
//     {
//         $vidinisMasyvas[]=rand(5, 25);
//     }
// }

echo 'd) Visus masyvus “pailginkite” iki 7 elementų:';
print_r($mas);

echo '<br> e)Masyvas is masyvo elementu sumos: <br>';            //2e
print_r($masyvuSuma);
?>
