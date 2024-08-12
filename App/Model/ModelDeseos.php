<?php

namespace App\Model;
use Core\Model;

class ModelDeseos extends Model
{
    public function getInvitados()
    {
        $sql = "SELECT id, Nombre,pases FROM invitados";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getAsistencia()
    {
        $sql = "SELECT id, uid,Nombre,pases,alergia FROM asistencia";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function setasistencia($datos,$uid)
    {   
        try{
            
            $statement = $this->db->prepare('INSERT INTO asistencia (uid, Nombre,pases,alergia) VALUES (:uid,:Nombre,:pases,:alergia)');

                $status = $statement->execute([
                    'uid' => $uid,
                    'Nombre' => $datos['nombre'],
                    'pases'=>$datos['pases'],
                    'alergia'=>$datos['Alergias']
                    ]);
            return ['status'=>$status,'error'=>false,'id'=>$this->db->lastInsertId()];
        }catch(\PDOException $e){
            return ['status'=>0,'error'=>true];
        }
        
        
    }

    public function getinvitado($uid)
    {
        try{
            $query = $this->db->prepare("SELECT Nombre, uid FROM invitados where uid=:uid  ORDER BY id DESC");
            $query->execute(
                ['uid'=>$uid]
            );
            return $query->fetch();
        }catch(\PDOException $e){
            return ['status'=>0,'error'=>true];
        }
        
    }

}