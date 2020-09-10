<?php

namespace App\Http\Controllers;
use App\Compte;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function add () {
        return view('compte.add');
    }
    public function getAll()
    {
        return view('compte.list');
    }
    public function edit($Id)
    {
        return view('compte.edit');
    }
    public function update()
    {
        return $this->getAll();
    }
  
    public function delete($id)
    {
        return $this->getAll();
    }

    public function persist(Request $request)
    {
       // return $this->add();
        $compte=DB::table("comptes")->insert(array(

           "frais"=>$request->frais,
           "agence"=>$request->agence,
           "rib"=>$request->rib,
           "num_compte"=>$request->numero,
        ));
        return 1; 

}

 }
 
 












