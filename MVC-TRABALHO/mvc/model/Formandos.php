<?php
    class Formandos {
        function getConnection() {
            $conexao = new PDO('pgsql:host=localhost;dbname=web2b', 'postgres', 'postgres');
            return $conexao;
        }

        function getAll() {
            $conexao = $this->getConnection();
            $sentenca = $conexao->query('SELECT * FROM formandos ORDER BY nome', PDO::FETCH_ASSOC);
            $dados = $sentenca->fetchAll();
            return $dados;
        }

        function insert($dados) {
            $conexao = $this->getConnection();
            $sentenca = $conexao->prepare('INSERT INTO formandos(nome, email, telefone, cpf) VALUES (:nome, :email, :telefone, :cpf)');
            $sentenca->bindParam(":nome", $dados['nome']);
            $sentenca->bindParam(":email", $dados['email']);
            $sentenca->bindParam(":telefone", $dados['telefone']);
            $sentenca->bindParam(":cpf", $dados['cpf']);
            $sentenca->execute();
          }

          function update($dados) {
            $conexao = $this->getConnection();
            $sentenca = $conexao->prepare('UPDATE formandos SET nome=:nome, email=:email, telefone=:telefone, cpf=:cpf WHERE id=:id');
            $sentenca->bindParam(":nome", $dados['nome']);
            $sentenca->bindParam(":email", $dados['email']);
            $sentenca->bindParam(":telefone", $dados['telefone']);
            $sentenca->bindParam(":cpf", $dados['cpf']);
            $sentenca->bindParam(":id", $dados['id']);
            $sentenca->execute();
          }
        
          function delete($id) {
            $conexao = $this->getConnection();
            $sentenca = $conexao->prepare('DELETE FROM formandos WHERE id=:id');
            $sentenca->bindParam(":id", $id);
            $sentenca->execute();
        
          }

          function getFormandosById($id) {
            $conexao = $this->getConnection();
            $sentenca = $conexao->prepare('SELECT * FROM formandos WHERE id=:id');
            $sentenca->bindParam(":id", $id);
            $sentenca->execute();
            return $sentenca->fetch();
          }     
    }
?>