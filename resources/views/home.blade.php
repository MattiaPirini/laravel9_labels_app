<!doctype html>
<html lang="en">

<head>
  <title>Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <x-header></x-header>

    <div class="container">
      
        <h1>todo list</h1>
        <div class="list-group">
          @foreach ($listItems ?? '<h4>No tasks. add some.</h4>' as $listItem )

            <form id="task-{{ $listItem->id }}" method="post" action="{{ route('markComplete', $listItem->id) }}" accept-charset="UTF-8">
            {{ csrf_field() }}
            <label class="list-group-item">
              <input @if ($listItem->is_complete == 1) checked @endif  class="form-check-input me-1" type="checkbox" value="completed" onchange="document.getElementById('task-{{ $listItem->id }}').submit()">
              
              {{ $listItem->name }}
            </label>
          
          </form>  
          @endforeach
      </div>
    </div>

    <div class="container">
        <h3>add new</h3>
        <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
        {{ csrf_field() }}
          <label for "listItem">New Todo Item</label>
          <input type="text" name="listItem">  
          <button type="submit">Save Item</button>

        </form>
        
      


    </div>
    

    <x-footer></x-footer>

</body>
</html>