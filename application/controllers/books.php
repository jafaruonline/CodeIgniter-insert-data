<?
class Books extends CI_Controller{

  function Books(){
	parent::Controller();
  }
	
  function main(){
	$this->load->model('books_model');
	$data = $this->books_model->general();
		
	$this->load->view('books_main',$data);
  }
	
  function input(){

	$this->load->helper('form');  
	$this->load->helper('html');  	
	$this->load->model('books_model');
	
	if($this->input->post('mysubmit')){
		$this->books_model->entry_insert();
	}	
	
	$data = $this->books_model->general();
				
	$this->load->view('books_input',$data);	
  }
  
}
?>	
