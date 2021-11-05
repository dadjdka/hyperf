<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/11/3
 * Time: 11:46
 */

namespace App\Service;
use App\JsonRpc\CalculatorServiceInterface;
use App\JsonRpc\MathValue;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Utils\ApplicationContext;

class PingService
{
    /**
     * Notes: 测试
     * @param $params
     * @return array
     */
    public function ping($params):array
    {


        return success($params);
    }
}
