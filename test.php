<?php

class MPDF
{
    function __construct()
    {
        include_once 'mpdf\vendor\autoload.php';
    }
    function load($param=[])
    {
        return new \Mpdf\Mpdf($param);
    }
}

$mpdfClass = new \MPDF;

$mpdf = $mpdfClass->load([
   'mode' => 'utf-8',
   'format' => 'A4'
]);

$mpdf->WriteHTML("Hello World!");
$mpdf->Output();
