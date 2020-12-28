<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository{
    public function __construct(User $model){

    $this->model=$model;
}

public function getAllStudents(){

    return $this->model->where('type','student')->orderBy('name','asc')->get();
}

}