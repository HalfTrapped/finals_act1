<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Profile;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            // Create a Profile for each User
            $user->profile()->create(ProfileFactory::new()->make()->toArray());
            
            // Create a few courses for each user, assuming a many-to-many relationship
            $courses = Course::inRandomOrder()->limit(3)->get(); // Adjust the number as needed
            $user->courses()->attach($courses);
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
