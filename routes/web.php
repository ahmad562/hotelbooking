<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    
    return view('home');
});

Route::get('/jobs', function (){
    $jobs = [
        [
            'id' => 1,
            'title'=> 'Software developer',
            'salary'=> '$1000'
        ],
        [
            'id' => 2,
            'title'=> 'GIS Expert',
            'salary'=> '$5500'
        ],
        [
            'id' => 3,
            'title'=> 'Social mobilizer',
            'salary'=> '$1000'
        ]
    ];
    return view('jobs', ['jobs'=>$jobs]);
});
Route::get('/job/{id}', function ($id){
    $jobs = [
        [
            'id' => 1,
            'title'=> 'Software developer',
            'salary'=> '$1000'
        ],
        [
            'id' => 2,
            'title'=> 'GIS Expert',
            'salary'=> '$5500'
        ],
        [
            'id' => 3,
            'title'=> 'Social mobilizer',
            'salary'=> '$1000'
        ]
    ];
    $job = Arr::first($jobs, function($job) use ($id){
       return $job['id'] == $id; 
    });

    return view('job-details', ['job'=>$job]);
});

Route::get('/contact', function (){
    return view('contact');
});
