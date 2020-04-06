<?php
use App\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hi', function () {
//     return "Hi";
// });

// Route::get('/hi/{id}', function ($id) {
//     return "Hi $id";
// });

// Route::get('/hi/{id}/{name}', function ($id,$name) {
//     return "Hi no $id, name $name";
// });

// Route::get('/post/{id}', 'PostsController@index');

// Route::resource('/posts','PostsCOntroller');

// Route::get('/contact','PostsController@contact');

// Route::get('/post/{id}/{name}/{pw}','PostsController@showposts');

// SQL insert update delete etc etc from here

route::get('/insert',function(){

    DB::insert('Insert into posts(title,content) values(?,?)',['Php2','Laravel2']);

});


// route::get('/read',function(){

//    $result= DB::select('select * from posts where id=?',[1]);
   
//    foreach($result as $post)
//    {
//     return $post->title;
//    }

// });

// route::get('/update',function(){

//     $updated= DB::update('update posts set title="Apple2" where id=?',[1]);
//     return $updated;
 
//  });

//  route::get('/delete',function(){

//     $deleted= DB::delete('delete from posts where id=?',[1]);
//     return $deleted;
 
//  });

// Eloquent from here

// Route::get('/read',function(){

//     $posts=Post::all();
//     foreach($posts as $post){

//         return $post->title;
//     }

// });

// Route::get('/find',function(){

//     $post=Post::find(2);

//     return $post->title;
//     // foreach($posts as $post){

//     //     return $post->title;
//     // }

// });

// Route::get('/findwhere',function(){

//     $posts=Post::where('id',3)->orderBy('id','desc')->take(1)->get();
//     return $posts;
     

// });

// Route::get('/findmore',function(){

//     $posts=Post::where('id',3)->orderBy('id','desc')->take(1)->get();
//     return $posts;
     

// });

// Route::get('/binsert',function(){

//    $post=new Post;
//    $post->title="php3";
//    $post->content="laravel3";

   
//    $post->save();

// });



// Route::get('/bupdate',function(){

//     $post=Post::find(2);
//     $post->title="php1";
//     $post->content="laravel1";
 
    
//     $post->save();
 
//  });

// Route::get('/create',function(){
//     Post::create(['title'=>'Create PHP','content'=>'Create Laravel']);


// });

// Route::get('/equpdate',function(){
//     Post::where('id',2)->where('is_admin',1)->update(['title'=>'DICK','content'=>'LARAVEL1']);


// });

// Route::get('/bdelete',function(){

//     $post=Post::find(2);
  
    
//     $post->delete();
 
//  });

//  Route::get('/bdelete2',function(){

//     Post::destroy([4,5]);

 
//  });




