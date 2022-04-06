<?php

declare(strict_types=1);

namespace App\Controller;

use App\View\Output;

/**
 * Class Main - Homepage
 */
class Main implements ControllerInterface
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $show = new Output();
        $show->renderPhtml('Template/show.phtml');
    }
}
