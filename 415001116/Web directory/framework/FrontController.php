<?php
namespace Haa\framework;
use App\handlers\LoginController;


class FrontController extends FrontController_Abstract
{
    private function __construct()
    {

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
        $context = new CommandContext();

       $request = (string) $context->get('controller');
        $handler = RequestHandlerFactory::makeRequestHandler();

        if ($handler->execute($context) == false)
        {
            //do error handling like show opps something wrong page
        }
        
    }
}