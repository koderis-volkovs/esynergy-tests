<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'from' => 'date',
            'to' => 'date',
            'limit' => 'integer'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'messages' => $validator->errors()]);
        }

        $limit = $request->input('limit') ?? 10;
        $from = $request->input('from');
        $to = $request->input('to');

        $products = Product::orderBy('created_at', 'DESC')
            ->when($from, function ($query) use ($from) {
                return $query->where('created_at', '>', $from);
            })
            ->when($to, function ($query) use ($from) {
                return $query->where('created_at', '>', $from);
            })
            ->limit($limit)
            ->get();

        return $products->toJson();
    }
}
