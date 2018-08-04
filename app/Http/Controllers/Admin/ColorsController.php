<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Color;

class ColorsController extends Controller
{
   public function index(){
        // $categories = Color::all();
       return view('admin.colors.index');
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
            'code_color' => 'required',
        ]);
        $color = new Color();
        $color->name = $request->name;
        $color->code_color = $request->code_color;
        $color->save();

        return response()->json([
            'success' => 'Created color Successful'
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
        return Color::find($id);
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
            'code_color' => 'required',
        ]);
        $color = Color::find($id);
        $color->name = $request->name;
        $color->code_color = $request->code_color;
        $color->save();

         return response()->json([
            'success' => 'Created color Successful'
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
        Color::find($id)->delete();
        return response()->json([
            'success' => 'Xóa màu thành công'
        ]);
    }

    public function getList()
    {
        $colors = Color::select('colors.*')
        ->orderBy('id', 'desc');


        return datatables()->eloquent($colors)
        ->addColumn('action', function($color){
            return "</button><button data-id='".$color->id."' class='btn btn-warning btn-sm btn-flat btn-edit-color'><span class='  glyphicon glyphicon-edit' aria-hidden='true'></span></button><button data-id='".$color->id."' class='btn btn-sm btn-danger btn-del-color'><span class='  glyphicon glyphicon-trash' aria-hidden='true'></span></button>";

        })
        ->editColumn('code_color', function($color){
            return "<div id='code_color' style ='background:".$color->code_color.";'> </div>";
        })
        ->rawColumns(['action', 'code_color'])
        ->toJson()
        ;
    }
}
