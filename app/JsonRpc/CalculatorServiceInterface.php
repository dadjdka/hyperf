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
    public function sum(MathValue $v1, MathValue $v2): MathValue;
}
