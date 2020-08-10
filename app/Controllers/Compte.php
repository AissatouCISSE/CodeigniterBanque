<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\CompteModel;

 
class Compte extends Controller
{
 

    public function index()
    {    
        $model = new CompteModel();
        //$data['compte'] = $model->orderBy('id', 'DESC')->findAll();
        //var_dump($data);
        $user ['compte']  = $model->findAll();
        //var_dump($user);
       
        return view('compte', $user);
    }  
    
    public function create()
    {    
        return view('create-compte');
    }

    public function store()
    {  
 
        helper(['form', 'url']);
        $model = new CompteModel();
        $data = [
 
            'numAgence' => $this->request->getVar('numAgence'),
            'numCompte'  => $this->request->getVar('numCompte'),
            'cleRib' => $this->request->getVar('cleRib'),
            'idclient'  => $this->request->getVar('idclient'),
            ];
            
            //
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('public/index.php/compte') );
    }

    
 
}    
 
    