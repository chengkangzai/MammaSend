<?php


namespace Database\Seeders;

use App\Models\FaqCategory;
use App\Models\FaqQuestion;
use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    public function run()
    {
        $general = FaqCategory::create(['category' => 'General']);
        FaqQuestion::create([
            'question' => 'Why do i need to Provide my phone number',
            'answer' => 'We strongly respect your privacy and our company comply with the policy of Do Not Sell My Personal Information. The reason why we need to gather your phone number is so that we can inform and contact you via WhatsApp',
            'category_id' => $general->id
        ]);
    }
}
