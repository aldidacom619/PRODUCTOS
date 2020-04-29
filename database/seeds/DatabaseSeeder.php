<?php

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
        // $this->call(UserSeeder::class);
        $this->truncatetables(['categorias','productos']);

        $this->call(CategoriaSeeder::class);
        $this->call(ProductosSeeder::class);

        
    }
    protected function truncatetables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0'); //DESACTIVA LA REVISION DE LLAVES FORANEAS
    	foreach ($tables as $table) {
    		DB::table($table)->truncate(); //borra primero todos los datos
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1'); //ACTIVA LA REVISION DE LLAVES FORANEAS
    }
}
