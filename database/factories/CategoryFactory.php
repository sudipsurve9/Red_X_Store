<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category__name=$this->faker->unique()->words($nb=2,$asText=true);
        $slug= Str::slug($category__name);
        return [
            'name'=>$category__name,
            'slug'=>$slug
        ];
    }
}
