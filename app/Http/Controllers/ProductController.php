<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['products']=Product::all();
        return view('Product.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $this->data['mode']='create';

            return view('Product.form',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data= $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            // echo "file name: ".$file->getClientOriginalName()."<br>";
            // echo "file extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "file Mime Type: ".$file->getType()."<br>";
            // echo "file Size: ".$file->getSize();

            // if(
                $filename=$file->getClientOriginalName();
                $file->move('upload/', $filename);
        //         ){
        //         echo "success";
        //     }else{
        //         echo "error..";
        //     }

        // }else{

        }
         //     echo "file not found!";
         if ( Product::create($data)) {
            Session::flash('message',"product Created Successfully..");
         }
         else {
             Session::flash('message',"product  not Created .");
         }



     return redirect()->to('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $this->data['product']= Product::findOrFail($id);
            $this->data['mode']='edit';
            return view('Product.form',$this->data);
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
        $data=$request->all();

           $product=Product::find($id);

           $product->name=$data['name'];
           $product->Qty=$data['Qty'];
           $product->Price=$data['Price'];
          $product->image=$data['image'];

           if($request->hasFile('image')){
            $file = $request->file('image');
            // echo "file name: ".$file->getClientOriginalName()."<br>";
            // echo "file extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "file Mime Type: ".$file->getType()."<br>";
            // echo "file Size: ".$file->getSize();

            // if(
                $filename=$file->getClientOriginalName();
               // $product->image=$filename;
                $file->move('upload/', $filename);
        //         ){
        //         echo "success";
        //     }else{
        //         echo "error..";
        //     }

        // }else{

        }
           if ( $product->save()) {
            Session::flash('message',"product Updated Successfully..");
         }
         else {
             Session::flash('message',"product  not Updated .");
         }
         return redirect()->to('products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->data['product']= Product::findOrFail($id);
            if ( Product::find($id)->delete()) {
                Session::flash('message',"product Deleted Successfully..");
             }
             else {
                 Session::flash('message',"product  Delet .");
             }
             return redirect()->to('products');
    }
}