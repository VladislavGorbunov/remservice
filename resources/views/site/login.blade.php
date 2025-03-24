<x-header-clear/>
<script src="https://yastatic.net/s3/passport-sdk/autofill/v1/sdk-suggest-with-polyfills-latest.js"></script>
<div class="login-form-container">
<div class="login-form-container-layer"></div>
<div class="container d-flex align-items-center" style="height: 100vh">
    <div class="col-11 col-md-4 d-block mx-auto login-form-block">
        <h1 class="text-center fs-4">Вход</h1>
        
        <a href="/" class="login-form-back-link"><i class="bi bi-arrow-left-circle"></i> Назад</a>
        <form method="post">
        @csrf
        <div class="mb-2 mt-3">
            <label class="form-label">Email адрес:</label>
            <input type="email" class="form-control p-2" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Пароль:</label>
            <input type="password" class="form-control p-2" name="password" required>
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="remember" role="switch">
            <label class="form-check-label" ><small>Запомнить меня на этом компьютере</small></label>
        </div>

        @if($error)
        <div class="alert alert-warning text-center mt-3" role="alert"><small>{{ $error }}</small></div>
        @endif
        

        <button type="submit" class="btn btn-success btn-form col-12 d-block mx-auto mt-4">Войти</button>
        
        <div id="buttonContainerId" class="mt-3 col-12 d-block mx-auto"></div>

        <script>
            window.YaAuthSuggest.init(
                {
   client_id: 'c46f0c53093440c39f12eff95a9f2f93',
   response_type: 'token',
   redirect_uri: 'https://examplesite.com/suggest/token'
},
    'https://remservice/dfg',
    {
      view: "button",
      parentId: "buttonContainerId",
      buttonSize: 'l',
      buttonView: 'main',
      buttonTheme: 'light',
      buttonBorderRadius: "10",
      buttonIcon: 'ya',
    }
  )
  .then(({handler}) => handler())
  .then(data => console.log('Сообщение с токеном', data))
  .catch(error => console.log('Обработка ошибки', error))
        </script>
        
        <a href="{{ route('registration') }}" class="d-block mt-3 text-center login-form-reg-link">Создать аккаунт</a>
        </form>
    </div>
</div>
</div>
<x-footer-clear/>
