<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['FrontEnd', 'Backend', 'FullStack', 'Design', 'DevOps'];

        foreach($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->slug = Str::slug($newType->name, '-');
            $newType->save();
        }
    }
}
