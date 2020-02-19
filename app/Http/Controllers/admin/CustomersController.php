<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function allOffersMembers(){
        return view('admin/customers/all-offers-members');
    }
    public function allReservations(){
        return view('admin/customers/all-reservations');
    }
}
