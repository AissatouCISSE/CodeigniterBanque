<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use App\Models\UserModel;
 
class CompteModel extends Model
{
    protected $table = 'compte';
 
    protected $allowedFields = ['numAgence', 'numCompte' , 'cleRib' , 'idclient'];

    public function client()
    {    
        $model = new UserModel();
 
        $data['users'] = $model->$model->find('id');
        
    } 
}