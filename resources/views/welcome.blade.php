<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title> Blue paprica task </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    </head>
    <body>
        <form method="POST" action="{{ route('main.store') }}" enctype="multipart/form-data" id="exampleForm">
            @csrf
            <input type="text" name="name" id="name" autofocus required>
            <label for="name"> Name:  </label>
            <input type="text" name="surname" id="surname" required>
            <label for="surname"> Surname:  </label>
            <input type="file" name="image" accept="image/*" id="image">
            <label for="image"> Image:  </label>

            <button id="btnSubmit" type="submit"> Send </button>
        </form>

        <button>
        <a href="{{ route('example.index') }}"> Check the content </a>
        </button>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#exampleForm').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                console.log(formData.get('image'));
                if (formData.get('image').name === ''){
                    formData.delete('image');
                }
                console.log(formData.get('image'));

                $.ajax({
                    type:'POST',
                    url: `{{ route('main.store') }}`,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (response) => {
                        this.reset();
                        console.log(response);
                    },
                    error: function(response){
                        console.log(response);
                    }
                });
            });
        </script>
    </body>
</html>
