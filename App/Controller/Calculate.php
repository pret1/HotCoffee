<?php

declare(strict_types=1);

namespace App\Controller;

class Calculate
{
    public function execute()
    {
        $all = $_POST;
        $result = 0;

        if ($all[0] == 'Spain') {
            $result += 1;
            if ($all[1] == 'yes') {
                $result += 0.5;
            }
            if ($all[2] == 'yes') {
                $result +=
            }
        }
    }
}