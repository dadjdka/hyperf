<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/11/3
 * Time: 11:46
 */

namespace App\Controller\Api;

use App\Controller\AbstractController;
use App\JsonRpc\CalculatorServiceInterface;
use App\JsonRpc\MathValue;
use App\Service\PingService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Utils\ApplicationContext;

class PingController extends AbstractController
{
    /**
     * @Inject
     * @var PingService
     */
    protected $ping;


    /**
     */
    public function ping()
    {

        $client = ApplicationContext::getContainer()->get(CalculatorServiceInterface::class);

        /** @var MathValue $result */
        $result = $client->sum( 1, 2);
//
        var_dump($result);

//        $params = $this->request->all();
//        $data = $this->ping->ping($params);
//        return $this->response->json($result);
    }
}
