<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.order');

    }
     public function create(){
        return view('order.addCusOrder');
     }

     public function createOrderDetail(){
        return view('order.addOrderDetail');
     }
}
