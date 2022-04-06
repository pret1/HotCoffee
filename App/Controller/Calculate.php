<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\TableCoffee;

class Calculate
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $all = $_POST;
        $calculate = new TableCoffee();
        $result = $calculate->execute($all);
        header("location: cook?result=$result");
        exit();
    }

}