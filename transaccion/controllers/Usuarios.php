<?php
defined('BASEPATH') OR exit('No dorect script acces alloweb');

class Usuarios extends CI_Controller 
{
    function __construct()
	{
		parent::__construct();
		$this->load->model("UsuariosModel");
	}
	public function index()
	{
		$usuarios = $this->UsuariosModel->getUsuarios();
		$this->layout->view("usuarios", compact('usuarios'));
	}
 
	public function guardar()
	{
		if($this->input->post())
		{
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];
			$estatura = $_POST["estatura"];
			try
			{
				$this->db->trans_begin();
				$this->UsuariosModel->setUsuario($_POST);
				$id_usuario = $this->db->insert_id();
				$codigo = 'ES'.$id_usuario;
				$this->UsuariosModel->setCodigo($id_usuario, $codigo);
				$this->db->trans_commit();

			}
			catch(PDOException $ex)
			{
				$this->db->trans_rollback();
			}
			
			
			header("Location:".base_url());
		}
	}
}
?>