<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="content">
    <div class="title m-b-md">
        Laravel Cusstom Validation
    </div>




    <div class="form-custom-validation">
        <form  action="{{ route('form.submit') }}" method="GET">
            <label for="name">Name: </label>
            <input id="name" name="name" type="text" placeholder="Enter the full name">
            <br>
            <label for="age">Age: </label>
            <input id="age" name="age" type="text" placeholder="Enter the age">
            <br>
            <button type="submit">Submit</button>
        </form>
        <div class="error-message">
            @if ($errors->any())
                @foreach($errors->all() as $nameError)
                    <p style="color:red">{{ $nameError }}</p>
                @endforeach
            @endif
            <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>
        </div>
    </div>
</div>


</body>
</html>


