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
                'name_ar' => 'تركيب مكيفات سبليت',
                'name_en' => 'Split AC Installation',

                'slug' => 'split-ac-installation-kuwait',

                'description_ar' =>
                    'خدمة تركيب مكيفات سبليت في الكويت للمنازل والشقق والفلل والمكاتب، مع تركيب الوحدة الداخلية والخارجية وتجهيز المكيف للتشغيل.',

                'description_en' =>
                    'Professional split AC installation in Kuwait for homes, apartments, villas, and offices, including indoor and outdoor unit installation and system setup.',

                'image' => 'products/split-ac-installation.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 1,
            ],

            [
                'name_ar' => 'صيانة وتصليح المكيفات',
                'name_en' => 'AC Maintenance & Repair',

                'slug' => 'ac-maintenance-repair-kuwait',

                'description_ar' =>
                    'خدمة صيانة وتصليح المكيفات في الكويت مع فحص أسباب الأعطال ومعالجة مشاكل ضعف التبريد وتسريب المياه والأعطال المختلفة.',

                'description_en' =>
                    'AC maintenance and repair service in Kuwait, including troubleshooting weak cooling, water leakage, and various air conditioning problems.',

                'image' => 'products/ac-maintenance.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 2,
            ],

            [
                'name_ar' => 'تنظيف المكيفات',
                'name_en' => 'AC Cleaning',

                'slug' => 'ac-cleaning-kuwait',

                'description_ar' =>
                    'تنظيف المكيفات وإزالة الأتربة والشوائب من الأجزاء الداخلية والخارجية للمساعدة في تحسين أداء المكيف وكفاءة التبريد.',

                'description_en' =>
                    'Professional AC cleaning to remove dust and buildup from internal and external components and help improve cooling performance and efficiency.',

                'image' => 'products/ac-cleaning.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 3,
            ],

            [
                'name_ar' => 'تعبئة وفحص فريون المكيفات',
                'name_en' => 'AC Refrigerant Check & Charging',

                'slug' => 'ac-refrigerant-charging-kuwait',

                'description_ar' =>
                    'فحص مستوى فريون المكيف وتعبئته عند الحاجة، مع التحقق من أداء التبريد وفحص المشاكل المرتبطة بنقص الفريون أو وجود تسريب.',

                'description_en' =>
                    'AC refrigerant inspection and charging when required, with cooling performance checks and inspection for refrigerant leaks or related issues.',

                'image' => 'products/ac-refrigerant.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 4,
            ],

            [
                'name_ar' => 'صيانة المكيفات المركزية',
                'name_en' => 'Central AC Maintenance',

                'slug' => 'central-ac-maintenance-kuwait',

                'description_ar' =>
                    'خدمات صيانة وتصليح المكيفات المركزية في الكويت للمنازل والفلل والمكاتب والمنشآت، مع فحص النظام ومعالجة الأعطال حسب الحالة.',

                'description_en' =>
                    'Central air conditioning maintenance and repair in Kuwait for homes, villas, offices, and commercial properties, with system inspection and troubleshooting.',

                'image' => 'products/central-ac-maintenance.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 5,
            ],

            [
                'name_ar' => 'خدمة تكييف للمنازل والمكاتب',
                'name_en' => 'Residential & Office AC Service',

                'slug' => 'residential-office-ac-service-kuwait',

                'description_ar' =>
                    'خدمات التكييف للمنازل والشقق والفلل والمكاتب والمحلات في مختلف مناطق الكويت، وتشمل التركيب والصيانة والتصليح والتنظيف وفحص الفريون.',

                'description_en' =>
                    'Air conditioning services for homes, apartments, villas, offices, and shops across Kuwait, including installation, maintenance, repair, cleaning, and refrigerant checks.',

                'image' => 'products/residential-office-ac.jpg',

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