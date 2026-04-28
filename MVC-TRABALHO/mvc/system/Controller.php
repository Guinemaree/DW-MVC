<?php
    class Controller {
        function view($visao, $parametros) {
            //['categorias' => $categorias, ...]
            extract($parametros);
            include "view/template.php";
        }

        function redirect($caminho) {
            header("location: ". APP. "/".$caminho);
        }
    }
?>