<form action="/categories" method ="POST" enctype="multipart/form-data">
 @csrf
<input id="name" name="name"type="text">
<input id="icon" name="icon"type="file">
<button type="submit">submit</button>
</form>