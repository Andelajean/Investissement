<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discussion avec l'administrateur">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Discussion avec l'administrateur</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .chat-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .chat-header {
            background-color: #075E54;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        .chat-body {
            padding: 15px;
            height: 400px;
            overflow-y: auto;
        }
        .chat-message {
            margin-bottom: 15px;
        }
        .chat-message.user {
            text-align: right;
        }
        .chat-message.admin {
            text-align: left;
        }
        .chat-message p {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 20px;
            max-width: 80%;
        }
        .chat-message.user p {
            background-color: #DCF8C6;
            color: #000;
        }
        .chat-message.admin p {
            background-color: #ECE5DD;
            color: #000;
        }
        .chat-footer {
            padding: 15px;
            background-color: #f1f1f1;
            display: flex;
            align-items: center;
        }
        .chat-footer textarea {
            flex: 1;
            resize: none;
            border-radius: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        .chat-footer button {
            background-color: #075E54;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin-left: 10px;
            cursor: pointer;
        }
        @media (max-width: 600px) {
            .chat-container {
                margin: 20px;
                width: calc(100% - 40px);
            }
            .chat-body {
                height: 300px;
            }
        }
    </style>
</head>

<body>
    <div class="chat-container">
        <div class="chat-header">
            Discussion avec l'administrateur
        </div>
        <div class="chat-body" id="chatMessages">
            <!-- Les messages de l'utilisateur et de l'administrateur seront ici -->
        </div>
        <div class="chat-footer">
            <textarea id="chatInput" placeholder="Écrire un message..."></textarea>
            <button onclick="sendMessage(event)">Envoyer</button>
        </div>
    </div>

    <!-- jQuery and Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetchMessages();
        });

        function fetchMessages() {
            const discussionId = {{ $discussion_id }};
            fetch(`/messages/${discussionId}`)
                .then(response => response.json())
                .then(messages => {
                    const messagesDiv = document.getElementById('chatMessages');
                    messagesDiv.innerHTML = '';
                    messages.forEach(message => {
                        const messageElement = document.createElement('div');
                        messageElement.classList.add('chat-message', message.sender_id === {{ $sender_id }} ? 'user' : 'admin');
                        messageElement.innerHTML = `
                            <p>${message.message}</p>
                            <small>${new Date(message.created_at).toLocaleString()}</small>
                        `;
                        messagesDiv.appendChild(messageElement);
                    });
                    messagesDiv.scrollTop = messagesDiv.scrollHeight;
                });
        }

        function sendMessage(event) {
            event.preventDefault();
            const messageInput = document.getElementById('chatInput');
            const message = messageInput.value;

            const csrfTokenMetaTag = document.querySelector('meta[name="csrf-token"]');
            if (!csrfTokenMetaTag) {
                console.error('CSRF token not found.');
                return;
            }

            const csrfToken = csrfTokenMetaTag.getAttribute('content');

            if (message.trim() !== '') {
                fetch('/messages', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        message: message,
                        discussion_id: {{ $discussion_id }},
                        sender_id: {{ $sender_id }}
                    })
                })
                .then(response => response.json())
                .then(newMessage => {
                    const messagesDiv = document.getElementById('chatMessages');
                    const messageElement = document.createElement('div');
                    messageElement.classList.add('chat-message', 'user');
                    messageElement.innerHTML = `
                        <p>${newMessage.message}</p>
                        <small>${new Date(newMessage.created_at).toLocaleString()}</small>
                    `;
                    messagesDiv.appendChild(messageElement);
                    messagesDiv.scrollTop = messagesDiv.scrollHeight;
                    messageInput.value = '';
                });
            }
        }
    </script>
</body>

</html>
