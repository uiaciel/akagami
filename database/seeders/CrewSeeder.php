<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create user
        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->role = "Admin";
        $user->password = bcrypt('admin123');
        $user->save();


        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('crews')->insert([
                'subid' => $faker->bothify('ID##??'),
                'name' => $faker->firstNameMale,
                'place' => $faker->city,
                'birth' => $faker->date('Y/m/d'),
                'nationaly' => 'Indonesia',
                'status' => $faker->randomElement(['On board', 'Stand-by', 'Unstand-by']),
                'religion' => 'Islam',
                'height' => $faker->numberBetween(167, 178),
                'weight' => $faker->numberBetween(80, 100),
                'marital' => $faker->randomElement(['Married', 'Single']),
                'child' => $faker->numberBetween(0, 3),
                'specialmark' => $faker->sentence(),
                'photo' =>
                $faker->randomElement(['img/foto-1.jpg', 'img/foto-2.jpg', 'img/foto-3.jpg', 'img/foto-4.jpg']),

                'signoff' => $faker->date(),
                'job_id' => $faker->randomElement([1, 2, 3, 4]),
                'currencysalary' => 'Rp',
                'salary' => $faker->numberBetween(2000, 3000),
                'shoes' => $faker->randomElement(['EU40/JP25.5', 'EU44/JP28.5']),
                'glove' => $faker->randomElement(['S', 'M', 'L', 'XL', 'XXL', 'XXXL']),
                'kappa' => $faker->randomElement(['S', 'M', 'L', 'XL', 'XXL', 'XXXL']),
                'remark' => $faker->sentence(),
                'license' => $faker->sentence(),
                'visa_id' =>
                $faker->numberBetween(1, 50),
                'passport_id' =>
                $faker->numberBetween(1, 50),
                'orangebook_id' =>
                $faker->numberBetween(1, 50),
                'seamanbook_id' =>
                $faker->numberBetween(1, 50),


            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('documents')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => 'Entry Visa',
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),
                'country' => 'Indonesia',
            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('documents')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => 'Passport',
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('documents')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => 'Seaman Book',
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('documents')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => 'Orange Book',
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }
        //Education Competence Proficiency
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('certificates')->insert([
                'crew_id' => $i,
                'category' => 'Education',
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['SD/MI', 'D-3']),
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        //Education Competence Proficiency
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('certificates')->insert([
                'crew_id' => $i,
                'category' => 'Competence',
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['ANT-II', 'ATT-IV']),
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        //Education Competence Proficiency
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('certificates')->insert([
                'crew_id' => $i,
                'category' => 'Proficiency',
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['SCRB', 'SDSD']),
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        //Medical
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('medicals')->insert([
                'crew_id' => $i,
                'type' => $faker->randomElement(['MCU', 'Vaccine']),
                'path' => '/file/1672044060-visa-12345678pdf',
                'date' => $faker->date('Y/m/d', 'now'),
                'description' => $faker->sentence(),

            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('contracts')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['SCRB', 'SDSD']),
                'pdf' => '/file/1672044060-visa-12345678pdf',
                'embarkation' => $faker->date('Y/m/d', 'now'),
                'vessel_name' => $faker->randomElement(['Dai Maru 2', 'Takashi 4']),

            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('contracts')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['PKL', 'Memorandum']),
                'pdf' => '/file/1672044060-visa-12345678pdf',
                'embarkation' => $faker->date('Y/m/d', 'now'),
                'vessel_name' => $faker->randomElement(['Dai Maru 2', 'Takashi 4']),

            ]);
        }

        // $faker = Faker::create('id_ID');
        // for ($i = 1; $i <= 51;
        //     $i++
        // ) {
        //     DB::table('documents')->insert([
        //         'vesselsname'
        //         'maru'

        //         'number'
        //         'affiliation'
        //         'signon' => $faker->date('Y/m/d'),
        //         'signoff' => $faker->date('Y/m/d'),
        //         'periode'
        //         'currencysalary',
        //         'job_id'
        //         'salary'
        //         'bonus'
        //         'currencybonus'
        //         'shipflag'
        //         'freezer'
        //         'type'
        //         'fishingground'
        //         'tonnage'
        //         'fishingmaster'
        //         'coldarea'
        //         'grade'
        //     ]);
        // }

        // $table->string('vesselsname');
        // $table->string('maru');
        // $table->string('number');
        // $table->string('affiliation')->nullable();
        // $table->date('signon');
        // $table->date('signoff');
        // $table->integer('periode');
        // $table->string('currencysalary');
        // $table->bigInteger('job_id')->unsigned();
        // $table->foreign('job_id')->references('id')->on('jobs');
        // $table->integer('salary');
        // $table->integer('bonus');
        // $table->string('currencybonus');

        // $table->string('shipflag');
        // $table->string('freezer');
        // $table->string('type');
        // $table->string('fishingground');
        // $table->string('tonnage');
        // $table->string('fishingmaster');
        // $table->string('coldarea');
        // $table->string('disembark');
        // $table->string('grade')->nullable();
    }
}
