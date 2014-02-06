<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '/model/model.php';
include '/view/login.php';
if($_POST){
	login($_POST);
	
	}