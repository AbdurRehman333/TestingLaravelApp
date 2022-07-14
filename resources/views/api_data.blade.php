<h1>API DATA</h1>

<table>
    <tr>
        <td> ID </td>
        <td> Email </td>
        <td> Firstname</td>
        <td> lastname </td>
        <td> Email </td>
    </tr>
    @foreach($collection as $item)
    <tr>
        <td> {{$item['id']}} </td>
        <td> {{$item['email']}} </td>
        <td> {{$item['first_name']}}</td>
        <td> {{$item['last_name']}} </td>
        <td> <img src={{$item['avatar']}} alt=""> </td>
    </tr>
    @endforeach

</table>