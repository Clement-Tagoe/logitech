<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Status;
use App\Models\Freight;
use App\Models\Category;
use App\Models\DataEntry;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Air Import Freight'
        ]);

        Category::create([
            'name' => 'Air Export Freight'
        ]);

        Category::create([
            'name' => 'Sea Export Freight'
        ]);

        Category::create([
            'name' => 'Sea Import Freight'
        ]);

        Status::create([
            'name' => 'Data Entry'
        ]);

        Status::create([
            'name' => 'Approval'
        ]);

        Status::create([
            'name' => 'Shipping Line Release'
        ]);

        Status::create([
            'name' => 'Port Clearance'
        ]);

        Status::create([
            'name' => 'Haulage'
        ]);
        
        Freight::create([
            'category_id' => 1,
            'status_id' => 1,
            'file_number' => 'C001',
            'bl_number'=> 'MSC1938422',
            'customer_name' => 'Safrip Ghana Limited',
        ]);

        Freight::create([
            'category_id' => 1,
            'status_id' => 2,
            'file_number' => 'C002',
            'bl_number'=> 'MSC2068459',
            'customer_name' => 'Nutrifoods Ghana Limited',
        ]);

        Freight::create([
            'category_id' => 3,
            'status_id' => 2,
            'file_number' => 'C003',
            'bl_number'=> 'LLJ5876985',
            'customer_name' => 'Sevaco PPS Limited',
        ]);

        Freight::create([
            'category_id' => 4,
            'status_id' => 4,
            'file_number' => 'C004',
            'bl_number'=> 'MSC0987321',
            'customer_name' => 'Newmont Ghana Limited',
        ]);

        Freight::create([
            'category_id' => 2,
            'status_id' => 1,
            'file_number' => 'C005',
            'bl_number'=> 'KSC4421093',
            'customer_name' => 'B5 Plus Company',
        ]);

        Freight::create([
            'category_id' => 3,
            'status_id' => 3,
            'file_number' => 'C006',
            'bl_number'=> 'MUC3340098',
            'customer_name' => 'Sevaco PPS Limited',
        ]);

        Freight::create([
            'category_id' => 1,
            'status_id' => 2,
            'file_number' => 'C007',
            'bl_number'=> 'GHW1209987',
            'customer_name' => 'Ghacem Ghana Limited',
        ]);

        Freight::create([
            'category_id' => 1,
            'status_id' => 1,
            'file_number' => 'C008',
            'bl_number'=> 'RSW7802187',
            'customer_name' => 'Accra Brewery Company',
        ]);

        Freight::create([
            'category_id' => 4,
            'status_id' => 3,
            'file_number' => 'C009',
            'bl_number'=> 'GHS4398765',
            'customer_name' => 'Vivo Energy Ghana',
        ]);

        Freight::create([
            'category_id' => 2,
            'status_id' => 1,
            'file_number' => 'C010',
            'bl_number'=> 'AWQ2398764',
            'customer_name' => 'Global Training Institute',
        ]);

        Freight::create([
            'category_id' => 1,
            'status_id' => 4,
            'file_number' => 'C011',
            'bl_number'=> 'FSS1143980',
            'customer_name' => 'CTA Investments Limited',
        ]);

        Freight::create([
            'category_id' => 1,
            'status_id' => 2,
            'file_number' => 'C012',
            'bl_number'=> 'MFC2112983',
            'customer_name' => 'Marina Market Limited',
        ]);

        Freight::create([
        'category_id' => 2,
        'status_id' => 3,
        'file_number' => 'C013',
        'bl_number'=> 'FSE2300948',
        'customer_name' => 'Menergy Ghana Limited',
        ]);

        Freight::create([
        'category_id' => 4,
        'status_id' => 5,
        'file_number' => 'C014',
        'bl_number'=> 'DDJ3998412',
        'customer_name' => 'Chobi Ghana Limited',
        ]);

        Freight::create([
        'category_id' => 2,
        'status_id' => 1,
        'file_number' => 'C015',
        'bl_number'=> 'DWQ4599231',
        'customer_name' => 'Axero Company Limited',
        ]);

        Freight::create([
        'category_id' => 4,
        'status_id' => 3,
        'file_number' => 'C016',
        'bl_number'=> 'KDW3980012',
        'customer_name' => 'Association International',
        ]);

        Freight::create([
        'category_id' => 2,
        'status_id' => 5,
        'file_number' => 'C017',
        'bl_number'=> 'GHW2398454',
        'customer_name' => 'K. Ofori Limited',
        ]);

        Freight::create([
        'category_id' => 1,
        'status_id' => 4,
        'file_number' => 'C018',
        'bl_number'=> 'KBR1998843',
        'customer_name' => 'Dzata Cement Ghana Limited',
        ]);

        Freight::create([
        'category_id' => 4,
        'status_id' => 1,
        'file_number' => 'C019',
        'bl_number'=> 'FST2340987',
        'customer_name' => 'Ghana Gas Limited',
        ]);

        Freight::create([
        'category_id' => 3,
        'status_id' => 5,
        'file_number' => 'C020',
        'bl_number'=> 'STC9099323',
        'customer_name' => 'Star Ghana Limited',
        ]);

        Freight::create([
        'category_id' => 1,
        'status_id' => 4,
        'file_number' => 'C021',
        'bl_number'=> 'AWE34998762',
        'customer_name' => 'Health Net Medical Centre',
        ]);

        Freight::create([
        'category_id' => 3,
        'status_id' => 2,
        'file_number' => 'C022',
        'bl_number'=> 'FEW134904',
        'customer_name' => 'Adidas Ghana Limited',
        ]);
    }
}
