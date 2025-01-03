@extends('admin.layouts')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Conversation avec {{ $conversation->user->name }} et {{ $conversation->admin->name }}</h1>
        
        <div id="chatMessages" class="card mb-4" style="height: 400px; overflow-y: scroll;">
            <!-- Les messages seront chargés ici par JavaScript -->
        </div>

        <form id="messageForm" action="{{ route('admin.messages.store', $conversation->id) }}" method="post" class="mt-4">
            @csrf
            <div class="form-group">
                <textarea name="message" class="form-control" placeholder="Votre message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>

    <script>
        function fetchMessages() {
            fetch('{{ route('admin.messages.fetch', $conversation->id) }}')
                .then(response => response.json())
                .then(messages => {
                    const messagesDiv = document.getElementById('chatMessages');
                    messagesDiv.innerHTML = '';
                    messages.forEach(message => {
                        const messageElement = document.createElement('div');
                        messageElement.classList.add('chat-message', message.sender_id === {{ Auth::id() }} ? 'admin' : 'user');
                        messageElement.innerHTML = `
                            <div class="message ${message.sender_id === {{ Auth::id() }} ? 'text-right' : 'text-left'}">
                                <p>${message.message}</p>
                                <small>${new Date(message.created_at).toLocaleString()}</small>
                            </div>
                        `;
                        messagesDiv.appendChild(messageElement);
                    });
                    messagesDiv.scrollTop = messagesDiv.scrollHeight;
                });
        }

        // Appel initial pour charger les messages
        fetchMessages();

        // Recharger les messages toutes les 5 secondes
        setInterval(fetchMessages, 5000);

        // Envoyer le message sans recharger la page
        document.getElementById('messageForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => response.json())
              .then(data => {
                  fetchMessages();
                  this.reset();
              });
        });
    </script>

    <style>
        .chat-message {
            margin-bottom: 15px;
        }
        .chat-message .message {
            display: inline-block;
            width: 100%;
            padding: 10px;
            border-radius: 10px;
        }
        .chat-message.user .message {
            background-color: #f1f1f1;
            border: 1px solid #ccc;
        }
        .chat-message.admin .message {
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
        }
    </style>
@endsection
