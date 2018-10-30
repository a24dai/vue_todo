<!doctype html>
  <html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Laravelでajax通信を行うにはCSRF対策でheadに上記を記述する必要あり -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <!-- npmで生成したapp.cssを読み込んでいる -->
      <title>Laravel-Vue-todo</title>
    </head>
    <body>
      <div id="app">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <br>
            </div>
            <div class="col-xs-6">
              <table class="table">
                <thead>
                  <tr v-for="todo in todos" v-bind:key="todo.id">
                    <th>ID</th>
                    <th>タスク名</th>
                    <th>完了ボタン</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ご飯食べる</td>
                    <td><button class="btn btn-primary">完了</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-xs-6">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="タスクを入力してください">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="button">タスクを登録
</button>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
      <!-- npmで生成したapp.jsを読み込んでいる -->
    </body>
</html>
