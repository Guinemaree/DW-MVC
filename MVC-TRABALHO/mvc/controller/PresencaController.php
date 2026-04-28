<?php
    class PresencaController{
        function listar() {
            $model = new Presenca();
            $presencas = $model->getAll();
            //var_dump($presenca);
            include "view/listagemPresenca.php";
        }

        function novo() {
            $dados = array();
            $dados['id'] = 0;
            $dados['nome'] = "";
            $dados['telefone'] = "";
            $dados['email'] = "";
            include 'view/formularioPresenca.php';
        }

        function gravar() {
            $dados = array();
            $dados['id'] = $_POST['id'];
            $dados['nome'] = $_POST['nome'];
            $dados['email'] = $_POST['email'];
            $dados['telefone'] = $_POST['telefone'];
            $model = new Presenca();
            if ($dados['id'] == 0) {
                $model->insert($dados);
            } else {
                $model->update($dados);
            }

            // redireciona para listagemUsuario.php
            // http://web2b/mvc/formandos/listar
            header('location: '.APP.'/presenca/listar');
        }

        function excluir($id) {
            $model = new Presenca();
            $model->delete($id);
            header('location: '.APP.'/presenca/listar');
        }

        function editar($id) {
            $model = new Presenca();
            $dados = $model->getPresencaById($id);
            include "view/formularioPresenca.php";
        }
    }
?>