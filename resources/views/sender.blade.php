<form action="{{route("post-sender")}}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="content">
    <input type="submit">
</form>
