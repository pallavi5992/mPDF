<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 public function __construct() {
        parent::__construct();
       
       
        $this->load->library('m_pdf');
        
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		 $rowdata = [];
		$html=$this->load->view('welcome_message',$rowdata,true);
		 $pdfFilePath = "download.pdf";
		  $this->m_pdf->pdf->WriteHTML($html);
		  $this->m_pdf->pdf->Output($pdfFilePath, 'D');
	}
}
