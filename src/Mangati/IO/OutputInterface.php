<?php

namespace Mangati\IO;

/**
 * OutputInterface
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
interface OutputInterface
{
    
    public function open();
    
    public function write($data);
    
    public function close();
    
}
