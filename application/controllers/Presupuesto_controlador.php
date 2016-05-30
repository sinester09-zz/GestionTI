  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Presupuesto_controlador extends CI_Controller { // Our Cart class extends the Controller class  
       
   public function __construct()
   {
        parent::__construct();
 
 
 $this->load->model('Presupuesto_model');   
   }
  
  function index(){
	   

   
  }
 
  
  function crear_presupuesto(){
	 
	 $this->load->view('presupuesto_vista'); 
	
	  
  }
  
  
  
}