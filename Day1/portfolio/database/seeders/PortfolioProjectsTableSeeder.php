<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class PortfolioProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert dummy data into the portfolio_projects table
        DB::table('portfolio_projects')->insert([
            [
                'name' => 'Project 1',
                'description' => 'A description of the first project, showcasing Laravel features.',
                'technologies' => 'PHP, Laravel, MySQL',
                'link' => 'https://project1.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 2',
                'description' => 'A description of the second project, built with React and Node.js.',
                'technologies' => 'JavaScript, React, Node.js, MongoDB',
                'link' => 'https://project2.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 3',
                'description' => 'A Python-based project for data analysis using pandas and NumPy.',
                'technologies' => 'Python, Pandas, NumPy',
                'link' => 'https://project3.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 4',
                'description' => 'An e-commerce platform using JavaScript and Express.',
                'technologies' => 'JavaScript, Express, MongoDB',
                'link' => 'https://project4.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 5',
                'description' => 'A portfolio website built using HTML, CSS, and JavaScript.',
                'technologies' => 'HTML, CSS, JavaScript',
                'link' => 'https://project5.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
    
}
