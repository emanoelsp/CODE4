<?php

namespace App\Controllers;

use App\Models\FormModel;

class Grafico extends BaseController {

    public function index() {
        return view('/Grafico/viewGrafico');
    }

    public function abrirGrafico() {

        $db = \Config\Database::connect();
        $builder = $db->table('tb_produto');

        $query = $builder->select("COUNT(idproduto) as Quantidade, preco as Preço, DAYNAME(data_cadastro) as Dia");
        $query = $builder->where("DAY(data_cadastro) GROUP BY DAYNAME(data_cadastro), preco");
        $query = $builder->orderBy("preco ASC, Dia ASC")->get();

        $data['produtos'] = $query->getResult();

        return view('/Grafico/viewGrafico', $data);
    }

}
