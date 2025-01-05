<nav class="navbar navbar-dark navbar-expand-lg">
  <div class="container">
  <a class="navbar-brand" href="#"><i class="bi bi-tools"></i> ЗАМАСТЕРОМ.РУ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <x-modal-city/>
      <ul class="navbar-nav me-auto text-center py-5 py-md-0">
        <li class="nav-item mt-1 mb-1 mb-lg-0 mt-lg-0 ">
          <a class="nav-link text-light" href="#">Главная</a>
        </li>
        <li class="nav-item mt-1 mb-1 mb-lg-0 mt-lg-0 ">
          <a class="nav-link text-light" href="#">О проекте</a>
        </li>
        <li class="nav-item mt-1 mb-1 mb-lg-0 mt-lg-0 ">
          <a class="nav-link text-light">Контакты</a>
        </li>
        <li class="nav-item mt-1 mb-1 mb-lg-0 mt-lg-0 ">
          <a class="nav-link text-light">Реклама</a>
        </li>
      </ul>
      <form class="d-flex justify-content-center" role="search">
        <a href="{{ route('login') }}" class="btn btn-success btn-navbar-outline mx-1" type="submit">Личный кабинет</a>
        <a href="{{ route('registration') }}" class="btn btn-success btn-navbar mx-1" type="submit">Регистрация</a>
      </form>
    </div>
  </div>
</nav>