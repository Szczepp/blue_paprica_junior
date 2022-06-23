<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title> Blue paprica task </title>
    </head>
    <body>
        <form method="POST" action="{{ route('main.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" id="name" autofocus required>
            <label for="name"> Name:  </label>
            <input type="text" name="surname" id="surname" required>
            <label for="surname"> Surname:  </label>
            <input type="file" name="image" accept="image/*" id="image">
            <label for="image"> Image:  </label>

            <input type="submit" value="Send">
        </form>
    </body>
</html>
