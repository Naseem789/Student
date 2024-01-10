<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    public function index(){
        $allProductRecords = Product::orderBy('id', 'desc')->get();
        return view('admin/product', ['title' => 'Product :: Student Book Center','ProductData'=>$allProductRecords]);
    }

    public function insert_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_name' => 'required|string',
            'product_price' => 'required',
            'product_description' => 'required|string'
        ]);
        
        if ($validator->fails()) { 
            return response()->json(["error"=>$validator->errors()]);
         }
        else{
            $createData['product_name'] = $request->product_name;
            $createData['product_price'] = $request->product_price;
            $createData['product_description'] = $request->product_description;
            $imageName = time().'.'.$request->product_image->extension();  
            $createData['product_image'] = $imageName;
            
            $request->product_image->move(public_path('Products_Image'), $imageName);
            Product::create($createData);
            return response()->json(["success"=>"Data inserted successfully"], 200);

        }
        
    }

    public function edit_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_name' => 'required|string',
            'product_price' => 'required',
            'product_description' => 'required|string'
        ]);
        if ($validator->fails()) { 
            return response()->json(["error"=>$validator->errors()]);
         }
        else{
            $product_id = $request->pid;
            // echo $createData['product_id']; exit;
            $createData['product_name'] = $request->product_name;
            $createData['product_price'] = $request->product_price;
            $createData['product_description'] = $request->product_description;
            $imageName = time().'.'.$request->product_image->extension();  
            $createData['product_image'] = $imageName;
            $request->product_image->move(public_path('Products_Image'), $imageName);
            Product::where('id', $product_id)->update($createData);
            return response()->json(["success"=>"Data Updated Successfully"], 200);

        }
        
    }

    function get_product(Request $request){
        $product_id = $request->product_id;
        $oneProductRecords = Product::where('id', $product_id)->get();
        echo json_encode($oneProductRecords[0]);
    }

}
