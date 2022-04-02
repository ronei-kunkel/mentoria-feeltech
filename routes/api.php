<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('example', function () {
    $return = [
        'total' => 2,
        'returned' => 2,
        'pagination' => 1,
        'limit' => 50,
        'offset' => 0,
        'products' => [
            [
                'name' => 'Boné Mike',
                'sku' => 'sku-001',
                'id' => '001',
                'description' => 'Aba reta, feito com materiais resistentes, cor que não desbota e super confortável',
                'images' => [
                    'https://i.imgur.com/cUPDepo.png'
                ],
                'size' => 'M',
                'color' => 'Preto',
                'quantity' => 8,
                'price' => 299.95,
                'promotionalPrice' => 259.95,
                'category' => [
                    'parentCategorys' => [
                        'Esportes',
                        'Skate',
                    ],
                    'category' => 'Bonés'
                ],
                'brand' => [
                    'name' => 'Santa Cruz',
                    'description' => 'Presente em 9 de 10 rolês. Todos os produtos são fabricados com tecidos de alta qualidade e pintados e estampados com as melhores tintas.'
                ],
                'variations' => []
            ],
            [
                'name' => 'Boné Supla',
                'sku' => 'sku-002',
                'id' => '002',
                'description' => 'Aba reta, feito com materiais resistentes, cor que não desbota e super confortável',
                'images' => [
                    'https://i.imgur.com/j4d3Gep.png'
                ],
                'size' => 'P',
                'color' => 'Branco',
                'quantity' => 8,
                'price' => 299.95,
                'promotionalPrice' => 259.95,
                'category' => [
                    'parentCategorys' => [
                        'Esportes',
                        'Skate',
                    ],
                    'category' => 'Bonés'
                ],
                'brand' => [
                    'name' => 'Santa Cruz',
                    'description' => 'Presente em 9 de 10 rolês. Todos os produtos são fabricados com tecidos de alta qualidade e pintados e estampados com as melhores tintas.'
                ],
                'variations' => []
            ]
        ]
    ];
    echo "<pre>";
    print_r(json_encode($return, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    echo "</pre>";
    exit;
    return json_encode($return, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_FORCE_OBJECT);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
