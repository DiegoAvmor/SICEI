<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\ApiController;
use Symfony\Component\HttpKernel\Exception\HttpException;

class StudentController extends ApiController
{

    public function getAllStudents(){
        $studentlist = null;
        $studentlist = array(
            new Student("Diego Avila Morales", 9, 21),
            new Student("Carlos Pool Quintal", 9, 21),
            new Student("Naomi García Sanchez", 9, 21),
            new Student("Johan Abraham Cáceres Quintal", 9, 21));
        return $this->successResponse($studentlist,"Entries found");
    }
}
