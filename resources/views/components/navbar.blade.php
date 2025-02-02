<nav class="navbar navbar-light navbar-expand-lg">
  <div class="container">
  <div class="">
    <span class="navbar-brand"><span style="color:#463ee4">ЗА</span>МАСТЕРОМ</span>
    
  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <x-modal-city :regionName="$regionName"/>
      <ul class="navbar-nav me-auto text-center py-5 py-md-0">
        <li class="nav-item mt-1 mb-1 mb-lg-0 mt-lg-0 ">
          <a class="nav-link" href="/">Главная</a>
        </li>
        <li class="nav-item mt-1 mb-1 mb-lg-0 mt-lg-0 ">
          <a class="nav-link" href="/about">О проекте</a>
        </li>
        <li class="nav-item mt-1 mb-1 mb-lg-0 mt-lg-0 ">
          <a class="nav-link">Контакты</a>
        </li>
        <li class="nav-item mt-1 mb-1 mb-lg-0 mt-lg-0 ">
          <a class="nav-link">Реклама</a>
        </li>
        <li class="nav-item mt-1 mb-1 mb-lg-0 mt-lg-0 ">
          <a class="nav-link">Задать вопрос мастерам <i class="bi bi-question-circle-fill"></i></a>
        </li>
      </ul>
      <form class="d-flex justify-content-center" role="search">
        <a href="{{ route('login') }}" class="btn btn-navbar-outline mx-1" type="submit">Клиентам</a>
        <a href="{{ route('for-the-masters') }}" class="btn btn-navbar mx-1" type="submit">Специалистам</a>
      </form>
    </div>
  </div>
</nav>
