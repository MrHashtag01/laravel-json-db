<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        for ($i = 1; $i <= 50; $i++) {
            $input = [
                'title' => 'Demo Title',
                'data' => [
                    'price' => rand(5, 100),
                    'instock' => (rand(0, 1) === 1) ? 'yes' : 'no'
                ]
            ];

            $item = Item::create($input);
        }

        $updatedItems = DB::table('items')
            ->where('data->price', '<', 50)
            ->where('data->instock', '=', 'yes')
            ->get();

            $updatedData = $updatedItems->map(function ($item) {
                $data = json_decode($item->data, true);
            
                return [
                    'title' => $item->title,
                    'data' => $data,
                ];
            });

        return view('index', compact('updatedItems', 'updatedData'));
    }
}
