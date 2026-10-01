<?php

namespace Database\Seeders;

use App\Models\PageSeo;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Site Settings
        |--------------------------------------------------------------------------
        */

        SiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'نقل عفش الكويت',

                'primary_color' => '#0B5ED7',
                'primary_dark_color' => '#084298',

                'secondary_color' => '#12304A',
                'secondary_dark_color' => '#081D2D',

                'light_blue_color' => '#EAF4FF',
                'light_color' => '#F8FAFC',

                'white_color' => '#FFFFFF',

                'text_color' => '#1F2937',
                'muted_color' => '#64748B',

                'border_color' => '#E2E8F0',

                'site_description' =>
                    'نقل عفش الكويت لخدمات نقل الأثاث والأغراض داخل الكويت، مع فك وتركيب العفش وغرف النوم والكبتات والسرائر وتغليف الأثاث وتوفير العمال وسيارات نقل العفش.',
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | SEO Pages
        |--------------------------------------------------------------------------
        */

        $pages = [

            /*
            |--------------------------------------------------------------------------
            | Home
            |--------------------------------------------------------------------------
            */

            'home' => [
                'title_ar' =>
                    'نقل عفش الكويت | نقل أثاث وأغراض داخل الكويت',

                'title_en' =>
                    'Kuwait Furniture Moving | Furniture & Belongings Moving',

                'description_ar' =>
                    'نقل عفش الكويت لخدمات نقل عفش وأثاث وأغراض داخل الكويت، من بيت لبيت ومن شقة لشقة، مع فك وتركيب العفش وغرف النوم والكبتات وتغليف الأثاث وتوفير العمال والسيارات.',

                'description_en' =>
                    'Kuwait Furniture Moving provides furniture, household and belongings moving services across Kuwait, including house-to-house and apartment-to-apartment moving, dismantling, packing and assembly.',

                'keywords_ar' =>
                    'نقل عفش الكويت, نقل اثاث الكويت, نقل أثاث الكويت, نقل العفش الكويت, نقل الأثاث الكويت, نقل أغراض الكويت, نقل اغراض الكويت, نقل عفش داخل الكويت, نقل أثاث داخل الكويت, نقل عفش داخل المنزل, نقل أثاث داخل المنزل, فك وتركيب عفش الكويت, فك وتركيب أثاث الكويت, نقل غرف نوم الكويت, نقل كبتات الكويت',

                'keywords_en' =>
                    'furniture moving Kuwait, furniture movers Kuwait, house moving Kuwait, household moving Kuwait, furniture transportation Kuwait, moving company Kuwait, furniture dismantling Kuwait, furniture assembly Kuwait',

                'og_title_ar' =>
                    'نقل عفش الكويت | نقل أثاث وأغراض داخل الكويت',

                'og_title_en' =>
                    'Kuwait Furniture Moving',

                'og_description_ar' =>
                    'خدمات نقل عفش وأثاث وأغراض داخل الكويت مع فك وتركيب وتغليف العفش وتوفير العمال وسيارات نقل الأثاث.',

                'og_description_en' =>
                    'Professional furniture, household and belongings moving services across Kuwait with dismantling, packing, transportation and assembly.',
            ],


            /*
            |--------------------------------------------------------------------------
            | About
            |--------------------------------------------------------------------------
            */

            'about' => [
                'title_ar' =>
                    'من نحن | نقل عفش الكويت',

                'title_en' =>
                    'About Us | Kuwait Furniture Moving',

                'description_ar' =>
                    'تعرف على نقل عفش الكويت وخدماتنا في نقل الأثاث والعفش والأغراض داخل الكويت، مع خدمات الفك والتركيب والتغليف ونقل غرف النوم والكبتات والسرائر.',

                'description_en' =>
                    'Learn more about Kuwait Furniture Moving and our furniture, household belongings, dismantling, packing, transportation and assembly services.',

                'keywords_ar' =>
                    'من نحن, نقل عفش الكويت, نقل أثاث الكويت, شركة نقل عفش الكويت, شركة نقل أثاث الكويت, خدمات نقل العفش الكويت, عمال نقل عفش الكويت',

                'keywords_en' =>
                    'about furniture moving Kuwait, Kuwait furniture moving company, furniture moving services Kuwait, household movers Kuwait',

                'og_title_ar' =>
                    'من نحن - نقل عفش الكويت',

                'og_title_en' =>
                    'About Kuwait Furniture Moving',

                'og_description_ar' =>
                    'تعرف على خدمات نقل عفش الكويت لنقل الأثاث والعفش والأغراض داخل الكويت.',

                'og_description_en' =>
                    'Learn about our furniture, household and belongings moving services across Kuwait.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Services
            |--------------------------------------------------------------------------
            */

            'services' => [
                'title_ar' =>
                    'خدمات نقل العفش والأثاث الكويت | نقل عفش الكويت',

                'title_en' =>
                    'Furniture Moving Services Kuwait',

                'description_ar' =>
                    'اكتشف خدمات نقل عفش الكويت، وتشمل نقل الأثاث والأغراض، فك وتركيب العفش، فك وتركيب غرف النوم والكبتات، تغليف الأثاث، ونقل المنازل والشقق والمكاتب والمخازن داخل الكويت.',

                'description_en' =>
                    'Explore our furniture moving services in Kuwait, including furniture transportation, dismantling and assembly, bedroom and wardrobe moving, packing, and household, office and warehouse moving.',

                'keywords_ar' =>
                    'خدمات نقل العفش الكويت, خدمات نقل الأثاث الكويت, نقل عفش الكويت, نقل أثاث الكويت, فك وتركيب عفش الكويت, فك وتركيب أثاث الكويت, فك وتركيب غرف نوم الكويت, فك وتركيب كبتات الكويت, نقل غرف نوم الكويت, نقل كبتات الكويت, نقل أغراض الكويت',

                'keywords_en' =>
                    'furniture moving services Kuwait, furniture transportation Kuwait, furniture dismantling Kuwait, furniture assembly Kuwait, bedroom moving Kuwait, wardrobe moving Kuwait',

                'og_title_ar' =>
                    'خدماتنا - نقل عفش وأثاث الكويت',

                'og_title_en' =>
                    'Our Furniture Moving Services',

                'og_description_ar' =>
                    'خدمات نقل العفش والأثاث والأغراض داخل الكويت مع الفك والتركيب والتغليف والنقل.',

                'og_description_en' =>
                    'Furniture, household and belongings moving services across Kuwait with dismantling, packing and assembly.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Projects
            |--------------------------------------------------------------------------
            */

            'projects' => [
                'title_ar' =>
                    'أعمال نقل العفش والأثاث | نقل عفش الكويت',

                'title_en' =>
                    'Furniture Moving Projects | Kuwait',

                'description_ar' =>
                    'تعرف على نماذج من أعمال نقل عفش الكويت في نقل العفش من بيت لبيت، ونقل الأثاث من شقة لشقة، وفك وتركيب غرف النوم والكبتات، وتغليف ونقل الأغراض والمكاتب والمخازن.',

                'description_en' =>
                    'Explore examples of furniture moving projects in Kuwait, including house-to-house moving, apartment-to-apartment moving, dismantling, packing, and office and warehouse transportation.',

                'keywords_ar' =>
                    'أعمال نقل عفش الكويت, نقل عفش من بيت لبيت, نقل أثاث من بيت لبيت, نقل عفش من شقة لشقة, نقل أثاث من شقة لشقة, فك وتركيب غرف النوم, نقل الكبتات, نقل أثاث مستعمل, نقل أغراض الكويت',

                'keywords_en' =>
                    'furniture moving projects Kuwait, house to house furniture moving, apartment moving Kuwait, bedroom moving Kuwait, office moving Kuwait, warehouse moving Kuwait',

                'og_title_ar' =>
                    'أعمالنا - نقل عفش وأثاث الكويت',

                'og_title_en' =>
                    'Our Furniture Moving Work',

                'og_description_ar' =>
                    'نماذج من خدمات نقل العفش والأثاث والأغراض التي نقدمها داخل الكويت.',

                'og_description_en' =>
                    'Examples of our furniture, household, office and warehouse moving services in Kuwait.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */

            'contact' => [
                'title_ar' =>
                    'تواصل معنا | نقل عفش الكويت',

                'title_en' =>
                    'Contact Us | Kuwait Furniture Moving',

                'description_ar' =>
                    'تواصل مع نقل عفش الكويت لطلب نقل عفش أو أثاث أو أغراض داخل الكويت، أو حجز خدمة فك وتركيب وتغليف ونقل الأثاث.',

                'description_en' =>
                    'Contact Kuwait Furniture Moving to request furniture, household or belongings moving services, including dismantling, packing and assembly.',

                'keywords_ar' =>
                    'رقم نقل عفش الكويت, تواصل معنا نقل عفش الكويت, طلب نقل عفش, أبي نقل عفش, ابي نقل عفش, أبي سيارة نقل عفش, ابي سيارة نقل عفش, أبي عمال نقل عفش, ابي عمال نقل عفش',

                'keywords_en' =>
                    'Kuwait furniture moving contact, furniture movers Kuwait contact, house moving Kuwait, furniture transportation Kuwait',

                'og_title_ar' =>
                    'تواصل معنا - نقل عفش الكويت',

                'og_title_en' =>
                    'Contact Kuwait Furniture Moving',

                'og_description_ar' =>
                    'اطلب نقل عفش أو أثاث أو أغراض داخل الكويت وتواصل معنا لمعرفة تفاصيل الخدمة.',

                'og_description_en' =>
                    'Contact us to request furniture, household and belongings moving services across Kuwait.',
            ],
        ];


        /*
        |--------------------------------------------------------------------------
        | Insert / Update SEO
        |--------------------------------------------------------------------------
        */

        foreach ($pages as $pageKey => $seo) {

            PageSeo::updateOrCreate(
                [
                    'page_key' => $pageKey,
                ],
                array_merge(
                    $seo,
                    [
                        'index' => true,
                        'follow' => true,
                    ]
                )
            );
        }
    }
}