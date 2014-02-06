<?php
include '/model/model.php';
if ($_POST){
	setDb($_POST);
	}
include '/view/add.php';