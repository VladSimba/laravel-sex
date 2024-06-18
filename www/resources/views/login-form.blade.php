<x-header></x-header>
<form method="post" action="{{ route('login-form-processor') }}">
    @csrf

    <input name="email" type="email" placeholder="email">
    <br>
    @error('email')
    @enderror
    <input name="password" type="password" placeholder="Пароль">
    <br>
    @error('password')
    @enderror

    <button type="submit">Cохранить</button>
</form>
