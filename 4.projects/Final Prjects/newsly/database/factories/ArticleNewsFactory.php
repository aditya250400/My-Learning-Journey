<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleNews>
 */
class ArticleNewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $titles = [
            'Teknologi AI Semakin Berkembang Pesat',
            'Laravel 11 Resmi Dirilis dengan Fitur Baru',
            'Pasar Kripto Mengalami Kenaikan Signifikan',
            'Startup Lokal Berhasil Raih Pendanaan Seri A',
            'Tren Remote Work Masih Populer di Tahun Ini',
            'Cybersecurity Semakin Diperketat di Dunia Digital',
            'Ponsel Flagship Baru Dirilis dengan Spesifikasi Canggih',
            'Edukasi Digital Jadi Fokus di Dunia Pendidikan',
            'Perubahan Iklim Semakin Mengkhawatirkan',
            'Industri Gaming Terus Berkembang dengan Teknologi Baru'
        ];

        $contents = [
            'Artificial Intelligence kini semakin berkembang dengan berbagai inovasi baru yang mempermudah pekerjaan manusia.',
            'Framework Laravel merilis versi terbarunya dengan peningkatan performa dan fitur yang lebih fleksibel untuk developer.',
            'Bitcoin dan beberapa altcoin mengalami lonjakan harga yang signifikan dalam beberapa bulan terakhir.',
            'Sebuah startup teknologi asal Indonesia berhasil mendapatkan pendanaan besar dari investor internasional.',
            'Banyak perusahaan yang tetap menerapkan sistem kerja jarak jauh karena dianggap lebih efisien dan fleksibel.',
            'Serangan siber meningkat, membuat perusahaan memperketat sistem keamanan data mereka.',
            'Produsen smartphone ternama meluncurkan ponsel terbaru dengan teknologi kamera mutakhir dan performa tinggi.',
            'Institusi pendidikan mulai menerapkan kurikulum berbasis teknologi digital untuk meningkatkan kualitas pembelajaran.',
            'Para ilmuwan memperingatkan bahwa perubahan iklim yang ekstrem bisa berdampak besar terhadap kehidupan manusia.',
            'Game berbasis teknologi VR dan AI semakin diminati oleh para gamer di seluruh dunia.'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($titles),
            'content' => $this->faker->unique()->randomElement($contents),
            'is_featured' => $this->faker->randomElement(['featured', 'not_featured']),
            'category_id' => $this->faker->numberBetween(1, Category::count()),
            'author_id' => $this->faker->numberBetween(1, Author::count()),
        ];
    }
}
