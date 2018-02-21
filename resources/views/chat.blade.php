<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token()  }}">
  <title>Chat Apps</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
      .list-group {
          overflow-y : scroll;
          height : 200px;
      }
  </style>
</head>
<body>
    <div class="container">
      <div class="row" id="app">
        <div class="offset-4 col-4">
          <li class="list-group-item active">Chat Room</li>
          <ul class="list-group" v-chat-scroll>
            <message v-for="value in chat.message" :key=value.index color="success" > @{{value}} </message>
          </ul>
            <input type="text" v-model="message" @keyup.enter="send" class="form-control" placeholder="Type your message here...">
        </div>
      </div>
    </div>
    

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
