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
                'site_name' => 'أبو علي للتكييفات',

                'primary_color' => '#0EA5E9',
                'primary_dark_color' => '#0284C7',

                'secondary_color' => '#0F172A',
                'secondary_dark_color' => '#020617',

                'light_blue_color' => '#E0F2FE',
                'light_color' => '#F8FAFC',

                'white_color' => '#FFFFFF',

                'text_color' => '#1E293B',
                'muted_color' => '#64748B',

                'border_color' => '#E2E8F0',

                'site_description' =>
                    'أبو علي للتكييفات في الكويت يقدم خدمات تركيب وصيانة وتصليح وتنظيف المكيفات وتعبئة وفحص الفريون، مع خدمات مكيفات السبليت والمكيفات المركزية للمنازل والمكاتب والمنشآت.',
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
                    'أبو علي للتكييفات | تركيب وصيانة مكيفات الكويت',

                'title_en' =>
                    'Abu Ali AC | Air Conditioning Services in Kuwait',

                'description_ar' =>
                    'أبو علي للتكييفات في الكويت لخدمات تركيب وصيانة وتصليح وتنظيف المكيفات وتعبئة الفريون، مع خدمة مكيفات السبليت والمكيفات المركزية للمنازل والمكاتب.',

                'description_en' =>
                    'Abu Ali AC provides air conditioning installation, maintenance, repair, cleaning and refrigerant services in Kuwait for split and central AC systems.',

                'keywords_ar' =>
                    'أبو علي للتكييفات, تكييفات الكويت, تركيب مكيفات الكويت, صيانة مكيفات الكويت, تصليح مكيفات الكويت, تنظيف مكيفات الكويت, فني تكييف الكويت, فني مكيفات الكويت, فريون مكيفات الكويت, مكيفات سبليت الكويت, مكيفات مركزية الكويت',

                'keywords_en' =>
                    'Abu Ali AC Kuwait, air conditioning Kuwait, AC installation Kuwait, AC maintenance Kuwait, AC repair Kuwait, AC cleaning Kuwait, AC technician Kuwait, AC refrigerant Kuwait, split AC Kuwait, central AC Kuwait',

                'og_title_ar' =>
                    'أبو علي للتكييفات | خدمات التكييف في الكويت',

                'og_title_en' =>
                    'Abu Ali AC | Air Conditioning Services in Kuwait',

                'og_description_ar' =>
                    'تركيب وصيانة وتصليح وتنظيف المكيفات وتعبئة الفريون في الكويت مع خدمة مكيفات السبليت والمركزية.',

                'og_description_en' =>
                    'Professional AC installation, maintenance, repair, cleaning and refrigerant services across Kuwait.',
            ],


            /*
            |--------------------------------------------------------------------------
            | About
            |--------------------------------------------------------------------------
            */

            'about' => [
                'title_ar' =>
                    'من نحن | أبو علي للتكييفات الكويت',

                'title_en' =>
                    'About Us | Abu Ali AC Kuwait',

                'description_ar' =>
                    'تعرف على أبو علي للتكييفات وخدماتنا في تركيب وصيانة وتصليح وتنظيف المكيفات في الكويت، للمنازل والشقق والفلل والمكاتب والمنشآت.',

                'description_en' =>
                    'Learn more about Abu Ali AC and our air conditioning installation, maintenance, repair and cleaning services in Kuwait.',

                'keywords_ar' =>
                    'من نحن أبو علي للتكييفات, أبو علي تكييف الكويت, شركة تكييف الكويت, خدمات تكييف الكويت, فني تكييف الكويت, صيانة مكيفات الكويت',

                'keywords_en' =>
                    'about Abu Ali AC Kuwait, AC company Kuwait, air conditioning services Kuwait, AC technician Kuwait, AC maintenance Kuwait',

                'og_title_ar' =>
                    'من نحن - أبو علي للتكييفات',

                'og_title_en' =>
                    'About Abu Ali AC Kuwait',

                'og_description_ar' =>
                    'تعرف على أبو علي للتكييفات وخدمات تركيب وصيانة وتصليح وتنظيف المكيفات في الكويت.',

                'og_description_en' =>
                    'Learn about Abu Ali AC and our air conditioning services throughout Kuwait.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Services
            |--------------------------------------------------------------------------
            */

            'services' => [
                'title_ar' =>
                    'خدمات التكييف في الكويت | أبو علي للتكييفات',

                'title_en' =>
                    'Air Conditioning Services Kuwait | Abu Ali AC',

                'description_ar' =>
                    'اكتشف خدمات أبو علي للتكييفات في الكويت، وتشمل تركيب مكيفات السبليت، صيانة وتصليح المكيفات، تنظيف المكيفات، فحص وتعبئة الفريون، وصيانة المكيفات المركزية.',

                'description_en' =>
                    'Explore Abu Ali AC services in Kuwait, including split AC installation, maintenance, repair, cleaning, refrigerant inspection and central AC maintenance.',

                'keywords_ar' =>
                    'خدمات التكييف الكويت, خدمات المكيفات الكويت, تركيب مكيفات سبليت الكويت, صيانة مكيفات الكويت, تصليح مكيفات الكويت, تنظيف مكيفات الكويت, تعبئة فريون الكويت, صيانة مكيفات مركزية الكويت',

                'keywords_en' =>
                    'air conditioning services Kuwait, AC services Kuwait, split AC installation Kuwait, AC repair Kuwait, AC cleaning Kuwait, refrigerant charging Kuwait, central AC maintenance Kuwait',

                'og_title_ar' =>
                    'خدماتنا - أبو علي للتكييفات الكويت',

                'og_title_en' =>
                    'Our AC Services - Abu Ali Kuwait',

                'og_description_ar' =>
                    'تركيب وصيانة وتصليح وتنظيف المكيفات وفحص وتعبئة الفريون في مختلف مناطق الكويت.',

                'og_description_en' =>
                    'AC installation, maintenance, repair, cleaning and refrigerant services across Kuwait.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Projects
            |--------------------------------------------------------------------------
            */

            'projects' => [
                'title_ar' =>
                    'أعمال وخدمات التكييف | أبو علي للتكييفات',

                'title_en' =>
                    'AC Service Projects | Abu Ali Kuwait',

                'description_ar' =>
                    'تعرف على نماذج من خدمات أبو علي للتكييفات في تركيب وصيانة وتنظيف وتصليح المكيفات وفحص الفريون والمكيفات المركزية في مناطق مختلفة من الكويت.',

                'description_en' =>
                    'Explore examples of Abu Ali AC services including installation, maintenance, cleaning, repair, refrigerant inspection and central AC services across Kuwait.',

                'keywords_ar' =>
                    'أعمال تكييف الكويت, تركيب مكيفات الكويت, صيانة مكيفات حولي, تنظيف مكيفات السالمية, تصليح مكيفات الفحيحيل, صيانة مكيفات الجهراء, فريون مكيفات الفروانية',

                'keywords_en' =>
                    'AC projects Kuwait, AC installation Kuwait, AC maintenance Hawally, AC cleaning Salmiya, AC repair Fahaheel, AC maintenance Jahra, AC refrigerant Farwaniya',

                'og_title_ar' =>
                    'أعمالنا - أبو علي للتكييفات',

                'og_title_en' =>
                    'Our AC Service Projects',

                'og_description_ar' =>
                    'نماذج من خدمات تركيب وصيانة وتصليح وتنظيف المكيفات التي نقدمها في الكويت.',

                'og_description_en' =>
                    'Examples of our air conditioning installation, maintenance, repair and cleaning services in Kuwait.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */

            'contact' => [
                'title_ar' =>
                    'تواصل معنا | أبو علي للتكييفات الكويت',

                'title_en' =>
                    'Contact Us | Abu Ali AC Kuwait',

                'description_ar' =>
                    'تواصل مع أبو علي للتكييفات في الكويت لطلب تركيب أو صيانة أو تصليح أو تنظيف المكيفات، أو فحص وتعبئة الفريون. اتصل بنا على +965 5149 2176 أو تواصل عبر واتساب.',

                'description_en' =>
                    'Contact Abu Ali AC in Kuwait for air conditioning installation, maintenance, repair, cleaning and refrigerant services. Call or WhatsApp us at +965 5149 2176.',

                'keywords_ar' =>
                    'رقم أبو علي للتكييفات, رقم فني تكييف الكويت, رقم تكييف الكويت, تواصل أبو علي للتكييفات, فني تكييف الكويت, صيانة مكيفات الكويت, تصليح مكيفات الكويت, واتساب تكييف الكويت',

                'keywords_en' =>
                    'Abu Ali AC contact Kuwait, AC technician Kuwait contact, air conditioning Kuwait phone, AC repair Kuwait contact, AC maintenance Kuwait contact',

                'og_title_ar' =>
                    'تواصل معنا - أبو علي للتكييفات',

                'og_title_en' =>
                    'Contact Abu Ali AC Kuwait',

                'og_description_ar' =>
                    'اتصل بأبو علي للتكييفات على +965 5149 2176 لطلب خدمات تركيب وصيانة وتصليح وتنظيف المكيفات في الكويت.',

                'og_description_en' =>
                    'Call or WhatsApp Abu Ali AC at +965 5149 2176 for air conditioning services in Kuwait.',
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

