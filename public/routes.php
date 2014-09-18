<?php
/**
 * Created by PhpStorm.
 * User: teoria
 * Date: 3/12/14
 * Time: 5:41 PM
 */
$routes = array(
    '/' => '',
    
    '/teste'=> "MainController:teste@get", // Classe :  Método  @ tipo Action
    '/rest'=> "MainController:rest@get", // Classe :  Método  @ tipo Action


    '/testGet/:id'=>"MainController:testeGet@get",  // testGet/3?user=123&casa=33
    '/testPost/:id'=>"MainController:testePost@post"  // testPost/3


    /*'/demo' => array(
        "get" =>  Main:test2 ,
        "post" => "Main:test3"
    ) */
);

