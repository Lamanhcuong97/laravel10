<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(){
        $categories = Category::all();
       return view('admin.categories.index', compact('categories'));
    }

    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'description' => 'required',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->save();

        return response()->json([
            'success' => 'Created Category Successful'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {      
        $category = Category::where('slug', $slug)->first();
        return view('admin.categories.index', compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Category::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->save();

         return response()->json([
            'success' => 'Created Category Successful'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return response()->json([
            'success' => 'Xóa danh mục thành công'
        ]);
    }

    public function getList()
    {
        $categories = Category::select('categories.*')
        ->orderBy('id', 'desc');


        return datatables()->eloquent($categories)
        ->addColumn('action', function($category){
            return "</button><button data-id='".$category->id."' class='btn btn-warning btn-sm btn-flat btn-edit'><span class='  glyphicon glyphicon-edit' aria-hidden='true'></span></button><button data-id='".$category->id."' class='btn btn-sm btn-danger btn-del-cat'><span class='  glyphicon glyphicon-trash' aria-hidden='true'></span></button>";

        })
        ->rawColumns(['action', 'description'])
        ->toJson()
        ;
    }

}
