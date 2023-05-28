<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Item;
  
class ItemController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {

        $items = [];

        for($i = 1; $i <= 50; $i++) {

            $item = [

                'price' => rand(5,100),
                'instock' => rand(0,1) == 1 ? 'yes' : 'no'
            ];


        }

        $input = [
            'title' => 'Demo Title',
            'data' => [
                '1' => 'One',
                '2' => 'Two',
                '3' => 'Three'
            ]
        ];
  
        $item = Item::create($input);
  
        dd($item->data);
  
    }
}