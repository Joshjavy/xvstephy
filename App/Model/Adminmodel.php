<?php
namespace App\Model;
use Core\Model;
use Ramsey\Uuid\Uuid;

class Adminmodel extends Model{

    public function getuser($mail)
    {
        try{
            $query = $this->db->prepare("SELECT username, password,email FROM accounts where email=:email  ORDER BY id DESC");
            $query->execute(
                ['email'=>$mail]
            );
            return $query->fetch();
        }catch(\PDOException $e){
            return ['status'=>0,'error'=>true];
        }
        
    }

    public function setInvitados($datos)
    {   
        try{
            
            $statement = $this->db->prepare('INSERT INTO invitados (Nombre, uid) VALUES (:Nombre,:uid)');

                $status = $statement->execute([
                    'Nombre' => utf8_decode($datos),
                    //'pases'=>$datos['pases'],
                    'uid' => Uuid::uuid4(),
                    ]);
            return ['status'=>$status,'error'=>false,'id'=>$this->db->lastInsertId()];
        }catch(\PDOException $e){
            return ['status'=>0,'error'=>true];
        }
        
        
    }

    public function getinvitados()
    {
        $sql = "SELECT Nombre,uid FROM invitados";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}