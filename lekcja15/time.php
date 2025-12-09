<?php
echo date("Y-m-d H:i"). "<br>";
echo date("H:i d.m.Y"). "<br>";
echo date("l, d F Y, H:i"). "<br>";

echo "<hr>";

$timestamp_jutro = time() + 24*60*60;
echo date("l, d F Y", $timestamp_jutro);

echo "<hr>";

$rok_temu = time() - (365*24*60*60);
echo date("l", $rok_temu);

echo "<hr>";

$now=new DateTime();
$interval=new DateInterval("P1Y");
$year_ago = date_sub($now, $interval);
echo $year_ago->format("Y-m-d H:i"). "<br>";
echo $year_ago->format("l");