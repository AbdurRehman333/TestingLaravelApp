
<!-- <x-header data="my header"/> -->
<x-header data="Its not About2 header, Its params"/>

<h1>Hellow <?php echo $name; ?> </h1>

@foreach ($users as $user)
    <p> {{ $user }}</p>
@endforeach

<!-- @foreach ($users as $user)
    <p> {{ $user }}</p>
@endforeach -->