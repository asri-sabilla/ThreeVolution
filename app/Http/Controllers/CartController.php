<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // Insert data
    public function insert(){
        $result = DB::table('carts')->insert([
            'idSayur' => 112,
            'NamaSayur' => 'bayam',
            'Harga' => 20000,
            'Asal' => 'jakarta',
            'Jumlah' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        dump($result);
    }

    // Tampilkan data simple dump
    public function get() {
        $result = DB::table('carts')->get();
        dump($result);
    }

    // Manual tampil satu data
    public function getTampil(){
        $result = DB::table('carts')->get();
        echo($result[0]->idSayur). '<br>';
        echo($result[0]->NamaSayur). '<br>';
        echo($result[0]->Harga). '<br>';
        echo($result[0]->Asal). '<br>';
        echo($result[0]->Jumlah);
    }

    // 🔥 Ini yang dipakai untuk halaman /cart
    public function index()
    {
        $cart = DB::table('carts')->get();
        return view('cart', compact('cart'));
    }
}
