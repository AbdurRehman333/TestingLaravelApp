@include('header2')

<h1>Adding Users Here</h1>
@if ( session('entered_name') )
    <h3 class="alert alert-success"> Username is entered! </h3>
@endif

{{-- this is correct syntax  --}}
{{-- @if ( session('user') )
    <h3 class="alert alert-success"> Username is entered! </h3>
@endif --}}

<form action="adding_user" method="POST">
    @csrf
    <input type="text" name="username">
    <input type="text" name="password">
    <button> Submit </button>
</form>