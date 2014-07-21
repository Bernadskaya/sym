<?php

namespace Ant\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AntUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
