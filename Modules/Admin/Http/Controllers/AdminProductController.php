<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminProductController extends Controller
{
    public function index(Request $request){

        $products = Product::all();

//        if($request->name)
//            $products->where('pro_name','like','%'.$request->name.'%');
//        if($request->cate) $products->where('pro_category_id',$request->cate);
//        $products = $products->orderByDesc('id')->paginate(10);

//        $categories = $this->getCategories();

        $viewData = [
          'products' => $products,
//            'categories' => $categories
        ];

        return view('admin::product.index',$viewData);
    }

    public function create()
    {
        $categories = $this->getCategories();
        return view('admin::product.create',compact('categories'));
    }

    public function store(RequestProduct $request)
    {
        $this->insertOrUpdate($request);
        return redirect()->back();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = $this->getCategories();
        return view('admin::product.edit',compact('product','categories'));
    }

    public function update(RequestProduct $request, $id)
    {
        $this->insertOrUpdate($request, $id);
        return redirect()->back();
    }

    public function insertOrUpdate($request, $id = '')
    {
        $product = new Product();
        if ($id) $product = Product::find($id);

        $product->pro_name = $request->pro_name;
        $product->pro_slug = str_slug($request->pro_name);
        $product->pro_category_id = $request->pro_category_id;
        $product->pro_price = $request->pro_price;
        $product->pro_sale = $request->pro_sale;
        $product->pro_content = $request->pro_content;
        $product->pro_description = $request->pro_description;
        $product->pro_title_seo = $request->pro_title_seo ? $request->pro_title_seo : $request->pro_name;
        $product->pro_description_seo = $request->pro_description_seo ? $request->pro_description_seo : $request->pro_name;

        if ($request->hasFile('avatar')) {
            $file = upload_image('avatar');

            if(isset($file['name'])){
                $product->pro_avatar = $file['name'];
            }
        }
        $product->save();
    }

    public function action($action,$id)
    {
        if($action){
            $product = Product::find($id);
            switch($action){
                case 'delete':
                    $product->delete();
                    break;
                case 'hot':
                    $product->pro_hot = $product->pro_hot ? 0 : 1;
                    $product->save();
                    break;
                case 'active':
                    $product->pro_active = $product->pro_active ? 0 : 1;
                    $product->save();
                    break;
            }
        }

        return redirect()->back();
    }

    public function getCategories(){
        return Category::all();
    }
}
