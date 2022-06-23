<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> Blue paprica task </title>
</head>
<body>
<h1>
    Example Table
</h1>
<table class="table table-striped">
    <tr>
        <th> ID </th>
        <th> Name </th>
        <th> Surname </th>
        <th> Image </th>
    </tr>
    @empty($examples)
        <tr>
            <td colspan="6"> Table is empty </td>
        </tr>
    @endempty
    @foreach($examples as $example)
        <tr>
            <td> {{ $example->id  }} </td>
            <td> {{ $example->name  }} </td>
            <td> {{ $example->surname  }} </td>
            <td> <img src="{{ asset('storage/' . $example->path) }}" alt="{{ $example->path }}" width="150" height="150">  </td>
        </tr>
    @endforeach
</table>
</body>
</html>
