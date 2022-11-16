<form method="post" action="{{route('test.store')}}" enctype="multipart/form-data">
    @csrf
<input type="file" name="file[]" multiple accept="image/*">
<button type="submit">OK</button>

</form>
