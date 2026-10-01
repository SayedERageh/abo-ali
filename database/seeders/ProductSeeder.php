<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->delete();

        $products = [

            [
                'name_ar' => 'نقل عفش الكويت',
                'name_en' => 'Furniture Moving in Kuwait',

                'slug' => 'furniture-moving-kuwait',

                'description_ar' =>
                    'خدمة نقل عفش الكويت للمنازل والشقق والفلل، مع توفير العمال وسيارات نقل العفش ونقل الأثاث من مكان إلى آخر داخل الكويت.',

                'description_en' =>
                    'Professional furniture moving service in Kuwait for houses, apartments, and villas, with moving workers and suitable transportation.',

                'image' => 'products/furniture-moving.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 1,
            ],

            [
                'name_ar' => 'نقل أثاث من بيت لبيت',
                'name_en' => 'House to House Furniture Moving',

                'slug' => 'house-to-house-furniture-moving',

                'description_ar' =>
                    'نقل أثاث وعفش من بيت لبيت ومن منزل لمنزل داخل الكويت، مع التعامل مع غرف النوم والكنب والطاولات وجميع قطع الأثاث.',

                'description_en' =>
                    'House-to-house and home-to-home furniture moving throughout Kuwait, including bedrooms, sofas, tables, and other furniture.',

                'image' => 'products/house-moving.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 2,
            ],

            [
                'name_ar' => 'فك وتركيب غرف النوم',
                'name_en' => 'Bedroom Dismantling & Assembly',

                'slug' => 'bedroom-dismantling-assembly-kuwait',

                'description_ar' =>
                    'خدمة فك وتركيب غرف النوم بالكويت، وتشمل الكبتات والسرائر والتسريحة وجميع قطع غرفة النوم قبل النقل وبعد الوصول.',

                'description_en' =>
                    'Professional bedroom dismantling and assembly in Kuwait, including wardrobes, beds, dressers, and bedroom furniture before and after moving.',

                'image' => 'products/bedroom-moving.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 3,
            ],

            [
                'name_ar' => 'نقل الكبتات والسرائر',
                'name_en' => 'Wardrobe & Bed Moving',

                'slug' => 'wardrobe-bed-moving-kuwait',

                'description_ar' =>
                    'نقل كبتات وسرائر وأثاث غرف النوم داخل الكويت، مع إمكانية فك وتركيب القطع الكبيرة وتجهيزها للنقل.',

                'description_en' =>
                    'Moving wardrobes, beds, and bedroom furniture throughout Kuwait, with dismantling and assembly for large furniture when required.',

                'image' => 'products/wardrobe-bed-moving.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 4,
            ],

            [
                'name_ar' => 'تغليف العفش والأثاث',
                'name_en' => 'Furniture & Belongings Packing',

                'slug' => 'furniture-packing-kuwait',

                'description_ar' =>
                    'لدينا قسم خاص لتغليف العفش والأثاث والأغراض قبل النقل للمساعدة في حمايتها أثناء التحميل والنقل والتنزيل.',

                'description_en' =>
                    'Dedicated furniture and household belongings packing service to help protect items during loading, transportation, and unloading.',

                'image' => 'products/furniture-packing.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 5,
            ],

            [
                'name_ar' => 'نقل أغراض البيت والمكاتب والمخازن',
                'name_en' => 'Household, Office & Warehouse Moving',

                'slug' => 'household-office-warehouse-moving',

                'description_ar' =>
                    'نقل أغراض البيت والأثاث المستعمل والمكاتب والمخازن والخيام داخل الكويت، مع توفير العمال وسيارات النقل حسب حجم ونوع المنقولات.',

                'description_en' =>
                    'Moving household belongings, used furniture, offices, warehouses, and tents throughout Kuwait, with workers and transportation according to the size and type of items.',

                'image' => 'products/office-warehouse-moving.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 6,
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}