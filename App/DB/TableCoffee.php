<?php

declare(strict_types=1);

namespace App\DB;

class TableCoffee
{
    /**
     * @param $all
     * @return float
     */
    public function execute($all): float
    {
        $result = 0;
        $db = [
            ['id' => 1, 'country' => 'Spain', 'price' => 1, 'syrup' => 0.5, 'addition' => 1, 'tax' => 0.03],
            ['id' => 2, 'country' => 'Italy', 'price' => 1.5, 'syrup' => 0.5, 'addition' => 1, 'tax' => 0.07]
        ];
        if ($all['country'] == $db[0]['country']) {
            $result += $db[0]['price'];
            if ($all['syrup'] == 'on') {
                $result += $db[0]['syrup'];
            }
            if ($all['addition'] == 'on') {
                $result += $db[0]['addition'];
            }
            $tax = $result * $db[0]['tax'];
            $result = $tax + $result;
        } else {
            $result += $db[1]['price'];
            if ($all['syrup'] == 'on') {
                $result += $db[1]['syrup'];
            }
            if ($all['addition'] == 'on') {
                $result += $db[1]['addition'];
            }
            $tax = $result * $db[1]['tax'];
            $result = $tax + $result;
        }
        return $result;
    }
}
