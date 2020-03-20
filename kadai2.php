//①
<?php
$name = "leo";
if ($name === "ryu") {
    echo "私は leo です";
} else {
    echo "あなたの名前ではありません";
}


//②
$total = 0;
echo $total;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;


//③
$fruits = array("mango", "banana", "apple", "orange", "lemon");

foreach ($fruits as $fruits) {
    echo "要素は" . $fruits;
    echo "\n";
}


//④
$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++) {
if ($i % 5 == 0) 
echo $i;
}