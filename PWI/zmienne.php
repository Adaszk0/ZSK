<?php
//typy zmienn
$prawda=true;
$fałsz=false;

echo $prawda; //1
echo "$fałsz<br>"; // nic
// typ integer

$bin = 0b1011;  //11\
$oct = 011; //9
$dec = 11; //11
$hex = 0xA ;//10
echo $hex;
// składnia heredoc
$name='janusz';
$surname='Nowak';
$text= <<<Label
<hr>
imie: $name<br>
Nazwisko : $surname<br>
<hr>
Label;
echo $text;

echo <<<L
heredoc 2 <br>
Imię: $name <hr>
L;
// nowdoc

  echo <<<'L'
  heredoc<br>
  Imię: $name <hr>
L;

$city="poznan";
echo "nazwa zmiennej: \$city wartość: $city";


?>
