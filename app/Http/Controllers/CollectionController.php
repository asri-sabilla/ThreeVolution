<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
public function collection()
{
    $sayur00 = new \stdClass();
    $sayur00->NamaSayur = "Selada";
    $sayur00->Harga = "Rp20.000";
    $sayur00->Asal = "Lampung";
    $sayur00->Jumlah = 20;

    $sayur01 = new \stdClass();
    $sayur01->NamaSayur = "Tomat";
    $sayur01->Harga= "Rp15.000";
    $sayur01->Asal = "Bandung";
    $sayur01->Jumlah = 15;

    $sayur02 = new \stdClass();
    $sayur02->NamaSayur = "Timun";
    $sayur02->Harga = "Rp10.000";
    $sayur02->Asal = "Jakarta";
    $sayur02->Jumlah = 10;

        $sayurs = collect([
        0 => $sayur00,
        1 => $sayur01,
        2 => $sayur02,
        ]);
    dump($sayurs);
    }
}