<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OnePageController extends Controller
{

    public function index()
    {
        return view('visitors.welcome');
    }

    public function collection()
    {
        $products = Product::get();

        return view("visitors.collection",compact("products"));
    }

    public function order()
    {
        $products = Product::get();

        return view("visitors.order",compact("products"));
    }

    public function email(Request $request)
    {
        $vaildated = $request->validate([
            'customer'  => 'required|string',
            'name'  => 'required|exists:products,id',
            'email' => 'required|email|string',
            'phone' => 'required|integer',
            'stone'         => 'required|in:Diamon,Sirkon,Stone',
            'gold'          => 'required|in:24,21,18,17,16,9,8,6',
            'color'         => 'required|in:White,Yellow,Red,Rose',

        ]);

        if($vaildated){
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                new SendEmail($request,Product::find($request->name))
            );
    
            return back()->with("message", "Berhasil Mengirim Pesanan");
        }

        abort(402,"input kembali");

    }
}
