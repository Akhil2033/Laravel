<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Type;
use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Bio;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Social;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', function(){

    $types = Type::orderBy('title')->get();
    return $types;

});

Route::get('/projects', function(){

    $projects = Project::orderBy('created_at')->get();

    foreach($projects as $key => $project)
    {
        $projects[$key]['user'] = User::where('id', $project['user_id'])->first();
        $projects[$key]['type'] = Type::where('id', $project['type_id'])->first();

        if($project['image'])
        {
            $projects[$key]['image'] = env('APP_URL').'storage/'.$project['image'];
        }
    }

    return $projects;

});

Route::get('/projects/profile/{project?}', function(Project $project){

    $project['user'] = User::where('id', $project['user_id'])->first();
    $project['type'] = Type::where('id', $project['type_id'])->first();

    if($project['image'])
    {
        $project['image'] = env('APP_URL').'storage/'.$project['image'];
    }

    return $project;


});
Route::get('/skills', function(){
    $skills = Skill::orderBy('title')->get();
    return $skills;
});

Route::get('/socials', function(){
    $socials =Social::orderBy('title')->get();
    return $socials;
});

Route::get('/educations', function(){
    $educations =Education::orderBy('title')->get();
    return $educations;
});

Route::get('/bios', function(){
    $bios =Bio::orderBy('info')->get();
    return $bios;
});

Route::get('/contacts', function(){
    $contacts =Contact::orderBy('title')->get();
    return $contacts;
});


