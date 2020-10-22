<?php

class Controller {

	public static function StartSite() {
        $arr = News::getLast10News();
        //print_r($arr);
        include_once 'view/start.php';
        return;
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllNews() {
        $arr = News::getAllNews();
        include_once 'view/allnews.php';
    }

    public static function NewsByCatID($id) {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }

    public static function NewsByID($id) {
        $n = News::getNewsByID($id);
        include_once 'view/readnews.php';
    }

    public static function error404() {
        include_once 'view/error404.php';
    }            
 
    public static function InsertComment($c,$id){
        Comments::InsertComment($c,$id);
        //self::NewsByID($id);
        header('Location:news?id='.$id.'#ctable');
    } 


    public function registerForm()
    {
    	include_once('view/formRegister.php');
    }
    public function registerUser()
    {
    	$result = Register::registerUser();

    	include_once('view/answerRegister.php');
    }  



}