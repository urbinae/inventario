<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Users
        Permission::create([
        	'name' => 'Navegador de usuarios',
        	'slug' => 'users.index',
        	'description' => 'Lista y navega todos los usuarios del sistema'
        ]);
        Permission::create([
        	'name' => 'Ver el detalle de usuario',
        	'slug' => 'users.show',
        	'description' => 'Ver en detalle cada usuario del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición de usuario',
        	'slug' => 'users.edit',
        	'description' => 'Editar la informacion de un usuario del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar usuario',
        	'slug' => 'users.destroy',
        	'description' => 'Eliminar la informacion de un usuario del sistema'
        ]);

        //Roles
        Permission::create([
        	'name' => 'Navegador de roles',
        	'slug' => 'roles.index',
        	'description' => 'Lista y navega todos los roles del sistema'
        ]);
        Permission::create([
        	'name' => 'Creación de roles',
        	'slug' => 'roles.create',
        	'description' => 'Crear rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Ver el detalle de rol',
        	'slug' => 'roles.show',
        	'description' => 'Ver en detalle cada rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición de rol',
        	'slug' => 'roles.edit',
        	'description' => 'Editar la informacion de un rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar rol',
        	'slug' => 'roles.destroy',
        	'description' => 'Eliminar la informacion de un rol del sistema'
        ]);

        //Products
        Permission::create([
        	'name' => 'Navegador de products',
        	'slug' => 'products.index',
        	'description' => 'Lista y navega todos los products del sistema'
        ]);
        Permission::create([
        	'name' => 'Creación de productos',
        	'slug' => 'products.create',
        	'description' => 'Creación de productos del sistema'
        ]);
        Permission::create([
        	'name' => 'Ver el detalle de producto',
        	'slug' => 'products.show',
        	'description' => 'Ver en detalle cada producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición de producto',
        	'slug' => 'products.edit',
        	'description' => 'Editar la informacion de un producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar producto',
        	'slug' => 'products.destroy',
        	'description' => 'Eliminar la informacion de un producto del sistema'
		]);
		
		//ventas
		Permission::create([
        	'name' => 'Ventas',
        	'slug' => 'products.index',
        	'description' => 'Realizar ventas'
        ]);
    }
}
