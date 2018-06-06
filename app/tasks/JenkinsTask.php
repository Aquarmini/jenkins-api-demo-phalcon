<?php

namespace App\Tasks;

use Xin\Cli\Color;

class JenkinsTask extends Task
{

    public function mainAction()
    {
        echo Color::head('Help:') . PHP_EOL;
        echo Color::colorize('  Jenkins Api Task') . PHP_EOL . PHP_EOL;

        echo Color::head('Usage:') . PHP_EOL;
        echo Color::colorize('  php run jenkins:[action]', Color::FG_LIGHT_GREEN) . PHP_EOL . PHP_EOL;

        echo Color::head('Actions:') . PHP_EOL;
        echo Color::colorize('  view:jobs       显示对应的JOB列表', Color::FG_LIGHT_GREEN) . PHP_EOL;
    }

}

