<?php
$areacode = "(208)";
$contact = '+1' . $areacode . '1234567';
echo $contact;

echo '<br>';
// the length of a string.
$str1 = 'Good Day!';
echo strlen($str1);

echo '<br>';

$str2 = 'Hello World';
$str3 = strtolower($str2);
$str4 = strtoupper($str2);
echo '<BR>'.$str2;
echo '<BR>'.$str3;
echo '<BR>'.$str4;

echo '<br>';

$str5 = '   is ';
echo 'PHP'.$str5.'Fun<BR>';
echo 'PHP'.trim($str5).'Fun<BR>';

$str6 = '**Hello**World***';
echo trim($str6, '*');

echo '<br>';

$str6 = '4444Hello44World44444';
echo trim($str6, '4');