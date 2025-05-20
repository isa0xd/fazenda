<?php

class Animal {
  
    public $especie;
    public $numPatas;
    public $tipoPele;
    public $meioLocomocao;
    public $somEmitido;

    public function __construct($especie, $numPatas, $tipoPele, $meioLocomocao, $somEmitido) {
      
        $this->especie = $especie;
        $this->numPatas = $numPatas;
        $this->tipoPele = $tipoPele;
        $this->meioLocomocao = $meioLocomocao;
        $this->somEmitido = $somEmitido;
      
    }

    public function emitirSom() {
        echo "{$this->especie} faz: {$this->somEmitido}\n";
    }

    public function mover() {
        echo "{$this->especie} se move {$this->meioLocomocao}\n";
    }

    public function exibirInformacoes() {
        echo "Espécie: {$this->especie}\n";
        echo "Número de patas: {$this->numPatas}\n";
        echo "Tipo de pele: {$this->tipoPele}\n";
        echo "Meio de locomoção: {$this->meioLocomocao}\n";
        echo "Som emitido: {$this->somEmitido}\n";
        
    }
}

$vaca = new Animal("Vaca", 4, "Pelos", "pelo chão.", "Muu");
$porco = new Animal("Porco", 4, "Pelos", "pelo chão.", "Oinc Oinc");
$cavalo = new Animal("Cavalo", 4, "Pelos", "pelo chão.", "Relincho");
$galinha = new Animal("Galinha", 2, "Penas", "pelo chão.", "Cocoricó");
$ovelha = new Animal("Coruja", 2, "Penas", "voando.", "Uuh Uuhh");

$animais = [$vaca, $porco, $cavalo, $galinha, $ovelha];

foreach ($animais as $animal) {
    $animal->exibirInformacoes();
    $animal->emitirSom();
    $animal->mover();
    echo "\n";
}
?>
