<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::all();
        return view('category', ['categorys' => $categorys]);
    }
    public function create()
    {
        return view('addcategory');
    }
    public function store(Request $req)
    {
        $data = [
            'name' => $req->category,
            'position' => $req->position,
        ];
        Category::Create($data);
        return redirect('category');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('editcategory', ['category' => $category]);
    }
    public function update($id, Request $req)
    {
        $data = [
            'name' => $req->category,
        ];
        Category::where('idcategory', $id)->update($data);
        return redirect('category');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('category');
    }
}
