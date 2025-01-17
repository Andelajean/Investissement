<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg" href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
            <li>
                <form role="search" class="app-search hidden-xs">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>

        <ul class="nav navbar-top-links navbar-right pull-right">
            <!-- Existing messages section -->
            <li class="dropdown">
                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                    <i class="icon-envelope"></i>
                    @if($messages->count() > 0)
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    @endif
                </a>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                    <li>
                        <div class="drop-title">Vous avez {{ $messages->count() }} nouveaux messages</div>
                    </li>
                    <li>
                        <div class="message-center">
                            @foreach($messages as $message)
                                <a href="#" onclick="showReplyPopup({{ $message->id }}, '{{ $message->nom }}')">
                                    <div class="user-img">
                                        <img src="{{ asset('plugins/images/users/default.jpg') }}" alt="user" class="img-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>{{ $message->nom }}</h5>
                                        <span class="mail-desc">{{ Str::limit($message->message, 50) }}</span>
                                        <span class="time">{{ $message->created_at->format('H:i A') }}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </li>
                    <li>
                        <a class="text-center" href="{{ route('admin.messages') }}">
                            <strong>Voir tous les messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- New messaging section for clients -->
            <li class="dropdown">
                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                    <i class="icon-bubbles"></i>
                    @if($conversations->count() > 0)
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    @endif
                </a>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                    <li>
                        <div class="drop-title">Conversations avec les clients</div>
                    </li>
                    <li>
                        <div class="message-center">
                            @foreach($conversations as $conversation)
                                <a href="{{ route('conversations.show', $conversation) }}">
                                    <div class="user-img">
                                        <img src="{{ asset('plugins/images/users/default.jpg') }}" alt="user" class="img-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>{{ $conversation->user->name }}</h5>
                                        <span class="mail-desc">{{ Str::limit($conversation->messages->last()?->message, 50) ?? 'Aucun message' }}</span>
                                        <span class="time">
    {{ $conversation->messages->last()?->created_at?->format('H:i A') ?? 'Pas de messages' }}
</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </li>
                    <li>
                        <a class="text-center" href="{{ route('admin.message') }}">
                            <strong>Voir toutes les conversations</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Modal de réponse -->
        <div id="replyModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeReplyPopup()">&times;</span>
                <form method="POST" id="replyForm">
                    @csrf
                    <input type="hidden" name="id" id="messageId">
                    <h4>Répondre à <span id="messageSender"></span></h4>
                    <textarea name="response" required style="width: 100%; height: 150px; padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
                    <button type="submit" style="margin-top: 10px; padding: 10px 20px; background-color: #28a745; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Envoyer</button>
                </form>
            </div>
        </div>

        <style>
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,0.4);
            }
            .modal-content {
                background-color: #fefefe;
                margin: 15% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }
            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }
            .mail-contnet h5 {
                margin: 0;
                font-weight: 600;
            }
            .mail-contnet .mail-desc {
                color: #777;
                font-size: 12px;
            }
        </style>

        <script>
            function showReplyPopup(messageId, messageSender) {
                const form = document.getElementById('replyForm');
                form.action = `/admin/respond/${messageId}`;
                document.getElementById('messageId').value = messageId;
                document.getElementById('messageSender').textContent = messageSender;
                document.getElementById('replyModal').style.display = 'block';
            }

            function closeReplyPopup() {
                document.getElementById('replyModal').style.display = 'none';
            }
        </script>
    </div>
</nav>
