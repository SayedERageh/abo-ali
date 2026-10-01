<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [

            [
                'title_ar' => 'نقل عفش الكويت',
                'title_en' => 'Furniture Moving in Kuwait',
                'slug' => 'furniture-moving-kuwait',

                'short_description_ar' => 'خدمة نقل عفش وأثاث وأغراض داخل الكويت من البيت إلى البيت أو من شقة إلى شقة.',
                'short_description_en' => 'Professional furniture, household and belongings moving across Kuwait.',

                'description_ar' =>
                    'نقدم خدمة نقل عفش الكويت ونقل الأثاث والأغراض داخل الكويت، من بيت لبيت ومن منزل لمنزل ومن شقة لشقة، مع توفير العمال والسيارات المناسبة لنقل العفش وتحميله وتفريغه بعناية.',

                'description_en' =>
                    'We provide professional furniture, household and belongings moving services across Kuwait, including house-to-house and apartment-to-apartment moving with suitable workers and moving vehicles.',

                'icon' => 'bi bi-truck',
                'image' => 'services/furniture-moving-kuwait.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'فك وتركيب عفش الكويت',
                'title_en' => 'Furniture Dismantling and Assembly in Kuwait',
                'slug' => 'furniture-dismantling-assembly-kuwait',

                'short_description_ar' => 'فك وتركيب العفش والأثاث وغرف النوم والكبتات والسرائر بواسطة عمال متخصصين.',
                'short_description_en' => 'Professional furniture, bedroom, wardrobe and bed dismantling and assembly.',

                'description_ar' =>
                    'نوفر خدمة فك وتركيب عفش الكويت قبل النقل وبعد الوصول، وتشمل فك وتركيب غرف النوم والكبتات والسرائر وقطع الأثاث المختلفة، مع الاهتمام بترتيب القطع وتجهيزها للنقل والتركيب من جديد.',

                'description_en' =>
                    'We provide professional furniture dismantling and assembly in Kuwait, including bedrooms, wardrobes, beds and various furniture pieces before and after moving.',

                'icon' => 'bi bi-tools',
                'image' => 'services/furniture-dismantling-assembly.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'نقل أثاث الكويت',
                'title_en' => 'Furniture Moving Kuwait',
                'slug' => 'furniture-moving-kuwait',

                'short_description_ar' => 'نقل أثاث الكويت للمنازل والشقق والفلل والمكاتب والمخازن.',
                'short_description_en' => 'Furniture moving services for homes, apartments, villas, offices and warehouses in Kuwait.',

                'description_ar' =>
                    'نقدم خدمات نقل أثاث الكويت لمختلف أنواع العقارات، سواء نقل أثاث منزل أو شقة أو فيلا أو مكتب أو مخزن، مع إمكانية توفير العمال والسيارات وتجهيز الأثاث قبل التحميل والنقل.',

                'description_en' =>
                    'We provide furniture moving services in Kuwait for homes, apartments, villas, offices and warehouses, with workers and suitable moving vehicles available according to the service requirements.',

                'icon' => 'bi bi-house-door',
                'image' => 'services/furniture-moving.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تغليف العفش والأثاث',
                'title_en' => 'Furniture and Belongings Packing',
                'slug' => 'furniture-packing-kuwait',

                'short_description_ar' => 'تغليف العفش والأثاث والأغراض قبل التحميل والنقل داخل الكويت.',
                'short_description_en' => 'Professional packing of furniture and household belongings before moving.',

                'description_ar' =>
                    'نوفر خدمة تغليف العفش والأثاث والأغراض قبل النقل، للمساعدة على حماية القطع أثناء التحميل والنقل والتفريغ، وتشمل الخدمة تجهيز قطع الأثاث وغرف النوم والكبتات والسرائر والأغراض المنزلية.',

                'description_en' =>
                    'We provide professional furniture and household belongings packing before moving to help protect items during loading, transportation and unloading.',

                'icon' => 'bi bi-box-seam',
                'image' => 'services/furniture-packing-kuwait.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'نقل غرف النوم والكبتات والسرائر',
                'title_en' => 'Bedroom, Wardrobe and Bed Moving',
                'slug' => 'bedroom-wardrobe-bed-moving-kuwait',

                'short_description_ar' => 'نقل غرف النوم والكبتات والسرائر مع إمكانية الفك والتركيب والتغليف.',
                'short_description_en' => 'Bedroom, wardrobe and bed moving with dismantling, packing and assembly.',

                'description_ar' =>
                    'خدمة متخصصة في نقل غرف النوم والكبتات والسرائر داخل الكويت، بداية من فك القطع وتجهيزها وتغليفها، ثم تحميلها ونقلها إلى الموقع الجديد وتركيبها عند الحاجة.',

                'description_en' =>
                    'Specialized moving service for bedrooms, wardrobes and beds across Kuwait, including dismantling, preparation, packing, transportation and assembly when required.',

                'icon' => 'bi bi-door-open',
                'image' => 'services/bedroom-wardrobe-moving.jpg',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'نقل أغراض البيت والمكاتب والمخازن',
                'title_en' => 'Household, Office and Warehouse Moving',
                'slug' => 'household-office-warehouse-moving-kuwait',

                'short_description_ar' => 'نقل أغراض البيت والأثاث والمكاتب والمخازن داخل الكويت بسيارات وعمال مناسبين.',
                'short_description_en' => 'Moving household belongings, office furniture and warehouse items across Kuwait.',

                'description_ar' =>
                    'نقدم خدمة نقل أغراض الكويت ونقل أغراض البيت والمكاتب والمخازن، بما يشمل الأثاث والقطع المختلفة والأغراض المنزلية والمستلزمات، مع توفير العمال وسيارات نقل العفش حسب حجم المنقولات.',

                'description_en' =>
                    'We provide household, office and warehouse moving services across Kuwait, including furniture, belongings and various items with suitable workers and moving vehicles.',

                'icon' => 'bi bi-boxes',
                'image' => 'services/household-office-warehouse-moving.jpg',
                'sort_order' => 6,
                'is_active' => true,
            ],

        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}