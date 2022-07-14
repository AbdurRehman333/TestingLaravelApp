<!-- <h1>Hi {{$name}} From View File, which is called by Controller with param </h1> -->
<hr>
@include('header2')
<hr>

<hr>
@include('hello')
<hr>

@foreach ( $users as $user)
    <p> {{$user}} </p>
@endforeach

<!-- @foreach ( $users as $user)
    <p> {{ $user }}</p>
@endforeach -->