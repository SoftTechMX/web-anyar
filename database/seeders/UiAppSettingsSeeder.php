<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UiAppSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            "name" => "Rayna",
            "about_us" => " We are a company passionate about technology and innovation, dedicated to offering comprehensive solutions in software development, creation of web and mobile applications, penetration testing, and services related to IT and systems engineering. ",
            "mision" => " Our mission is to be a strategic ally in the digital transformation of companies and organizations. We are dedicated to developing customized technological solutions that boost the productivity, efficiency and competitiveness of our clients in a constantly evolving digital world. By using innovative technologies, agile development practices and a focus on customer needs, we seek to deliver high-quality projects that generate tangible value for their businesses. ",
            "vision" => " Our vision is to establish ourselves as a leading reference in technological innovation, software development and cybersecurity at a national and international level. We aspire to be recognized for our ability to anticipate market needs, offering disruptive technological solutions that drive the business success of our clients. ",
            "description" => "",
            "email" => "soft.tech.mexico@gmail.com",
            "phone" => "868-143-6049",
            "country" => "Mexico",
            "address_street" => "Calle Sexta",
            "address_cp" => "88730",
            "address_number" => "S/N",
            "facebook" => "https://www.facebook.com/SoftwareTechMX",
            "twitter" => "",
            "instagram" => "",
            "linkedin" => "",
            "youtube" => "https://www.youtube.com/channel/UCjOuUs_KfccToThH5KKkaJg",
        ];

        DB::table('ui_app_settings')->insert($data);
    }
}
