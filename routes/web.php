<?php

use App\Http\Controllers\Admin\DataUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// route biasa
Route::get('/', function () {
    return view('welcome');
});

//route parameter
route::get('/santri',function(){
    return('Halo nama aku ratu');
});
//route nama
route::get('/halo/{nama}',function($nama){
    return 'selamat datang '.$nama;
});

//route 
route::get('/buah',function(){
    return 'mangga,jeruk,apel';
})->name('fruit');

// contoh route dengan view
//jhika file htmlnya ada di dalam folder maka paggil dulu nama foldernya
// contoh : nama folder.namafile
//tetapi jika file htmlnya langsung menyentuh folder view maka langsung saja panngil nama filenya
route::get('/landing-page',function(){
    return view('test.landingpage');
});

// route untuk admin
route::prefix('admin')->middleware(['auth','admin'])->group(function(){
    route::get('/dashboardAdmin',function(){
     return view('admin.dashboardAdmin');
    });

    route::controller(DataUserController::class)->group(function(){
        // ini untuk tampilin table data user
        route::get('/data-user','index')->name('index.data-user');
        // ii route untuk menampilkan form data user
        route::get('/form-data-user','formDataUser')->name('form.data-user');
        //ini untuk route press create/tambah data user
        route::post('/create-data-user', 'createDataUser')->name('create.dataUser');
        //ini web untuk menampilkan from edit
        route::get('edit-data-user/{id}','editDataUser')->name('edit.dataUser');
        // ini route untuk proses update data
        route::put('update-data-user/{id}','updateDataUser')->name('update.dataUser');
        route::delete('update-data-user/{id}','deleteDataUser')->name('delete.dataUser');
    });
});


// route untuk user
route::prefix('user')->middleware(['auth','user'])->group(function(){
    route::get('/dashboardUser',function(){
     return view('user.dashboardUser');
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
