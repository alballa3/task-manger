<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Spatie\Permission\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $data = Http::get('https://zenquotes.io/api/random');
        $quote = $data->json()[0]["q"];

        $this->password=fake()->password;
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' =>Hash::make($this->password),
            "password_without_hash"=> $this->password,
            'remember_token' => Str::random(10),
            "description"=> $quote,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ( $user) {
            // Assign a role to the user
            $role = Role::firstOrCreate(['name' => 'user']);
            $user->assignRole($role);

            // Assign permissions if needed
            // $user->givePermissionTo('edit articles');
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
