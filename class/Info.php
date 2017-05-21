<?php
	class Info extends Db{
		
	
		public function add_information($it,$ifd,$tkn){
			$data = array($it,$ifd);
			$this->query = $this->handeller->prepare("INSERT INTO `information` (`Information_title`,`Information_description`)VALUES(?, ?) ");
			if($this->query->execute($data)){				
			return $this->url_return(array('information.php','information added','success',$tkn));
			}else{
				return $this->url_return(array('information.php','information Not added','error',$tkn));
				}
		}
		
		public function information_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `information`");
			foreach($this->arrays as $us){
				$p = array();
				$p['id'] = $us['Information_id'];
                $p['title'] = $us['Information_title'];
				$p['description'] = $us['Information_description'];
				array_push($return,$p);			
				}
			return $return;	
		}
	
		public function show_edit_info($info_id){
			$return = array();
			$cat = $this->handeller->query("SELECT * FROM `information` WHERE `Information_id` = '$info_id'");
					foreach($cat as $ec){
						$p = array();							
						$p['title'] = $ec['Information_title'];
						$p['info_des'] = $ec['Information_description'];
						array_push($return,$p);
					}
					
			return $return;		
		}
		
		
		public function update_info($it,$ifd,$tkn,$info_id){
			$seo_url = $this->get_clean_url($it);
			$data = array($it,$ifd,$info_id);
			$this->arrays = $this->handeller->prepare("UPDATE `information` SET `Information_title`= ?,`Information_description`= ? WHERE `Information_id` = ? ");
				if($this->arrays->execute($data)){
					$this->url_return(array('information.php','information Update', 'success',$tkn));
					}else{
						$this->url_return(array('add_information.php','information Not Update', 'error',$tkn));
					}
			}
				
		public function delete_information($tkn){
			foreach($_POST['check_list'] as $check) {
				$this->arrays3 = $this->handeller->query("SELECT * FROM `information` WHERE Information_id ='$check'");
				 $this->arrays = $this->handeller->prepare("DELETE FROM `information` WHERE Information_id = ? ");			 		
					if($this->arrays->execute(array($check))){										
						 $this->url_return(array('information.php','Information has been Deleted','success',$tkn));
						}else{
							 $this->url_return(array('partners.php','Information has Not Deleted','error',$tkn));
						}
				}
		
		}
	
	}

?>