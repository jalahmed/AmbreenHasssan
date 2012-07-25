<?php
require_once ("config/connection.php");
//require_once ("includes/helper.php");
require_once ("helpers/helper.php");
class userDAO {
    public function verifyAdminlogin($user){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "select * from users where user_name='$user'";
            $result = mysql_query($sql,$connection);
            $ans=  mysql_fetch_array($result);
            if($ans){
                return "1";
            }else{
                return "0";
            }
            
            $database->close();
        }catch(Exception $e) {

        }
    }
    public function logAdmin($user,$password){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "select * from users where user_name='$user' AND user_password='$password'";
            $result = mysql_query($sql,$connection);
            $ans=  mysql_fetch_array($result);
            if($ans){
                return "1";
            }else{
                return "0";
            }
            
            $database->close();
        }catch(Exception $e) {

        }
    }
    public function add_category($cat_name){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "insert into categories(category_name) values('$cat_name')";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
    public function view_category(){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "Select * from categories order by category_name ASC";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
    public function get_category($id){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "Select * from categories where cat_id = '$id'";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
    public function update_category($id,$cat_name){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "update categories set category_name = '$cat_name' where cat_id = '$id'";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
    public function delete_category($id){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "delete from categories where cat_id = '$id'";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
    public function view_albums(){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "select albums.*, categories.* from albums
                INNER JOIN categories on categories.cat_id = albums.cat_id";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
    public function add_album($album_name,$category,$created_date,$status){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "insert into albums(album_name,created_date,status,cat_id) VALUES('$album_name','$created_date','$status','$category')";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
    public function delete_album($id){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql_images = "delete from images where album_id = '$id'";
            $result_images = mysql_query($sql_images,$connection);
            
            $sql = "delete from albums where album_id = '$id'";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
    public function update_album($id,$album_name,$status){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "update albums set album_name = '$album_name',status='$status' where album_id = '$id'";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
       public function get_album($id){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "select albums.*, categories.* from albums
                INNER JOIN categories on categories.cat_id = albums.cat_id
                where albums.album_id = '$id'";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
       public function get_album_images($id){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "select images.*from images
            where album_id = '$id'";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
      public function add_album_img($image_name,$album_id,$display_on,$album_cover){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql_update = "update images set album_cover = '0' where album_id = '$album_id'";
            $result_update = mysql_query($sql_update,$connection);
            
            $sql = "insert into images(album_id,image_name,display_on,album_cover) VALUES('$album_id','$image_name','$display_on','$album_cover')";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
       public function get_images_gallery(){
         try {
            $database = new connection();
            $connection = $database->getConnection();
            $sql = "select images.*from images
            where display_on = '1'";
            $result = mysql_query($sql,$connection);
            $database->close();
            return $result;
        }catch(Exception $e) {

        }
    }
}

?>
