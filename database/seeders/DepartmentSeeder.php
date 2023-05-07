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
        $department->name="Allergists";
        $department->save();
        $department= new Department;
        $department->name="Anesthesiologists";
        $department->save();
        $department= new Department;
        $department->name="Cardiologists";
        $department->save();
        $department= new Department;
        $department->name="Dermatologists";
        $department->save();
        $department= new Department;
        $department->name="Endocrinologists";
        $department->save();
        $department= new Department;
        $department->name="Family Physicians";
        $department->save();
        $department= new Department;
        $department->name="Gastroenterologists";
        $department->save();
        $department= new Department;
        $department->name="Hematologists";
        $department->save();
        $department= new Department;
        $department->name="Psychiatrists";
        $department->save();
        $department= new Department;
        $department->name="Pulmonologists";
        $department->save();
        $department= new Department;
        $department->name="Radiologists";
        $department->save();
        $department= new Department;
        $department->name="Urologists";
        $department->save();
        $department= new Department;
        $department->name="Podiatrists";
        $department->save();
    }
}
