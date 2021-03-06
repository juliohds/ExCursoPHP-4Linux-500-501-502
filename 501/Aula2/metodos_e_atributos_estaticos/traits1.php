<?php
	
	//Se parece com interface, porem quando voce der um "use"
	//em sua classe, ele ira chamar todos os metodos, e voce pode ou nao
	//usar todos
	trait Operacoes{
		public function depositar($valor){
			$this->saldo += $valor;
		}
		public function sacar($valor){
			$this->saldo -= $valor;
		}
	}

	class Conta{
		use Operacoes;

		public $saldo;
		public $titular;

		public function verSaldo(){
			echo "<hr />Saldo: {$this->saldo}<hr />";
		}
	}

	$obj = new Conta();
	$obj->depositar(700);
	$obj->verSaldo();
	$obj->sacar(300);
	$obj->verSaldo();