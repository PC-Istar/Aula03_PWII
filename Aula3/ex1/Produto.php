<?php
class Produto {
    public $nome;
    public $preco;

    public function exibirinfo(){
        echo "Produtos: {$this->nome} - Preço: R$ {$this->preco}";
    }

}