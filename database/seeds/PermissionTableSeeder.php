<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);


        //Users

        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Crear usuarios',
            'slug'          => 'users.create',
            'description'   => 'Podría crear nuevos usuarios en el sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);

        
        //Accionista
        Permission::create([
            'name'          => 'Listar accionistas',
            'slug'          => 'shareholder.index',
            'description'   => 'Lista y navega todos los accionistas del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalles de un accionista',
            'slug'          => 'shareholder.show',
            'description'   => 'Ver en detalle cada accionista del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de accionistas',
            'slug'          => 'shareholder.create',
            'description'   => 'Podría crear nuevos accionistas en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de accionistas',
            'slug'          => 'shareholder.edit',
            'description'   => 'Podría editar cualquier dato de un accionista del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar accionista',
            'slug'          => 'shareholder.destroy',
            'description'   => 'Podría eliminar cualquier accionista del sistema',        
        ]);

        
    }
}
