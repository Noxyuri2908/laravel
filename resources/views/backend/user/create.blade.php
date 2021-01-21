<h2>Login Form</h2>
<style type="text/css">
	input{
		margin-bottom: 10px;
	}
</style>
<form action="{{ route('backend.user.update')}}" method="post">
	@method('put')
	@csrf
	<input type="email" name="email" placeholder="enter your gmail">
    <br>
    <input type="password" name="password" placeholder="enter your password">
    <br>
    <button type="submit"> Submit </button>
</form>