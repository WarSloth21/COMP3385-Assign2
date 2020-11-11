<?php
namespace Haa\framework;

class CommandContext
{
    
    public function add(string $key, $val)
    {
        
    }
    
    public function get(string $key)
    {
        
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    public function getError () :array
    {
        return [];
    }
}