<?php

$poradi = '5';
$jmeno = 'Novák';

echo 'pořadí:' . $poradi . ', ' . 'jméno: '. $jmeno;
echo '<br>';
echo '<br>';
echo "pořadí: $poradi , jméno: $jmeno";
echo '<br>';
echo '<br>';

$promenna = 3;
var_dump($promenna);
$soucet = $promenna + 2;
echo '<br>';
echo '<br>';
var_dump($soucet);
echo '<br>';
echo '<br>';

$promenna = 2.1;
var_dump($promenna);
echo '<br>';
echo '<br>';

$castkaBezDph = 149.99;
$dph = 21;
$castkaSDph = ($castkaBezDph * ($dph /100)) + $castkaBezDph;

var_dump($castkaBezDph, $dph, $castkaSDph);
echo '<br>';
echo '<br>';

$pole = ['modrá', 'zelená', 'žlutá'];
var_dump($pole);

echo '<br>';
echo '<br>';
$pole = ['barva' => 'modrá', 'značka' => 'ford'];
var_dump($pole);

echo '<br>';
echo '<br>';
$pole = ['barva' => 'modrá', 'počet' => 3, 10 => true];
var_dump($pole);

echo '<br>';
$pole = ['barva' => 'modrá'];
var_dump($pole['barva']);

echo '<br>';
$pole = [0=>'zelená', 2=>'červená'];
var_dump($pole);
echo '<br>';
$pole[] = 'modrá';
var_dump($pole);
echo '<br>';
$pole[2]='zelená';
var_dump($pole);

echo '<br>';
$pole = ['barva' => ['nazev' => 'žlutá', 'kod' => '#0000FF']];
var_dump($pole['barva']['nazev']);

echo '<br>';


