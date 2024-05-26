@php
    $username = 'Ainisa Dinda';
    $role = 'Admin';
@endphp

@if ($role == 'Admin')
    <h3>Selamat data, {{$username}}! anda adalah seorang {{$role}}</h3>
@else
    <h3>selamat data, {{$username}}!</h3>
@endif
