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
  <a href="{{route('student_create')}}" class="btn btn-primary mt-5">Create</a>
    <table class="table table-striped mt-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Contact No</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student )
              <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->contact_No}}</td>
                <td>{{$student->address}}</td>
                <td><a href="{{route('student_edit',$student->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('student_delete',$student->id)}}" class="btn btn-danger">Delete</a></td>
              </tr>
            @endforeach


        </tbody>
      </table>
</body>
</html>
