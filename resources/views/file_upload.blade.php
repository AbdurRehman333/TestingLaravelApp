<h2> Upload a file </h2>

@if ( session('file_path') )

    {{-- {{session('file_path')}} --}}
    {{session('file_path')}}
    <h3> Uploaded</h3>

@endif

{{-- static pic  --}}
<img src="/images/d.png" alt="" height="100px" width="150px">


{{-- here we are unable to get out of public folder --}}
{{-- <img src="../../../../d.png" alt="storage" height="100px" width="150px" > --}}



<form action="file_uploaded" method="POST" enctype="multipart/form-data" >
    @csrf
    <input type="file" name="quote">
    <button type="submit"> Upload </button>
</form>