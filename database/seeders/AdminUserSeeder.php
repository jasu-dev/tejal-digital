<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $email    = env('ADMIN_EMAIL', 'admin@tejaldigital.in');
        $password = env('ADMIN_PASSWORD', 'Admin@123456');

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name'     => 'Admin',
                'email'    => $email,
                'password' => Hash::make($password),
                'is_admin' => true,
            ]
        );

        $this->command->info("Admin user ready: {$user->email}");
        $this->command->warn("Password: {$password} (Change this immediately!)");
    }
}
