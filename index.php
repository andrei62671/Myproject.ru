<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- Указывается кадировка utf-8 -->
<link rel="stylesheet" type="text/css" href="style.css" /><!-- Подключение стиля -->
<?php

$a = 1;
$b = 2;

$c = $a;
$a = $b;
$b = $c;
?>
<div class="text">
<?php
echo $b;
?>
<div>

<?php
$a = 12;
$b = 44;

$c = $a+$b;
?>
<div class="text">
<?
echo $c;
?>
<div>
<br>
<?php
$a = 99;
$b = 99;

$c = $a-$b;
?>
<div class="text">
<?
echo $c;
?>
<div>
<br>
<?php
$a = 99;
$b = 99;

$c = $a*$b;
?>
<div class="text">
<?
echo $c;
?>
<div>
<br>
  <!-- 1 или 0 должно получиться 1-->
<?php
$a = 1;
$b = 0;

$c = $a||$b;
?>
<div class="text">
<?
echo $c;
?>
<div>
<br>
<!--1 или 0 должно получиться 1 -->
<?
$a = 1;
$b = 0;

$c = $a and $b;
?>
<div class="text">
<?
echo $c;
?>
<div>
