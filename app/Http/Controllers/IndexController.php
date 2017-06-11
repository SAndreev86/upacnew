<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 09.05.2017
 * Time: 20:52
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Goods;


class IndexController extends Controller
{

    public function execute(Request $request) {

        if($request->isMethod('POST')) {

            return new JsonResponse([
                'message' => 'Письмо успешно отправленно'
            ]);
        }

        $goods = Goods::orderBy('created_at')->get(['name', 'filter', 'description', 'images'])->take(8);


        return view('site', ['goods' => $goods]);
    }

}