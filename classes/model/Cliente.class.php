<?php
class Cliente extends Model {
     public function ListarCliente() {
       $resultado = $this->Resultado = $this->Buscar("idClientes, NOME", "Clientes"," Order BY NOME");
       $this->Resultado[0]['Clientes'] = $resultado;
       
        
          if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['resposta'] = "Todos os Clientes!";
         return $this->Resultado;
        endif;
    }
      
      public function  VisualCliente($Parametros) {
       $resultado = $this->Resultado = $this->Buscar("idClientes,NOME,TELEFONE,CNH,SENHA,EMAIL", 'Clientes', 'WHERE idClientes = :idClientes', "idClientes={$Parametros['idClientes']}");
       $this->Resultado[0]['Clientes'] = $resultado;
       
         if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['resposta'] = "Informações do Cliente!";
         return $this->Resultado;
        endif;
    }
    
       
      public function EditarCliente($Parametros) {
        $resultado = $this->Resultado = $this->Buscar("idClientes,NOME,TELEFONE,CNH,SENHA,EMAIL", 'Clientes', 'WHERE idClientes = :idClientes', "idClientes={$Parametros['idClientes']}");
       $this->Resultado[0]['Clientes'] = $resultado;
       return $this->Resultado;
    }
    
    public function EncriptarString($String) {

        $StringEncriptada = md5($String);
        return $StringEncriptada;
    }
    
   public function EditadoCliente($Parametros) {
       $SenhaEncriptada = $this->EncriptarString($Parametros['senha']);
      $dados = ['NOME' =>$Parametros['NOME'],
               'TELEFONE' =>$Parametros['TELEFONE'],
               'CNH' =>$Parametros['CNH'], 
               'EMAIL' =>$Parametros['email'],
            
               'SENHA' => $SenhaEncriptada];
               
         
        //var_dump($Paremetros);
        //var_dump($dados);

        $this->Resultado = $this->Atualizar('Clientes', $dados, "WHERE idClientes = :idClientes", "idClientes={$Parametros['idClientes']}");
        if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
           $_SESSION['respostaEditado'] = "Cliente Editado com Sucesso!";
        return $this->ListarCliente();
        endif;
    }
    
    
      public function ExcluirCliente($Parametros) {
        $this->Resultado = $this->Deletar('Clientes',  "WHERE idClientes = :idClientes", "idClientes={$Parametros['idClientes']}");
        if (is_a($this->Resultado, 'PDOException')):
            return $this->Resultado;
        else:
             $_SESSION['respostaExcluido'] = "Cliente Excluido com Sucesso!";
            return $this->ListarCliente();
        endif;
    }
}
