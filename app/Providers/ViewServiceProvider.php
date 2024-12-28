<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Contact;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            
             $messages = Contact::where('is_read', false) 
                                ->orderBy('created_at', 'desc') 
                                ->get(); 
                                
             $view->with('messages', $messages); });
    }

    public function register()
    {
        //
    }
}
