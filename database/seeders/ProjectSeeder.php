<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::query()->delete();

        $projects = [

            [
                'title_ar' => 'نقل عفش من بيت لبيت',
                'title_en' => 'House to House Furniture Moving',

                'slug' => 'house-to-house-furniture-moving',

                'category_ar' => 'نقل عفش',
                'category_en' => 'Furniture Moving',

                'description_ar' => 'خدمة نقل عفش وأثاث من بيت لبيت داخل الكويت، تشمل تحميل العفش ونقله وتنزيله، مع إمكانية فك وتركيب قطع الأثاث الكبيرة حسب احتياج العميل.',

                'description_en' => 'House-to-house furniture moving service throughout Kuwait, including loading, transportation, unloading, and furniture dismantling and assembly when required.',

                'location_ar' => 'الكويت',
                'location_en' => 'Kuwait',

                'image' => 'projects/house-to-house-moving.jpg',

                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'نقل عفش من شقة لشقة',
                'title_en' => 'Apartment to Apartment Moving',

                'slug' => 'apartment-to-apartment-moving',

                'category_ar' => 'نقل أثاث',
                'category_en' => 'Furniture Moving',

                'description_ar' => 'نقل أثاث وعفش الشقق داخل الكويت، بما يشمل غرف النوم والكبتات والسرائر والكنب والطاولات وجميع الأغراض المنزلية.',

                'description_en' => 'Apartment-to-apartment furniture moving throughout Kuwait, including bedrooms, wardrobes, beds, sofas, tables, and household belongings.',

                'location_ar' => 'الكويت',
                'location_en' => 'Kuwait',

                'image' => 'projects/apartment-moving.jpg',

                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'فك وتركيب غرف النوم والكبتات',
                'title_en' => 'Bedroom & Wardrobe Dismantling and Assembly',

                'slug' => 'bedroom-wardrobe-dismantling-assembly',

                'category_ar' => 'فك وتركيب',
                'category_en' => 'Dismantling & Assembly',

                'description_ar' => 'فك وتركيب غرف النوم والكبتات والسرائر والتسريحات وجميع قطع الأثاث، مع تجهيز القطع للنقل وإعادة تركيبها في المكان الجديد.',

                'description_en' => 'Dismantling and assembly of bedrooms, wardrobes, beds, dressers, and other furniture, including preparation for moving and reassembly at the new location.',

                'location_ar' => 'الكويت',
                'location_en' => 'Kuwait',

                'image' => 'projects/bedroom-dismantling.jpg',

                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تغليف ونقل العفش والأغراض',
                'title_en' => 'Furniture Packing and Moving',

                'slug' => 'furniture-packing-and-moving',

                'category_ar' => 'تغليف العفش',
                'category_en' => 'Furniture Packing',

                'description_ar' => 'خدمة خاصة لتغليف العفش والأثاث والأغراض قبل النقل، مع تجهيز المنقولات للتحميل والنقل والتنزيل للمساعدة في الحفاظ عليها.',

                'description_en' => 'Dedicated furniture and belongings packing service before transportation, preparing items for loading, transportation, and unloading.',

                'location_ar' => 'الكويت',
                'location_en' => 'Kuwait',

                'image' => 'projects/furniture-packing.jpg',

                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'نقل المكاتب والمخازن',
                'title_en' => 'Office and Warehouse Moving',

                'slug' => 'office-warehouse-moving-kuwait',

                'category_ar' => 'نقل مكاتب ومخازن',
                'category_en' => 'Office & Warehouse Moving',

                'description_ar' => 'نقل أثاث المكاتب ومحتويات المخازن داخل الكويت، مع توفير العمال وسيارات النقل المناسبة حسب كمية وحجم المنقولات.',

                'description_en' => 'Office furniture and warehouse contents moving throughout Kuwait, with workers and suitable transportation according to the size and quantity of items.',

                'location_ar' => 'الكويت',
                'location_en' => 'Kuwait',

                'image' => 'projects/office-warehouse-moving.jpg',

                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'نقل الأثاث والقطع المستعملة',
                'title_en' => 'Used Furniture Moving',

                'slug' => 'used-furniture-moving-kuwait',

                'category_ar' => 'نقل أثاث مستعمل',
                'category_en' => 'Used Furniture Moving',

                'description_ar' => 'نقل الأثاث المستعمل وقطع الأثاث المختلفة داخل الكويت، سواء كانت غرفة نوم أو كبت أو سرير أو كنبة أو أي قطعة أثاث أخرى.',

                'description_en' => 'Moving used furniture and individual furniture pieces throughout Kuwait, including bedrooms, wardrobes, beds, sofas, and other furniture.',

                'location_ar' => 'الكويت',
                'location_en' => 'Kuwait',

                'image' => 'projects/used-furniture-moving.jpg',

                'sort_order' => 6,
                'is_active' => true,
            ],

        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}