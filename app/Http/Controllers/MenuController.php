<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $categories = Category::select('id', 'c_name')->get();
        $countCate = count($categories);
        $productsND = [];
        for($i=0; $i<$countCate; $i++){
            $productsByCID = Product::where([
                'pro_category_id' => $categories[$i]->id,
            ])->get();
            array_push($productsND, $productsByCID);
        }

        $viewData = [
            'productsND' => $productsND,
            'categories' => $categories,
            'countCate' => $countCate
        ];

        return view('menu.order',$viewData);
    }

}
