<h1>Enter your data</h1>
@include('header2')
<form action="save_data_in_dB" method="POST" >
    @csrf 
    <br> <br>
    Name: 
    <input type="text" name="username"> <br><br>
    Sclass Must be int: <br>
    Class:
    <input type="text" name="class"> <br> <br> 
    Phone:
    <input type="text" name="phone"> <br><br>
    <button type="submit"> Submit </button>
</form>