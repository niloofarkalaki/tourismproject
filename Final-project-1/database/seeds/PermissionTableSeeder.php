<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
           
           'ایجاد قوانین',
           'ویرایش قوانین',
           'حذف قوانین',
           
           'ایجاد پست',
           'ویرایش پست',
           'حذف پست'
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
