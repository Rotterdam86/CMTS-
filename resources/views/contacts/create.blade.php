@extends('layouts.base', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Prendre Contact SVP !</h2>
                <p class="text-muted">Si vous avez des difficultés avec le service, Obtenez de l'aide ! <a href="mailto:{{ config('ecmts.admin_support_email') }}">ici</a></p>
                <form action="{{ route('contact_path') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('nom') ? 'text-danger' : '' }}">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" required="required" value="{{ old('nom') }}"/>
                        {!! $errors->first('nom', '<strong><span class="form-text text-danger">:message</span></strong>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('prenom') ? 'text-danger' : '' }}">
                        <label for="prenom" class="control-label">Prenom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" required="required" value="{{ old('prenom') }}"/>
                        {!! $errors->first('prenom', '<strong><span class="form-text text-danger">:message</span></strong>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'text-danger' : '' }} ">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required="required" value="{{ old('email') }}"/>
                        {!! $errors->first('email', '<strong><span class="form-text text-danger">:message</span></strong>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('sms') ? 'text-danger' : '' }} ">
                        <label for="sms" class="control-label sr-only">Message</label>
                        <textarea class="form-control" required="required" name="sms" id="sms" cols="10" rows="10">{{ old('sms') }}</textarea>
                        {!! $errors->first('sms', '<strong><span class="form-text text-danger">:message</span></strong>') !!}
                    </div>
                    <div class="form-group d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Envoyer &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop