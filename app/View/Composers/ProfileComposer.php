<?php

namespace App\View\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class ProfileComposer
{
    public function compose(View $view)
    {
        if(auth::guard('web')->user()){
            $view->with('users', $users = User::find(Auth::user()->id));
        }
    }
}
