<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dictController extends Controller
{
    public function getRobots (Request $r)
    {
        $data = [
            'robots' => [
                [
                    'family' => 'autobot',
                    'name' => 'Optimus',
                    'strength' => 1000,
                ],
                [
                    'family' => 'decepticon',
                    'name' => 'Megatron',
                    'strength' => 1000,
                ],
            ],
        ];

        return response()->json($data, 200);
    }
}
