<?php 

require_once("../funcaoAjuda.php");
require_once("modelo/Prato.php");
require_once("modelo/Pedido.php");

$pratos = array();

$pedidos = array();

// OBJETOS

$prato1 = new Prato(1, "Camarão à Milanesa", 110.00 );
$prato2 = new Prato(2,"Pizza Margherita", 80.00);
$prato3 = new Prato(3, "Macarrão à Carbonara", 60.00);
$prato4 = new Prato(4, "Bife à Parmegiana", 75.00);
$prato5 = new Prato(5, "Risoto ao Funghi", 70.00);

$pratos = array($prato1, $prato2, $prato3, $prato4, $prato5);// ARRAY DE OBJETOS, melhor setar eles todos de uma vez do que ficar colodando um por um com array_push($pratos, $prato1);

//PROGRAMA PRINCIPAL
do {
   # code...
   usleep(500000);
   espacamentoDB();
   
   echo "        Bona Comida    
   1-Cadastrar
   2-Cancelar
   3-Listar
   4-Total de vendas
   0-Sair\n";
   
   
   $opcao = readline("Informe a opção desejada: ");
   
   espacamentoDB();
   usleep(500000);
   
   switch($opcao)
   {
      case 1:
         echo "*****Cadastro de Pedido*****\n";
         echo "Pratos disponíveis:\n";
         foreach($pratos as $p)
         {
            echo $p->getNumero()."-".$p->getNome()." R$".$p->getValor()."\n";
            // usleep(500000);
         }

         $n_Prato = (int)readline("Informe o número do prato desejado: ");
         $nomeCliente = (string) readline("Informe o nome do cliente: ");
         $nomeGarcom = (string) readline("Informe o nome do garçom: ");

         $pedido = new Pedido();
         $pedido->setNomeCliente($nomeCliente);
         $pedido->setNomeGracom($nomeGarcom);
         $pedido->setPrato($pratos[$n_Prato -1]);
         array_push($pedidos, $pedido);
         
         break;
   
      case 2:
         echo "*****Cancelar Pedido*****\n";
         if(count($pedidos) == 0)
         {
            echo "Nenhum pedido cadastrado!\n";
            break;
         }else{
            $n_pedido = (int) readline("Informe o número do pedido que deseja cancelar: ");
            if($n_pedido > count($pedidos) || $n_pedido < 0)
            {
               echo "Número inválido!\n";
               break;
            }else{
               unset($pedidos[$n_pedido]);
               $pedidos = array_values($pedidos);// Reorganiza os índices do array após o unset
               echo "Pedido cancelado com sucesso!\n";
               usleep(500000);
            }
         }
         break;
            
      case 3:
           echo "*****Lista De Pedido*****\n";
           espacamento();
            if(count($pedidos) == 0)
            {
               echo "Nenhum pedido cadastrado!\n";
               break;
            }else{
               foreach($pedidos as $ped)
               {
                  echo $ped;
                  usleep(500000);
                  espacamento();
               }
            }

         break;
      case 4:
         echo "*****Total de Vendas*****\n";

         $totalVendas = 0;

         $totalFaturamento = 0.0;

         for ($i=0; $i <count($pedidos) ; $i++) { 
            $totalVendas += 1;
         }
         if($totalVendas == 0)
         {
            echo "Nenhuma venda cadastrado!\n";
            break;
         }else{
            echo "Total de vendas: ".$totalVendas."\n";


            foreach($pedidos as $p)
            {
               $totalFaturamento+= $p->getPrato()->getValor();
            }
            echo "faturamento total: R$ ". $totalFaturamento."\n";
            usleep(500000);
         }
         break;

      case 0:
         echo "Saindo";
         pontinhos();
         espacamentoDB();
   }
} while ($opcao != 0);   

