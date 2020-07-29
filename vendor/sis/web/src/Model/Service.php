<?php 

	namespace Sisweb\Model;

	use \Sisweb\Model;
	use \Sisweb\DB\Database;

	/**
	 * Classe para instanciamento de Serviços
	 */
	class Service extends Model{
		
		public function insert(){
			$database = new Database();
			$results = $database->select(
				"INSERT INTO public.tb_services (pkservice, txnameservice, txdescriptionservice, vlprice)
					VALUES (:pkservice, :txnameservice, :txdescriptionservice, :vlprice);", array(
						":pkservice"=>$this->getpkservice(),
						":txnameservice"=>$this->gettxnameservice(),
						":txdescriptionservice"=>$this->gettxdescriptionservice(),
						":vlprice"=>$this->getvlprice()
					));

		}//Fim método insert

		public function update(){
			$database = new Database();
			$results = $database->select("UPDATE public.tb_services SET txnameservice = :txnameservice, txdescriptionservice = :txdescriptionservice, vlprice = :vlprice
				WHERE pkservice = :pkservice;", array(
						":pkservice"=>$this->getpkservice(),
						":txnameservice"=>$this->gettxnameservice(),
						":txdescriptionservice"=>$this->gettxdescriptionservice(),
						":vlprice"=>$this->getvlprice()
					));

		}//Fim método update

		public function delete(){
			$database = new Database();
			$results = $database->select("DELETE FROM tb_services ss WHERE ss.pkservice = :pkservice",array(
				":pkservice"=>$this->getpkservice()
			));
		}//Fim método delete

		public function get(){
			$database = new Database();
			$results = $database->select(
				"SELECT * FROM tb_services WHERE pkservice = :pkservice", array(
				":pkservice"=>$this->getpkservice()
			));

			$data = $results[0];

			$this->setData($data);
		}//Fim método get

		public function getMaxId(){
			$database = new Database();
			$idmax = $database->select("SELECT MAX(pkservice) FROM tb_services;");
			foreach ($idmax as $key => $value) {
				$idm = $value['max'];
			}
			$id = $idm + 1;
			$this->setpkservice($id);
		}//Fim método getMaxId

		public function listAll(){
			$database = new Database();
			return $database->select("SELECT * FROM tb_services;");		
		}//Fim método listAll
		
	}//Fim da Classe Service


 ?>