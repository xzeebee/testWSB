<?php
namespace App\Repositories;

use Iluminate\Database\Eloquent\Model;

use App\Models\Test;

use Illuminate\Support\Facades\DB;

class TestRepository extends BaseRepository{

    public function __construct(Test $model){

        $this->model=$model;
        }

    public function createTest(){

        return $this->model->get();
        //DB::table('pytania')->inRandomOrder()->limit(20)->get(); 
        }

}