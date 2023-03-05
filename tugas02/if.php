<?php 
$total_belanja = 7600000;
$status;

if ($total_belanja > 4200000) {
    $status = "TV";
} else {
    $status = "Kulkas";
}

echo $status;

echo "<br>";

// Buat elseif
$grade;

if ($total_belanja > 4200000) {
    $grade = "tv";
} elseif ($total_belanja > 3100000) {
    $grade = "kulkas";
} elseif ($total_belanja > 3800000) {
    $grade = "mesin cuci";
} else {
    $grade = "";
}

echo $grade;
?>