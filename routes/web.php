<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\DB;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome');

    // fetch all users
    // $users = DB::select('select * from users');

    // $users = User::all();
    $users = User::find(1);
    // $users = User::where('id', 7)->first();
    // $users = DB::table('users')->first();
    // $users = DB::table('users')->get();
    

    // insert new user
    // $user = DB::insert('insert into users (name, email, password) values (?,?,?)', [
        //     'SHYIRAMBERE',
        //     'emanushyirambere@gmail.com',
        //     'password'
        // ]);
        
        // $user = DB::table('users')->insert([
            //     'name'=>  'Emman',
            //      'email'=> 'eman@gmail.com',
            //       'password'=> 'password'
            // ]);
            
            // $users = User::create([
            //         'name'=>  'Ema',
            //          'email'=> 'ema1234@gmail.com',
            //           'password'=>  'password'
        
            //     ]);
                
                
                
                
                // update user
                // $user = DB::update('update users set email="shema@gmail.com" where id=4');
                
                // $user = DB::table('users')->where(
                    //     'id',  6) ->
                    //     update(['email' => 'emash@gmail.com']);
                    
                    // $user = User::find(7);
                    // $user -> update(['email' => 'emashyirambere@gmail.com']);
                    
                    
                    
                    // delete user
                    // $user = DB::delete('delete from users where id = 4');
                    
                    // $user = DB::table('users')->delete();
                    
                    // $user = User::find(7);
                    // $user -> delete();
    // dd($users->name);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
