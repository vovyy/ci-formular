<?php
namespace App\Controllers;
use \Codeigniter\Controller;
use Config\Validation;
use App\Models\Main_model;
use App\Controllers\database;
class Pages extends BaseController
{



	public function view(){
helper(['form', 'url']);

		$page = "home";

		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
		   show_404();
		}
		
		$data['title'] = "Vítejte na mém webu";
		

		echo view('templates/header', $data);
		echo view('pages/'.$page, $data);
		echo view('templates/footer');


}

	public function create()
    {
		$page = "home";  
 
    helper(['form', 'url']);
         
        $val = $this->validate([
			'jmeno' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'heslo' => 'required',
			'heslo_znova' => 'required|matches[heslo]',
			'pohlaví' => 'required'

			]);
 
        $model = new Main_model();
		if (!$val)
        {
 
            echo view('pages/home'
			, [
                   'validation' => $this->validator
            ]);
 
        }
		else{
       $page = 'hotovo';
            $model->save([
                'jmeno' => $this->request->getVar('jmeno'),
                'email'  => $this->request->getVar('email'),
                'heslo'  => $this->request->getVar('heslo'),
                'heslo_znova'  => $this->request->getVar('heslo_znova'),
				'pohlaví'  => $this->request->getVar('pohlaví')
				]);
 
				
			echo view('pages/home')
			;
				
			}
		}
}