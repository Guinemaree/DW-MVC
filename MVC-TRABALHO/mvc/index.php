<?php
// Reporta todos os erros do PHP
error_reporting(E_ALL);

// Força a exibição dos erros na tela
ini_set('display_errors', 1);

// Opcional: exibe erros que ocorrem durante a inicialização do PHP
ini_set('display_startup_errors', 1);

//formandos
include 'controller/FormandosController.php';
include 'controller/TarefaController.php';
include 'model/Formandos.php';
//presença
include 'controller/PresencaController.php';
include 'model/Presenca.php';
//curso
include 'controller/CursoController.php';
include 'model/Curso.php';
//relatório
include 'controller/RelatorioController.php';
include 'model/Relatorio.php';

define("APP", "http://localhost/MVC-TRABALHO/mvc");

  // formandos /salvar
  // formandos /excluir/10
  $url = $_GET['url'];
  $partes = explode('/', $url);

  // FormandosController
  $nomeControlador = ucfirst($partes[0]).'Controller';
  $acao = $partes[1];
  $controlador = new $nomeControlador();
  if (count($partes)==2) {
    $controlador->$acao();  
  } else {
    $id = $partes[2];
    $controlador->$acao($id);
  }
  
?>