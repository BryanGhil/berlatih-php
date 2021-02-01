<?php
function tukar_besar_kecil($string){
//kode di sini
$huruf = "abcdefghijklmnopqrstuvwxyz 0123456789-";
$hurufb= "ABCDEFGHIJKLMNOPQRSTUVWXYZ 0123456789-";

$str = "";
for ($i=0; $i < strlen($string); $i++) { 
    for ($x=0; $x < strlen($huruf); $x++) { 
        if ($string[$i] == $huruf[$x]) {
            $str .= $hurufb[$x];
            
    }
        elseif ($string[$i] == $hurufb[$x]) {
            $str .= $huruf[$x];
    }
        
}
}
return $str;
}

// TEST CASES
echo tukar_besar_kecil('Hello World')."<br>"; // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY')."<br>"; // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!')."<br>"; // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me')."<br>"; // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW')."<br>"; // "001-a-3-5tRDyw"

?>