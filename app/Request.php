<?php

namespace TaskManager;

class Request{

    public  static function uri(){
        return trim('todolist/'.$_SERVER['REQUEST_URI'],'/');
    }

}