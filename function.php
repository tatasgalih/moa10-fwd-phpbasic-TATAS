<?php

// buat fungsi yang bertujuan untuk mengembalikan nilai reverse string : 

    function reverseString($string)
    {
        return strrev($string);
    }

    $string_coba = "Indonesia Raya Merdeka";
    echo "1. buat fungsi yang bertujuan untuk mengembalikan nilai reverse string : <br>";

    echo "$string_coba menjadi " . reverseString("Indonesia Raya Merdeka")."<br>";

    //buat fungsi yang bertujuan untuk menghitung luas segitiga siku-siku :

    function Segitigasikusiku($base, $height)
    {
        return ($base * $height) /2;
    }

    echo "2.buat fungsi yang bertujuan untuk menghitung luas segitiga siku-siku : <br>";
    echo "Luas Segitiga siku-siku yang alasnya 8 cm dan tingginya 12 cm adalah ". Segitigasikusiku(8, 12). "<br>";

    // buat fungsi yang bertujuan untuk mencari nilai terbesar dalam sebuah array

    function NilaiTersebar($array)
    {
        return max($array);
    }

    $array_ANGKA = array(11, 40, 34, 112, 1, 5);

    echo "3.buat fungsi yang bertujuan untuk mencari nilai terbesar dalam sebuah array : ". "<br>";
    echo "Nilai Terbesar dari 11,40,34,112,1,5 adalah ". NilaiTersebar($array_ANGKA)."<br>";

    //buat fungsi yang bertujuan untuk menampilkan nilai ganjil dalam sebuah array

    function nilaiganjil($array){

        $result = array();

        foreach($array as $item){
            if($item % 2 !== 0){
                array_push($result, $item);
            }
        }

        return $result;
    }

    $bilangan = array(1,2,3,4,5,6,7,8,9,10);

    echo "4. buat fungsi yang bertujuan untuk menampilkan nilai ganjil dalam sebuah array :". "<br>";

    echo "Nilai ganjil dari bilangan-bilangan berikut ". implode(", ", $bilangan) . " adalah " . implode(", ", nilaiganjil($bilangan)) . "<br>";


    // buat fungsi untuk menampilkan bilangan fibonaci

    function fibonaci($fibo)
    {
        if($fibo < 0){
            throw new Exception("angka harus lebih dari 0 !");
        }
        if($fibo == 0)
        {
            return 0;
        }
        if($fibo == 1 || $fibo == 2)
        {
            return 1;
        }

        return fibonaci($fibo-1) + fibonaci($fibo-2);

    }

    echo " 5. buat fungsi untuk menampilkan bilangan fibonaci ". "<br>";
    echo " bilangan fibonachi pada posisi ke-22 (f21)adalah ". fibonaci(21)."<br>";

    //buat fungsi yang menerima 2 parameter berupa array dan gabungkan dua array tersebut di dalam fungsi yang telah dibuat.

    function Gabungarray($kata1, $kata2){
        return array_merge($kata1, $kata2);
    }

    $contoh_kata1 = Array("kamu", "saya");
    $contoh_kata2 = Array("dia", "diriku");

    echo " 6.buat fungsi yang menerima 2 parameter berupa array dan gabungkan dua array tersebut di dalam fungsi yang telah dibuat.". "<br>";
    echo "kata [". implode(",", $contoh_kata1). "] digabung dengan kata [" . implode(",",$contoh_kata2)."] hasilnya adalah [". implode(", ", GabungArray($contoh_kata1, $contoh_kata2)). "]<br>";
 


    
?>