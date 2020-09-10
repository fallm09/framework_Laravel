@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire de Compte pour les clients</div>

                <div class="card-body">
                <form method="POST" action='/compte/persist'>
                @csrf
                        <div class="form-group">
                        <label class="control-label" for="frais">Frais d'ouverture</label>
                        <input class="form-control" type="text" name="frais" id="frais" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="agence">Numero Agence</label>
                        <input class="form-control" type="text" name="agence" id="agence" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="rib">Cle rib</label>
                        <input class="form-control" type="text" name="rib" id="rib" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="compte">Numero Compte</label>
                        <input class="form-control" type="text" name="numero" id="numero" />
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="Envoyer" id="envoyer" value="Envoyer"/>
                        <input class="btn btn-danger"  type="reset" name="Annuler" id="annuler" value="Annuler"/>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection