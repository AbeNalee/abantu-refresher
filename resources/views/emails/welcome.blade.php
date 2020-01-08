@component('mail::message')
# Hi Newbie

You have just begun the journey that will change your life
@component('mail::button', ['url' => ''])
Click me
@endcomponent

See you on the battle field,<br>
{{ config('app.name') }}
@endcomponent
