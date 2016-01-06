<?php

namespace Mangati\IO;

/**
 * InputInterface
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface InputInterface
{
    
    public function open();
    
    public function read();
    
    public function close();
    
}
