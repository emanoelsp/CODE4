<?php

namespace App\Controllers;

use App\Models\FormModel;

class Contato extends BaseController {

    public function index() {
        helper(['form']);
        $data = [];
        return view('/Contato/formulario');
    }

    public function salvar() {
        helper(['form']);
        $rules = [
            'nome' => 'required|min_length[3]',
            'email' => 'required|valid_email|trim',
            'telefone' => 'required|numeric|max_length[11]',
            'mensagem' => 'trim|required|min_length[10]|max_length[100]'
        ];

        if ($this->validate($rules)) {
            $formModel = new FormModel();
            $data = [
                'nome' => $this->request->getVar('nome'),
                'email' => $this->request->getVar('email'),
                'telefone' => $this->request->getVar('telefone'),
                'mensagem' => $this->request->getVar('mensagem')
            ];

            $formModel->save($data);
            return view('/TesteViews/header_message.php')
                    . view('/Contato/painel.php', $data)
                    . view('/TesteViews/footer_message.php');
        } else {
            $data['validation'] = $this->validator;
            return view('/TesteViews/header_message.php')
                    . view('/TesteViews/teste_message.php')
                    . view('/TesteViews/footer_message.php');
        }
    }

    public function deletar() {
        $formModel = new FormModel();
        $data = [
            'nome' => $this->request->getVar('nome'),
            'email' => $this->request->getVar('email'),
            'telefone' => $this->request->getVar('telefone'),
            'mensagem' => $this->request->getVar('mensagem')
        ];

        $formModel->delete($mensagem);
        return view('/TesteViews/header_message.php')
                . view('/Contato/painel.php', $data)
                . view('/TesteViews/footer_message.php');
    }
    
      public function cadastra_usuari0() {
        helper(['form']);
        $rules = [
            'nome' => 'required|min_length[3]',
            'email' => 'required|valid_email|trim',
            'telefone' => 'required|numeric|max_length[11]',
            'mensagem' => 'trim|required|min_length[10]|max_length[100]'
        ];

        if ($this->validate($rules)) {
            $formModel = new FormModel();
            $data = [
                'nome' => $this->request->getVar('nome'),
                'email' => $this->request->getVar('email'),
                'telefone' => $this->request->getVar('telefone'),
                'mensagem' => $this->request->getVar('mensagem')
            ];

            $formModel->save($data);
            return view('/TesteViews/header_message.php')
                    . view('/Contato/painel.php', $data)
                    . view('/TesteViews/footer_message.php');
        } else {
            $data['validation'] = $this->validator;
            return view('/TesteViews/header_message.php')
                    . view('/TesteViews/teste_message.php')
                    . view('/TesteViews/footer_message.php');
        }
    }

}
