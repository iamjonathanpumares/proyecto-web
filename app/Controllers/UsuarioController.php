<?php

namespace App\Controllers;

use App\Models\Usuario; 

class UsuarioController
{
	// Cargar la lista de usuarios
	public function index()
	{
		$usuarios = Usuario::all();
		require VIEWS_DIR . 'usuarios/index.view.php';

	}

	// Crear usuario
	public function add()
	{
		echo 'Crear usuario';
	}

	// Actualizar un usuario

	// Eliminar un usuario
}

?>