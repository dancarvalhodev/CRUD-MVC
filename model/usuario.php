<?php
	namespace model;

	class usuario extends model{

		public function inserirUsuario($nome, $idade, $bonitesa){
			return $this->banco->insert("usuarios",[
				"nome" => $nome,
				"idade" => $idade,
				"bonitesa" => $bonitesa
			]);	
		}

		public function pesquisarUsuario(){
			return $this->banco->select("usuarios", [
				"id",
				"nome",
				"idade",
				"bonitesa"
			]); 
		}

		public function excluirUsuario($id){
			return $this->banco->delete("usuarios", [
				"AND" => [
				"id" => $id
				]
			]); 
		}

		public function atualizarUsuario($id, $nome, $idade, $bonitesa){
			return $this->banco->update("usuarios", [
				"nome" => $nome,
				"idade" => $idade,
				"bonitesa" => $bonitesa,
				],[
				"id" => $id
			]);
		}	
	}