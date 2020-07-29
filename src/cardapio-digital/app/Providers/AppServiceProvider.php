<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $qrCodes = \App\Models\QrCode::latest()->paginate(10);

        View::share('qrCodes', $qrCodes);

        // return view('qr_codes.index',compact('qrCodes'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
