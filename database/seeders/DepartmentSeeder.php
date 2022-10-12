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
        'department_name' => 'Academic Department',
        'department_code' => 'ACAD'
      ],
      [
        'department_name' => 'Accountancy Department',
        'department_code' => 'BSA'
      ],
      [
        'department_name' => 'Administrative Office',
        'department_code' => 'ADMIN'
      ],
      [
        'department_name' => 'Basic Education Department',
        'department_code' => 'BED'
      ],
      [
        'department_name' => 'Business Department',
        'department_code' => 'CBA'
      ],
      [
        'department_name' => 'College Department',
        'department_code' => 'COLLEGE'
      ],
      [
        'department_name' => 'Compliance Office',
        'department_code' => 'COM'
      ],
      [
        'department_name' => 'Computer Studies Department',
        'department_code' => 'CS'
      ],
      [
        'department_name' => 'Criminology Department',
        'department_code' => 'CRIM'
      ],
      [
        'department_name' => 'Customer Relations Office',
        'department_code' => 'CRO'
      ],
      [
        'department_name' => 'Department of Student Affairs and Services',
        'department_code' => 'DSAS'
      ],
      [
        'department_name' => 'Education Department',
        'department_code' => 'EDUC'
      ],
      [
        'department_name' => 'Finance Department',
        'department_code' => 'FIN'
      ],
      [
        'department_name' => 'Guidance, Counseling and Testing Center',
        'department_code' => 'GCTC'
      ],
      [
        'department_name' => 'Human Resource Management Office',
        'department_code' => 'HRMO'
      ],
      [
        'department_name' => 'Library',
        'department_code' => 'LIB'
      ],
      [
        'department_name' => 'Marketing and Information Office',
        'department_code' => 'MIO'
      ],
      [
        'department_name' => 'Office of the Academic Director',
        'department_code' => 'ACAD'
      ],
      [
        'department_name' => 'Office of the College Dean',
        'department_code' => 'DEAN'
      ],
      [
        'department_name' => 'Office of the Executive Vice President',
        'department_code' => 'EVP'
      ],
      [
        'department_name' => 'Office of the External Affairs and Linkages',
        'department_code' => 'OEA'
      ],
      [
        'department_name' => 'Office of the Prefect of Discipline',
        'department_code' => 'OPD'
      ],
      [
        'department_name' => 'Office of the Property Custodian',
        'department_code' => 'OPC'
      ],
      [
        'department_name' => 'Office of the School President',
        'department_code' => 'PRES'
      ],
      [
        'department_name' => 'Office of the School Registrar',
        'department_code' => 'REG'
      ],
      [
        'department_name' => 'Office of the TESDA Coordinator',
        'department_code' => 'TESDA'
      ],
      [
        'department_name' => 'Pharmacy Department',
        'department_code' => 'BSP'
      ],
      [
        'department_name' => 'Quality Assurance Division',
        'department_code' => 'QAD'
      ],
      [
        'department_name' => 'Research and Development Office',
        'department_code' => 'RDO'
      ],
      [
        'department_name' => 'Reserve Officers Training Corps',
        'department_code' => 'ROTC'
      ],
      [
        'department_name' => 'Safety and Security',
        'department_code' => 'SAS'
      ],
      [
        'department_name' => 'Supreme Student Council',
        'department_code' => 'SSC'
      ],
    ];

    Department::insert($departments);
  }
}
