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
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{

    public function execute(Request $request) {

        if($request->isMethod('POST')) {

            return new JsonResponse([
                'message' => 'Письмо успешно отправленно'
            ]);
        }
            return view('site');
    }

}