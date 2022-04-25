<?php

namespace Tests\Unit;

use Database\Seeders\UserSeeder;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Repositories\UserRepository;

class RepositoryTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetAll()
    {
        $this->seed(UserSeeder::class);

        $userRepository = new UserRepository();
        $result = $userRepository->getAll();
        self::assertEquals('Vladimir', $result[0]['name']);
        self::assertCount(1, $result);

        $this->assertTrue(true);
    }
}
