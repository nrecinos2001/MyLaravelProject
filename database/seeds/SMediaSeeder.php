<?php

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class SMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facebook = SocialMedia::create([
            'socialName' => 'Facebook',
            'socialPhoto' => 'facebook.png'
        ]);
        $twitter = SocialMedia::create([
            'socialName' => 'Twitter',
            'socialPhoto' => 'twitter.png'
        ]);
        $instagram = SocialMedia::create([
            'socialName' => 'Instagram',
            'socialPhoto' => 'instagram.png'
        ]);
        $linkdein = SocialMedia::create([
            'socialName' => 'LinkdeIn',
            'socialPhoto' => 'linkdein.png'
        ]);
        $github = SocialMedia::create([
            'socialName' => 'GitHub',
            'socialPhoto' => 'github.png'
        ]);
    }
}
