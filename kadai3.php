<?php
//①
function time2($i){
    return $i * 2;
}
echo time2(3);
echo "\n";

//②
function f($a, $b) {
    return $a + $b;
}
echo f(3,5);
echo "\n";

//③
function a($arr) {
    $sum = 1;
    foreach ($arr as $num) {
        $sum *= $num;
    }
    echo "合計: $sum";
}
a( array(1, 3, 5 ,7, 9));
echo "\n";

//④
function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
          if ($max_number < $a){
              $max_number = $a;
          }
     }
     return $max_number;
 }
 
//  
 echo max_array( array(19, 3, 56 ,7, 9) );
 echo "\n";
 
//⑤

//strip_tags
$html_code = "<html><body><title>tech boost</title><p>今日はいい天気です</p></body></html>";
$html_code_result = strip_tags($html_code);
echo $html_code_result;
echo "\n";

//array_push
$ar = array("PHP", "CGI");
array_push($ar, "Perl", "JAVA");
print_r($ar);
echo "\n";

//array_merge
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
$array = array_merge($array1, $array2, $array3);
 
print_r($array);
echo "\n";

//time
echo time()."<br/>\n";

date_default_timezone_set('Asia/Tokyo');
echo "\n";

//mktime
echo date('Y-m-d', mktime(0,0,0,date('n'),date('j')+7,date('Y')));
echo "\n";

//date
echo date('Y/m/d');
echo '<br>';
 
echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y年m月d日 H時i分s秒');
echo '<br>';