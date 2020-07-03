@component('mail::message')
# Welcome to instaClone

Thanks for registering! Please click the button below to confirm your account.

@component('mail::button', ['url' => ''])
Confirm Account
@endcomponent

Thanks from the hive mind at<br>
{{ config('app.name') }}
@endcomponent
