@component('mail::message')
# Password reset

Here is your password reset link. Please click the "Reset Password" button below or click the link to reset your password.

@component('mail::button', ['url' => 'localhost:8080/admin/reset-password/{{$token->token}}'])
Reset Password
@endcomponent

<a href="/admin/reset-password/{{$token->token}}">localhost:8080/admin/reset-password/{{$token->token}}</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
