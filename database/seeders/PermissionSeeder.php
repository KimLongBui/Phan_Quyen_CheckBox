<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = [
            [
                'id'    => '1',
                'title' => 'QIP'
            ],
            [
                'id'    => '2',
                'title' => 'product-storage/year'
            ],
            [
                'id'    => '3',
                'title' => 'product-storage'
            ],
            [
                'id'    => '4',
                'title' => 'daily-mold'
            ],
            [
                'id'    => '5',
                'title' => 'qip/search'
            ],

        ];

        Permission::insert($permission);
    }
}
