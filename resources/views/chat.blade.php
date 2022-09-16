<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Chat</title>
    <link rel="stylesheet" href="{!! asset('css/chat.css')!!}">
    <link rel="stylesheet" href="{!! asset('css/app.css')!!}">
    

</head>
<body>


{{-- <a href=""><img src="{!! asset('img/carro.png')!!}" alt=""></a> --}}
    <section class="msger">
        <header class="msger-header">
          <div class="msger-header-title">
            <i class="fas fa-comment-alt"></i> 
            <span class="chatWith"></i></span>
            <span class="typing" style="display: none">Está escribiendo</span>
          </div>
          <div class="msger-header-options">
            <span class="chatStatus offline"><i class="fas fa-globe"></i></span>
          </div>
        </header>
      
            <div class="msger-chat"></div>
        
        <form class="msger-inputarea">
          <input type="text" class="msger-input" oninput="sendTypingEvent()" placeholder="Enter your message...">
          <button type="submit" class="msger-send-btn">Send</button>
        </form>
      </section>

      <script src="http://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>

      {{-- <script src="{{ html::script('js/chat.js')}}"></script> --}}
      <script src="/js/chat.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
</body>
</html>


{{-- {{ html::script('js/scrollTo.js'); }} 
{{ HTML::style('css/css.css'); }} --}}

