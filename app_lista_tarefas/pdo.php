<?php
class Conexao{
	private $host = 'srv204';
	private $dbname = 'dmmar972_Modulo_8';
	private $user = 'dmmar972';
	private $pass = '91297215D@y';

	public function conectar() {
		try{
			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"
			);
			return $conexao;

		}catch(PDOException $e){
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}
    #$pdo = new PDO('mysql:host=srv204;dbname=dmmar972_Modulo_8', 'dmmar972','91297215D@y');
    #$cadastro = $pdo->prepare("SELECT * FROM `us_cadastro`");
    #$cadastro->execute();
    #$cadastro = $cadastro->fetch()['cadastro'];
?>
