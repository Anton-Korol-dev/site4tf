<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class BotsController extends BaseController
{
    public function botsList () {
        $data = [
            'header_title' => 'Боевые боты',
            'title' => 'Боевые боты',
            'items' => DB::table('combats')->orderBy('name')->get(),
        ];

        return view('combats', $data);
    }

    public function botEntry($bot_id) {
        $data = [
            'header_title' => 'Боевые боты',
            'title' => 'Боевые боты',
            'item' => DB::table('combats')->where([ 'id' => $bot_id ])->first(),
        ];
        if (!empty($data['item']->id)) {
            $data['stats'] = DB::table('combats_stats')->where([ 'combat_id' => $bot_id ])->orderBy('level')->get();
        }

        return view('combats-entry', $data);
    }
}
