<?php

namespace App\Tasks\Jenkins;

use App\Common\Clients\JenkinsClient;
use App\Tasks\Task;
use Xin\Cli\Color;
use Xin\Phalcon\Cli\Traits\Input;

class ViewTask extends Task
{
    use Input;

    public function mainAction()
    {
        $jenkins = JenkinsClient::getInstance();

        $res = $jenkins->client->getViews();

        foreach ($res as $item) {
            echo Color::colorize("名称：" . $item->getName(), Color::FG_LIGHT_GREEN) . PHP_EOL;
            echo Color::colorize("介绍：" . $item->getDescription(), Color::FG_LIGHT_GREEN) . PHP_EOL;
            echo Color::colorize("URL：" . $item->getURL(), Color::FG_LIGHT_GREEN) . PHP_EOL;
            echo PHP_EOL;
        }
    }

    public function jobsAction()
    {
        $view = $this->argument('view');
        if (!$view) {
            echo Color::colorize('请输入对应view', Color::FG_LIGHT_RED) . PHP_EOL;
            exit;
        }
        $jenkins = JenkinsClient::getInstance();

        $res = $jenkins->client->getView($view);

        foreach ($res->getJobs() as $item) {
            echo Color::colorize("名称：" . $item->getName(), Color::FG_LIGHT_GREEN) . PHP_EOL;
            echo Color::colorize("颜色：" . $item->getColor(), Color::FG_LIGHT_GREEN) . PHP_EOL;
            echo PHP_EOL;
        }
    }
}
