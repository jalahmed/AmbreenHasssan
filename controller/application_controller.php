<?php
session_start();
class application_controller{
    protected $variables_array = array();
 
    protected function root() {
        return dirname(__FILE__);
    }
    protected function render($file_name, $variables_array) {
        if(isset($variables_array)) {
            extract($variables_array); // Include given variables to use in a template
        }
        require_once($file_name);
    }
        public function login_admin($name,$id){
             $_SESSION['admin_name']=$name;
             $_SESSION['admin_session_id']=$id;
               return TRUE;
    }
          
    public function is_login(){

            if(isset($_SESSION['userid']) && $_SESSION['userid']!="")
                return TRUE;
            else
                // return false;
            redirect_to(site_url()."home/index");
//                return $this->render("views/users/index.php", compact('var', 'var2','var3'));
              //  redirect_to(site_url()."home/index");
    }
  
   
}
?>
