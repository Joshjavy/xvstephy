<?php

namespace App\Controllers;

use Core\View;
use App\Model\ModelDeseos;

class Deseos
{
    public function store()
    {
        if($_SERVER['REQUEST_METHOD']=="POST"){
            print_r($_POST);
        }else{
            echo 'error';
        }
    }

    public function example()
    {
        $views = ['home/example'];
        $args  = ['title' => 'Home | Example'];
        View::render($views, $args);
    }

    public function exampleWithArgs($id = null)
    {
        $views = ['home/example_with_args'];
        $args  = [
            'title' => 'Home | Example',
            'id' => $id ?? 'No se envio ID'
        ];
        View::render($views, $args);
    }
}
