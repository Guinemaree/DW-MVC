<?php
    class RelatorioController{
        function listar() {
            $model = new Relatorio();
            $relatorios = $model->getAll();
            //var_dump($relatorio);
            include "view/listagemRelatorio.php";
        }

        function novo() {
            $dados = array();
            $dados['id'] = 0;
            $dados['nome'] = "";
            $dados['telefone'] = "";
            $dados['email'] = "";
            include 'view/formularioRelatorio.php';
        }

        function gravar() {
            $dados = array();
            $dados['id'] = $_POST['id'];
            $dados['nome'] = $_POST['nome'];
            $dados['email'] = $_POST['email'];
            $dados['telefone'] = $_POST['telefone'];
            $model = new Relatorio();
            if ($dados['id'] == 0) {
                $model->insert($dados);
            } else {
                $model->update($dados);
            }

            // redireciona para listagemUsuario.php
            // http://web2b/mvc/relatorio/listar
            header('location: '.APP.'/relatorio/listar');
        }

        function excluir($id) {
            $model = new Relatorio();
            $model->delete($id);
            header('location: '.APP.'/relatorio/listar');
        }

        function editar($id) {
            $model = new Relatorio();
            $dados = $model->getRelatorioById($id);
            include "view/formularioRelatorio.php";
        }
    }
?>