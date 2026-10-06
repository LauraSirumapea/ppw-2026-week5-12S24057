<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'isbn' => fake()->unique()->numerify('978##########'),
            'judul' => fake()->sentence(4),
            'penulis' => fake()->name(),
            'penerbit' => fake()->company(),
            'tahun_terbit' => fake()->numberBetween(2015, 2026),
            'kategori_id' => Kategori::inRandomOrder()->value('id'),
            'stok' => fake()->numberBetween(0, 20),
            'sinopsis' => fake()->paragraph(),
        ];
    }
}