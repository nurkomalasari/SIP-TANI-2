<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    //
    public function index()
    {
        //ambil data data untuk ditampilkan di card pada dashboard
        $pendapatan = DB::table('order')
                        ->select(DB::raw('SUM(subtotal) as penghasilan'))
                        ->where('status_order_id',3)
                        ->first();
        $transaksi = DB::table('order')
                        ->select(DB::raw('COUNT(id) as total_order'))
                        ->first();
        $pelanggan = DB::table('users')
        ->join('alamat','alamat.user_id','=','users.id')
        ->join('cities','cities.city_id','=','alamat.cities_id')
        ->join('provinces','provinces.province_id','=','cities.province_id')
        ->select('users.*','alamat.detail','cities.title as kota','provinces.title as prov')
        ->where('users.role','=','customer')

                        ->get();
        $order_terbaru = $order = DB::table('order')
                        ->join('status_order','status_order.id','=','order.status_order_id')
                        ->join('users','users.id','=','order.user_id')
                        ->select('order.*','status_order.name','users.name as nama_pemesan')
                        ->limit(10)
                        ->get();
        $produk = DB::table('products')
                        ->select(DB::raw('COUNT(id) as total_produk'))
                        ->first();
        $data = array(
            'pendapatan' => $pendapatan,
            'transaksi'  => $transaksi,
            'pelanggan'  => $pelanggan,
            'order_baru' => $order_terbaru,
            'produk' =>$produk ,

        );

        return view('admin/dashboard',$data);
    }
}
