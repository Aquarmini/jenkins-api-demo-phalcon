<?php

namespace App\Tasks\Jenkins;

use App\Common\Clients\JenkinsClient;
use App\Tasks\Task;
use Xin\Cli\Color;
use Xin\Phalcon\Cli\Traits\Input;

class JobTask extends Task
{
    use Input;

    public function launchAction()
    {
        $name = $this->argument('name');
        if (!$name) {
            echo Color::colorize('请输入Job名 name', Color::FG_LIGHT_RED) . PHP_EOL;
            exit;
        }

        $jenkins = JenkinsClient::getInstance();

        $jenkins->client->enableCrumbs();
        $res = $jenkins->client->launchJob($name, ['name' => 'Agnes']);

        dd($res);
    }
}
