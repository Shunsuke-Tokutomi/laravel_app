@extends ('layouts.app')
@section ('content')

<h1 class="page-header">{{ $user->name }}のToDo一覧</h1>
<p class="text-right">
  <a class="btn btn-success" href="/todo/create">新規作成</a>
</p>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th>ID</th>
      <th>やること</th>
      <th>作成日時</th>
      <th>更新日時</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($todos as $todo)
      <tr>
        <td class="align-middle">{{ $todo->id }}</td>
        <td class="align-middle">{{ $todo->title }}</td>
        <td class="align-middle">{{ $todo->created_at }}</td>
        <td class="align-middle">{{ $todo->updated_at }}</td>
        <td><a class="btn btn-primary" href="{{ route('todo.edit', $todo->id) }}">編集</a></td>
        <td>
          {!! Form::open(['route' => ['todo.destroy', $todo->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
      <!-- ?= $todos ?>;  -->
    @endforeach
  </tbody>
</table>

@endsection

<!-- $todoの中身
{"id":1,
"title":"Laravel Lesson\u3092\u7d42\u308f\u3089\u305b\u308b",
"created_at":"2018-01-01 10:00:30",
"updated_at":"2018-01-04 10:00:30"};

{"id":2,
"title":"\u30ec\u30d3\u30e5\u30fc\u306b\u5411\u3051\u3066\u7406\u89e3\u3092\u6df1\u3081\u308b",
"created_at":"2018-02-01 10:00:30",
"updated_at":"2018-02-05 10:00:30"};

{"id":3,
"title":"gizumo\u3067\u52c9\u5f37\u3059\u308b",
"created_at":"2019-10-25 05:11:52",
"updated_at":"2019-10-25 05:12:05"};
{"id":6,
"title":"Laravel",
"created_at":"2019-10-25 05:57:35",
"updated_at":"2019-10-25 05:57:35"}; -->