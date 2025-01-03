@extends('admin.layouts')

@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Tous les Messages</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <button class="btn btn-primary" onclick="window.location='{{ route('admin.dashboard') }}'">Retour au Dashboard</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Messages</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Objet</th>
                                    <th>Message</th>
                                    <th>Réponse</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $message->nom }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->objet }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td>{{ $message->response }}</td>
                                        <td>
                                            <button class="btn btn-success" onclick="showReplyPopup({{ $message->id }}, '{{ $message->nom }}')">Répondre</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de réponse -->
<div id="replyModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeReplyPopup()">&times;</span>
        <form method="POST" id="replyForm">
            @csrf
            <input type="hidden" name="id" id="messageId">
            <h4>Répondre à <span id="messageSender"></span></h4>
            <textarea name="response" required style="width: 100%; height: 150px; padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
            <button type="submit" class="btn btn-success" style="margin-top: 10px;">Envoyer</button>
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
    .table th, .table td {
        vertical-align: middle;
    }
    .thead-dark th {
        background-color: #343a40;
        color: white;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
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
@endsection
