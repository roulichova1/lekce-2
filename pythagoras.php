<?php
$a = 4;
$b = 5;
$obdelnikobsah = $a*$b;
echo 'Obsah obdelníku o stranách '. $a.'cm a '. $b .'cm je: '. $obdelnikobsah. 'cm2.';
// obsah čtverce

echo '<br>';
echo '<br>';

$strana = 6;
$uhel = 60;
//$trojuhelnikobsah1 = round($strana * sin(deg2rad($uhel)) * $strana / 2, 2);
$trojuhelnikobsah = round(($strana / 2 * (sqrt(3))) * $strana / 2, 2);
// pbsah trojúhelníku - pomocí sinu a podle definice rovnostranného - druhá je použitá
echo "Rovnostranný trojúhelník o straně délky  ".$strana. "cm a úhlu $uhel stupňů je: ".$trojuhelnikobsah. "cm2";

?>



