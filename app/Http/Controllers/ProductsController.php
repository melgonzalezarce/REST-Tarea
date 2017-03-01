<?php

namespace App\Http\Controllers;

use App\Product;
use App\Review;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index() {
        return Product::all();
    }

    public function create(Request $request) {
        $data = $request->json()->all();

        $product = new Product;
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->description = $data['description'];

        $product->save();

        if ($data['review']) {
            $review = new Review;
            $review->reviewer_name = $data['review']['reviewer'];
            $review->title = $data['review']['title'];
            $review->content = $data['review']['content'];
            $review->product_id = $product->id;

            $review->save();
        }

        return $product;
    }

    public function showProduct($id) {

        $product = new Product;
        $product = $product->where('id', $id)->first();
        $reviews = $product->reviews()->get();
        $labels = $product->labels()->get();

        $product->reviews = $reviews;
        $product->labels = $labels;

        echo $product;
    }
}
