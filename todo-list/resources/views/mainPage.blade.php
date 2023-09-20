<!DOCTYPE html>
<html lang="en">
<style>
    * {
        box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
        float: left;
        width: 30%;
        padding: 10px;
        height: 300px; /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>
<link rel="stylesheet" href="../css/app.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo app</title>

</head>
<body class="antialiased">
<div>
    <h1> TODO list </h1>
    <div class="row">
        <div class="column">
            <h3> Uncompleted Items </h3>
            @foreach($uncompletedlistItems as $listItem)
                <div class="flex" style="align-items: center;">
                    <p>Item: {{ $listItem -> name }}</p>
                    <!-- form $listItem->id passed as $id -->
                    <form method="post" action="{{ route('markComplete', $listItem->id) }}" accept-charset="UTF-8">
                        {{ csrf_field() }} <!-- security purposes -->
                        <button type="submit" style="max-height: 25px;margin-left: 20px;">Mark complete</button>
                    </form>
                </div>

            @endforeach
        </div>
        <div class="column">
            <h3> Completed Items </h3>
            @foreach($completedlistItems as $listItem)
                <div class="flex" style="align-items: center;">
                    <p>Item: {{ $listItem -> name }}</p>
                </div>
            @endforeach
        </div>
        <div class="column">
            <h3> New todo item </h3>
            <!-- all form passed as Request $request -->
            <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
                {{ csrf_field() }} <!-- security purposes -->
                <label>
                    <input type="text" name="listItem">
                </label>
                <br>
                <button>Add</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
