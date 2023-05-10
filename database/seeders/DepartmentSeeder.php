<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department= new Department;
        $department->dept_name="Allergists";
        $department->save();
        $department= new Department;
        $department->dept_name="Anesthesiologists";
        $department->save();
        $department= new Department;
        $department->dept_name="Cardiologists";
        $department->save();
        $department= new Department;
        $department->dept_name="Dermatologists";
        $department->save();
        $department= new Department;
        $department->dept_name="Endocrinologists";
        $department->save();
        $department= new Department;
        $department->dept_name="Family Physicians";
        $department->save();
        $department= new Department;
        $department->dept_name="Gastroenterologists";
        $department->save();
        $department= new Department;
        $department->dept_name="Hematologists";
        $department->save();
        $department= new Department;
        $department->dept_name="Psychiatrists";
        $department->save();
        $department= new Department;
        $department->dept_name="Pulmonologists";
        $department->save();
        $department= new Department;
        $department->dept_name="Radiologists";
        $department->save();
        $department= new Department;
        $department->dept_name="Urologists";
        $department->save();
        $department= new Department;
        $department->dept_name="Podiatrists";
        $department->save();
    }
}
