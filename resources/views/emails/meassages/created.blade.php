@component('mail::message')
# Hey Admin 

- {{ $sms->nom }} {{ $sms->prenom }} <br/>
- {{ $sms->email }}

@component('mail::panel')
    {{ $sms->sms }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
