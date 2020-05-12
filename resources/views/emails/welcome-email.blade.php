@component('mail::message')
# Welcome to Instagram

This is a community of a fellow developers adn we love that you have joined us.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Click here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
