<?php
//wersja
echo PHP_VERSION, '<br>';
// echo phpinfo();
//interpolacja
echo 'a','b','c'; // show a show b show c
echo 'a'.'b'.'c'; // add a+b+c show abc
$pow=2**10;
echo $pow; // 1024
// operatory bitowe
// and &, or |
$bin = 0b1010;
echo "<br>$bin<br>";
$bin = $bin << 2;
echo $bin ; //40
$bin = $bin >> 3;
echo $bin; //5
//porównanie
$x=1;
$y=1.0;

if ($x = $y) {
  echo '<br>$x jest równa $y';
}else {
  echo '<br>$x nie jest równa $y';
  }

if ($x === $y) {
  echo '<br>$x jest identyczna z $y';
}else {
  echo '<br>$x nie jest identyczna z $y';
  }

echo gettype($x); //integer
echo gettype($y);//double

$x=10;
$y=1;
echo $x <=> $y;
$x=1;
$x=$x++;
echo $x; // 1
$x=++$x;
echo $x; // 2
$y=$x++;
echo $x; // 3
echo $y; //2
$y=++$x*2-1;
echo $x; //4
echo $y; //7
//operatory rzutowania
//bool, int, flow, string, array, object, unset
$test1 = '123abc45';
$test2 = 0;
$test3 = 20;

echo 'Typ danych $test: '.gettype($test1);
$test1=(int)$test1;
echo $test1; //123
echo '<br>Typ danych $test: '.gettype($test1);

echo '<br>Typ danych $test: '.gettype($test2);
$test2=(bool)$test2;
echo $test2; //123
echo '<br>Typ danych $test: '.gettype($test2);

echo '<br>Typ danych $test: '.gettype($test3);
$test3=(float)$test3;
echo $test3; //123
echo '<br>Typ danych $test: '.gettype($test3);
//rozmiar typu integer
echo PHP_INT_SIZE, '<hr>'; //8
//kontrola typu zmiennych
//is_int(), is_float(), is_bool(), is_string(), is_null()
$x=1;
$y=null;
echo is_float($x);
echo is_null($y), '<hr>';

$w;
//operator ignorowania błędów
echo @gettype($w);
?>
