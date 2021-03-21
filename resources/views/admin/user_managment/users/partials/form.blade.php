<label for="">Full Name</label>
<input type="text" class="form-control" name="name" placeholder="Full Name" value="@if(old('name')){{old('name')}}@else{{$user->name ?? ""}}@endif" required>

<label for="">Email</label>
<input type="email" class="form-control" name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{$user->email ?? ""}}@endif" required>

<label for="">Password</label>
<input type="password" class="form-control" name="password">

<label for="">Confirm Password</label>
<input type="password" class="form-control" name="password_confirmation">

<label for="">role</label>
<input type="text" class="form-control" name="role_id">


<input class="btn btn-primary" type="submit" value="Save">
