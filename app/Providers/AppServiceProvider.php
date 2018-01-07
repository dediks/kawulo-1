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
use TCG\Voyager\Models\Category;

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

        //keranjang
        $user = User::find(1);
        $total = Basket::where('id_user',1)->sum('total');
        $count = Basket::where('id_user',1)->count();


        //menu
        $rooms = array(
          1=>Room::find(1),
          2=>Room::find(2),
          3=>Room::find(3)
        );
        $categories = array(
          1=>Category::find(1),
          2=>Category::find(2)
        );

        $data = array(
          'user'=>$user,
          'total'=>$total,
          'ongkir'=>0.07*$total,
          'diskon'=>0.09*$total,
          'rooms'=>$rooms,
          'count'=>$count,
          'categories'=>$categories
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
