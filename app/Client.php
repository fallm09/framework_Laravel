<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillabe = array('nom', 'adresse','email','telephone','salaire','profession','prenom');
    public static $rules = array('nom'=>'required|min:2',
                                 'adresse'=>'required|min:10',
                                 'email'=>'required|min:10',
                                 'telephone'=>'required|min:9',
                                 'salaire'=>'required|min:10',
                                 'profession'=>'required|min:5',
                                 'prenom'=>'required|min:6',    
                                );
    public function compte(){
        return $this->hasMany('App\Compte');
  }
  



}
   
