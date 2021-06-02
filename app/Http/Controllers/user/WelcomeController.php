<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
class WelcomeController extends Controller
{
    public function index()
    {
        //menampilkan data produk dihalamam utama user dengan limit 10 data
        //untuk di carousel
        $kat = DB::table('categories')
                ->join('products','products.categories_id','=','categories.id')
                ->select(DB::raw('count(products.categories_id) as jumlah, categories.*'))
                ->groupBy('categories.id')
                ->get();
        $data = array(
            'produks' => DB::table('products')->limit(10)->get(),
            'produks' => Product::paginate(9),
            'categories' => $kat
        );
        return view('user.welcome',$data);
    }

    public function kontak()
    {
        return view('user.kontak');
    }
    public function home()
    {
        $kat = DB::table('categories')
                ->join('products','products.categories_id','=','categories.id')
                ->select(DB::raw('count(products.categories_id) as jumlah, categories.*'))
                ->groupBy('categories.id')
                ->get();
        $data = array(
            'produks' => DB::table('products')->limit(10)->get(),
            'produks' => Product::paginate(9),
            'categories' => $kat
        );
        return view('user.app1',$data);

    }
}
