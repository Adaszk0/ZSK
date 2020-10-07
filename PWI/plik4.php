<?php
    $text = <<<T
    zsk - Zespół
    Szkół
    Komunikacji<br>
    T;
    echo $text;
echo nl2br($text);

$name = "jANUsz";
echo "$name<br>";

//zamiana na małe litery
echo strtolower($name);

//zamiana na duże litery
echo strtoupper($name);

$name = "jaNUSz nowAK<br>";
//zamina 1 litery na dużą
echo '<br>',ucfirst($name);

//zamiana wszystkich 1 liter na duże
echo '<br>',ucwords($name);

$name = <<<T
janusz
T;

echo ucfirst($name), '<hr>';


$lorem = <<<LOREM
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
LOREM;

echo $lorem;
echo wordwrap($lorem, 40, '<br>');
echo wordwrap($lorem, 40, '<hr>');

//czyszczenie zawartoci bufora
ob_clean();

?>