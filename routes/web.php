<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

class Pager {

    public $route1;
    public $route2;
    public $title;
    public $action = false;

    public function __construct(
        string $route1,
        string $route2,
        string $title
    )
    {
        $this->route1 = $route1;
        $this->route2 = $route2;
        $this->title = $title;
    }

    /**
     * @param bool $action
     */
    public function setAction(bool $action): void
    {
        $this->action = $action;
    }

    public static function create(
        string $route1 = '',
        string $route2 = '',
        string $title
    )
    {
        return new Pager($route1, $route2, $title);
    }

    public function export()
    {
        return [
            'route1' => $this->route1,
            'route2' => $this->route2,
            'title' => $this->title,
            'action' => $this->action
        ];
    }
}
Route::get('/', function () {
    return view('login', ['login' => true]);
});

Route::get('/dashboard', function () {
    return view('dashboard', Pager::create('overzicht', '', 'Overzicht')->export());
});


Route::get('/users', function () {
    return view('users', Pager::create('administratie', 'gebruikers', 'Gebruikers')->export());
})->name('users');

Route::get('/stations', function () {
    return view('stations', Pager::create('stations', '', 'Weer stations')->export());
})->name('stations');

Route::get('/analyse', function () {
    return view('users', Pager::create('Analyseer', '', 'Analyseer stations')->export());
})->name('analyse');
