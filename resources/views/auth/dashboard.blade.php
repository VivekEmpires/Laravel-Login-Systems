<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-8" style="margin:20px 0px 0px 150px;">
                <h4 style="font-family:sans-serif; font-weight:bold;">Welcome To Dashboard</h4><hr>
               <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                    <td>{{$data['name']}}</td>
                    <td>{{$data['email']}}</td>
                    <td><a href="logout"class="btn btn-warning">Logout</a>
                    <a href="{{url('change-password')}}" class="btn btn-primary ">Change Password</a></td>
                </tr>
                @endforeach
</thbody>
</div>
</div>
</div>
</body>
</html>