<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $departments = [
            [
              'department_name'  => 'Office of the College Dean'
            ],  
            [
              'department_name'  => 'Department of Student Affairs and Services'
            ], 
            [
              'department_name'  => 'Human Resource Management Office'
            ], 
            [
              'department_name'  => 'Basic Education Department'
            ],
            [
              'department_name'  => 'Quality Assurance Division'
            ],
            [
              'department_name'  => 'Guidance and Testing Center'
            ],
            [
              'department_name'  => 'Finance'
            ],
            [
              'department_name'  => 'Registrar'
            ],
            [
              'department_name'  => 'College of Business'
            ],
            [
              'department_name'  => 'College of Computer Studies'
            ],
            [
              'department_name'  => 'Compliance Office'
            ],
            [
              'department_name'  => 'Supply Office'
            ],
            [
              'department_name'  => 'Pharmacy Department'
            ],
            [
              'department_name'  => 'College of Education'
            ],
            [
              'department_name'  => 'Administrative Office'
            ],
            [
              'department_name'  => 'Department of Criminology'
            ],
            [
              'department_name'  => 'Reserve Officers Training Corps'
            ],
            [
              'department_name'  => 'Supreme Student Council'
            ],
            [
              'department_name'  => 'Academic Department'
            ],
            [
              'department_name'  => 'Office of the External Affairs'
            ],
            [
              'department_name'  => 'Office of the Executive Vice President'
            ],
            [
              'department_name'  => 'Office of the School Registrar'
            ],
            [
              'department_name'  => 'Office of the School President'
            ],
            [
              'department_name'  => 'Library'
            ],
            [
              'department_name'  => 'Property Custodian'
            ],
            [
              'department_name'  => 'Office of the Property Custodian'
            ],
            [
              'department_name'  => 'Marketing and Information Office'
            ],
            [
              'department_name'  => 'Office of the Academic Director'
            ],
            [
              'department_name'  => 'Office of the Scholarship Coordinator'
            ],
            [
              'department_name'  => 'Office of the Prefect Discipline'
            ],
            [
              'department_name'  => 'Office of the TESDA Coordinator'
            ],
            [
              'department_name'  => 'Office of the Prefect of Discipline'
            ],
            [
              'department_name'  => 'Accountancy Department'
            ],
            [
              'department_name'  => 'Office of the External Affairs and Linkages'
            ],
            [
              'department_name'  => 'Safety and Security'
            ],
            [
              'department_name'  => 'Research and Development Office'
            ],
            [
              'department_name'  => 'Customer Relation Office'
            ],
            [
              'department_name'  => 'Business Department'
            ],
            [
              'department_name'  => 'Education Department'
            ],
            [
              'department_name'  => 'Computer Studies Department'
            ],
            [
              'department_name'  => 'Information Office'
            ],
            [
              'department_name'  => 'Customer Relations Office'
            ],
            [
              'department_name'  => 'Criminology Department'
            ],
            [
              'department_name'  => 'College Department'
            ]
          ];
  
          Department::insert($departments);
    }
}
