@extends('layouts.app')
@section('content')

    <form method="POST" action="{{ route('main.store') }}" enctype="multipart/form-data" id="exampleForm">
        @csrf
        <div class="form-row">
            <label for="name"> Name: </label>
            <input type="text" name="name" id="name" class="form-control" autofocus required>
        </div>
        <div class="form-row">
            <label for="surname"> Surname: </label>
            <input type="text" name="surname" id="surname" class="form-control" required>
        </div>
        <div class="form-row">
            <div class="custom-file">
                <input type="file" name="image" accept="image/*" id="image" class="custom-file-input">
                <label class="custom-file-label"> Image: </label>
            </div>
        </div>
        <div class="form-row">
            <button id="btnSubmit" type="submit" class="btn btn-primary btn-lg mt-3"> Send</button>
        </div>
    </form>

    <div class="form-row">
        <p class="lead" role="alert">
            <a href="{{ route('example.index') }}" class="btn btn-secondary"> Check the content </a>
        </p>
    </div>
    <div class="form-row">
        <p class="lead" role="alert" id="msg">

        </p>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#exampleForm').submit(function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            if (formData.get('image').name === '') {
                formData.delete('image');
            }

            $.ajax({
                type: 'POST',
                url: `{{ route('main.store') }}`,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    this.reset();
                    $('#msg').text('Data sent');
                    console.log(response);
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });
    </script>
@endsection
