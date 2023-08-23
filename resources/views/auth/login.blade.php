<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/icon-7craft.png') }}">
    <link rel="stylesheet" href="{{ asset('css/login.style.css') }}">
    <title>7Finances - login</title>
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="{{ asset('images/logo-7craft.png') }}" alt="logo-7craft">
        </div>

        <form class="form-container" action="{{ route('authenticate') }}" method="post">
            @csrf
            <label for="email">Adresse Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
            @error('ids')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="submit" value="Se connecter">
        </form>

    </div>


</body>

</html>
