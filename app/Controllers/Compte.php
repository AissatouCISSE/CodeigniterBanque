<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\CompteModel;
use App\Models\UserModel;

 
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
    {    $model = new UserModel();
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        return view('create-compte', $data);
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

    public function edit($idcompte = null)
    {
      
     $model = new CompteModel();
 
     $data['compte'] = $model->where('idcompte', $idcompte)->first();

     return view('edit-compte', $data);
     //return redirect()->to(base_url('public/index.php/edit-user', $data));
     //return $this->view->redirect("View/edit-liste");
    //return $this->liste();
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new CompteModel();
 
        $idcompte = $this->request->getVar('idcompte');
 
        $data = [
 
            'numAgence' => $this->request->getVar('numAgence'),
            'numCompte'  => $this->request->getVar('numCompte'),
            'cleRib' => $this->request->getVar('cleRib'),
            'idclient'  => $this->request->getVar('idclient'),
            ];
 
        $save = $model->update($idcompte,$data);
 
        return redirect()->to( base_url('public/index.php/compte') );
    }
 
    public function delete($idcompte = null)
    {
 
     $model = new CompteModel();
 
     $data['compte'] = $model->where('idcompte', $idcompte)->delete();
      
     return redirect()->to( base_url('public/index.php/compte') );
    }
    
 
}    
 
    