<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use BooksSeederTable;
// use SavesSeederTable;
// use UsersSeederTable;
// use OrdersSeederTable;
// use SlidesSeederTable;
// use AuthorsSeederTable;
// use CommentsSeederTable;
// use PaymentsSeederTable;
// use CompaniesSeederTable;
// use CategoriesSeederTable;
// use OrderDetailsSeederTable;
use Illuminate\Database\Seeder;

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
        // $this->call(UsersSeederTable::class);
        // $this->call(CategoriesSeederTable::class);
        // $this->call(AuthorsSeederTable::class);
        // $this->call(CompaniesSeederTable::class);
        // $this->call(BooksSeederTable::class);

        // $this->call(PaymentsSeederTable::class);

        // $this->call(OrdersSeederTable::class);

        // $this->call(OrderDetailsSeederTable::class);

        $this->call(CommentsSeederTable::class);

        $this->call(SlidesSeederTable::class);
        $this->call(SavesSeederTable::class);
        
    }
}
