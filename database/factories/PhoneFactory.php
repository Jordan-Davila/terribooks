<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    protected $model = Phone::class;

    public function definition()
    {
        return [
            'phone' => "",
            'name' => "",
        ];
    }
}
