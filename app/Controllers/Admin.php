<?php namespace App\Controllers;
use App\Models\ExaminationsModel;

class Admin extends BaseController
{
	public function index()
	{
		echo view('templates/header.php');
		echo view('pages/admin.php');
		echo view('templates/footer.php');
	}


	public function examinations(){
	
		echo view('templates/header.php');
		
		
		$examinationmodel = new ExaminationsModel();
		$data = $examinationmodel->getExaminations();
				
		$experiment = [
			'meta' => 'Codeigniter 4 Post Page',
			'title' => 'This is a Awesome blog',
			'data' => $data
		];

		return view('pages/examinations.php', $experiment);

		echo view('templates/footer.php');

	}
}