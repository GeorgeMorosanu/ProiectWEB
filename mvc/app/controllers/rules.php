<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - app/controller.php

// sample application class
class rules
{

	function main()
	{
		KITE::render('rules');
	}

    function ruleslogat()
    { 
       
        $basket2 = KITE::getInstance('basket');
        $model = KITE::getModel('TWVerificare');
        $id=$basket2->UserId;
		$model->getUserName($id);
        KITE::render('ruleslogat');
    }

}


?>