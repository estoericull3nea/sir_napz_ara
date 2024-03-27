<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerAGJC extends Controller
{
    function get_all_student($id = null)
    {
        $students_agjc = array(
            array("stud_id" => 1, "first_name" => "Ericson", "middle_name" => "Ubando", "last_name" => "Palisoc", "email_address" => "ericson@gmail.com"),
            array("stud_id" => 2, "first_name" => "Agnes", "middle_name" => "Santos", "last_name" => "Garcia", "email_address" => "agnes@gmail.com"),
            array("stud_id" => 3, "first_name" => "Angelvic", "middle_name" => "Reyes", "last_name" => "Claudio", "email_address" => "angelvic@gmail.com"),
            array("stud_id" => 4, "first_name" => "Bencel", "middle_name" => "Cruz", "last_name" => "Mendoza", "email_address" => "bencel@gmail.com"),
            array("stud_id" => 5, "first_name" => "Luisa", "middle_name" => "Garcia", "last_name" => "Soriano", "email_address" => "luisa@gmail.com"),
            array("stud_id" => 6, "first_name" => "Twinkle", "middle_name" => "Ramos", "last_name" => "Diaz", "email_address" => "tin@gmail.com"),
            array("stud_id" => 7, "first_name" => "Evandolph", "middle_name" => "Aquino", "last_name" => "Garcia", "email_address" => "evan@gmail.com"),
            array("stud_id" => 8, "first_name" => "Mildred", "middle_name" => "Villanueva", "last_name" => "Arenas", "email_address" => "mildred@gmail.com"),
            array("stud_id" => 9, "first_name" => "Bryan", "middle_name" => "Fernandez", "last_name" => "Tisado", "email_address" => "tisado@gmail.com"),
            array("stud_id" => 10, "first_name" => "Leandro", "middle_name" => "Gonzales", "last_name" => "Estabilio", "email_address" => "leandro@gmail.com")
        );

        if ($id !== null) {

            if ($id <= 0) {
                $error_agjc = "Invalid Input";
                return view('students')->with('error_agjc', $error_agjc);
            }

            if ($id >= 11) {
                $error_agjc = "Student Not Found";
                return view('students')->with('error_agjc', $error_agjc);
            }

            foreach ($students_agjc as $student) {
                if ($student['stud_id'] == $id) {
                    return view('students')->with('student', $student);
                }
            }
        }
        return view('students')->with('students_agjc', $students_agjc);
    }
}