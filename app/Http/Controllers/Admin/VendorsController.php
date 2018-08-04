<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendor;
use Storage;
use Session;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // $categories = Color::all();
       return view('admin.vendors.index');
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
            'address' => 'required',
            'phone_number' => 'required',
            'thumbnail' => 'required',
            'fax' => 'required',
        ]);
        $vendor = new Vendor();
        $vendor->name = $request->name;
        $vendor->address = $request->address;
        $vendor->phone_number = $request->phone_number;
        $vendor->fax = $request->fax;
        if ($request->thumbnail) {
            $vendor->thumbnail = 'storage/images/' .$request->thumbnail->getClientOriginalName();
            Storage::putFileAs('public/images', $request->thumbnail, $request->thumbnail->getClientOriginalName());
        }
        $vendor->save();

       

        return response()->json([
            'success' => 'Created Vendor Successful'
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
        return Vendor::find($id);
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
            'name' => 'required|max:255',
            'address' => 'required',
            'phone_number' => 'required',
            'fax' => 'required',
        ]);

        $vendor = Vendor::find($id);
        $vendor->name = $request->name;
        $vendor->address = $request->address;
        $vendor->phone_number = $request->phone_number;
        $vendor->fax = $request->fax;
        if ($request->has('thumbnail')) {
            $vendor->thumbnail = 'storage/images/' .$request->thumbnail->getClientOriginalName();
            Storage::putFileAs('public/images', $request->thumbnail, $request->thumbnail->getClientOriginalName());
        }
        $vendor->save();
         return response()->json([
            'success' => 'Update color Successful'
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
        Vendor::find($id)->delete();
        return response()->json([
            'success' => 'Xóa màu thành công'
        ]);
    }

    public function getList()
    {
        $vendors = Vendor::select('vendors.*')
        ->orderBy('id', 'desc');


        return datatables()->eloquent($vendors)
        ->addColumn('action', function($vendor){
            return "</button><button data-id='".$vendor->id."' class='btn btn-warning btn-sm btn-flat btn-edit-vendor'><span class='  glyphicon glyphicon-edit' aria-hidden='true'></span></button><button data-id='".$vendor->id."' class='btn btn-sm btn-danger btn-del-color'><span class='  glyphicon glyphicon-trash' aria-hidden='true'></span></button>";

        })
        ->editColumn('thumbnail', function($vendor){
            if(isset($vendor->thumbnail)){
                return "<img class='img-fluid' src =' ".asset($vendor->thumbnail)."' style='width: 80px; height: auto;'>";
            }else{
                return "<img class='img-fluid' src =' ".asset('storage/images/no_image.png')."' style='width: 80px; height: auto;'>";
            }
        })
        ->rawColumns(['action', 'thumbnail'])
        ->toJson()
        ;
    }
}
