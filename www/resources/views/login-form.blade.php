<form method="post" action="{{ route('login-form-process') }}">
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

