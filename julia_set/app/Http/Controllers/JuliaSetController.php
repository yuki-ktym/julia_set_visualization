<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class JuliaSetController extends Controller
{
    public function index()
    {
        return view('julia');
    }

    public function generateJuliaSet(Request $request)
    {
        // パラメータの受け取り
        $min_x = $request->input('min_x');
        $max_x = $request->input('max_x');
        $min_y = $request->input('min_y');
        $max_y = $request->input('max_y');
        $comp_const = $request->input('comp_const');
        $juliaSet = $this->generateJuliaSet($min_x, $max_x, $min_y, $max_y, $comp_const);

        // キャンバス生成
        $canvasWidth = 800;
        $canvasHeight = 600;
        // 計算
        for ($y = 0; $y < $canvasHeight; $y++) {
            for ($x = 0; $x < $canvasWidth; $x++) {
                $real = $min_x + ($max_x - $min_x) * ($x / $canvasWidth);
                $imaginary = $min_y + ($max_y - $min_y) * ($y / $canvasHeight);
                $color = $this->calculateJuliaSetColor($real, $imaginary, $comp_const);
                $juliaSet[] = [
                    'x' => $x,
                    'y' => $y,
                    'color' => $color
                ];
            }
        }
        return Response::json(['juliaSet' => $juliaSet]);
    }

    private function calculateJuliaSetColor($cReal, $cImaginary, $comp_const)
    {
        // ジュリア集合の色を計算する処理を実装する
        // 例えば、与えられた複素数座標と複素定数に基づいて色を計算し、返す
        // 色をRGB値で表現するための整数を計算
        $maxIterations = 1000; // 最大反復回数
        $escapeRadius = 2; // 脱出半径

        $zReal = $cReal;
        $zImaginary = $cImaginary;

        for ($i = 0; $i < $maxIterations; $i++) {
            // ジュリア集合の反復計算
            $zRealTemp = $zReal * $zReal - $zImaginary * $zImaginary + $comp_const;
            $zImaginaryTemp = 2 * $zReal * $zImaginary;

            $zReal = $zRealTemp;
            $zImaginary = $zImaginaryTemp;

            // 脱出条件をチェック
            if ($zReal * $zReal + $zImaginary * $zImaginary > $escapeRadius * $escapeRadius) {
                // 反復回数に応じて色を計算
                $red = ($i % 8) * 32;
                $green = ($i % 16) * 16;
                $blue = ($i % 32) * 8;

                // RGB値を結合してカラーコードを生成
                return "rgb($red, $green, $blue)";
            }
        }
        return "rgb(0, 0, 0)";
    }
}
