<?php

namespace Api\v1;

use \App\Http\Controllers\Controller;

class ApiController extends Controller
{
    protected function respondWithSuccess()
    {
        return response([], 204);
    }
}