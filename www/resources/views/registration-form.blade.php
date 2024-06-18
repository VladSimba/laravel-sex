<x-header></x-header>
<form method="post" action="{{ route('registration-form-processor') }}">
    @csrf
    <input name="name" type="text" placeholder="Логин">
    <br>
    @error('name')
    @enderror
    <input name="email" type="email" placeholder="email">
    <br>
    @error('email')
    @enderror
    <input name="password" type="password" placeholder="Пароль">
    <br>
    @error('password')
    @enderror
    <input name="password_confirmation" type="password" placeholder="Повторить пароль">
    <br>
    @error('password_confirmation')
    @enderror
    <button type="submit">Cохранить</button>
</form>
