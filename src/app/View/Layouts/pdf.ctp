<?php
	$this->response->type("Content-type: application/pdf");
    echo $this->fetch('content');
?>