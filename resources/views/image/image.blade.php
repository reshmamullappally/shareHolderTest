@if (session('success'))
    <strong>{{ session('success') }}</strong>
@endif
 
<form action="{{ url('store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <p>
       Upload Image: <input type="file" name="profile_image" />
    </p>
    <button type="submit" name="submit">Submit</button>
</form>