<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExercicesPHP</title>
    <style>
        body {
            font-family: Courier;
            font-weight: bold;
        }
    </style>
</head>

<body>
    
<?php

    # Exercice 1
    function pair($n){
        if($n % 2 == 0){
            return "$n  est Pair";
        }
        return "$n est Impair";
        
    }
    echo pair(10), "<hr/>";


    # Exercice 2
    function age($n){
        if($n >= 18){
            return "Vous avez $n ans, vous êtes Majeur";
        }
        return "Vous avez $n ans, vous êtes Mineur";
    }
    
    echo age(18), "<hr/>";


    # Exercice 3
    function sophie(){
        $s = 1000;
        echo 2020, " = ", $s, "€", "<br/>";
        for($i = 2021; $i <= 2040; $i++){
            $s = round($s * 1.02 + 100, 2);
            echo $i, " = ", $s, "€", "<br/>";
        }
    }
    sophie();
    echo "<hr/>";


    # Exercice 4
    function sophie_annee($n){
        $s = 1000;
        for($i = 2021; $i <= $n; $i++){
            $s = round($s * 1.02 + 100, 2);
        }
        echo $n, " = ", $s, "€", "<br/>";
    }
    sophie_annee(2050);
    echo "<hr/>";


    # Exercice 5
    function fibonacci(){
        $n1 = 0;
        $n2 = 1;
        echo $n1, "<br/>";
        echo $n2, "<br/>";
        for($i = 2; $i <= 10; $i++){
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;
            echo $n3, "<br/>";
        }
    }
    fibonacci();
    echo "<hr/>";


    # Exercice 6
    function somme($n){
        $s = 0;
        for($i = 0; $i <= $n; $i++){
            $s += $i;
        }
        return $s;
    }
    echo somme(4), "<hr/>";


    # Exercice 7
    function alea(){
        $a = rand(1, 6);
        return $a;
    }
    echo alea(), "<hr/>";


    # Exercice 8
    function nbrpair(){
        $a = alea();
        if($a % 2 == 0){
            return "$a  est Pair";
        }
        return "$a  est Impair";
    }
    echo nbrpair(), "<hr/>";


    # Exercice 9
    function guess($n){
        $a = alea();
        if($n == $a){
            return "$n = $a";
        }
        return "$n ≠ $a";
    }
    echo guess(4), "<hr/>";


    # Exercice 10
    function jeu(){
        $a = alea();
        $b = alea();
        $c = alea();
        if($a == 4 or $a == 2 or $a == 1){
            if($b == 4 or $b == 2 or $b == 1){
                if($c == 4 or $c == 2 or $c == 1){
                    if($a != $b and $b != $c and $a != $c){
                        return "$a $b $c True";
                    }
                }
            }
        }
        return "$a $b $c False";
    }
    echo jeu(), "<hr/>";

    
    # Exercice 11
    function decimal($n){
        $db=decbin($n);
        $dh=dechex($n);
        echo "Décimal → ", $n, "<br/>","Binaire → ", $db, "<br/>","Hexadecimale → ", $dh;
    }
    decimal(244);
    echo "<hr/>";


    # Exercice 12
    function binaire($n){
        $d=bindec($n);
        $h=dechex($d);
        echo "Binaire → ", $n, "<br/>","Décimal → ", $d, "<br/>","Hexadecimale → ", $h;
    }
    binaire(11110100);
    echo "<hr/>";


    # Exercice 13
    function hexadecimale($n){
        $d=hexdec($n);
        $b=decbin($d);
        echo "Hexadecimale → ", $n, "<br/>","Décimal → ", $d, "<br/>","Binaire → ", $b;
    }
    hexadecimale("f4");
    echo "<hr/>";


    # Exercice 14
    function puissance($n){
        for($i = 1; $i <= 10; $i++){
            $r = $n ** $i;
            echo $n, "^", $i, " = ", $r, "<br/>";
        }
    }
    puissance(2);

?>

</body>
</html>