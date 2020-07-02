<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
//host="wobtqobo.nethost-3311.000nethost.com/api/public",
/**
 * @SWG\Swagger(
 *     basePath="/api",
 *     schemes={"http", "https"},
 *     host="localhost:800/noithatkagu/public",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="L5 Swagger API"
 *     )
 * )
 */