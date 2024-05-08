<?php


Class CabecalhoInterno{
	
	// Atributos da classe
	private $modulo;
	private $usuario;
	
	public function __construct($modulo = "",$usuario = "")
	{
		$this->modulo  = $modulo;
		$this->usuario = $usuario;
	}
	
	public function MontaCabeca(){
		echo"<!doctype html>";
		echo "<html>";
		echo "<head>";
			echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
			echo "<title></title>";
			echo "<script src=\"https://code.jquery.com/jquery-3.1.1.js\"></script>";
			echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>";
			echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js\"></script>";
			echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">";
		echo "<body style=\"background-color:#ffffff;\">";
			echo "<div id=\"cabeca\">";	
			echo "<div id=\"nome_sistema\">".$this->modulo."</div>";
			echo "</div>";
			echo "<nav class=\"navbar navbar-dark bg-dark\">";	   
			echo "<div id=\"nome_usu\">";
				echo "<p><b>Usuario : </b>".$this->usuario;
			echo "</div>";
			echo "</nav>";
		
	}
}
?>