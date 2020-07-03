@component('mail::message')
# Welcome to instaClone

Thanks for registering! Please click the button below to confirm your account.

@component('mail::button', ['url' => ''])
Confirm Account
@endcomponent

@endcomponent
