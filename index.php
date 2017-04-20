<?php

// include_once 'exercicio_srp.php';
include_once 'exercicio.php';

$cargos = [
	'desenvolvedor' => new Desenvolvedor(),
	'tester' => new Tester(),
	'dba' => new Dba(),
];
$salario = 1000;

echo PHP_EOL;
$calculo = new CalculadoraDeSalario();
foreach ($cargos as $cargo => $classe) {

	$funcionario = new Funcionario($classe);
	$funcionario->setSalario($salario);

	echo 'Cargo: ' . $cargo
		. ' Salário: R$' . $calculo->calcula($funcionario)
		. PHP_EOL;
}
echo PHP_EOL;

