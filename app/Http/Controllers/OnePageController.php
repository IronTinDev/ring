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
        $wa = env("WA_NUMBER");
        $message =  env("WA_MESSAGE") ;
        return view('welcome',compact("wa","message"));
    }

    public function getProducts()
    {
        $products = Product::get();

        return $products;
    }

    public function email(Request $request)
    {
        $vaildated = $request->validate([
            'name'  => 'required|string',
            'email' => 'required|email|string',
            'phone' => 'required|integer',
            'message'=> 'nullable|string'
        ]);

        if($vaildated){
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                new SendEmail($request)
            );
    
            return redirect()->back();
        }

        abort(402,"input kembali");

    }
}
