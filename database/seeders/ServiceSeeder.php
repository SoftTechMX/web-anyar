<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\Service;
use Carbon\Carbon;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title'         => 'Web Application Development',
                'description'   => 'We offer complete web development solutions to take your business into the digital world. We create modern, optimized and adaptable websites for any device, focused on improving the user experience and maximizing your online presence. From informational sites to e-commerce platforms, we develop each project tailored to your needs to help you achieve your goals.',
                'icon'          => '',
            ],
            [
                'title'         => 'Pentesting',
                'description'   => 'A penetration test, or pentest, is a security test that launches a simulated cyber attack to find vulnerabilities in a computer system.',
                'icon'          => '',
            ],
            [
                'title'         => 'Android Application Development',
                'description'   => 'We develop mobile applications for Android that drive connectivity and growth for your business. Our solutions are designed to offer an intuitive and attractive experience, adapted to the needs of your users. From business applications to commerce and entertainment platforms, we create functional, secure and scalable applications to bring your ideas to millions of users.',
                'icon'          => '',
            ],
            [
                'title'         => 'Installation of CCTV cameras',
                'description'   => 'Protect what matters most to you with our CCTV installation services. We offer customized security solutions for homes, businesses, and industrial spaces, with high-quality technology that allows for real-time monitoring and continuous recording. Our team of experts ensures a professional and efficient installation to give you peace of mind and 24-hour control.',
                'icon'          => '',
            ],
            [
                'title'         => 'Windows Application Development',
                'description'   => 'We create custom desktop applications for Windows, designed to streamline your processes and improve your business productivity. With a focus on performance, functionality and usability, our applications provide robust and secure solutions, ideal for business environments that require efficiency and adaptability. From management software to industry-specific tools, we develop applications that drive your operations.',
                'icon'          => '',
            ],
            [
                'title'         => 'Data Analysis',
                'description'   => 'Let our data analysts collect, process and analyze data to help your business make better decisions.',
                'icon'          => '',
            ],
        ];

        DB::table('services')->truncate();
        Service::insert($data);
    }
}
