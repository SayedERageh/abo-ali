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
                'title_ar' => 'تركيب مكيفات سبليت',
                'title_en' => 'Split AC Installation',
                'slug' => 'split-ac-installation-kuwait',

                'short_description_ar' => 'تركيب مكيفات سبليت للمنازل والشقق والفلل والمكاتب في الكويت.',
                'short_description_en' => 'Professional split AC installation for homes, apartments, villas and offices in Kuwait.',

                'description_ar' =>
                    'نقدم خدمة تركيب مكيفات سبليت في الكويت للمنازل والشقق والفلل والمكاتب، مع تركيب وتجهيز الوحدات الداخلية والخارجية والتأكد من تشغيل المكيف بصورة مناسبة.',

                'description_en' =>
                    'We provide professional split AC installation in Kuwait for homes, apartments, villas and offices, including indoor and outdoor unit installation and proper system setup.',

                'icon' => 'bi bi-snow',
                'image' => 'services/split-ac-installation-kuwait.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'صيانة وتصليح المكيفات',
                'title_en' => 'AC Maintenance and Repair',
                'slug' => 'ac-maintenance-repair-kuwait',

                'short_description_ar' => 'صيانة وتصليح أعطال المكيفات ومعالجة مشاكل ضعف التبريد وتسريب المياه.',
                'short_description_en' => 'AC maintenance and repair for cooling problems, water leaks and other faults.',

                'description_ar' =>
                    'نوفر خدمات صيانة وتصليح المكيفات في الكويت، مع فحص الجهاز وتشخيص سبب العطل ومعالجة مشاكل ضعف التبريد وتسريب المياه والأعطال المختلفة حسب نوع المكيف وحالته.',

                'description_en' =>
                    'We provide AC maintenance and repair services in Kuwait, including inspection and diagnosis of weak cooling, water leakage and other air conditioning problems.',

                'icon' => 'bi bi-tools',
                'image' => 'services/ac-maintenance-repair.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تنظيف المكيفات',
                'title_en' => 'AC Cleaning',
                'slug' => 'ac-cleaning-kuwait',

                'short_description_ar' => 'تنظيف مكيفات السبليت والمكيفات المختلفة للمساعدة على تحسين أداء التبريد.',
                'short_description_en' => 'Professional AC cleaning to help improve cooling performance and efficiency.',

                'description_ar' =>
                    'نقدم خدمة تنظيف المكيفات وإزالة الأتربة والشوائب المتراكمة من الأجزاء التي تحتاج إلى التنظيف، للمساعدة في تحسين أداء المكيف وكفاءة التبريد والحفاظ على نظافة الجهاز.',

                'description_en' =>
                    'We provide professional AC cleaning to remove dust and buildup from components that require cleaning, helping improve cooling performance and maintain cleaner AC systems.',

                'icon' => 'bi bi-droplet',
                'image' => 'services/ac-cleaning-kuwait.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تعبئة وفحص فريون المكيف',
                'title_en' => 'AC Refrigerant Inspection and Charging',
                'slug' => 'ac-refrigerant-charging-kuwait',

                'short_description_ar' => 'فحص مستوى فريون المكيف وتعبئته عند الحاجة مع التحقق من مشاكل التبريد.',
                'short_description_en' => 'Refrigerant inspection and charging with cooling performance checks.',

                'description_ar' =>
                    'نوفر خدمة فحص فريون المكيفات وتعبئة الفريون عند الحاجة، مع فحص أداء التبريد والتأكد من عدم وجود مشكلة مرتبطة بنقص الفريون أو تسريب في النظام.',

                'description_en' =>
                    'We provide AC refrigerant inspection and charging when required, along with cooling performance checks and inspection for refrigerant loss or system leaks.',

                'icon' => 'bi bi-speedometer2',
                'image' => 'services/ac-refrigerant-kuwait.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'صيانة المكيفات المركزية',
                'title_en' => 'Central AC Maintenance',
                'slug' => 'central-ac-maintenance-kuwait',

                'short_description_ar' => 'صيانة وفحص المكيفات المركزية للمنازل والفلل والمكاتب والمنشآت في الكويت.',
                'short_description_en' => 'Central AC maintenance and inspection for homes, villas, offices and businesses in Kuwait.',

                'description_ar' =>
                    'نقدم خدمات صيانة وتصليح المكيفات المركزية في الكويت للمنازل والفلل والمكاتب والمنشآت، مع فحص النظام وتشخيص مشاكل التبريد والأعطال وتنفيذ الخدمة المناسبة حسب الحالة.',

                'description_en' =>
                    'We provide central AC maintenance and repair in Kuwait for homes, villas, offices and businesses, including system inspection, cooling problem diagnosis and appropriate service.',

                'icon' => 'bi bi-building',
                'image' => 'services/central-ac-maintenance-kuwait.jpg',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'خدمة تكييف للمنازل والمكاتب',
                'title_en' => 'Residential and Office AC Service',
                'slug' => 'residential-office-ac-service-kuwait',

                'short_description_ar' => 'خدمات تكييف متكاملة للمنازل والشقق والفلل والمكاتب والمحلات في مختلف مناطق الكويت.',
                'short_description_en' => 'Complete AC services for homes, apartments, villas, offices and shops across Kuwait.',

                'description_ar' =>
                    'نوفر خدمات التكييف للمنازل والشقق والفلل والمكاتب والمحلات في مختلف مناطق الكويت، وتشمل التركيب والصيانة والتصليح والتنظيف وفحص وتعبئة الفريون حسب احتياج العميل.',

                'description_en' =>
                    'We provide AC services for homes, apartments, villas, offices and shops across Kuwait, including installation, maintenance, repair, cleaning and refrigerant services according to customer needs.',

                'icon' => 'bi bi-house-gear',
                'image' => 'services/residential-office-ac-kuwait.jpg',
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
