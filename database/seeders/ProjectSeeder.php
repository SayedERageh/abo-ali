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
                'title_ar' => 'تركيب مكيفات سبليت للمنازل',
                'title_en' => 'Residential Split AC Installation',

                'slug' => 'residential-split-ac-installation-kuwait',

                'category_ar' => 'تركيب مكيفات',
                'category_en' => 'AC Installation',

                'description_ar' => 'تركيب مكيفات سبليت للمنازل والشقق والفلل في الكويت، مع تجهيز الوحدات الداخلية والخارجية والتأكد من تشغيل المكيف بصورة مناسبة.',

                'description_en' => 'Split AC installation for homes, apartments, and villas in Kuwait, including indoor and outdoor unit setup and proper system operation.',

                'location_ar' => 'الكويت',
                'location_en' => 'Kuwait',

                'image' => 'projects/split-ac-installation.jpg',

                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'صيانة مكيفات في حولي',
                'title_en' => 'AC Maintenance in Hawally',

                'slug' => 'ac-maintenance-hawally',

                'category_ar' => 'صيانة مكيفات',
                'category_en' => 'AC Maintenance',

                'description_ar' => 'خدمة صيانة وفحص المكيفات في منطقة حولي، مع تشخيص مشاكل ضعف التبريد والأعطال المختلفة وتنفيذ الصيانة المناسبة حسب حالة المكيف.',

                'description_en' => 'AC inspection and maintenance service in Hawally, including diagnosis of weak cooling and other AC problems with appropriate maintenance.',

                'location_ar' => 'حولي، الكويت',
                'location_en' => 'Hawally, Kuwait',

                'image' => 'projects/ac-maintenance-hawally.jpg',

                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تنظيف مكيفات في السالمية',
                'title_en' => 'AC Cleaning in Salmiya',

                'slug' => 'ac-cleaning-salmiya',

                'category_ar' => 'تنظيف مكيفات',
                'category_en' => 'AC Cleaning',

                'description_ar' => 'تنظيف مكيفات السبليت وإزالة الأتربة والشوائب من الأجزاء التي تحتاج إلى تنظيف، للمساعدة في تحسين كفاءة التبريد وأداء الجهاز.',

                'description_en' => 'Split AC cleaning service in Salmiya, removing dust and buildup from areas that require cleaning to help improve cooling performance.',

                'location_ar' => 'السالمية، الكويت',
                'location_en' => 'Salmiya, Kuwait',

                'image' => 'projects/ac-cleaning-salmiya.jpg',

                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'فحص وتعبئة فريون المكيفات',
                'title_en' => 'AC Refrigerant Inspection and Charging',

                'slug' => 'ac-refrigerant-inspection-charging-kuwait',

                'category_ar' => 'فريون المكيفات',
                'category_en' => 'AC Refrigerant',

                'description_ar' => 'فحص أداء المكيف ومستوى الفريون وتعبئته عند الحاجة، مع البحث عن أسباب نقص الفريون أو مشاكل التبريد المرتبطة به.',

                'description_en' => 'AC performance and refrigerant inspection with charging when required, including checking for refrigerant loss and related cooling problems.',

                'location_ar' => 'الفروانية، الكويت',
                'location_en' => 'Farwaniya, Kuwait',

                'image' => 'projects/ac-refrigerant.jpg',

                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'صيانة المكيفات المركزية',
                'title_en' => 'Central AC Maintenance',

                'slug' => 'central-ac-maintenance-kuwait',

                'category_ar' => 'مكيفات مركزية',
                'category_en' => 'Central AC',

                'description_ar' => 'صيانة وفحص المكيفات المركزية للمنازل والفلل والمكاتب والمنشآت في الكويت، مع التعامل مع مشاكل التبريد والأعطال حسب حالة النظام.',

                'description_en' => 'Central AC maintenance and inspection for homes, villas, offices, and businesses in Kuwait, addressing cooling issues and system problems.',

                'location_ar' => 'الجهراء، الكويت',
                'location_en' => 'Jahra, Kuwait',

                'image' => 'projects/central-ac-maintenance.jpg',

                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تصليح مكيفات للمنازل والمكاتب',
                'title_en' => 'Residential and Office AC Repair',

                'slug' => 'residential-office-ac-repair-kuwait',

                'category_ar' => 'تصليح مكيفات',
                'category_en' => 'AC Repair',

                'description_ar' => 'تصليح أعطال المكيفات للمنازل والمكاتب والمحلات، مع فحص المشكلة وتحديد سبب العطل وتنفيذ الإصلاح المناسب حسب نوع المكيف وحالته.',

                'description_en' => 'AC repair for homes, offices, and shops, including problem diagnosis and appropriate repair according to the AC type and condition.',

                'location_ar' => 'الفحيحيل، الكويت',
                'location_en' => 'Fahaheel, Kuwait',

                'image' => 'projects/ac-repair.jpg',

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

