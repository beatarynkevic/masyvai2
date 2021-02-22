<h2>-----5-----</h2>
<!-- Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas
[user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.  -->
<?php

$usersArray = [];
for($i = 0; $i < 30; $i++) {
    $userID = rand(1, 1000000);
    while(in_array($userID, array_column($usersArray, 'user_id'))) {
        $userID = rand(1, 1000000);
    }
    $usersArray[] = ['user_id' => $userID, 'place_in_row' => rand(0, 100)];
}
?>

<h2>-----6-----</h2>
<!-- Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka. -->
<?php

array_multisort(array_column($usersArray, 'user_id'), SORT_ASC, $usersArray); //didejimo tvarka
echo '<pre>';
print_r($usersArray);
echo '</pre>';
array_multisort(array_column($usersArray, 'place_in_row'), SORT_DESC, $usersArray); //mazejimo tvarka
echo '<pre>';
print_r($usersArray);
echo '</pre>';

?>

<h2>-----7-----</h2>
<!-- Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname.
Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15. -->
<?php
foreach($usersArray as $index => $value) {
    $letters = range('a', 'z');
    shuffle($letters);
    $length = rand(5, 15);
    $lengthSurname = rand(5, 15);
    $word = substr(implode($letters), 0, $length);
    shuffle($letters);
    $wordSurname = substr(implode($letters), 0, $lengthSurname);
    $usersArray[$index]['name'] = ucfirst($word);
    $usersArray[$index]['surname'] = ucfirst($wordSurname);
}
print_r($usersArray);

echo '<br><br>';
?>