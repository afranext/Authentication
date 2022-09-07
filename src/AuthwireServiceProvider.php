<?php


namespace Afranext\Authwire;


use Afranext\Authwire\App\Http\Livewire\Authwire;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AuthwireServiceProvider extends ServiceProvider
{



    public function boot()
    {
        Livewire::component('authwire', Authwire::class);

    }








}
