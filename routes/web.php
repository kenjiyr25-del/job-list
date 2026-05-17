<?php
//JJJK
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;


Route::get('/', function () {
    return view('all_jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = Job::all();
    
    $job = Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });

    if (!$job) {abort(404);}

    return view('jobs', ['job' => $job]);
});
