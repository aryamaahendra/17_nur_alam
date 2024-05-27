<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'Apakan narapidana tersebut melatih cara mengontrol prilaku kekerasan dengan cara fisik ke narapidana lain?',
                'created_at' => '2024-05-26 14:27:02',
                'updated_at' => '2024-05-26 14:27:02',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'Apakah program yang diterapkan lapas untuk menyiapkan narapidana dan anak didik pemasyarakatan agar dapat berintegrasi dengan masyarakat sehinggah dapat berperan kembali sebagai anggota masyarakat yang bebas dan bertanggung jawab?',
                'created_at' => '2024-05-26 14:27:14',
                'updated_at' => '2024-05-26 14:27:14',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => 'Apakah narapidana tersebut sering atau tidak mengikuti pembinaan agama yang sudah ditetapkan di lapas tersebut?',
                'created_at' => '2024-05-26 14:27:45',
                'updated_at' => '2024-05-26 14:27:45',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => 'Apakah pembinaan yang dilakukan oleh lapas kepada narapidana sudah maksimal?',
                'created_at' => '2024-05-26 14:27:55',
                'updated_at' => '2024-05-26 14:27:55',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => 'Apakah napi pengguna narkoba mendapatkan perlakuan yang berbeda dengan napi kriminal yang lainnya ketika didalam sel?',
                'created_at' => '2024-05-26 14:28:05',
                'updated_at' => '2024-05-26 14:28:05',
            ),
            5 => 
            array (
                'id' => 6,
                'question' => 'Apakah didalam lapas terdapat kegiatan untuk para narapidana seperti kegiatan keagamaan, olahraga bersama, dan melakukan keterampilan antar narapida?',
                'created_at' => '2024-05-26 14:28:13',
                'updated_at' => '2024-05-26 14:28:13',
            ),
            6 => 
            array (
                'id' => 7,
                'question' => 'Apakah ada perubahan yang didapatkan narapidana setelah mengikuti pembinaan keagamaan di lapas ini?',
                'created_at' => '2024-05-26 14:28:24',
                'updated_at' => '2024-05-26 14:28:24',
            ),
            7 => 
            array (
                'id' => 8,
                'question' => 'Apakah narapidana tersebut masih mempunyai hubungan yang baik kepada keluarga setelah menjadi narapidana di lapas ini?',
                'created_at' => '2024-05-26 14:28:53',
                'updated_at' => '2024-05-26 14:28:57',
            ),
            8 => 
            array (
                'id' => 9,
                'question' => 'Apakah ada ancaman terhadap narapidana yang baru masuk di sel?',
                'created_at' => '2024-05-26 14:29:07',
                'updated_at' => '2024-05-26 14:29:07',
            ),
            9 => 
            array (
                'id' => 10,
                'question' => 'Apakan narapidana tersebut pernah menjadi narapidana sebelumnya?',
                'created_at' => '2024-05-26 14:29:16',
                'updated_at' => '2024-05-26 14:29:16',
            ),
        ));
        
        
    }
}