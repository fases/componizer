<?php
App::uses('Component','Controller');
	class UploadComponent extends Component{

		public function upload($data = null){
			if(!empty($data)){
				$path = WWW_ROOT . 'files/datasheet/';
      			$ext = substr(strtolower(strrchr($data['name'], '.')), 1);
      			$arr_ext = array('png', 'jpg','pdf');
      			if(file_exists($path . $data['name'])){
        			return false;
      			}else if (in_array($ext, $arr_ext)) {
          			move_uploaded_file($data['tmp_name'], $path . $data['name']);
          			return true;
      			}else{
          			return false;
      			}
			}
		}

		public function delete_file($data = null){
			$path = WWW_ROOT . 'files/datasheet/';
       		if(file_exists($path . $data)){
          		unlink($path . $data);
       		}
		}
	}
?>