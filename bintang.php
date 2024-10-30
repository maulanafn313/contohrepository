<?php
// //hasil pertama
// $jumlah_bintang = 7;

// //baris satu
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     if ($i == 5 || $i == 6) {
//         echo "&nbsp;&nbsp;&nbsp;"; // Gantikan bintang ke-5 dan ke-6 dengan spasi
//     } else {
//         echo "* "; // Cetak bintang untuk posisi lainnya
//     }
// }

// echo "<br>";
// //baris kedua
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     if ($i == 4 || $i == 7) {
//         echo "* "; // Cetak bintang pada posisi ke-4 dan ke-7
//     } else {
//         echo "&nbsp;&nbsp;&nbsp;"; // Cetak spasi pada posisi lainnya
//     }
// }

// echo "<br>";
// //baris ketiga
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     if ($i == 4 || $i == 7) {
//         echo "* "; // Cetak bintang pada posisi ke-4 dan ke-7
//     } else {
//         echo "&nbsp;&nbsp;&nbsp;"; // Cetak spasi pada posisi lainnya
//     }
// }

// echo "<br>";
// //baris keempat
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     echo "* ";
// }

// echo "<br>";
// //baris kelima
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     if ($i == 1 || $i == 4) {
//         echo "* "; // Cetak bintang pada posisi ke-1 dan ke-4
//     } else {
//         echo "&nbsp;&nbsp;&nbsp;"; // Gantikan posisi lainnya dengan spasi
//     }
// }

// echo "<br>";
// //baris keenam
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     if ($i == 1 || $i == 4) {
//         echo "* "; // Cetak bintang pada posisi ke-1 dan ke-4
//     } else {
//         echo "&nbsp;&nbsp;&nbsp;"; // Gantikan posisi lainnya dengan spasi
//     }
// }

// echo "<br>";
// //baris ketujuh
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     if ($i == 2 || $i == 3) {
//         echo "&nbsp;&nbsp;&nbsp;"; // Gantikan bintang ke-2 dan ke-3 dengan spasi
//     } else {
//         echo "* "; // Cetak bintang untuk posisi lainnya
//     }
// }




// echo "<br>";
// echo "<br>";

// $jumlah_bintang = 7; // Angka ganjil

// // Baris pertama
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     if ($i == $jumlah_bintang - 2 || $i == $jumlah_bintang - 1) {
//         echo "&nbsp;&nbsp;&nbsp;"; // Gantikan posisi ke-5 dan ke-6 dengan spasi
//     } else {
//         echo "* "; // Cetak bintang untuk posisi lainnya
//     }
// }

// echo "<br>";

// // Baris kedua dan ketiga (sama)
// for ($baris = 1; $baris <= 2; $baris++) {
//     for ($i = 1; $i <= $jumlah_bintang; $i++) {
//         if ($i == $jumlah_bintang - 3 || $i == $jumlah_bintang) {
//             echo "* "; // Cetak bintang pada posisi ke-4 dan ke-7
//         } else {
//             echo "&nbsp;&nbsp;&nbsp;"; // Cetak spasi pada posisi lainnya
//         }
//     }
//     echo "<br>";
// }

// // Baris keempat (semua bintang)
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     echo "* ";
// }

// echo "<br>";

// // Baris kelima dan keenam (sama)
// for ($baris = 1; $baris <= 2; $baris++) {
//     for ($i = 1; $i <= $jumlah_bintang; $i++) {
//         if ($i == 1 || $i == $jumlah_bintang - 3) {
//             echo "* "; // Cetak bintang pada posisi ke-1 dan ke-4
//         } else {
//             echo "&nbsp;&nbsp;&nbsp;"; // Gantikan posisi lainnya dengan spasi
//         }
//     }
//     echo "<br>";
// }

// // Baris ketujuh
// for ($i = 1; $i <= $jumlah_bintang; $i++) {
//     if ($i == 2 || $i == 3) {
//         echo "&nbsp;&nbsp;&nbsp;"; // Gantikan bintang ke-2 dan ke-3 dengan spasi
//     } else {
//         echo "* "; // Cetak bintang untuk posisi lainnya
//     }
// }



//percobaan ketiga
// $x = 7;

// for ($i = 1; $i <= $x; $i++) {
//     if ($x % 2 == 0) {
//         echo "tidak boleh bilangan genap";
//         break;
//     }
//     for ($j = 1; $j <= $x; $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }


//percobaan keempat
// $x = 7;

// if ($x % 2 == 0) {
//     echo "Tidak boleh bilangan genap";
// } else {
//     if ($x == 7) {
//         for ($i = 1; $i <= $x; $i++) {
//             for ($j = 1; $j <= $x; $j++) {
//                 // Kondisi baris pertama
//                 if ($i == 1 && ($j == 5 || $j == 6)) {
//                     echo "&nbsp;&nbsp;"; // Spasi
//                 }
//                 // Kondisi baris kedua dan ketiga
//                 elseif (($i == 2 || $i == 3) && ($j == 1 || $j == 2 || $j == 3 || $j == 5 || $j == 6)) {
//                     echo "&nbsp;&nbsp;"; // Spasi
//                 }
//                 // Kondisi baris kelima dan keenam
//                 elseif (($i == 5 || $i == 6) && ($j == 2 || $j == 3 || $j == 5 || $j == 6 || $j == 7)) {
//                     echo "&nbsp;&nbsp;"; // Spasi
//                 }
//                 // Kondisi baris ketujuh
//                 elseif ($i == 7 && ($j == 2 || $j == 3)) {
//                     echo "&nbsp;&nbsp;"; // Spasi
//                 }
//                 // Cetak bintang pada baris lain
//                 else {
//                     echo "*";
//                 }
//     }
//     echo "<br>";
//         }
//     }
//     elseif ($x == 5) {
//         for ($i = 1; $i <= $x; $i++) {
//             for ($j = 1; $j <= $x; $j++) {
//                 // Kondisi baris pertama
//                 if ($i ==1 && ($j == 4)) {
//                     echo "&nbsp;&nbsp;"; // Spasi
//                 }
//                 // Kondisi baris kedua
//                 elseif ($i == 2 && ($j == 1 || $j == 2 || $j == 4)) {
//                     echo "&nbsp;&nbsp;"; // Spasi
//                 }
//                 //kondisi baris keempat
//                 elseif ($i == 4 && ($j == 2 || $j == 4 || $j == 5)) {
//                     echo "&nbsp;&nbsp;"; // Spasi
//                 }
//                 // Kondisi baris kelima
//                 elseif ($i == 5 && ($j == 2)) {
//                     echo "&nbsp;&nbsp;"; // Spasi
//                 }
//                 else {
//                     echo "*";
//                 }
//             }
//         echo "<br>";    
//         } 
//     }
//     else {
//         for ($i = 1; $i <= $x; $i++) {
//             echo "*";
//         }
//     }
// }


$bntg = 15;
$mdn = ($bntg + 1) / 2;
for ($i = 1; $i <= $bntg; $i++) {
    for ($j = 1; $j <= $bntg; $j++) {
        if ($i == $mdn || $j == $mdn || ($j == $bntg && $i < $mdn) || ($i > $mdn && $j==1)|| ($j<$mdn && $i==1)||($i == $bntg && $j > $mdn))
            echo"*";
        else
            echo "&nbsp;&nbsp;";
    }
    echo"<br>";
}

echo"hai";
?>
