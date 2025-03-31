<div class="container d-none d-md-block">
<style>

.breadcrumb {
    background: linear-gradient(09deg, #ecf2f7,  rgb(249, 252, 255));
    
    height: auto !important;
    padding: 12px 22px;
    border-radius: 6px;
    font-size: 14px;
}

.breadcrumb .breadcrumb-item a {
    color: #286ccb !important;
    text-decoration: none;
    font-size: 14px;
}

</style>

<nav class="mt-4" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Главная страница</a></li>
    <li class="breadcrumb-item"><a href="/{{ $breadcrumb['region_url'] }}">{{ $breadcrumb['region_name'] }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb['subcategory_pretext'] }} {{ $breadcrumb['subcategory_plural_name'] }}</li>
  </ol>
</nav>
</div>