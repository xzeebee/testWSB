<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use App\Repositories\TestRepository;

class testController extends Controller
{       
    public function index(TestRepository $testRepo){   
        
        $tests=$testRepo->createTest();
        $testRepo->table='tests';

    return view('tests.list',["testsList"=>$tests]); // przekazanie danych do widoku
    }

}
