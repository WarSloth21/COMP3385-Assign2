<?php

namespace Haa\framework;



class RequestHandlerFactory implements RequestHandlerFactory_Interface
{
    public static function makeRequestHandler(string $request = 'index'): PageController_Command_Abstract
    {
        if (preg_match('/\W/', $request)) 
        {
            throw new \Exception("illegal characters in request");
        }

        $class = "App\\handlers\\" . UCFirst(strtolower($request)) . "Controller";
        //$class = __NAMESPACE__ . "\\handlers\\" . UCFirst(strtolower($request)) . "Controller” ;
        //$class = "App\\handlers\\".UCFirst(strtolower($request)) . " $request" ;
       


        if (!class_exists($class))
        {
            throw new \Exception("No request handler class '$class' located");
        }

        $cmd = new $class();    // receiver goes here
        return $cmd;
    }
}

?>