<?php
App::uses('Component','Controller');
	class UploadComponent extends Component{

		public function upload($data = null){
			if(!empty($data)){
				$filename = $data['name'];
				$file_tmp_name = $data['tmp_name'];
				$dir = WWW_ROOT.'files'.DS.'datasheet';
				$allowed = array('pdf','jpg','png');
				if(!in_array(substr(strrchr($filename, '.'), 1), $allowed)){
					throw new NotFoundException('Erro ao processar requisição',1);
				}elseif(is_uploaded_file($file_tmp_name)){
					move_uploaded_file($file_tmp_name,$dir.DS.$filename);
				}
			}
		}
	}
?>