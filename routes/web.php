<?php

use Illuminate\Support\Facades\Route;
use App\Models\Document;
use App\Models\User;
use SyntheticRevisions\models\Revision;
use SyntheticComments\Models\Comment;

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

/**
 * revision managment system
 */
Route::get('/', function () {
    // $data = Document::find('65237dfdf2843e654b0bdfab')->revisions()->orderBy('created_at', 'asc')->get()->compare();
    // dd($data);
    $data = Document::find('65237dfdf2843e654b0bdfab');
    // $data = Document::find('65237dfdf2843e654b0bdfab');
    $data->description = 'dddddddddddddddddddddddddddddddasdfdsdsfsfdd';
    $data->save();
});

/**
 * synthetic comment
 */

Route::get('/get', function () {

    /**
     * Update data
     */
    // $comment = new Comment();
    // $comment = $comment->setResource('Document')->where('parent_comment_id', null)->first();
    // $comment->visibility = [
    //     "user" => [
    //         '6526220475150f47bf0d9164'
    //     ],
    //     "roles" => [],
    //     "workspace" => [
    //         'software eng'
    //     ],
    //     "department" => [
    //         'HR'
    //     ]
    // ];
    // $comment->save();

    // $data = new Comment();
    // // $data->resource = "App\Models\Document";
    // $data->resource_id = "65237dfdf2843e654b0bdfab";
    // $data->parent_comment_id = null;
    // $data->body = "This is a comment ddddddddddddddddd";
    // $data->type = "warning";
    // $data->visibility = [
    //     "user" => [
    //         '6526220475150f47bf0d9164'
    //     ],
    //     "roles" => [],
    //     "workspace" => [
    //         'software eng'
    //     ],
    //     "department" => [
    //         'HR'
    //     ]
    // ];
    // $data->user_id = 1;
    // dd($data->save());


    $comment = new Comment();
    return $comment->setResource('Document')
        ->WhereMatch([
            'user' => '6526220475150f47bf0d9164',
            'department' => 'HR',
        ])
        ->orwhere('parent_comment_id', null)
        ->with('replies')
        ->get();
});

Route::get('add-file', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('upload-file', [App\Http\Controllers\HomeController::class, 'store'])->name('upload_file');
