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

class JenkinsClient
{
    use InstanceTrait;

    public $jenkins;

    public function __construct()
    {

    }
}