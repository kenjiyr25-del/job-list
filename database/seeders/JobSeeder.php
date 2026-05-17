<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    public function run(): void
    {

       DB::table('job_listings')->insert([

        [
            'id' => 1,
            'title' => 'Software Developer',
            'salary' => '₱50,000/month',
            'description' => 'Creates computer programs and applications by writing code, fixing errors, and improving system performance.'
        ],
        [
            'id' => 2,
            'title' => 'Web Developer',
            'salary' => '₱40,000/month',
            'description' => 'Develops websites and web systems, making sure they are functional, fast, and accessible on different devices.'
        ],
        [
            'id' => 3,
            'title' => 'Front-End Developer',
            'salary' => '₱45,000/month',
            'description' => 'Builds the layout and design of websites using coding languages to ensure a smooth user experience.'
        ],
        [
            'id' => 4,
            'title' => 'Back-End Developer',
            'salary' => '₱55,000/month',
            'description' => 'Works behind the scenes to manage servers, databases, and application logic.'
        ],
        [
            'id' => 5,
            'title' => 'Full-Stack Developer',
            'salary' => '₱65,000/month',
            'description' => 'Handles both client-side and server-side development of web applications.'
        ],
        [
            'id' => 6,
            'title' => 'Data Analyst',
            'salary' => '₱45,000/month',
            'description' => 'Interprets data, identifies trends, and presents information to support business decisions.'
        ],
        [
            'id' => 7,
            'title' => 'Database Administrator',
            'salary' => '₱55,000/month',
            'description' => 'Organizes and maintains data systems, ensuring security, backup, and efficient access.'
        ],
        [
            'id' => 8,
            'title' => 'Network Administrator',
            'salary' => '₱40,000/month',
            'description' => 'Sets up and monitors network systems to ensure stable and secure connections.'
        ],
        [
            'id' => 9,
            'title' => 'Cybersecurity Analyst',
            'salary' => '₱65,000/month',
            'description' => 'Identifies security risks and protects systems from hacking, malware, and cyber attacks.'
        ],
        [
            'id' => 10,
            'title' => 'Mobile App Developer',
            'salary' => '₱60,000/month',
            'description' => 'Builds and maintains mobile applications for smartphones and tablets.'
        ],
        [
            'id' => 11,
            'title' => 'IT Project Manager',
            'salary' => '₱75,000/month',
            'description' => 'Plans, executes, and oversees IT projects, ensuring they are completed on time and within budget.'
        ],
        [
            'id' => 12,
            'title' => 'QA Tester',
            'salary' => '₱35,000/month',
            'description' => 'Tests software applications to identify bugs and ensure quality before deployment.'
        ],
        [
            'id' => 13,
            'title' => 'DevOps Engineer',
            'salary' => '₱75,000/month',
            'description' => 'Automates and manages development, testing, and deployment processes to improve efficiency.'
        ],
        [
            'id' => 14,
            'title' => 'Cloud Solutions Architect',
            'salary' => '₱90,000/month',
            'description' => 'Designs scalable and secure cloud infrastructure and services for organizations.'
        ],
        [
            'id' => 15,
            'title' => 'Systems Administrator',
            'salary' => '₱50,000/month',
            'description' => 'Maintains and manages servers, operating systems, and IT infrastructure.'
        ],
        
       ]);
       Job::factory(15)->create();    
    }
}