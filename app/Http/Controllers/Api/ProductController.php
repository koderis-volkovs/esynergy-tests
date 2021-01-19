<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $limit = $request->input('limit') ?? 10;

        $products = Product::orderBy('created_at', 'DESC')
            ->when(true, function ($query) use ($request) {
                return $query->where('created_at', '>', $request->input('created_at'));
            })
            ->limit($limit)
            ->get();

        return $products->toJson();
    }
}
