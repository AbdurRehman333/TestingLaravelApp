@include('header2')

<h3>dB records in list</h3>

{{-- {{$data}} --}}

<table border="1px">
    <tr>
        <td>cid</td>
        <td>cname</td>
    </tr>
    @foreach ($data as $member)
    <tr>
        <td>{{$member['cid']}}</td>
        <td>{{$member['cname']}}</td>
    </tr>
    @endforeach
</table>

<span>
    {{$data->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>