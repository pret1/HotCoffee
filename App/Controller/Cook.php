<?php

declare(strict_types=1);

namespace App\Controller;

use App\View\Output;

class Cook implements ControllerInterface
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $show = new Output();
        $show->renderPhtml('Template/priceCoffee.phtml');
    }
}
