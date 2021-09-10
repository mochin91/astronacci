<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $members = ['ruby','gold','platinum'];
        $thumbnails = [
            'img/thumbnails/1.png',
            'img/thumbnails/2.png',
            'img/thumbnails/3.png',
        ];
        $embed = [
            'https://www.youtube.com/embed/C2XA3R38_P0',
            'https://www.youtube.com/embed/mCpJzwZISos',
            'https://www.youtube.com/embed/IFR8to7FA9I',
        ];
        return [
            //
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'thumbnails' => $thumbnails[array_rand($thumbnails)],
            'embed' => $embed[array_rand($embed)],
            'member' => $members[array_rand($members)]
        ];
    }
}
