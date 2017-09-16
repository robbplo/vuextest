<?php

namespace Api\v1;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    protected function resource($data, $filterIds = true)
    {
        $data = collect($data)->toArray();

        if ($filterIds) {
            function recursiveFilter($data)
            {
                foreach ($data as $key => $item) {
                    if (is_array($item)) {
                        $data[$key] = recursiveFilter($data[$key]);
                    } elseif (str_contains($key, 'id') && !str_contains($key, 'uuid')) {
                        unset($data[$key]);
                    }
                }
                return $data;
            };

            $data = recursiveFilter($data);
        }

        return compact('data');
    }
}