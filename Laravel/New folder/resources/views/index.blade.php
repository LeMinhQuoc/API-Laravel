<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List of users</h2>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      @foreach($user as $user)
      <tr>
        <td>{{ $user->name}}</td>
        <td>{{ $user->password}}</td>   
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>