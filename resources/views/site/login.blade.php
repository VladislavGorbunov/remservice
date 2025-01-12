<x-header-clear/>
<div class="login-form-container">
<div class="login-form-container-layer"></div>
<div class="container d-flex align-items-center" style="height: 100vh">
    <div class="col-11 col-md-4 d-block mx-auto login-form-block">
        <h1 class="text-center fs-4">Вход</h1>
        
        <a href="/" class="login-form-back-link"><i class="bi bi-arrow-left-circle"></i> Назад</a>
        <form method="post">
        @csrf
        <div class="mb-2 mt-3">
            <label class="form-label"><small>Email адрес</small></label>
            <input type="email" class="form-control p-2" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label"><small>Пароль</small></label>
            <input type="password" class="form-control p-2" name="password" required>
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="remember" role="switch">
            <label class="form-check-label" ><small>Запомнить меня на этом компьютере</small></label>
        </div>

        @if($error)
        <div class="alert alert-warning text-center mt-3" role="alert"><small>{{ $error }}</small></div>
        @endif
        

        <button type="submit" class="btn btn-success btn-form col-6 d-block mx-auto mt-4">Войти</button>
        <p class="mt-3 mb-0 text-center">Нет аккаунта?</p><a href="{{ route('registration') }}" class="d-block mt-1 text-center login-form-reg-link">Зарегистрируйтесь за пару минут</a>
        </form>
    </div>
</div>
</div>
<x-footer-clear/>
