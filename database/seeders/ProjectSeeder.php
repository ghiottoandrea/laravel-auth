<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i=0; $i < 15; $i++) { 
            $project = new Project();
            
            $project->title = $faker->streetName();
            $project->description = $faker->sentence(15);
            $project->project_start_date = $faker->date();
            $project->project_end_date = $faker->date();
            $project->link_to_source_code = $faker->url();
            $project->link_to_project_view = $faker->url();
            $project->save();
        }
    }
}
