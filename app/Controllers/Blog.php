<?php namespace App\Controllers;

class Blog extends BaseController
{

    function showme($slug){

        echo view('templates/header');
		echo view('blog/post');
		echo view('templates/footer');
    }
	//--------------------------------------------------------------------

}
