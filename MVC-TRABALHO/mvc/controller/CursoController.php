<?php
    class CursoController{
        function listar() {
            $model = new Curso();
            $cursos = $model->getAll();
            //var_dump($curso);
            include "view/listagemCurso.php";
        }

        function novo() {
            $dados = array();
            $dados['id'] = 0;
            $dados['nome'] = "";
            $dados['telefone'] = "";
            $dados['email'] = "";
            include 'view/formularioCurso.php';
        }

        function gravar() {
            $dados = array();
            $dados['id'] = $_POST['id'];
            $dados['nome'] = $_POST['nome'];
            $dados['email'] = $_POST['email'];
            $dados['telefone'] = $_POST['telefone'];
            $model = new Curso();
            if ($dados['id'] == 0) {
                $model->insert($dados);
            } else {
                $model->update($dados);
            }

            // redireciona para listagemUsuario.php
            // http://web2b/mvc/curso/listar
            header('location: '.APP.'/curso/listar');
        }

        function excluir($id) {
            $model = new Curso ();
            $model->delete($id);
            header('location: '.APP.'/curso/listar');
        }

        function editar($id) {
            $model = new  Curso();
            $dados = $model->getCursosById($id);
            include "view/formularioCurso.php";
        }
    }
?>