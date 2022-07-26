<?php

$value = "A";
$result = "";

switch ($value){
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda Tidak Lulus";
        break;
    case "E":
        $result = "Mungkin Anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu?";
}

echo $result . PHP_EOL;

$result = match ($value){
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Mungkin Anda Salah Jurusan",
    default => "Nilai Apa Itu?"
};

echo $result . PHP_EOL;

$result = match ($value){
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Mungkin Anda Salah Jurusan",
    default => "Nilai Apa Itu?"
};

echo $result . PHP_EOL;

$value = 80;

$result = match (true) {
    $value > 80 => "A",
    $value > 70 => "B",
    $value > 60 => "C",
    $value > 50 => "D",
    default => "E"
};

echo $result . PHP_EOL;

$name = "Mrs. Yunda";

$result = match (true){
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};

echo $result . PHP_EOL;