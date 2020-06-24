<?php
	namespace controller;

	class usuario{
		public function formulario(){
			require('form.html');
		}

		public function formularioAtualizar(){
			require('formAtt.html');
		}

		public function inserirID(){
			require('formID.html');
		}

		public function requisitar(){

			$obj = new \model\usuario();
			$usuarios = $obj->pesquisarUsuario();
			// Fazer função do Medoo que verifica erros
			require('lista.html');
		}

		public function inserir(){
			$nome = $_POST['nome'];
			$idade = $_POST['idade'];
			$bonitesa = $_POST['bonitesa'];

			$obj = new \model\usuario();
			$retorno = $obj->inserirUsuario($nome, $idade, $bonitesa);
			// Fazer função do Medoo que verifica erros
			require('index.html');
		}
		public function excluir(){
			$id = $_POST['id'];

			$obj = new \model\usuario();
			$usuarios = $obj->excluirUsuario($id);
			// Fazer função do Medoo que verifica erros
			require('index.html');
		}

		public function atualizar(){
			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$idade = $_POST['idade'];
			$bonitesa = $_POST['bonitesa'];
			
			$obj = new \model\usuario();
			$usuarios = $obj->atualizarUsuario($id, $nome, $idade, $bonitesa);
			// Fazer função do Medoo que verifica erros
			require('index.html');
		}						
	}


   
