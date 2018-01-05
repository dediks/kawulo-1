<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\User;
use App\Item;
use App\Basket;
use App\Room;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //total biaya di Keranjang
        $user = User::find(1);
        $total = Basket::where('id_user',1)->sum('total');

        //menu
        $rooms = array(
          1=>Room::find(1),
          2=>Room::find(2),
          3=>Room::find(3)
        );
        
        $data = array(
          'total'=>$total,
          'rooms'=>$rooms
        );
        return View::share('data', $data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
