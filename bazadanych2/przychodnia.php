<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="./przychodnia.css">
  </head>
  <body>
<div id="baner">
<h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
</div>

<div id="lewy">
<h2>PRAKTYKA LEKARZA RODZINNEGO</h2>
<!-- SKRYPT1  -->

<?php

$polaczenie = @new mysqli('localhost','root','','przychodnia');
if($polaczenie->connect_errno){

  echo "bledne polaczenie<br>";
  echo $polaczenie->connect_errno;
//2002 BLAD SWERWERA
//1045 bledne haslo
//1044 bledny login / uzytkownik
//1049 bledna baza danych







}
else {
$zapytanie = "SELECT `id`,`imie`,`nazwisko` FROM `pacjenci`";

if ($rezultat = $polaczenie -> query($zapytanie)){
while ($wiersz = $rezultat -> fetch_assoc()){

  echo <<<WIERSZ
      $wiersz[id] $wiersz[imie] $wiersz[nazwisko]<br>





WIERSZ;


}




}
else {

  echo "bledne zapytanie";
}





  //echo"prawidlowo";
}







 ?>
<br><br>
<form method="post">
  Podaj id<br>
  <input type="number" name="x"><input type="submit" name="y" value="Pokaż dane">
  <h3>LEKARZE</h3>
  <ul>
    <li>pn-śr</li>
    <ol>
        <li>Anna Kwiatowska</li>
        <li>Jan Kowalewski</li>
      </ol>
    <li>czw-pt</li>
    <ol>
        <li>Krzysztof Nowak</li>
        </ol>
  </ul>
</form>
</div>
<div id="prawy">
<h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
<!-- SKRYPT2  -->
</div>

<footer id="stopka">
<p>utworzone przez: 11111111111</p>
<a href="kwerendy.txt">Pobierz plik z kwerendami</a>

</footer>
  </body>
</html>
