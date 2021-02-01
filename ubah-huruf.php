<?php
function ubah_huruf($string){
//kode di sini
$huruf = "abcdefghijklmnopqrstuvwxyz";
$str = "";
for ($i=0; $i < strlen($string); $i++) { 
    for ($x=0; $x < strlen($huruf); $x++) { 
        if ($string[$i] == $huruf[$x]) {
            $str .= $huruf[$x+1];
            
    }
}
}
return $str;
}

// TEST CASES
echo ubah_huruf('wow')."<br>"; // xpx
echo ubah_huruf('developer')."<br>"; // efwfmpqfs
echo ubah_huruf('laravel')."<br>"; // mbsbwfm
echo ubah_huruf('keren')."<br>"; // lfsfo
echo ubah_huruf('semangat')."<br>"; // tfnbohbu

?>