<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

//    protected $fillable = ['product_name', 'category_name', 'brand_name', 'product_price', 'product_image', 'product_description', 'status'];
    protected $guarded = [];

    protected static $product;
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;

    public static function SaveData ($request)
    {
        self::$image = $request->file('product_image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/img/product-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$product = new Product();
        self::$product->product_name          = $request->product_name;
        self::$product->category_name         = $request->category_name;
        self::$product->brand_name            = $request->brand_name;
        self::$product->product_price         = $request->product_price;
        self::$product->product_image         = self::$imageUrl;
        self::$product->product_description   = $request->product_description;
        self::$product->status                = $request->status;
        self::$product->save();

//        Product::create([
//            'product_name'  => $request->product_name,
//            'category_name'  => $request->category_name,
//            'brand_name'  => $request->brand_name,
//            'product_price'  => $request->product_price,
//            'product_description'  => $request->product_description,
//            'status'  => $request->status,
//        ]);

//        Product::create($request->except('_token'));

    }

    public static function updateData($request)
    {
        self::$product = Product::find($request->product_id);
        self::$image = $request->file('product_image');
        if (self::$image)
        {
            if(file_exists(self::$product->product_image)){
                unlink(self::$product->product_image);
            }
            self::$imageName = time().rand(10, 1000).','.self::$image->getClientOriginalExtension();
            self::$directory = 'assets/img/product-image/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        } else {
            self::$imageUrl = self::$product->product_image;
        }


        self::$product->product_name          = $request->product_name;
        self::$product->category_name         = $request->category_name;
        self::$product->brand_name            = $request->brand_name;
        self::$product->product_price         = $request->product_price;
        self::$product->product_image         = self::$imageUrl;
        self::$product->product_description   = $request->product_description;
        self::$product->status                = $request->status;
        self::$product->save();
    }
}
