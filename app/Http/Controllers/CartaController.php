<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class CartaController extends Controller {
    public function index() {
        return view("carta.index", [
            "productos" => $this->carta(),
        ]);
    }

    public function view($codigo) {
        $producto = [];

        foreach($this->carta() as $produ) {
            if ($produ["codigo"] === $codigo) {
                $producto = $produ;
                break;
            }
        } //return $producto;

        if(!empty($producto)) {
            return view('carta.view', [
                'producto' => $producto
            ]);
        }

        abort(404, 'Producto no hallado');
    }

    private function carta(): array {
        return [
            ["codigo" => "A", "nombre" => "Café solo", "precio" => 1.20],
            ["codigo" => "B", "nombre" => "Café con leche", "precio" => 1.50],
            ["codigo" => "C", "nombre" => "Bocadillo", "precio" => 2.80],
            ["codigo" => "D", "nombre" => "Agua", "precio" => 1.00]
        ];
    }
}
