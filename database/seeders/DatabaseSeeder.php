<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Workouts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // inject admin user
        User::create([
            'name' => 'Andrzej Zelman',
            'email' => 'andrzej@zelmandesign.com',
            'password' => 'Tungusk@88'
        ]);

        // spatie docs here :
        // https://spatie.be/docs/laravel-permission/v6/basic-usage/basic-usage
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'access admin panel']);

        // Assign permission to the role
        $role->givePermissionTo($permission);

        $user = User::find(1); // Fetch the user you want to assign the role to
        $role = Role::where('name', 'admin')->first(); // Fetch the 'admin' role

        if ($user && $role) {
            $user->assignRole($role); // Assign the 'admin' role to the user
            Log::info('Role admin assigned to user successfully.');
        } else {
            Log::info('User or role not found.');
        }

        ;

        // first workout
        Workouts::create([
            'name' => 'HIIT Circuit',
            'category' => 'cardio',
            'tags' => 'HIIT, fitness',
            'description' => 'High-intensity interval training circuit for all levels'
        ]);

        Workouts::create([
            'name' => 'Yoga Flow',
            'category' => 'mind-body',
            'tags' => 'yoga, meditation, flexibility',
            'description' => 'A flowing yoga sequence to enhance flexibility and calmness'
        ]);

        Workouts::create([
            'name' => 'CrossFit WOD',
            'category' => 'crossfit',
            'tags' => 'strength, endurance',
            'description' => 'CrossFit workout of the day for overall fitness'
        ]);

        Workouts::create([
            'name' => 'Tabata Training',
            'category' => 'cardio',
            'tags' => 'Tabata, fitness',
            'description' => 'High-intensity interval training with Tabata protocol'
        ]);

        Workouts::create([
            'name' => 'Pilates Core Focus',
            'category' => 'core strength',
            'tags' => 'Pilates, core, stability',
            'description' => 'Pilates routine focusing on core strength and stability'
        ]);

        Workouts::create([
            'name' => 'Powerlifting Basics',
            'category' => 'strength training',
            'tags' => 'powerlifting, strength',
            'description' => 'Introduction to powerlifting exercises and techniques'
        ]);

        Workouts::create([
            'name' => 'Zumba Dance Party',
            'category' => 'dance fitness',
            'tags' => 'Zumba, dance, fun',
            'description' => 'Energetic Zumba routine for a dance-filled workout'
        ]);

        Workouts::create([
            'name' => 'MMA Conditioning',
            'category' => 'mixed martial arts',
            'tags' => 'MMA, conditioning',
            'description' => 'Conditioning workout inspired by mixed martial arts training'
        ]);

        Workouts::create([
            'name' => 'Cycling Adventure',
            'category' => 'cardio',
            'tags' => 'cycling, outdoors',
            'description' => 'Outdoor cycling adventure for cardio and scenic enjoyment'
        ]);

        Workouts::create([
            'name' => 'Functional Fitness',
            'category' => 'overall fitness',
            'tags' => 'functional training, strength',
            'description' => 'Functional exercises targeting everyday movement patterns'
        ]);
    }
}
