<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Bio;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Social;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Bio::truncate();
        Contact::truncate();
        Education::truncate();
        Skill::truncate();
        Social::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Bio::factory()->count(4)->create();
        Contact::factory()->count(4)->create();
        Education::factory()->count(4)->create();
        Skill::factory()->count(4)->create();
        Social::factory()->count(4)->create();


        

            
    }
}
