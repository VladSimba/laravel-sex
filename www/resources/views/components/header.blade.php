<style>
    .button svg{
        height: 15px;
    }
</style>
<div>
    <div>Sex</div>
    <div>
        <ul>
            @guest()
                <li><a href="{{ route('show-registration-form') }}">Регистрация</a></li>
                <li><a href="{{ route('show-login-form') }}">Логин</a></li>
            @endguest

            @auth()
                <li><a href="{{ route('account') }}">Аккаунт</a></li>
                <li>
                    <form method="post" action="{{ route('logout-processor') }}">
                        @csrf
                        <button type="submit">Выйти из аккаунта</button>
                    </form>
                </li>
            @endauth

        </ul>
    </div>
</div>
