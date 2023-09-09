<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo app</title>

</head>
<body class="antialiased">
<div>
    <h1> TODO list </h1>

    @foreach($listItems as $listItem)
        <p>Item:{{ $listItem -> name }}</p>
    @endforeach

    <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
        {{ csrf_field() }}
        <label for="listItem">New todo item</label>
        <input type="text" name="listItem">
        <br>
        <button>Add</button>
    </form>
</div>
</body>
</html>
