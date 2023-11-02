<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function indexPage () {
        $data = [
            'header_title' => 'Earth Wars',
            'title' => 'Основная информация',
        ];

        return view('index', $data);
    }

    public function alliancesPage () {
        $data = [
            'header_title' => 'Альянсы',
            'title' => 'Альянсы',
        ];

        return view('alliances', $data);
    }

    public function gamemodesPage () {
        $data = [
            'header_title' => 'Режимы игры',
            'title' => 'Режимы игры',
        ];

        return view('gamemodes', $data);
    }
}
