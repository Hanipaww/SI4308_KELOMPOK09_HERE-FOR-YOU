<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $items = Booking::where('user_id',auth()->id())->latest()->get();
        return view('pages.booking.index',[
            'title' => 'Histori',
            'items' => $items
        ]);
    }
}
