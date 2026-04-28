<?php
    class Relatorio {
        function getConnection() {
            $conexao = new PDO('pgsql:host=localhost;dbname=web2b', 'postgres', 'postgres');
            return $conexao;
        }

        function getAll() {
            $conexao = $this->getConnection();
            $sentenca = $conexao->query('SELECT * FROM relatorio ORDER BY nome', PDO::FETCH_ASSOC);
            $dados = $sentenca->fetchAll();
            return $dados;
        }

        function insert($dados) {
            $conexao = $this->getConnection();
            $sentenca = $conexao->prepare('INSERT INTO relatorio(nome, email, telefone) VALUES (:nome, :email, :telefone)');
            $sentenca->bindParam(":nome", $dados['nome']);
            $sentenca->bindParam(":email", $dados['email']);
            $sentenca->bindParam(":telefone", $dados['telefone']);
            $sentenca->execute();
          }

          function update($dados) {
            $conexao = $this->getConnection();
            $sentenca = $conexao->prepare('UPDATE relatorio SET nome=:nome, email=:email, telefone=:telefone WHERE id=:id');
            $sentenca->bindParam(":nome", $dados['nome']);
            $sentenca->bindParam(":email", $dados['email']);
            $sentenca->bindParam(":telefone", $dados['telefone']);
            $sentenca->bindParam(":id", $dados['id']);
            $sentenca->execute();
          }

          function delete($id) {
            $conexao = $this->getConnection();
            $sentenca = $conexao->prepare('DELETE FROM relatorio WHERE id=:id');
            $sentenca->bindParam(":id", $id);
            $sentenca->execute();

          }

          function getRelatorioById($id) {
            $conexao = $this->getConnection();
            $sentenca = $conexao->prepare('SELECT * FROM relatorio WHERE id=:id');
            $sentenca->bindParam(":id", $id);
            $sentenca->execute();
            return $sentenca->fetch();
          }
    }
?>