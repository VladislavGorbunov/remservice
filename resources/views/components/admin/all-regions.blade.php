<div class="row mb-3">
    <h2 class="mb-3">Регионы</h2>
    <div class="col-12 col-md-9">
    @if($message)
        <x-admin.alert-message :message="$message"/>
    @else
        <x-admin.alert-message :message="$message = 'Сообщений нет.'"/>
    @endif
    </div>

    <div class="col-12 col-md-3">
        <a href="/admin/regions/create" class="btn btn-primary col-12 p-3">Добавить регион</a>        
    </div>
</div>