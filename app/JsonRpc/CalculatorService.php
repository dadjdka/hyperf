<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/11/3
 * Time: 15:15
 */

namespace App\JsonRpc;
use Hyperf\RpcServer\Annotation\RpcService;
/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性
 * @RpcService(name="CalculatorService", protocol="jsonrpc-http", server="jsonrpc-http")
 */
class CalculatorService implements CalculatorServiceInterface
{
    public function sum(MathValue $a, MathValue $b): MathValue
    {
        // 这里是服务方法的具体实现
        return $a + $b;
    }
}
