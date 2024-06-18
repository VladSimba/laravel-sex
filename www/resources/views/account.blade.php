<x-header></x-header>
<h1>Редактирование аккаунта</h1>
<form method="post" action="{{ route('edit-account-form-processor') }}">
    @csrf

    <input name="name" type="text" placeholder="Логин" value="{{ auth()->user()->name }}">
    <br>
    @error('name')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <input name="email" type="email" placeholder="email" value="{{ auth()->user()->email }}">
    <br>
    @error('email')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <input name="current_password" type="password" placeholder="Существующий пароль">
    <br>
    @error('current_password')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <input name="new_password" type="password" placeholder="Новый пароль">
    <br>
    @error('new_password')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <input name="new_password_confirmation" type="password" placeholder="Повторите новый пароль">
    <br>
    @error('new_password_confirmation')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <button type="submit">Cохранить</button>
</form>

