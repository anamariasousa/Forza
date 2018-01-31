<?php


class Reserva extends Model{
    


    
      public function ListarCarroData($Parametros) { //listar carros por data escolhida
          session_start();
         $retirada=$Parametros['aRetirada'];$_SESSION['aRetirada']=$retirada;
         $devolucao=$Parametros['aDevolucao'];$_SESSION['aDevolucao']=$devolucao;  
//var_dump($retirada);
        $data1 =$retirada;
        $data2 =$devolucao;
        // $data ="21/01/2018";
        //$data="2018/01/21";
         if(strstr($data1, "/")){ //Converter data dd/mm/aaaa para aaaa/mm/dd  ou o contrario
             $d = explode("/",$data1);
             $rtdata1="$d[2]-$d[1]-$d[0]";
             $d = explode("/",$data2);
             $rtdata2="$d[2]-$d[1]-$d[0]";
         }else{
             $d= explode("-", $data1);
             $rtdata1="$d[2]/$d[1]/$d[0]";
             $d= explode("-", $data2);
             $rtdata2="$d[2]/$d[1]/$d[0]";
         }
        // echo $rtdata1;
        // echo $rtdata2;
         $dat1 = new DateTime($rtdata1 );//contagem de quantos dias na duas datas aaaa/mm/dd
         $dat2 = new DateTime ($rtdata2);
         
         $intervalo = $dat1->diff($dat2);
         $_SESSION['intervalo']= $intervalo ->format("%a");
         //var_dump($_SESSION);
         
         
         
     $resultado = $this->Resultado = $this->Buscar('c.idCarros,c.PLACA,c.IMG,c.NomeCarro,c.AR,c.CAMBIO,c.GPS,c.ASSENTOS,c.PORTAS,c.MALAS ','Reservas r ', ' INNER JOIN Carros c ON c.idCarros  =  r.Carros_idCarros WHERE ( DATADARESERVA AND DATADEDEVOLUCAO ) != (DATADARESERVA=:DATADARESERVA AND DATADEDEVOLUCAO=:DATADEDEVOLUCAO )', " DATADARESERVA={$Parametros['aRetirada']}&DATADEDEVOLUCAO={$Parametros['aDevolucao']}");
       $this->Resultado[0]['Carros'] = $resultado;
      // var_dump($resultado);
        
          if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['respostaCarroData'] = "Carros da data escolhida!";
         return $this->Resultado;
        endif;
            
    }
    
    
       public function DetalhesReserva($Parametros) {
       $_SESSION['resultado1'] =  $resultado =  $this->Resultado = $this->Buscar('idCarros,IMG,NomeCarro,AR,CAMBIO,GPS,ASSENTOS,PORTAS,MALAS,VALORDIARIA', 'Carros ', ' WHERE idCarros = :idCarros', "idCarros={$Parametros['idCarros']}");
        //$this->Resultado[0]['Carros'] = $resultado;
        // var_dump($resultado);
       $_SESSION['resultado2']= $resultado =  $this->Resultado = $this->Buscar('NOME', 'Acessorios ');
      // var_dump($resultado);
      $_SESSION['resultado3']=$resultado =  $this->Resultado = $this->Buscar('idExtras,SEGURO,VALOR', 'Extras ');
     // var_dump($resultado);
          if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['resposta'] = "Detalhes do Carros !";
          $this->Resultado;
        endif;
        //session_start();
     $_SESSION['idCarros'] =  $pegaidCarro = (int) $_GET['idCarros'];
     //   var_dump($_SESSION['idCarros']);
    }
    
        public function ListarAcessorios() {
       
       $resultado =  $this->Resultado = $this->Buscar('NOME', 'Acessorios ');
        $this->Resultado[0]['Acessorios'] = $resultado;
         // var_dump($resultado);
           
         if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['respostaListadoA'] = "!";
          return $this->Resultado;
        endif;
 
    }
    
     public function ListarExtras() {
       
       $resultado =  $this->Resultado = $this->Buscar('VALOR', 'Extras ');
        $this->Resultado[0]['Extras'] = $resultado;
         // var_dump($resultado);
           
         if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['respostaListadoE'] = "!";
          return $this->Resultado;
        endif;
     }
    
       public function InseridoDetalhesReservas($Parametros) {
         $dados  = ['DATADARESERVA' =>$this->DATADARESERVA,
                    'DATADEDEVOLUCAO' =>$this->DATADEDEVOLUCAO,
                    'FABRICACAO' => $Parametros['FABRICACAO'],
                    
                   ];
         
         $this->Resultado = $this->Inserir("Reservas", $dados);
         
         if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['respostaInserido'] = "Reserva Realizada com Sucesso!";
        return $this->ListarCarro();
        endif;
     }
    
   public function  ReservarCarro($Parametros){
     //  $this->ListarCarroData($Parametros);
          session_start();
          $retirada=$Parametros['aRetirada'];$_SESSION['aRetirada']=$retirada;
         $devolucao=$Parametros['aDevolucao'];$_SESSION['aDevolucao']=$devolucao; 
         $acessorio=$Parametros['NOME']; $_SESSION['NOME']=$acessorio;
         $extra= (int) $Parametros['SEGURO'];   $_SESSION['SEGURO']=$extra;  
         $email=$_SESSION['usuario_logado'];
         $idCarro=$_SESSION['idCarros'] ;
         $ValorCeE = $_SESSION['ValorCeE'] ;
        
          //$senha=$_SESSION['sessao'];
          
          $_SESSION['idCliente'] = $resultado = $this->Buscar('idClientes', 'Clientes','WHERE EMAIL = :EMAIL', "EMAIL={$email}");//buscar id do cliente logado
            $this->Resultado = $resultado[0];
       // var_dump($resultado);
      
         $_SESSION['ValorCeE'] =   $resultado = $this->Buscar('(VALORDIARIA + VALOR)','Carros','INNER JOIN Extras WHERE  idCarros= :idCarros AND idExtras= :idExtras',"idCarros={$idCarro}&idExtras={$extra}");// soma do valor diaria do carro mais o extra escolhido
            $this->Resultado = $resultado[0];
            $inte= $_SESSION['intervalo'];
 
         //  $ValorCeE1 = (int) "$ValorCeE";
            $inte1 = (int)  $inte;
      //  $ValorTotal=  $ValorCeE * $inte ;
                    
 // var_dump($retirada);
 // var_dump($inte1);
  //var_dump($ValorTotal);

         
    }
 
 
 
    
    
}
