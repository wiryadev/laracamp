@component('mail::message')
# Your Transaction Has Been Confirmed

Hi, {{ $checkout->user->name }}!
<br>
Now you can enjoy the benefits of <b>{{ $checkout->camp->title }}</b> camp. Happy Learning!

@component('mail::button', ['url' => route('user.dashboard')])
    My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
