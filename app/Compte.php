<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillabe = array('clients_id','users_id','frais','agence','rib','num_compte');
    public static $rules = array('client_id'=>'required|integer',
                                'users_id'=>'required|BigInteger',
                                'frais'=>'required|min=10',
                                'agence'=>'required|min=10',
                                'rib'=>'required|min=9',
                                'num_compte'=>'required|min=9',
                                
                               
                            );
    public function compte(){
        return $this->belongsTo('App\client');
    }




























}

