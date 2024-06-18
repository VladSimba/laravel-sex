<h1>Редактирование аккаунта</h1>
<form method="post" action="{{route('edit-account-form-processor')}}">
    @csrf
    <input name="name" type="text" placeholder="Логин">
    <br>
    @error('name')
    @enderror
    <input name="email" type="email" placeholder="email" value="{{auth()->user()->email}}">
    <br>
    @error('email')
    @enderror
    <input name="current_password" type="password" placeholder="Существующий пароль">
    <br>
    @error('current_password')
    @enderror
    <input name="new_password" type="password" placeholder="Новый пароль">
    <br>
    @error('new_password')
    @enderror
    <input name="new_password_confirmation" type="password" placeholder="Повторите новый пароль">
    <br>
    @error('new_password_confirmation')
    @enderror

    <button type="submit">Cохранить</button>
</form>

