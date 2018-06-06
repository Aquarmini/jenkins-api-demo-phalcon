<?php
// +----------------------------------------------------------------------
// | JenkinsClient.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Common\Clients;

use Xin\Traits\Common\InstanceTrait;
use JenkinsKhan\Jenkins;

class JenkinsClient
{
    use InstanceTrait;

    /** @var Jenkins */
    public $client;

    private function __construct()
    {
        $url = di('config')->jenkins->url;
        $this->client = new Jenkins($url);
    }

    public function __call($name, $arguments)
    {
        return $this->client->$name(...$arguments);
    }
}
