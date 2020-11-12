<?php
namespace Haa\framework;
use app\handlers;


class FrontController extends FrontController_Abstract
{
    private $context;

    private function __construct()
    {
        $this->context = new CommandContext();
    }

    private function __clone()
    {

    }

    public static function run()
    {
        $controller = new FrontController();
        $controller->init();
        $controller->handleRequest();
    }


    /**
     * Use method to initialize helper objects
     * Session manager, Validator tec
     */

    protected function init()
    {
      
    }

    protected function handleRequest()
    {
        /**
         * 
                * $context = new CommandContext();

            //$request = (string) $context->get('controller');
                $req = $context->get('get','controller');
                $handler = RequestHandlerFactory::makeRequestHandler();

                if ($handler->execute($context) == false)
                {
                    //do error handling like show opps something wrong page
                    echo "ERROR";
                }
                
                echo $req;
         */
       // $test = $_GET['url'];
        //$action = $this->context->get('controller');
        $test = $_REQUEST['controller'];
        if ($test == NULL)
        {
            $test =  "index" ;
        }
        else{
            
        }
        
        $cmd = RequestHandlerFactory::makeRequestHandler($test);

        if (! $cmd->execute($this->context))
        {
            
        }
        
        
        
    }
}