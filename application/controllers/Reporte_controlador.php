  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Reporte_controlador extends CI_Controller { // Our Cart class extends the Controller class  
       
   public function __construct()
   {
        parent::__construct();
 
 
 $this->load->model('Reporte_model');   
   }
  
  function index(){
	   
     
     
       $data['query'] = $this->Reporte_model->acceder_reportes();
       // Select our view file that will display our products  
    
       $this->load->view('reporte_vista',$data);
       
       

    
   
  }
  
}