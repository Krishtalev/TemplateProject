<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return array
     */
    private function getUsers(): array
    {
        return [
            [
                "name" => "Vladimir",
                "email" => "vladimir@smartworld.team",
                "password" => "1234"
            ],
            [
                "name" => "Sultan",
                "email" => "sultan@smartworld.team",
                "password" => "4321"
            ],
        ];
    }

    public function isEmpty(): bool
    {
        return DB::table('users')->get()->count() === 0;
    }

    public function run()
    {
        if ($this->isEmpty())
            DB::table('users')->insert($this->getUsers());
    }
}
