<?php

// define('NAMA', 'Rafly Alfarizi');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Rafly';
// }

// echo Coba::NAMA;

// echo __FILE__;


// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();


class Coba
{
    public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;
