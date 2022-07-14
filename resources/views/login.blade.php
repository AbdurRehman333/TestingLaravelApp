@include('header2')
<h1> Login Form </h1>
<form action="login_form_submitted" method="post">
    @csrf
    <input type="text" name="username"> <br> 
    <span> @error('username'){{$message}}@enderror </span>
    <br> 
    <input type="text" name="password"> <br>
    <span> @error('password'){{$message}}@enderror </span>
    <br> 
    <button type="submit"> Submit </button>
</form>