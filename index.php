<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>PHP</title>
</head>
<body>
    <!-- task1.1 -->
    <!-- Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
    "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->

    <?php
    $name = "Mantas";
    $surname = "Linka";
    $birthYear = "1999";
    $currentYear = "2022";
    $result = $currentYear - $birthYear;
    echo "Aš esu $name $surname. Man yra $result metai(ų).";
    echo "<br>"
    ?>
    <!-- task1.2 -->
    <!-- Naudokite funkcija Math.random(). Sukurkite du kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4 (sveiki skaičiai). Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->
    <?php
    $num1 = rand(0,4);
    $num2 = rand(0,4);
    if ($num1 > $num2 && ($num1 !== $num2 || $num1 !== 0 && $num2 !== 0)) { 
        // console.log(($num1 / $num2).toFixed(2)); 
        echo "$num1";
    } 
    if ($num1 < $num2 && ($num1 !== $num2 || $num1 !== 0 && $num2 !== 0)){
        // console.log(($num2 / $num1).toFixed(2));
        echo "$num2";
    }
    echo "<br>"
    ?>
    <!-- task1.3 -->
    <!-- Naudokite funkcija Math.random(). Sukurkite tris kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25 (sveiki skaičiai). Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. -->
    <?php
    $num3 = rand(0,25);
    $num4 = rand(0,25);
    $num5 = rand(0,25);
    $middle = $num3 + $num4 + $num5 - min($num3, $num4, $num5) - max($num3, $num4, $num5);
        echo ($middle);
    echo "<br>"
    ?>
    <!-- task2.1 -->
    <!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą. -->
    
</body>
</html>