<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/11/3
 * Time: 15:22
 */

namespace App\JsonRpc;

interface CalculatorServiceInterface
{
    public function sum(int $v1, int $v2) : int;
}
