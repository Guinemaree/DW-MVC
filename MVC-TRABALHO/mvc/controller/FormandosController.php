<?php
    class FormandosController{
        function listar() {
            $model = new Formandos();
            $formandos = $model->getAll();
            //var_dump($formandos);
            include "view/listagemFormandos.php";
        }

        function novo() {
            $dados = array();
            $dados['id'] = 0;
            $dados['nome'] = "";
            $dados['telefone'] = "";
            $dados['email'] = "";
            $dados['cpf'] = "";    
            include 'view/formularioFormandos.php';        
        }

        function gravar() {
            $dados = array();
            $dados['id'] = $_POST['id'];
            $dados['nome'] = $_POST['nome'];
            $dados['email'] = $_POST['email'];
            $dados['telefone'] = $_POST['telefone'];
            $dados['cpf'] = $_POST['cpf'];
            $model = new Formandos();
            if ($dados['id'] == 0) {
                $model->insert($dados);
            } else {
                $model->update($dados);
            }
        
            // redireciona para listagemUsuario.php
            // http://web2b/mvc/formandos/listar
            header('location: '.APP.'/formandos/listar');           
        }

        function excluir($id) {
            $model = new Formandos();
            $model->delete($id);
            header('location: '.APP.'/formandos/listar');
        }

        function editar($id) {
            $model = new Formandos();
            $dados = $model->getFormandosById($id);
            include "view/formularioFormandos.php";
        }
    }
?>