<?php
  class Model {
    protected $table = "";
    protected $orderBy = "id";

    function getConnection() {
        $conexao = new PDO('pgsql:host=localhost;dbname=web2bmvc', 'postgres', 'postgres');
        return $conexao;
    }

    function getAll() {
        $conexao = $this->getConnection();
        $sentenca = $conexao->query("SELECT * FROM $this->table ORDER BY $this->orderBy ", PDO::FETCH_ASSOC);
        $dados = $sentenca->fetchAll();
        return $dados;
    }

    function delete($id) {
        $conexao = $this->getConnection();
        $sentenca = $conexao->prepare("DELETE FROM $this->table WHERE id=:id");
        $sentenca->bindParam(":id", $id);
        $sentenca->execute();
    
      }

      function getById($id) {
        $conexao = $this->getConnection();
        $sentenca = $conexao->prepare("SELECT * FROM $this->table WHERE id=:id");
        $sentenca->bindParam(":id", $id);
        $sentenca->execute();
        $dados = $sentenca->fetch();  
        return $dados;
      }          

      function insert($dados) {
        // removendo a chave id do array dados
        unset($dados['id']);
        
        //array(4) { ["nome"]=> string(5) "teste" ["email"]=> string(15) "teste@gmail.com" ["telefone"]=> string(4) "1234" ["cpf"]=> string(4) "5678" }

        $chaves = array_keys($dados);
        //array(4) { [0]=> string(4) "nome" [1]=> string(5) "email" [2]=> string(8) "telefone" [3]=> string(3) "cpf" }

        $campos = implode(', ', $chaves);
        //nome, email, telefone, cpf
        
        $valores = ':'.implode(', :', $chaves);
        //:nome, :email, :telefone, :cpf

        $conexao = $this->getConnection();
        $sentenca = $conexao->prepare("INSERT INTO $this->table($campos) VALUES ($valores)");
        foreach($chaves as $chave) {
            $sentenca->bindParam(":$chave", $dados[$chave]);
        }
        $sentenca->execute();
      }

      function update($dados) {
        $conexao = $this->getConnection();
        $chaves= array_keys($dados);
        $campos = "";
        foreach($chaves as $chave) {
            if ($chave != "id") {
                if ($campos != "") {
                    $campos = $campos . ", ";
                }
                $campos = $campos . "$chave =:$chave";
            }    
        }
        //id =: id, nome =: nome, email =: email, telefone =: telefone, cpf =: cpf
        $sentenca = $conexao->prepare("UPDATE $this->table SET $campos WHERE id=:id");

        foreach($chaves as $chave) {
            $sentenca->bindParam(":$chave", $dados[$chave]);
        }

        $sentenca->execute();
      }

}
?>