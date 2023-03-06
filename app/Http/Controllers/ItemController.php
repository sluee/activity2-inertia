<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    public function index(){
        $items = Item::orderby('id')
        ->with('office')
        ->get();

        return inertia('Item', [
            'items' =>$items
        ]);
    }

    public function items(){
        return inertia('Item');
    }
}
