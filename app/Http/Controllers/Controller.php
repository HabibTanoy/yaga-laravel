<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $get_touch = Config::where('name', 'get_touch')->first();
        $get_touch = json_decode($get_touch->config, true);
        view()->share('get_touch', $get_touch);

        $projects = Config::where('name', 'project_done')->first();
        $projects = json_decode($projects->config, true);
        view()->share('projects', $projects);
    }
}
