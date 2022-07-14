<h1>Delete from Records</h1>
@include('header2') 
{{-- {{$data}} --}}
<br> <br>
<table border="1px" cellpadding='1px'>
    <tr>
        <td> Sid </td>
        <td> Name </td>
        <td> Class </td>
        <td> Phone </td>
        <td> Delete </td>
        <td> Update </td>
    </tr>
    @foreach ($data as $datum)
    <tr>
        <td> {{$datum['sid']}} </td>
        <td> {{$datum['sname']}} </td>
        <td> {{$datum['sclass']}} </td>
        <td> {{$datum['sphone']}} </td>
        <td> <a href="delete/{{$datum['sid']}}"> Delete </a> </td>
        <td> <a href="edit/{{$datum['sid']}}"> Edit </a> </td>
    </tr>
    @endforeach
</table>