<?php

class UsuariosModulos extends CI_Model
{
    public function getUsuarios()
	{
		return $this->db->get('usuarios')->result();
	}

	public function setUsuario(array $correo)
	{
		return $this->db->insert('correo', $correo);
	}

	public function updateUsuario(int $correo, array $datos)
	{
		return $this->db->update('usuarios', $datos)->where('correo', $correo);
	}

	public function setCodigo(int $correo, string $codigo)
	{
		$datos = array('codigo' => $codigo);
		return $this->db->where('correo', $correo)->update('usuarios', $datos);
	}

}
?>