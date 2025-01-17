<?php
namespace App\Providers;
use App\Models\Contact;
use App\Models\Conversation;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            $messages = Contact::where('is_read', false)
                               ->orderBy('created_at', 'desc')
                               ->get();

            $conversations = Conversation::
                                         orderBy('created_at', 'desc')
                                         ->get();

            $view->with('messages', $messages)
                 ->with('conversations', $conversations);
        });
    }

    public function register()
    {
        //
    }
}
