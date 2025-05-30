<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
</head>
<body>
    <h2>Email Verification Required</h2>
    <p>We've sent a verification link to your email. Please check your inbox.</p>

    @if (session('message'))
        <p style="color: green;">{{ session('message') }}</p>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Resend Verification Email</button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
