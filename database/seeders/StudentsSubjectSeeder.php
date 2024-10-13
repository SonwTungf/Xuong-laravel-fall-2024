<?php

namespace Database\Seeders;

use App\Models\Students_Subject;
use Database\Factories\StudentsSubjectFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentsSubjectFactory::factory(10)->create();
    }
}
