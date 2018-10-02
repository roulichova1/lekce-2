<?php
$a = 4;
$b = 5;
$obdelnikobsah = $a*$b;
//echo 'Obsah obdelníku o stranách '. $a.'cm a '. $b .'cm je: '. $obdelnikobsah. 'cm2.';
// obsah čtverce
//echo '<br>';
//echo '<br>';
$strana = 6;
$uhel = 60;
$vyska = round((sqrt(3)) * $strana / 2, 2);
//$trojuhelnikobsah1 = round($strana * sin(deg2rad($uhel)) * $strana / 2, 2);
$trojuhelnikobsah = round(($strana / 2 * (sqrt(3))) * $strana / 2, 2);
// pbsah trojúhelníku - pomocí sinu a podle definice rovnostranného - druhá je použitá
//echo "Rovnostranný trojúhelník o straně délky  ".$strana. "cm a úhlu $uhel stupňů je: ".$trojuhelnikobsah. "cm2";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Taháky</title>
    <meta name="description" content="Tahák na matematiku">
    <link rel="icon" href="ikona.ico">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="styly-pythagoras.css" rel="stylesheet"> 
   
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Taháky na matematiku</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Výrazy </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Geometrie <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Funkce </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rovnice </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Zde napiš, co hledáš" aria-label="Search">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Hledat</button>
        </form>
      </div>
    </nav>
    
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-6">
            <h2>Obdélník</h2>
            <table class="table">
              <tbody>
                <tr>
                  <td>Délka strany a:</td>
                  <td><?php echo $a; ?> cm</td>
                </tr>
                <tr>
                  <td>Délka strany b:</td>
                  <td><?php echo $b; ?> cm</td>
                </tr>
                <tr>
                  <td>Obvod obdélníku:</td>
                  <td class="table-danger"> o = 2(a + b) = <?php echo (($b + $a)*2); ?> cm</td>
                </tr>
                <tr>
                  <td>Obsah obdélníku:</td>
                  <td class="table-danger">S = a * b = <?php echo $obdelnikobsah; ?> cm</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <h2>Rovnostranný trojúhelník</h2>
            <table class="table">
              <tbody>
                <tr>
                  <td>Délka strany:</td>
                  <td><?php echo $strana; ?> cm</td>
                </tr>
                <tr>
                  <td>Úhel:</td>
                  <td><?php echo $uhel; ?>°</td>
                </tr>
                <tr>
                  <td>Obvod trojúhelníku:</td>
                  <td class="table-danger">o = 3a = <?php echo $strana; ?> cm</td>
                </tr>
                <tr>
                  <td>Výška trojúhelníku:</td>
                  <td class="table-danger">v = a * √3 / 2  = <?php echo $vyska; ?> cm</td>
                </tr>
                <tr>
                  <td>Obsah trojúhelníku:</td>
                  <td class="table-danger">S = a * v / 2 = <?php echo $trojuhelnikobsah; ?> cm</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h2>Vzpomínka na Pythagora</h2>
            <p>S Pythagorem se neznáme, ani jsem s ním nic neměla, tak se mi sem o něm nic psát nechce.</br> 
            Ale chtěla bych ho vidět, jak by nad něčím bádal, kdyby k tomu musel používat ten nespolehlivý krám <strong>Codenvy</strong>. 
            To by zešedivěl už v mládí a na všechno se radši vykašlal.
            Jo a s tím <strong>navbarem</strong> prostě stylově nehnu, ani kdybych se rozkrájela :-( </p>
          </div>
          <div class="col-md-8">
            <img src="muj_obrazek.jpg" alt="Krásný obrázek obdélníku a trojúhelníku"/>
          </div>
        </div>
    </div>
    
    <footer class="container1">
      <p>&copy; K čertu s matematikou a Codenvy taky!</p>
    </footer>
  </body>
</html>