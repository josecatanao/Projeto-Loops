<?php


 class Banco{
     private $db_name = "loops";
     private $db_host = "localhost";
     private $db_login = "root";
     private $db_senha = "";
     
     //conexãocombanco
     public function conexao(){
        $pdo =new  PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host,$this->db_login,$this->db_senha);
        return $pdo;
     }
     // INSERIR UM NOVO PANTICIPANTE
     public function adicionarParticipante($nome,$email){
         $res = $this->conexao()->prepare("INSERT INTO Participantes(nome,email) VALUES (:nome,:email)");
         $res->bindValue(":nome",$nome);
         $res->bindValue(":email",$email);
         $res->execute();
     }


     //PEGAR TODOS OS PARTICIPANTES
        public function mostraParticipantes(){
            $res = $this->conexao()->query("SELECT * FROM  Participantes");
            $resistros = $res->fetchAll(PDO::FETCH_ASSOC);
            return  array_reverse($resistros);
        }

     // EDITAR OS PARTICIPANTES
      public function editarParticipante($id,$nome,$email){
        $res = $this->conexao()->prepare("UPDATE Participantes SET nome = :nome, email = :email WHERE id = :id");
        $res->bindValue(":id",$id);
        $res->bindValue(":nome",$nome);
        $res->bindValue(":email",$email);
        $res->execute();
      }

      // SELECIONAR PARTICIPANTES PARA MOSTRA E EDITAR
        public function pegarParticipanteEditar($id){
            $res = $this->conexao()->prepare("SELECT * FROM Participantes WHERE id = :id");
            $res->bindValue(":id",$id);
            $res->execute();
            $resistros = $res->fetchAll(PDO::FETCH_ASSOC);
            return $resistros;
        }

       //EXCLUIR PARTICIPANTES
        public function excluirParticipante($id){
             $res = $this->conexao()->prepare("DELETE FROM Participantes WHERE id = :id");
             $res->bindValue(":id",$id);
             $res->execute();
        }
 
 }
 $banco = new Banco();
//$banco->adicionarParticipante("paulo","paulo@gmail.com");
// $banco->editarParticipante(3,"joão","joão@gmail.com");
//$banco->excluirParticipante(3,"joão","joão@gmail.com");
//echo"<pre>";
// print_r($banco->Participante());
// echo"</pre>";
