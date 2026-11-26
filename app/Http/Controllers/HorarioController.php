<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller {
    public function index() {
        return view('horario.index', [
            'horario' => $this->horario()
        ]);
    }

    public function view($codigo) {
        $dia = [];

        foreach($this->horario() as $hora) {
            if($hora["codigo"] === $codigo) {
                $dia = $hora;
                break;
            }
        }

        return view('horario.view', [
            'dia' => $dia
        ]);
    }

    private function horario(): array {
        return [
            ["codigo" => "L", "dia" => "Lunes", "hora" => "8:30 - 14:30"],
            ["codigo" => "M", "dia" => "Martes", "hora" => "9:00 - 15:00"],
            ["codigo" => "X", "dia" => "Miércoles", "hora" => "9:00 - 15:00"],
            ["codigo" => "J", "dia" => "Jueves", "hora" => "8:30 - 14:30"],
            ["codigo" => "V", "dia" => "Viernes", "hora" => "9:00 - 13:00"],
            ["codigo" => "S", "dia" => "Sabado", "hora" => "Cerrado"],
            ["codigo" => "D", "dia" => "Domingo", "hora" => "Cerrado"],
        ];
    }
}
