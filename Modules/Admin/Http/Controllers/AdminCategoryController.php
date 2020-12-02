<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestCategory;
use Illuminate\Support\Facades\Log;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'c_name', 'c_title_seo', 'c_active')->get();
        $viewData = [
            'categories' => $categories
        ];

        return view('admin::category.index', $viewData);
    }

    public function create()
    {
        return view('admin::category.create');
    }

    public function store(RequestCategory $requestCategory)
    {
        $this->insertOrUpdate($requestCategory);

        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin::category.edit', compact('category'));
    }

    public function update(RequestCategory $requestCategory, $id)
    {
        $this->insertOrUpdate($requestCategory, $id);

        return redirect()->back();
    }

    public function insertOrUpdate($requestCategory, $id = '')
    {

        try {
            $category = new Category();

            if ($id) {
                $category = Category::find($id);
            }

            $category->c_name = $requestCategory->name;
            $category->c_slug = str_slug($requestCategory->name);
            $category->c_icon = str_slug($requestCategory->icon);
            $category->c_title_seo = $requestCategory->c_title_seo ? $requestCategory->c_title_seo : $requestCategory->name;
            $category->c_description_seo = $requestCategory->c_description_seo;
            $category->save();
        } catch (\Exception $exception) {
            return 0;
            Log::error("[Error insertOrUpdate Categories ]" . $exception->getMessage());
        }

        return 1;
    }

    public function action($action,$id)
    {
        if($action){
            $category = Category::find($id);
            switch($action){
                case 'delete':
                    $category->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
