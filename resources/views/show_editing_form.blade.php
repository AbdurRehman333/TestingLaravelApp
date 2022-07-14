<h1>Details</h1>
@include('header2')
<br> <br>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="sid" value="{{$data['sid']}}">
    Name : <input type="text" name="username" value="{{$data['sname']}}"> <br> <br>
    Class : <input type="text" name="class" value="{{$data['sclass']}}"> <br> <br>
    Phone : <input type="text" name="phone" value="{{$data['sphone']}}"> <br> <br>
    <button type="submit">Update</button>
</form>