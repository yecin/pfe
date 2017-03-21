<?php

namespace BO\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BOUserBundle extends Bundle
{
    public function getParent()
    {
      return 'FOSUserBundle';
    }    
}
