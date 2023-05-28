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

            $data = [

                'price' => rand(5,100),
                'instock' => rand(0,1) == 1 ? 'yes' : 'no'
            ];

            $items[] = ['data' => json_encode($data)];

        }

        Item::insert($items);

        return '50 new rows created.';

        }

    }

