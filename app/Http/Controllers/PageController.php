<?php
namespace App\Http\Controllers;
class PageController extends Controller
{
public function index()
{
    return view('home');
}
public function tampil()
{
    $arrCart = ["Tomat", "Selada", "Bawang Merah", "Jagung"];
    return view('cart')->with('cart', $arrCart);
}
}