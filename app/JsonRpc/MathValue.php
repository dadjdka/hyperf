<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/11/3
 * Time: 16:40
 */

namespace App\JsonRpc;

class MathValue
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}
