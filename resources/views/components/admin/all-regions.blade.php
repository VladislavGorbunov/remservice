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

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Название категории</th>
      <th scope="col">URL</th>
      <th scope="col">Операции</th>
    </tr>
  </thead>
  <tbody>
  @foreach($regions as $region) 
    <tr>
      <th scope="row">{{ $region['id'] }}</th>
      <td>{{ $region['name'] }}</td>
      <td>{{ $region['slug'] }}</td>
      <td>
        <div class="row">
            <div class="col">
                <a href="{{URL::current()}}/edit/{{ $region['id'] }}">Изменить</a> 
            </div>

            <div class="col">
                <a href="{{URL::current()}}/delete/{{ $region['id'] }}">Удалить</a>
            </div>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>