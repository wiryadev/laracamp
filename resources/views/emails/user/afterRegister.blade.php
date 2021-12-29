@component('mail::message')
# Welcome

Hi, {{ $user->name }}!
<br>
Welcome to Laracamp, your account has been created. Now you can choose whatever camp suits you best.

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
