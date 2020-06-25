<?php
// incluye la clase Db
include('nombre de la base.php');

	class CrudTareas{

		// método para insertar, recibe como parámetro un objeto de tipo tarea
		public function insertar($tarea){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO tareas values(NULL,:nombre,:autor,:anio_edicion)');
			$insert->bindValue('nombre',$tarea->getNombre());
			$insert->bindValue('autor',$tarea->getAutor());
			$insert->bindValue('anio_edicion',$tarea->getAnio_edicion());
			$insert->execute();

		}

		// método para mostrar todos los tareas
		public function mostrar(){
			$db=Db::conectar();
			$listaTareas=[];
			$select=$db->query('SELECT * FROM tareas');

			foreach($select->fetchAll() as $tarea){
				$myTarea= new Tarea();
				$myTarea->setId($tarea['id']);
				$myTarea->setNombre($tarea['nombre']);
				$myTarea->setAutor($tarea['autor']);
				$myTarea->setAnio_edicion($tarea['anio_edicion']);
				$listaTareas[]=$myTarea;
			}
			return $listaTareas;
		}

		// método para eliminar un tarea, recibe como parámetro el id del tarea
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM tareas WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un tarea, recibe como parámetro el id del tarea
		public function obtenerTarea($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM tareas WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tarea=$select->fetch();
			$myTarea= new Tarea();
			$myTarea->setId($tarea['id']);
			$myTarea->setNombre($tarea['nombre']);
			$myTarea->setAutor($tarea['autor']);
			$myTarea->setAnio_edicion($tarea['anio_edicion']);
			return $myTarea;
		}

		// método para actualizar un tarea, recibe como parámetro el tarea
		public function actualizar($tarea){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE tareas SET nombre=:nombre, autor=:autor,anio_edicion=:anio  WHERE ID=:id');
			$actualizar->bindValue('id',$tarea->getId());
			$actualizar->bindValue('nombre',$tarea->getNombre());
			$actualizar->bindValue('autor',$tarea->getAutor());
			$actualizar->bindValue('anio',$tarea->getAnio_edicion());
			$actualizar->execute();
		}
	}
?>