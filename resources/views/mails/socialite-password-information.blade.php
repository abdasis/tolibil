@component('mail::message')
# Selamat Datang Di {{ config('app.name') }}

Berikut kami informasikan terkait informasi akun yang kamu gunakan untuk login

<strong>Username:</strong> {{ $user->email }} <br>
<strong>Password:</strong> {{ $user->password }}

Jangan pernah memberikan password kepada siapapun.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
