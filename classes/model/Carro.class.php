<?php

class Carro extends Model  {
    
       public function InseridoCarro($Parametros) {
         $dados  = ['PLACA' => $Parametros ['PLACA'],
                    'FABRICACAO' => $Parametros['FABRICACAO'],
                    'VALORDIARIA' => $Parametros['VALORDIARIA'],
                    'Adm_idAdm' => $Parametros['Adm_idAdm'], 
                    'IMG' => $Parametros['IMG'],
                    'NomeCarro' => $Parametros ['NomeCarro'],
                    'AR' => $Parametros ['AR'],
                    'CAMBIO' => $Parametros ['CAMBIO'],
                    'GPS' => $Parametros ['GPS'],
                    'ASSENTOS' => $Parametros ['ASSENTOS'],
                    'PORTAS' => $Parametros ['PORTAS'],
                    'MALAS' => $Parametros ['MALAS']];
         
         $this->Resultado = $this->Inserir("Carros", $dados);
         
         if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['respostaInserido'] = "Carro Inserido com Sucesso!";
        return $this->ListarCarro();
        endif;
     }
      
     
    public function ListarCarro() {
       $resultado = $this->Resultado = $this->Buscar("idCarros, NomeCarro,FABRICACAO", "Carros","Order BY NomeCarro");
       $this->Resultado[0]['Carros'] = $resultado;
       
        
          if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['resposta'] = "Todos os carros!";
         return $this->Resultado;
        endif;
    }
    
    
     public function  visual($Parametros) {
       $resultado = $this->Resultado = $this->Buscar("idCarros,NomeCarro,IMG,FABRICACAO,VALORDIARIA,PLACA,AR,CAMBIO,GPS,ASSENTOS,MALAS", 'Carros', 'WHERE idCarros = :idCarros', "idCarros={$Parametros['idCarros']}");
       $this->Resultado[0]['Carros'] = $resultado;
       
         if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['resposta'] = "Informações do Carro!";
         return $this->Resultado;
        endif;
    }
   
      public function editar($Parametros) {
        $resultado = $this->Resultado = $this->Buscar("idCarros,NomeCarro,IMG,FABRICACAO,VALORDIARIA,PLACA,AR,CAMBIO,GPS,ASSENTOS,PORTAS,MALAS", 'Carros', 'WHERE idCarros = :idCarros', "idCarros={$Parametros['idCarros']}");
       $this->Resultado[0]['Carros'] = $resultado;
       return $this->Resultado;
    }
    
   public function editado($Parametros) {
            $dados  = [
                     'PLACA' => $Parametros ['PLACA'],
                    'FABRICACAO' => $Parametros['FABRICACAO'],
                    'VALORDIARIA' => $Parametros['VALORDIARIA'],
                    'IMG' => $Parametros['IMG'],
                    'NomeCarro' => $Parametros ['NomeCarro'],
                    'AR' => $Parametros ['AR'],
                    'CAMBIO' => $Parametros ['CAMBIO'],
                    'GPS' => $Parametros ['GPS'],
                    'ASSENTOS' => $Parametros ['ASSENTOS'],
                    'PORTAS' => $Parametros ['PORTAS'],
                    'MALAS' => $Parametros ['MALAS']];
         
        //var_dump($Paremetros);
        //var_dump($dados);

        $this->Resultado = $this->Atualizar('Carros', $dados, "WHERE idCarros = :idCarros", "idCarros={$Parametros['idCarros']}");
        if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['respostaEditado'] = "Carro Editado com Sucesso!";
        return $this->ListarCarro();
        endif;
    }

 
      public function excluir($Parametros) {
        $this->Resultado = $this->Deletar('Carros', "WHERE idCarros = :idCarros", "idCarros={$Parametros['idCarros']}");
        if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
             $_SESSION['respostaExcluido'] = "Carro Excluido com Sucesso!";
            return $this->ListarCarro();
        endif;
    }
    
    
   public function  ExibirCarroTodos(){
        $resultado = $this->Resultado = $this->Buscar("idCarros,IMG,NomeCarro,AR,CAMBIO,GPS,ASSENTOS,PORTAS,MALAS", "Carros");
       $this->Resultado[0]['Carros'] = $resultado;
       
        
          if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['resposta'] = "Todos os carros!";
         return $this->Resultado;
        endif;
    }
    
    
 public function VerObjeto() {

        var_dump($this);
        echo '<hr>';
    }
}
