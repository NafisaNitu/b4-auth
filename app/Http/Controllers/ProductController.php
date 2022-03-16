<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function index()
    {
        return view('product.add');
    }

    public function newProduct (Request $request)
    {
        Product::SaveData($request);
        return redirect()->back()->with('message', 'Product created successfully.');
    }

    public function manageProduct ()
    {
//        return  Product::latest()->get();
        return view('product.manage', [
            'products'  => Product::all(),
        ]);
    }

    public function deleteProduct ($id)
    {
        $this->product = Product::findOrFail($id);
        if (file_exists($this->product->product_image))
        {
            unlink($this->product->product_image);
        }
        $this->product->delete();
        return redirect()->back()->with('message', 'product deleted successfully');
    }

    public function productStatus($id)
    {
        $this->product = Product::findOrFail($id);
//        if($this->product->status =1)
//        {
//            $this->product->status = 0;
//        } elseif ($this->product->status = 0)
//        {
//            $this->product->status = 1;
//        }
        $this->product->status = $this->product->status ==1 ? 0 :1;
        $this->product->save();
        return redirect()->back()->with('message', 'status changed successfully');

    }

    public function edit($id)
    {
        return view('product.edit', [
            'product' => Product::findOrFail($id),
        ]);
    }

    public function updateProduct(Request $request)
    {
        Product::updateData($request);
        return redirect('/manage-product')->with('message', 'Product updated successfully.');
    }

    public function js()
    {
        return view('js.js');
    }

    public function calculator()
    {
        return view('calculator');
    }

}
