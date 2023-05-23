<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuliaSetController extends Controller
{
    public function index(Request $request)
    {
        // パラメータの受け取りとバリデーション
        $min_x = $request->input('min_x');
        $max_x = $request->input('max_x');
        $min_y = $request->input('min_y');
        $max_y = $request->input('max_y');
        $comp_const = $request->input('comp_const');

        // ジュリア集合の生成

        // ビューの表示
        return view('julia');
    }
}
