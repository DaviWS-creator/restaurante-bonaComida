<?php

class Prato{

   // ATRIBUTOS
   private int $numero;
   private string $nome;
   private float $valor;

   // METODOS

   public function __construct($num, $nm, $val)
   {
      $this->numero = $num ;
      $this->nome = $nm;
      $this->valor = $val;
   }

   public function __toString()
   {
      $dados = sprintf("%s no valor de R$ %.2f", $this->nome, $this->valor);
      // $dados = printf("%s no valor de R$ %e", $this->nome, $this->valor);
      return $dados;
   }

   /**
    * Get the value of numero
    */
   public function getNumero(): int
   {
      return $this->numero;
   }

   /**
    * Set the value of numero
    */
   public function setNumero(int $numero): self
   {
      $this->numero = $numero;

      return $this;
   }

   /**
    * Get the value of nome
    */
   public function getNome(): string
   {
      return $this->nome;
   }

   /**
    * Set the value of nome
    */
   public function setNome(string $nome): self
   {
      $this->nome = $nome;

      return $this;
   }

   /**
    * Get the value of valor
    */
   public function getValor(): float
   {
      return $this->valor;
   }

   /**
    * Set the value of valor
    */
   public function setValor(float $valor): self
   {
      $this->valor = $valor;

      return $this;
   }
}