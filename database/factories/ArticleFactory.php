<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //사용자 ID랜덤생성시키기
            'user_id'=>rand(1,10),
            'title'=>$this->faker->sentence(),
            'body'=>$this->faker->text(100),
            
        ];
    }
}
