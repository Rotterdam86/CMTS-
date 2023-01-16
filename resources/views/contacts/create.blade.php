@extends('layouts.base', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Prendre Contact SVP !</h2>
                <p class="text-muted">Si vous avez des difficultés avec le service, Obtenez de l'aide ! <a href="mailto:christcelo@gmail.com">ici</a></p>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="nom" class="control-label">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="control-label">Prenom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="sms" class="control-label sr-only">Message</label>
                        <textarea class="form-control" required="required" name="sms" id="sms" cols="10" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Envoyer &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop