<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 6 sample feedback records
        Feedback::create([
            'name' => 'John Doe',
            'feedback' => 'Great service and very professional. Highly recommend!',
        ]);

        Feedback::create([
            'name' => 'Jane Smith',
            'feedback' => 'The experience was amazing, the staff was friendly and helpful.',
        ]);

        Feedback::create([
            'name' => 'Emily Johnson',
            'feedback' => 'Excellent customer service, and the product quality is exceptional.',
        ]);

        Feedback::create([
            'name' => 'Michael Brown',
            'feedback' => 'I had a fantastic experience. Will definitely come back again.',
        ]);

        Feedback::create([
            'name' => 'Sarah Davis',
            'feedback' => 'Affordable and high-quality products. I’m very satisfied!',
        ]);

        Feedback::create([
            'name' => 'Chris Wilson',
            'feedback' => 'Good customer service, but delivery was a bit delayed. Overall, satisfied.',
        ]);
    }
}
