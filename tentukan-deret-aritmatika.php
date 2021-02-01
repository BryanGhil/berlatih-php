<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
$num = $arr[1] - $arr[0];
$angka = 0;
for ($i=0; $i < count($arr)-1; $i++){ 
    $num2 = $arr[$i];
    $num3 = $arr[$i+1];
    $total = $num3 - $num2;
    if ($total == $num){
        
    }
    else{
        $angka += 1;
    }
}
if ($angka == 0){
    echo "true";
}
else {
    echo "false";
}
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6])."<br>";// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24])."<br>";// false
echo tentukan_deret_aritmatika([2, 4, 6, 8])."<br>"; //true
echo tentukan_deret_aritmatika([2, 6, 18, 54])."<br>";// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9])."<br>";// false

?>