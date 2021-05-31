<!Doctype html>
<html>
<head>
<title>home</title>
</head>
<h2>Welcome!</h2>
</n>
</n>
<div class="table">
<table class="table table-hover">
  <thead class="thead-light">
<tr>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th></th>
<th></th>
</tr>

<!-- @foreach ($accounts as $account) -->
 
<tr>
<td><input type="text" id="id" name="account_id" value="{{$account->id}}"></td>
<td>{{$account->firstName}}</td>
<td>{{$account->lastName}}</td>
<td>{{$account->address}}</td>
<td>
<form action="{{route('deleteAccount', $account->id)}}" method="POST">  
@csrf
<input type="submit" class='btn btn-danger' value="Delete">
</form>
</td>
<td>
<form action="{{route('editAccount', $account->id)}}" method="GET">  
<input type="submit" class='btn btn-outline-success' value="Edit">
</form>
</td>
</tr>
@endforeach
</table>
</div>
</html>