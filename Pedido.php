<?php

require_once("Prato.php");

class Pedido
{
   private string $nomeCliente;
   private string $nomeGracom;
   private Prato $prato;

   // METODOS

   public function __toString()
   {
      $dados = printf("O cliente %s, foi atendido pelo garçom %s, pediu um prato de %s", $this->nomeCliente, $this->nomeGracom, $this->prato);
      return $dados;
   }

   // SETS and GETS

   

   /**
    * Get the value of nomeCliente
    */
   public function getNomeCliente(): string
   {
      return $this->nomeCliente;
   }

   /**
    * Set the value of nomeCliente
    */
   public function setNomeCliente(string $nomeCliente): self
   {
      $this->nomeCliente = $nomeCliente;

      return $this;
   }

   /**
    * Get the value of nomeGracom
    */
   public function getNomeGracom(): string
   {
      return $this->nomeGracom;
   }

   /**
    * Set the value of nomeGracom
    */
   public function setNomeGracom(string $nomeGracom): self
   {
      $this->nomeGracom = $nomeGracom;

      return $this;
   }

   /**
    * Get the value of prato
    */
   public function getPrato(): Prato
   {
      return $this->prato;
   }

   /**
    * Set the value of prato
    */
   public function setPrato(Prato $prato): self
   {
      $this->prato = $prato;

      return $this;
   }
}