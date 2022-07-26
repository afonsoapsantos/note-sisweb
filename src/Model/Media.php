<?php 

	namespace Sisweb\Model;
	use \Sisweb\Model;
	use \Sisweb\DB\Database;

	/**
	 * Classe que instacia os objetos do tipo Media
	 * Criada 09/12/20
	 * Autor: Afonso Santos
	 */
	class Media extends Model{

		const ERROR = "Error";
		const SUCCESS = "Success";
		
		public function getMaxId(){
			$db = new Database();
			$idm = $db->select("SELECT MAX(id) FROM tb_media;");
			foreach ($idm as $key => $value) {
				$max = $value['max'];
			}
			$id = $max + 1;
			$this->setidmedia($id);
		}

		public function get(){
			$db = new Database();
			$get = $db->select(
				"SELECT * FROM tb_media AS m WHERE m.id = :id;",array(
					":id"=>$this->getid()
			));
			$this->setData($get[0]);
		}

		public function create(){
			$db = new Database();
			$create = $db->query(
				"INSERT INTO public.tb_media(id, txname, txlocal, txdescription, createdat, updatedat)
				VALUES (:id, :txname, :txlocal, :txdescription, :createdat, :updatedat);",
				[
					":id"=>$this->getid(),
					":txname"=>$this->gettxname(),
					":txlocal"=>$this->gettxlocal(),
					":txdescription"=>$this->gettxdescription(),
					":createdat"=>$this->getcreatedat(),
					":updatedat"=>$this->getrequestfk()
				]
			);
			$this->setData($create[0]);
			$this->setSuccess("Created");
		}//END

		public function delete(){
			$db = new Database();
			$db->select("DELETE FROM tb_mediarequest mr WHERE mr.requestfk = :idrequest",array(
				":idrequest"=>$this->getid()
			));
			$this->setSuccess("Deleted");
		}

		public function update(){
			$db = new Database();
			$update = $db->query(
				"UPDATE tb_media AS m
					SET txname=:txname, txlocal=:txlocal, txdescription=:txdescription, 
						createdat=:createdat, updatedat=:updatedat 
					WHERE m.id = :id",
				[
					":id"=>$this->getid(),
					":txname"=>$this->gettxname(),
					":txlocal"=>$this->gettxlocal(),
					":txdescription"=>$this->gettxdescription(),
					":createdat"=>$this->getcreatedat(),
					":updatedat"=>$this->getrequestfk()
				]
			);
			$this->setData($update[0]);
			$this->setSuccess("Updated");
		}

		public function read(){
			$db = new Database();
			return $db->select(
				"SELECT * FROM tb_media;"
			);
		}

		public function getStatus(){
			$db = new Database();
			return $db->select("SELECT * FROM tb_status s WHERE s.idstatus = :idstatus;",
				array(
					":idstatus"=>$this->getidstatus()
				));
		}

		public static function getIdmediaByCustomerRequest($idcustomer, $idrequest){

			$db = new Database();
			$idmedia = $db->select("SELECT idmedia FROM tb_mediarequest mrt WHERE mrt.customerfk = :customerfk AND mrt.requestfk = :requestfk;",
			array(
				":customerfk"=>$idcustomer,
				":requestfk"=>$idrequest
			));
			
			return $idmedia;
		}

		public static function listAllByRequest($pkrequest){
			$db = new Database();
			$results = $db->select(
				"SELECT * FROM tb_mediarequest mr WHERE mr.requestfk = :pkrequest", array(
					":pkrequest"=>$pkrequest
				)
			);

			return $results;
		}

		public static function listAllByOrder($pkorder){
			$db = new Database();
			$results = $db->select(
				"SELECT * FROM tb_mediaorders mo WHERE mo.orderfk = :pkorder", array(
					":pkorder"=>$pkorder
				)
			);

			return $results;
		}
		
		public static function listAllByOrderOpen($pkorder){
			$db = new Database();
			$results = $db->select(
				"SELECT * FROM tb_mediaorders mo 
					INNER JOIN tb_statusorder so ON so.pkstatus = 1
					WHERE mo.requestfk = :pkorder", array(
					":pkorder"=>$pkorder
				)
			);

			return $results;
		}

		public function setSuccess($msg){
			$_SESSION[Media::SUCCESS] = $msg;
		}

		public function getSuccess(){
			$msg = (isset($_SESSION[Media::SUCCESS]) && $_SESSION[Media::SUCCESS]) ? $_SESSION[Media::SUCCESS] : '';
			Media::clearSuccess();
			return $msg;
		}

		public static function clearSuccess(){
			$_SESSION[Media::SUCCESS] = NULL;
		}

		public static function setError($msg){
			$_SESSION[Media::ERROR] = $msg;
		}

		public static function getError(){
			$msg = (isset($_SESSION[Media::ERROR]) && $_SESSION[Media::ERROR]) ? $_SESSION[Media::ERROR] : '';
			Media::clearError();
			return $msg;
		}

		public static function clearError(){
			$_SESSION[Media::ERROR] = NULL;
		}

	}


 ?>