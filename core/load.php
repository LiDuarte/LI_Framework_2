<?php 
	namespace Core;

	class load{
		public function view($view, $dados = []){

			if(file_exists("app/views/{$view}.php")):
				if(is_array($dados)):

					extract($dados);
			
					require "app/views/{$view}.php";
				endif;
			else:
				echo "view não encotrada";
			endif;
		}


		public function model($nome_model){
			if(file_exists("app/models/{$nome_model}.php")):
				require "app/models/{$nome_model}.php";
				$this->$nome_model = new $nome_model;
				
			else:
				exit("Não foi encontrado nenhuma model com nome {$nome_model}");
			endif;
	
		}

		public function config(){
			require "app/config/config.php";
		}


	}