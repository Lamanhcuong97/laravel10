<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Size;

class SizesController extends Controller
{
    public function index(){
       return view('admin.sizes.index');
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
            'country' => 'required',
        ]);
        $size = new Size();
        $size->name = $request->name;
        $size->country = $request->country;
        $size->save();

        return response()->json([
            'success' => 'Created Size Successful'
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
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Size::find($id);
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
            'country' => 'required',
        ]);
        $size = Size::find($id);
        $size->name = $request->name;
        $size->country = $request->country;
        $size->save();

         return response()->json([
            'success' => 'Created Size Successful'
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
        Size::find($id)->delete();
        return response()->json([
            'success' => 'Xóa Size thành công'
        ]);
    }

    public function getList()
    {
        $sizes = Size::select('sizes.*')
        ->orderBy('id', 'desc');


        return datatables()->eloquent($sizes)
        ->addColumn('action', function($size){
            return "</button><button data-id='".$size->id."' class='btn btn-warning btn-sm btn-flat btn-edit-size'><span class='  glyphicon glyphicon-edit' aria-hidden='true'></span></button><button data-id='".$size->id."' class='btn btn-sm btn-danger btn-del-size'><span class='  glyphicon glyphicon-trash' aria-hidden='true'></span></button>";

        })
        ->rawColumns(['action'])
        ->toJson()
        ;
    }
}
