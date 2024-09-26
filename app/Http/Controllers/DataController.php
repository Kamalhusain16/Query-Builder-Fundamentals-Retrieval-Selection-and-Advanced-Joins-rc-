<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\CliArguments\Builder;

class DataController extends Controller
{
    function Data(){
    $rejult= DB::table('Invoices')->get();
    $rejult= DB::table('Invoices')->first();
    $rejult= DB::table('Invoices')->where('id',2)-> first();
    $rejult= DB::table('Invoices')->limit(3)->get();
    // $rejult= DB::table('Invoices')->where('user_id',11)->where('paid',1)->get();
    $rejult = DB::table('invoices') ->where('user_id', 921) ->where('paid', 1) ->get();

$result= DB::table('invoices')->where('paid',1)->count();
$result= DB::table('invoices')->max('total_price');
$result= DB::table('invoices')->min('total_price');
$result= DB::table('invoices')->sum('total_price');
$result= DB::table('invoices')->sum('paid',1);
$result= DB::table('invoices')->pluck('total_price');
$result= DB::table('users')->pluck('firstName','email');
$result= DB::table('users')->pluck('lastName','email');
$result= DB::table('invoices')->limit(3)->offset(3)->get();
$result= DB::table('invoices')->select('paid','discount','vat','payable')
 ->where('total_price', '>', 500)->where('vat', '<', 10)->get();

$result= DB::table('invoices')->where('total_price','>', 500)->get();


//   $result = DB::table('invoices')
//         ->join('invoice_products', 'invoices.id', '=', 'invoice_products.invoice_id') 
//         ->select('invoices.id', 'invoices.qty', 'invoices.sale_price')
//         ->get();
    // Return the result
    return $result;

    }
}
