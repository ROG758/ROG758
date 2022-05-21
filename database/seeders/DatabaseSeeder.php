<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ProveedorModel;
use App\Models\ProductoModel;
use App\Models\ClienteModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(60)->create();
         ProveedorModel::factory(250)->create();
         ProductoModel::factory(250)->create();
         ClienteModel::factory(250)->create();

    }
}
