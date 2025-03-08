<?php
function fibonacci($nomor) {
    $fib = [0, 1];
    for ($i = 2; $i < $nomor; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

$nomor = 36;
$urutan = fibonacci($nomor);

echo "<ol>";
foreach ($urutan as $index => $num) {
    if ($num == 8) {
        echo "<li>$num - <strong>Defantyo Shabian Hadi</strong></li>";
    } else {
        echo "<li>$num</li>";
    }
}
echo "</ol>"; 
?>