<?php

namespace App\Tasks\Jenkins;

use App\Tasks\Task;

class ViewTask extends Task
{
    public function jobsAction()
    {
        dd(di('config')->jenkins->url);
    }
}

