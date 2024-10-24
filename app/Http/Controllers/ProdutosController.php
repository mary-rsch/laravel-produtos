<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ProdutosController extends Controller {
    public function index () 
    {
        $produto = [
            'Produto 1',
            '1234',
            '1',
        ];

        $html = '<ul>';

        foreach ($produto as $idProduto) {
            $html .= "<li>$idProduto</li>";
        };

        $html .= '<ul>';

        return $html;
    }
   
}