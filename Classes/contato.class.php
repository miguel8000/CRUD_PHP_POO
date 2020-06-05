<?php

	class Contato {
		private $pdo;
		//METODO CONTRUTOR, COM A CONEXÃO AO BANCO DE DADOS.
		public function __construct(){
			$this->pdo =  new PDO("mysql:dbname=crudoo;host=localhost", "root", "" );
		}

		//Metodo para adicionar um contato no Banco de Dados
		public function adicionar($email, $nome = ""){	//Verificação de email, para saber se o e-mail, já está cadastrado.
			if ($this->existeEmail($email) == false) {
				$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->bindValue(':email', $email);
				$sql->execute();

				return true;
			}else{
				return false;
			}
		}

		public function getInfo($id){
			$sql = "SELECT * FROM contatos WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();

			if ($sql->rowCount() > 0){
				return $sql->fetch();
			}
			else{
				return array();
			}
		}

		//Metodo para mostrar toda a lista de contatos do Banco de Dados. 
		public function getAll(){
			$sql = "SELECT * FROM contatos";
			$sql = $this->pdo->query($sql);

			if ($sql->rowCount() > 0){
				return $sql->fetchAll();
			}
			else{
				return array();
			}
		}

		//Metodo para Editar as informações dos contatos do Banco de Dados.
		public function editar($nome, $email, $id){
			if ($this->existeEmail($email) == false) {
				$sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->bindValue(':email', $email);
				$sql->bindValue(':id', $id);
				$sql->execute();
				return true;
			}else{
				return false;
			}
		}

		//Metodo para excluir um contato do Banco de Dados.
		public function excluir($id){
			$sql = "DELETE FROM contatos WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

		//Metodo Auxiliar, que verifica se o e-mail já está cadastrado no sistema.
		private function existeEmail($email){
			$sql = "SELECT * FROM contatos WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':email', $email);
			$sql->execute();

			if ($sql->rowCount() > 0){
				return true;
			}
			else{
				return false;
			}	
		}





























	}


































