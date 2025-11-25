<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
class PageController extends Controller
{
public function index()
{
    return view('home');
}
public function tampil()
{
    return view('cart');
}
}