<?php

declare(strict_types=1);

namespace App\Controller;

use App\View\Output;

class Cook
{
    public function execute()
    {
        $show = new Output();
        $show->renderPhtml('Template/priceCoffee.phtml');
    }
}