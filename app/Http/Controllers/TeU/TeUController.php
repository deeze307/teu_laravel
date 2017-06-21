<?php

namespace IAServer\Http\Controllers\TeU;

use IAServer\Http\Controllers\TeU\Model\Consejos;
use IAServer\Http\Controllers\TeU\Model\Ping;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class TeUController extends CRUDTeUController
{
    //
    public function manage()
    {
        return view('teu.management.index');
    }

    public function ping()
    {
        return $this->getPing();
    }

    public function tips()
    {
        return $this->getTips();
    }

    public function enabledJobs()
    {
        return $this->getEnabledJobs();
    }
}
