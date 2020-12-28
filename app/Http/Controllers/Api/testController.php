<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Models\Test;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use App\Repositories\TestRepository;

use Illuminate\Routing\Controller as BaseController;

class testController extends Controller
{       
    public function index(TestRepository $testRepo){   
            
        $tests=$testRepo->createTest();

    return $tests->toJson();
    
    }

}