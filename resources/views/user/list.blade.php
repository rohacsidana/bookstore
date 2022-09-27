<h1>Felhasználók száma: {{$users->count()}}</h1>
@foreach ($users as $user)
<form action="/api/users/{{$user->id}}" method="post">
    {{csrf_field()}} <!-- külső támadás ellen véd -->
    {{method_field('get')}}
    <div class="form-group">
        <input type="submit" value="{{$user->id}}">
    </div>
</form>
@endforeach