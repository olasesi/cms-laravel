@component('mail::message')
# Password reset

Here is your password reset link. Please click the "Reset Password" button below or click the link to reset your password.

@component('mail::button', ['url' => url('/admin/reset-password/'.$reset->token)])
Reset Password
@endcomponent



<a href="{{url('/admin/reset-password/'.$reset->token)}}">{{url('/admin/reset-password/'.$reset->token)}}</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
