<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <input type="email" name="email" placeholder="Enter your email" requiredi
    <button type="submit">Send Password Reset Link</button>
</form>
