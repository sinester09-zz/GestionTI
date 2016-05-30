  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Inicio extends CI_Controller { // Our Cart class extends the Controller class  
       
   public function __construct()
   {
        parent::__construct();
             $this->load->model('reporte_model');
   }
  
  function index(){
	   
     
       // Select our view file that will display our products  
    $this->load->view('menu');
  
    
   
  }
  
}