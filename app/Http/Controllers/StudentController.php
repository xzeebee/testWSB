<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Repositories\UserRepository;

class StudentController extends Controller
{
    public function index(UserRepository $userRepo){

                //$users=User::all();          
                $users=$userRepo->getAllStudents();// tylko studenci
          
        return view('students.list',["studentsList"=>$users]);
    }

    public function show(UserRepository $userRepo, $id){
        
            $student=$userRepo->find($id);

    return view('students.show',["student"=>$student] );
}

public function create(UserRepository $userRepo){
        
    $userRepo->create([            
            'name'=>'Kuba Nowakowskij',
            'email'=>'knowakowskij@wp.pl',
            'password'=>bcrypt('password31'),
            'status'=>'off',
            'type'=>'student'

    ]);

return redirect('students');
}

public function edit(UserRepository $userRepo, $id){
        
   $student=$userRepo->update(['name'=>"Zmiena Name"], $id);
   /*$student=User::find($id);
   $student->name='Najnowszejsze Daneeee';
   $student->save();
   */
return redirect('students');
}

}
