<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function add () {
        return view('client.add');
    }
    public function getAll()
    {
        return view('client.list');
    }
    public function edit($Id)
    {
        return view('client.edit');
    }
    public function update()
    {
        return $this->getAll();
    }
  
    public function delete($id)
    {
        return $this->getAll();
    }
    public function persist(Request  $request)
    {
      
       // echo $request->nom;
       //$client= new Client ();
       $client=DB::table("clients")->insert(array(
        "nom"=>$request->nom,
        "adresse"=>$request->adresse,
        "email"=>$request->email,
        "telephone"=>$request->telephone,
        "salaire"=>$request->salaire,
        "profession"=>$request->profession,
        "prenom"=>$request->prenom
       ));

       return 1;
    // $client->nom =$request->nom;
    // $client->adresse =$request->adresse;
    // $client->email =$request->email;
    // $client->telephone =$request->telephone;
    // $client->salaire =$request->salaire;
    // $client->profession =$request->profession;
    // $client->prenom =$request->prenom;
    // $leclient = $client->save();
       //return $this->add();
























    }
   


}





