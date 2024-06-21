<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Chat</h1>
    <div id="chat-box">
        @foreach($messages as $message)
            <p><strong>{{ $message->user->name }}:</strong> {{ $message->message }}</p>
        @endforeach
    </div>
    <form id="chat-form" action="{{ route('chat.send') }}" method="POST">
        @csrf
        <textarea name="message" id="message" rows="3" required></textarea>
        <button type="submit">Send</button>
    </form>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('your-pusher-key', {
          cluster: 'your-cluster'
        });

        var channel = pusher.subscribe('chat-channel');
        channel.bind('message-sent', function(data) {
          var chatBox = document.getElementById('chat-box');
          var message = document.createElement('p');
          message.innerHTML = `<strong>${data.user.name}:</strong> ${data.message}`;
          chatBox.appendChild(message);
        });
    </script>
</body>
</html>
