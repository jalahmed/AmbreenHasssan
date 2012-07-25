<?php

include_once 'application_controller.php';
require_once("dao/userDAO.php");
require_once("helpers/resize-class.php");
class adminController extends application_controller {

    function index(){
        return $this->render("views/users/login.php", compact('var', 'var2','var3'));
    }
    
    function admin_login() {
        
        unset($_SESSION['admin_session_id']);
        
        session_destroy();
        return $this->render("views/users/login.php", compact('var', 'var2','var3'));
    }

    function admin_login_check() {
        if(!isset($_SESSION['admin_session_id']) && $_SESSION['admin_session_id']=="")
            redirect_to(site_url()."admin/admin_login");
    }
    public function loginAdmin() {
        
        
        $user =  $_POST['user_name'];
     
        $password = $this->encrypt_password($_POST['user_pass']);
        
        
        

        $userDAO =new userDAO();
        $answer=$userDAO->verifyAdminlogin($user);
        
        if($answer!="1") {
            $_SESSION['message']= "Invalid Email Address!";
             redirect_to(site_url()."admin/admin_login");
        } else {

                $userDAO =new userDAO();
                $answer=$userDAO->logAdmin($user,$password);
                
                if($answer!="1") {
                   $_SESSION['message']= "Invalid Password";
                    redirect_to(site_url()."admin/admin_login");
                }  else {
                    $_SESSION['admin_name']=$user;
                    return $this->render("views/users/admin_home.php", compact('var', 'var2','var3'));
                }
            }


        }
    
    public function encrypt_password($password) {
        $encrypt_password=md5(md5(SALT.$password));
        return $encrypt_password;
    }
    public  function logoutadmin() {
        unset($_SESSION['admin_name']);
        
        session_destroy();
        redirect_to(site_url()."admin/admin_login");
        
// redirect_to(site_url()."home/index");

    }
    public  function admin_home() {
        
        if(!isset($_SESSION['admin_name'])){
             redirect_to(site_url()."admin/admin_login");
        }
        
        return $this->render("views/users/admin_home.php", compact('var', 'var2','var3'));
}
    public  function admin_categories() {
          
        if(!isset($_SESSION['admin_name'])){
             redirect_to(site_url()."admin/admin_login");
        }
        
        return $this->render("views/users/admin_categories.php", compact('var', 'var2','var3'));
}
    public  function add_categories() {
        
        $cat_name = addslashes($_POST['cat_name']);
        $userDAO =new userDAO();
        $add_category=$userDAO->add_category($cat_name);
        redirect_to(site_url()."admin/view_categories");
}
    public  function view_categories() {
          
        if(!isset($_SESSION['admin_name'])){
             redirect_to(site_url()."admin/admin_login");
        }
        
        $userDAO =new userDAO();
        $categories=$userDAO->view_category();
        return $this->render("views/users/view_categories.php", compact('categories', 'var2','var3'));
}
    public  function edit_categories($id) {
        
        $userDAO =new userDAO();
        $categories=$userDAO->get_category($id);
        return $this->render("views/users/edit_category.php", compact('categories', 'var2','var3'));
}
    public  function edit_cat() {
        $cat_name = $_POST['cat_name'];
        $id = $_POST['cat_id'];
        $userDAO =new userDAO();
        $categories=$userDAO->update_category($id,$cat_name);
        redirect_to(site_url()."admin/view_categories");
}
    public  function delete_categories($id) {
        
        $userDAO =new userDAO();
        $categories=$userDAO->delete_category($id);
        if($categories){
            echo "1";
        }
}
    public  function view_albums() {
          
        if(!isset($_SESSION['admin_name'])){
             redirect_to(site_url()."admin/admin_login");
        }
        
        $userDAO =new userDAO();
        $albums=$userDAO->view_albums();
        return $this->render("views/users/view_albums.php", compact('albums', 'var2','var3'));
        
}
    public  function add_album() {
        $userDAO =new userDAO();
        $categories=$userDAO->view_category();
        return $this->render("views/users/add_album.php", compact('categories', 'var2','var3'));
        
}
    public  function add_album_record() {
        
        $album_name=$_POST['album_name'];
        $category=$_POST['category'];
        $created_date = date("Y-m-d");
        $status = $_POST['status'];
         $userDAO =new userDAO();
        $categories=$userDAO->add_album($album_name,$category,$created_date,$status);
        
        redirect_to(site_url()."admin/view_albums");
        
}
   public  function delete_album($id) {
        
        $userDAO =new userDAO();
        $categories=$userDAO->delete_album($id);
        if($categories){
            echo "1";
        }
}
    public  function edit_album($id) {
        
        $userDAO =new userDAO();
        $album=$userDAO->get_album($id);
        $categories=$userDAO->view_category();
        return $this->render("views/users/edit_album.php", compact('album', 'categories','var3'));
}
    public  function edit_album_record() {
        $album_name = $_POST['album_name'];
        $id = $_POST['album_id'];
        $status = $_POST['status'];
        $userDAO =new userDAO();
        $categories=$userDAO->update_album($id,$album_name,$status);
        redirect_to(site_url()."admin/view_albums");
}
    public  function manage_album($id) {
        $userDAO =new userDAO();
        $album=$userDAO->get_album($id);
        return $this->render("views/users/manage_album.php", compact('album', 'var2','var3'));
        
}
    public  function album_images($id) {
        $userDAO =new userDAO();
        $album_photos=$userDAO->get_album_images($id);
        $album=$userDAO->get_album($id);
        return $this->render("views/users/album_images.php", compact('album_photos', 'album','var3'));
        
}
    public  function add_album_images() {
       
//        echo "<pre>";
//        var_dump($_POST['gallery']);
//        die;
        
        $target_path = "public/gallery-images";
        $target_path_thumbnails = "public/gallery-images/thumbs";
        $album_id = $_POST['album_id'];
        $gallery = $_POST['gallery'];
        $cover_album = $_POST['album_cover'];
        $images = $_FILES['upload']['name'];
        
           foreach ($images as $key => $value) {
          $temp_image = $_FILES['upload']['tmp_name'][$key];
          $image_name = $_FILES['upload']['name'][$key];
          if (move_uploaded_file($temp_image, "$target_path/$image_name")) {
            $resizeObj = new resize($target_path . "/" . $image_name);
            $resizeObj->resizeImage(75, 75, 'crop');
            $resizeObj->saveImage($target_path_thumbnails . "/" . $image_name, 100);
            
            if(!empty($gallery)){
            if (in_array("$key", $gallery)) {
            $display_on = "1";
            }else{
            $display_on = "0";
            }
            }else{
                $display_on = "0";
            }
            
            if(!empty($cover_album)) {
            if (in_array("$key", $cover_album)) {
            $album_cover = "1";
            }else{
            $album_cover = "0";
        }
            }else{
                $album_cover = "0";
            }
            $userDAO =new userDAO();
            $album_images=$userDAO->add_album_img($image_name,$album_id,$display_on,$album_cover);
        } else {
            //echo"not uploaded";
        }
        }
        $userDAO =new userDAO();
        $album_photos=$userDAO->get_album_images($album_id);
        //return $this->render("views/users/album_images.php", compact('album_photos', 'var2','var3'));
        redirect_to(site_url()."admin/album_images/$album_id");
        
}

}


?>

