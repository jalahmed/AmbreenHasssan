<?php

include_once 'application_controller.php';
require_once("dao/userDAO.php");

//include_once 'views/users/connectfacebook.php';
//require_once("helpers/EasyGoogleMap.class.php");
class usersController extends application_controller {

    public function index() {
         $userDAO =new userDAO();
         $gallery=$userDAO->get_images_gallery();
         
        return $this->render("views/users/index.php", compact('gallery', 'var2', 'var3'));
    }
    public function aboutus() {

        return $this->render("views/users/aboutus.php", compact('var', 'var2', 'var3'));
    }

    public function services() {
        return $this->render("views/users/services.php", compact('var', 'var2', 'var3'));
    }

    public function albums() {
        $userDAO =new userDAO();
         $gallery=$userDAO->get_images_gallery();
         $categories=$userDAO->view_category();
        return $this->render("views/users/albums.php", compact('gallery', 'categories', 'var3'));
    }

    public function contactus() {
        return $this->render("views/users/contactus.php", compact('var', 'var2', 'var3'));
    }

    public function albums_gallery() {
        return $this->render("views/users/album_gallery.php", compact('var', 'var2', 'var3'));
    }

}

?>
