<?php
	class Tarea{
		private $id;
		private $fecha;
		private $descripcion;
		private $tiempoasignado;
		private $integranteasignado;
		private $idintegranteasignado;
		private $observaciones;

		function __construct(){}

		public function getid(){
			return $this->id;
		}

		public function setid($id){
			$this->id = $id;
		}

		public function getfecha(){
			return $this->fecha;
		}

		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

		public function getdescripcion(){
			return $this->descripcion;
		}

		public function setdescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function gettiempoasignado(){
			return $this->tiempoasignado;
		}

		public function settiempoasignado($tiempoasignado){
			$this->tiempoasignado = $tiempoasignado;
		}

		public function getintegranteasignado(){
			return $this->integranteasignado;
		}

		public function setintegranteasignado($integranteasignado){
			$this->integranteasignado = $integranteasignado;
		}
		
		public function getidintegranteasignado(){
			return $this->idintegranteasignado;
		}

		public function setidintegranteasignado($idintegranteasignado){
			$this->idintegranteasignado = $idintegranteasignado;
		}

		public function getobservaciones(){
			return $this->observaciones;
		}

		public function setobservaciones($observaciones){
			$this->observaciones = $observaciones;
		}
					

	}
?>