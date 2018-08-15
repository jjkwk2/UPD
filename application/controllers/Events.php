<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct(){

    parent::__construct();
	$this->load->model('client_model');
    $this->load->database('default');
	$this->load->helper('url');

	}
	public function index()
	{
        $this->load->view('client/event_try.php');
        // ahref Services/filteredDetails/services_/ <-if filtered blog posts
	}
	
	public function uploadPics(){
		if(isset($_POST["submit"])){
			$check = getimagesize($_FILES["image"]["tmp_name"]);
			if($check !== false){
				$allowed_extensions = array("jpg","jpeg","png","gif");
    
				//File extension
				$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
			
				//Check extension
				if(in_array($ext, $allowed_extensions)) {
				   //Convert image to base64
				   $encoded_image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
				   $encoded_image = 'data:image/' . $ext . ';base64,' . $encoded_image;

        $clinsert=array(
			'E_TITLE'=>'One',
			'E_POST'=>'Water House: Cebu',
			'E_IMAGE'=>$encoded_image,
			'E_SLIDER_S'=>1,
			'E_STATUS'=>1
		);

		  $value = $this->client_model->uploadImg($clinsert);
		  if($value){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
			}
		}
	}
         
	}
	public function filteredEvents($getValue){
        //slider dynamic
        //once clicked "see more" pages only == based on the post's ID
        $data['view_tagged'] = $this->client_model->getEventPosts($getValue);
        $this->load->view('client/events_index.php',$data);
         
	}
	
}
