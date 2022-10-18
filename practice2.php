<?php 

//1 
$name = "Ryutaro";

if ($name == "Ryutaro") {
    echo "私の名前は".$name."です";
} else {
    echo "Ryutaroではありません";
}

echo "\n";

// 2
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

// 3
$fruits = array("apple", "banana", "lemon", "grape", "melon");

foreach($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}


// 4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>