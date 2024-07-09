<?php
// 1.a
echo strtoupper("Hello wrold");
echo "<br>";
// 1.b
echo strtolower("Hello world");
echo "<br>";

// 1.c
echo ucfirst("hello world");
echo "<br>";
// 1.d
echo ucwords("hello world");
echo "<br>";

// 2
$x = "085119";
echo date("Y:m:s", strtotime("085119"));
echo "<br>";

// 3
$x = "Hello world";
echo strpos("Hello world", "world");
echo "<br>";

// 4
$url = "https://orange.jo/ar/corporate/csr/coding-academy";
echo $filename = parse_url($url, PHP_URL_PATH);
echo "<br>";

// 5
$url = "info@orange.com";
echo $username = var_dump(parse_url($url, PHP_URL_USER));
echo "<br>";

// 6
$url = "info@orange.com";
echo substr($url, -3, 3);
echo "<br>";

// 7
$password = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
echo str_shuffle($password);

// 8
$sentence = "That new trainee is so genius";
$word = "Our";
$firstSpace  = strpos($sentence, " ");
echo substr_replace($sentence, $word, 0, $firstSpace);
echo "<br>";

// 9
$string1 = "dragonball";
$string2 = "dragonboll";
$i = 0;
while ($string1[$i] == $string2[$i]) {
  $i++;
}
echo "First diffrence between two strings at position 7: \"$string1[$i]\" vs \"$string2[$i]\"";
echo "<br>";

// 10
echo "<pre>";
$string = "Twinkle, twinkle, little star.";
echo var_dump(explode(" ", $string));
echo "</pre>";

// 11
$alphabet = "abcdefghijklmonpqrstuvwxyz";
$letter = "a";
if ($letterPos = strpos($alphabet, $letter) + 1 != strlen($alphabet)) {
  echo $alphabet[strpos($alphabet, $letter) + 1];
} else {
  echo $alphabet[0];
}
echo "<br>";

// 12

// 13
$string = "000065702.24";
echo $newString = str_replace("0", "", $string);
echo "<br>";

// 14
$string = "The quick brown fox jumps over the lazy dog";
$word = "fox";
echo $newString = str_replace($word, "", $string);
echo "<br>";

// 15
$string = "The quick brown fox jumps over the lazy dog---";
echo $newString = rtrim($string, "-");
echo "<br>";

// 16

// 17
$string = "The quick brown fox jumps over the lazy dog";
$forthSpaceIndex = strpos($string, " ", 0);
for ($i = 0; $i < 4; $i++) {
  $forthSpaceIndex = strpos($string, " ", $forthSpaceIndex + 1);
}
echo $newString = substr($string, 0, $forthSpaceIndex);
echo "<br>";

// 18
$string = "2,543.12";
echo $newstring = str_replace(",", "", $string);
echo "<br>";

// 19

// 20

// 1
$year = 2013;
if ($year % 4 == 0) {
  echo "Tnis is a leap year";
} else {
  echo "This is not a leap year";
}
echo "<br>";

// 2
$temperature = "27";
if ($temperature < 20) {
  echo "It is wintertime!";
} else {
  echo "It is summertime";
}
echo "<br>";

// 3
$first = 2;
$second = 2;
if ($first == $second) {
  echo ($first + $second) * 3;
} else {
  echo ($first + $second);
}
echo "<br>";

// 4
$first = 10;
$second = 10;
if ($first + $second == 30) {
  echo $first + $second;
} else {
  echo "false";
}
echo "<br>";

// 5
$number = 20;
if ($number > 0) {
  if ($number % 30 == 0) {
    echo "true";
  } else {
    echo "false";
  }
}
echo "<br>";

// 6
$number = 50;
if ($number >= 20 && $number <= 50) {
  echo "true";
} else {
  echo "false";
}
echo "<br>";

// 7
$integars = [1, 5, 9];
$largest = $integars[0] > $integars[1] ? $integars[0] : $integars[1];
echo $largest = $integars[2] > $largest ? $integars[2] : $largest;
echo "<br>";

// 8

// 9

// 10
$age = 15;
if ($age >= 18) {
  echo "is eligible to vote";
} else {
  echo "is no eligible to vote";
}
echo "<br>";

// 11
$number = -60;
if ($number == 0) {
  echo $result = "Zero";
} else {
  echo $result = $number > 0 ? "Positive" : "Negative";
}
echo "<br>";

// 12
$marks = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$average = 0;
for ($i = 0; $i <){

}
switch (true) {
  case $mark < 60:
    echo "F";
    break;
  case $mark >= 60 || $mark < 70:
    echo "D";
    break;
  case $mark >= 70 || $mark < 80:
    echo "C";
    break;
  case $mark >= 80 || $mark < 90:
    echo "B";
    break;
  case $mark >= 90 || $mark < 100:
    echo "A";
    break;
}