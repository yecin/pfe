<?php

namespace BO\MessageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BOMessageBundle extends Bundle
{
    public function getParent()
    {
      return 'FOSMessageBundle';
    }
}
