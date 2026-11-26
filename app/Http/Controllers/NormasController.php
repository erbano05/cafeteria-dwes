<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormasController extends Controller {
    public function index() {
        return view('normas.index', [
            'normas' => $this->normas()
        ]);
    }

    private function normas() {
        return [
            "Se pide con la letra, no con el nombre.",
            "El bocadillo no se reserva.",
            "El agua no sale del recreo."
        ];
    }
}
