<div class="row mb-3">
    <h2 class="mb-3">Категории</h2>
    <div class="col-12 col-md-9">
    @if($message)
        <div class="alert alert-warning text-center" role="alert"><small>{{ $message }}</small></div>
    @else
        <div class="alert alert-success text-center" role="alert"><small>Сообщений нет.</small></div>
    @endif
    </div>

    <div class="col-12 col-md-3">
        <a href="/admin/subcategories/create" class="btn btn-primary col-12 p-3">Добавить подкатегорию</a>        
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
  
  @foreach($subcategories as $category) 
    <tr>
      <th scope="row">{{ $category['subcategory_id'] }}</th>
      <td>{{ $category['name'] }}</td>
      <td>{{ $category['slug'] }}</td>
      <td>
        <div class="row">
            <div class="col">
                <a href="{{URL::current()}}/edit/{{ $category['category_id'] }}">Изменить</a> 
            </div>

            <div class="col">
                <a href="{{URL::current()}}/delete/{{ $category['category_id'] }}">Удалить</a>
            </div>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>



<div class="col-12">
{{ $subcategories->links() }}
</div>
