<?php

function papan_catur($angka) {
// tulis kode di sini
for ($i=0; $i < $angka; $i++) { 
    if ($i % 2 == 0) {
        for ($x=0; $x < $angka; $x++) { 
            echo "# ";
        }
    }
    else{
        for ($x=0; $x < $angka-1; $x++) { 
            echo "# ";
        }
    }
    echo "<br>";
}
echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
# # #
# # # #
# # #
*/

echo papan_catur(8);
/*
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
# # # #
# # # # #
# # # #
# # # # #
*/