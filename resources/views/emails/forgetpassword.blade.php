@component('mail::message')
# Forgot Password

Here is your password reset link. Click the "Reset Password" button below or click the link below it.



@component('mail::button', ['url' => ''])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
