<?php
namespace App\Controllers;

use Core\View;
use App\Model\ModelDeseos;
use App\Config\env;
class ControllerXv {

    public function store()
    {   
        if($_SERVER['REQUEST_METHOD']=="POST"){
            try {
                $uid=$_POST['huid'];
                $deseos = new ModelDeseos();
                $insert = $deseos->setasistencia($_POST,$uid);
                echo json_encode(['status'=>true,],200);

            } catch (\Throwable $e) {
                echo json_encode(['status'=>false,'message'=>'error en la solicitud'],400);
            }
        
        }else{
            echo json_encode(['status'=>false,'message'=>'Solicitud no permitida'],400);
        }
    }

}