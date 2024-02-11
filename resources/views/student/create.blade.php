<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container">
    <form class="mt-5" action="{{route('student_store')}}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <div class="form-group">
          <label for="exampleInputEmail1">Student First Name : </label>
          <input type="text"name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Last Name : </label>
            <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Student Contact No :</label>
          <input type="number" name="contact_No" class="form-control" id="exampleInputPassword1" placeholder="Contact Number">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Student Address :</label>
            <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Student Birth Day :</label>
            <input type="text" name="Bday" class="form-control" id="exampleInputPassword1" placeholder="Enter Birthday">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
</body>
</html>
