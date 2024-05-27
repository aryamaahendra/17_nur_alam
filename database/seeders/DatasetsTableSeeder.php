<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatasetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('datasets')->delete();
        
        \DB::table('datasets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'uuid' => '9c23e148-d479-4016-b862-3e755eaea74e',
                'name' => 'Bambang',
                'class' => '0',
                'created_at' => '2024-05-27 03:06:14',
                'updated_at' => '2024-05-27 03:06:14',
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => '9c23e1e2-ce7a-4de0-8873-fef8487f471b',
                'name' => 'Daniel',
                'class' => '1',
                'created_at' => '2024-05-27 03:07:55',
                'updated_at' => '2024-05-27 03:07:55',
            ),
            2 => 
            array (
                'id' => 3,
                'uuid' => '9c23e237-8297-4c79-a0a2-74b649813b25',
                'name' => 'Aswar',
                'class' => '1',
                'created_at' => '2024-05-27 03:08:50',
                'updated_at' => '2024-05-27 03:08:50',
            ),
            3 => 
            array (
                'id' => 4,
                'uuid' => '9c23e294-880c-4cd7-a9b8-16da79102798',
                'name' => 'Arif',
                'class' => '1',
                'created_at' => '2024-05-27 03:09:51',
                'updated_at' => '2024-05-27 03:09:51',
            ),
            4 => 
            array (
                'id' => 5,
                'uuid' => '9c23e2d9-a760-4984-bd1d-16bd60035d5d',
                'name' => 'Alam',
                'class' => '1',
                'created_at' => '2024-05-27 03:10:37',
                'updated_at' => '2024-05-27 03:10:37',
            ),
            5 => 
            array (
                'id' => 6,
                'uuid' => '9c23e32e-39c9-4a39-9796-ab7e60bc5632',
                'name' => 'Suparman',
                'class' => '1',
                'created_at' => '2024-05-27 03:11:32',
                'updated_at' => '2024-05-27 03:11:32',
            ),
            6 => 
            array (
                'id' => 7,
                'uuid' => '9c23e363-00b2-4a73-94a3-52896e7a0bbe',
                'name' => 'Risman',
                'class' => '1',
                'created_at' => '2024-05-27 03:12:07',
                'updated_at' => '2024-05-27 03:12:07',
            ),
            7 => 
            array (
                'id' => 8,
                'uuid' => '9c23e3cf-40c0-4697-b01d-8d0e5e873b73',
                'name' => 'Revan',
                'class' => '1',
                'created_at' => '2024-05-27 03:13:17',
                'updated_at' => '2024-05-27 03:13:17',
            ),
            8 => 
            array (
                'id' => 9,
                'uuid' => '9c23e41a-3334-46e2-aad9-dcca8b8539fa',
                'name' => 'Gaffar',
                'class' => '0',
                'created_at' => '2024-05-27 03:14:07',
                'updated_at' => '2024-05-27 03:35:40',
            ),
            9 => 
            array (
                'id' => 10,
                'uuid' => '9c23e461-29c1-4129-bf06-a6726753c4c2',
                'name' => 'Andirs',
                'class' => '1',
                'created_at' => '2024-05-27 03:14:53',
                'updated_at' => '2024-05-27 03:14:53',
            ),
            10 => 
            array (
                'id' => 11,
                'uuid' => '9c23e499-84dc-46b9-b993-7cc31071c6d8',
                'name' => 'Rusman Alias Toma Bin Hasan',
                'class' => '1',
                'created_at' => '2024-05-27 03:15:30',
                'updated_at' => '2024-05-27 03:15:30',
            ),
            11 => 
            array (
                'id' => 12,
                'uuid' => '9c23e4f5-bb9b-446f-8ce2-f68d7c6bbd64',
                'name' => 'Agung setiawan lantu',
                'class' => '1',
                'created_at' => '2024-05-27 03:16:30',
                'updated_at' => '2024-05-27 03:16:30',
            ),
            12 => 
            array (
                'id' => 13,
                'uuid' => '9c23e55a-5334-46ed-89a7-265be8aafb8e',
                'name' => 'Mohammad Karisman',
                'class' => '1',
                'created_at' => '2024-05-27 03:17:36',
                'updated_at' => '2024-05-27 03:17:36',
            ),
            13 => 
            array (
                'id' => 14,
                'uuid' => '9c23e589-366a-435b-84a6-029b2436a679',
                'name' => 'Andrik',
                'class' => '1',
                'created_at' => '2024-05-27 03:18:07',
                'updated_at' => '2024-05-27 03:18:07',
            ),
            14 => 
            array (
                'id' => 15,
                'uuid' => '9c23e5c3-9a72-4830-a16d-48b0dc8d2f0d',
                'name' => 'Irvan',
                'class' => '1',
                'created_at' => '2024-05-27 03:18:45',
                'updated_at' => '2024-05-27 03:18:45',
            ),
            15 => 
            array (
                'id' => 16,
                'uuid' => '9c23e64c-9830-420a-aee7-c4bed3a3b639',
                'name' => 'Firman',
                'class' => '1',
                'created_at' => '2024-05-27 03:20:15',
                'updated_at' => '2024-05-27 03:20:15',
            ),
            16 => 
            array (
                'id' => 17,
                'uuid' => '9c23e67f-a403-41f6-ac89-272c9c007538',
                'name' => 'Saiful',
                'class' => '1',
                'created_at' => '2024-05-27 03:20:49',
                'updated_at' => '2024-05-27 03:20:49',
            ),
            17 => 
            array (
                'id' => 18,
                'uuid' => '9c23e6ba-58ab-4a6b-9dfe-1b70ba08a1fa',
                'name' => 'Mevril',
                'class' => '1',
                'created_at' => '2024-05-27 03:21:27',
                'updated_at' => '2024-05-27 03:21:27',
            ),
            18 => 
            array (
                'id' => 19,
                'uuid' => '9c23e702-5363-4106-a8f0-1a31289b29e8',
                'name' => 'Aria',
                'class' => '1',
                'created_at' => '2024-05-27 03:22:14',
                'updated_at' => '2024-05-27 03:22:14',
            ),
            19 => 
            array (
                'id' => 20,
                'uuid' => '9c23e746-d3cd-4312-ad74-4a306b6e4b27',
                'name' => 'Fadran',
                'class' => '1',
                'created_at' => '2024-05-27 03:22:59',
                'updated_at' => '2024-05-27 03:22:59',
            ),
            20 => 
            array (
                'id' => 21,
                'uuid' => '9c23e77a-9d5f-4727-9908-a257432cefbc',
                'name' => 'Ucup',
                'class' => '1',
                'created_at' => '2024-05-27 03:23:33',
                'updated_at' => '2024-05-27 03:23:33',
            ),
            21 => 
            array (
                'id' => 22,
                'uuid' => '9c23e7b2-bf13-4bee-8847-305e4e524995',
                'name' => 'Irwansyah',
                'class' => '1',
                'created_at' => '2024-05-27 03:24:10',
                'updated_at' => '2024-05-27 03:24:10',
            ),
            22 => 
            array (
                'id' => 23,
                'uuid' => '9c23e7e2-a710-4d88-92f8-00e61d89cef3',
                'name' => 'Usman bin said',
                'class' => '1',
                'created_at' => '2024-05-27 03:24:41',
                'updated_at' => '2024-05-27 03:24:41',
            ),
            23 => 
            array (
                'id' => 24,
                'uuid' => '9c23e814-ed34-47b5-b5ff-5fbf6fae7411',
                'name' => 'Daniel Manurung',
                'class' => '1',
                'created_at' => '2024-05-27 03:25:14',
                'updated_at' => '2024-05-27 03:25:14',
            ),
            24 => 
            array (
                'id' => 25,
                'uuid' => '9c23e857-bc37-4738-adeb-806ff45292e0',
                'name' => 'Rivaldi al.Risal',
                'class' => '1',
                'created_at' => '2024-05-27 03:25:58',
                'updated_at' => '2024-05-27 03:25:58',
            ),
            25 => 
            array (
                'id' => 26,
                'uuid' => '9c23e896-39f9-42d3-a3c5-3b4b32844731',
                'name' => 'Syawal',
                'class' => '0',
                'created_at' => '2024-05-27 03:26:39',
                'updated_at' => '2024-05-27 03:36:16',
            ),
            26 => 
            array (
                'id' => 27,
                'uuid' => '9c23e8d1-edf4-4c0b-b2f4-e03c12885b37',
                'name' => 'Romzee',
                'class' => '0',
                'created_at' => '2024-05-27 03:27:18',
                'updated_at' => '2024-05-27 03:35:19',
            ),
            27 => 
            array (
                'id' => 28,
                'uuid' => '9c23e940-acd2-4bd6-ae02-ab9dcfba4377',
                'name' => 'bambang',
                'class' => '1',
                'created_at' => '2024-05-27 03:28:31',
                'updated_at' => '2024-05-27 03:28:31',
            ),
            28 => 
            array (
                'id' => 29,
                'uuid' => '9c23e978-5570-4dd7-a4c8-52448245529c',
                'name' => 'Sahrul Ramadhan hin Saleh',
                'class' => '1',
                'created_at' => '2024-05-27 03:29:07',
                'updated_at' => '2024-05-27 03:29:07',
            ),
            29 => 
            array (
                'id' => 30,
                'uuid' => '9c23e9b0-211f-41be-a3f3-f2117a23a474',
                'name' => 'Dian susilo',
                'class' => '1',
                'created_at' => '2024-05-27 03:29:44',
                'updated_at' => '2024-05-27 03:29:44',
            ),
            30 => 
            array (
                'id' => 31,
                'uuid' => '9c23ea08-49c5-44c1-afb2-dd75f72928e1',
                'name' => 'Bambang',
                'class' => '1',
                'created_at' => '2024-05-27 03:30:42',
                'updated_at' => '2024-05-27 03:30:42',
            ),
            31 => 
            array (
                'id' => 32,
                'uuid' => '9c23ea5a-3df4-47f1-b7f4-c51a01fdc55f',
                'name' => 'Ica',
                'class' => '0',
                'created_at' => '2024-05-27 03:31:35',
                'updated_at' => '2024-05-27 03:31:35',
            ),
            32 => 
            array (
                'id' => 33,
                'uuid' => '9c23eaab-77d4-4bf6-bab1-d89438224a77',
                'name' => 'Anto',
                'class' => '0',
                'created_at' => '2024-05-27 03:32:28',
                'updated_at' => '2024-05-27 03:32:28',
            ),
            33 => 
            array (
                'id' => 34,
                'uuid' => '9c23eafa-a0b7-4c56-96ae-487936d5912e',
                'name' => 'Sukma',
                'class' => '1',
                'created_at' => '2024-05-27 03:33:20',
                'updated_at' => '2024-05-27 03:33:20',
            ),
            34 => 
            array (
                'id' => 35,
                'uuid' => '9c23ecc6-cd5e-4247-8660-ca1091a92aab',
                'name' => 'Dummy 01',
                'class' => '0',
                'created_at' => '2024-05-27 03:38:22',
                'updated_at' => '2024-05-27 03:38:22',
            ),
            35 => 
            array (
                'id' => 36,
                'uuid' => '9c23ece8-3424-441c-a513-719346469347',
                'name' => 'Dummy 02',
                'class' => '0',
                'created_at' => '2024-05-27 03:38:44',
                'updated_at' => '2024-05-27 03:38:44',
            ),
            36 => 
            array (
                'id' => 37,
                'uuid' => '9c23ed0e-14e2-40f1-a294-9855dbd0c84e',
                'name' => 'Dummy 03',
                'class' => '0',
                'created_at' => '2024-05-27 03:39:09',
                'updated_at' => '2024-05-27 03:39:09',
            ),
            37 => 
            array (
                'id' => 38,
                'uuid' => '9c23ed83-6963-484f-82be-208ce53c43ab',
                'name' => 'Dummy 04',
                'class' => '0',
                'created_at' => '2024-05-27 03:40:26',
                'updated_at' => '2024-05-27 03:40:26',
            ),
            38 => 
            array (
                'id' => 39,
                'uuid' => '9c23edb3-bd1a-4f3f-883a-688cb6d5a600',
                'name' => 'Dummy 05',
                'class' => '0',
                'created_at' => '2024-05-27 03:40:57',
                'updated_at' => '2024-05-27 03:40:57',
            ),
            39 => 
            array (
                'id' => 40,
                'uuid' => '9c23edd9-9280-409e-b641-0c0e8c7ace1b',
                'name' => 'Dummy 06',
                'class' => '0',
                'created_at' => '2024-05-27 03:41:22',
                'updated_at' => '2024-05-27 03:41:22',
            ),
            40 => 
            array (
                'id' => 41,
                'uuid' => '9c23ee14-a815-4de0-8d97-1addf34dcb0b',
                'name' => 'Dummy 07',
                'class' => '0',
                'created_at' => '2024-05-27 03:42:01',
                'updated_at' => '2024-05-27 03:42:01',
            ),
            41 => 
            array (
                'id' => 42,
                'uuid' => '9c23ee32-ef2a-4818-9a1a-93c774f090b0',
                'name' => 'Dummy 08',
                'class' => '0',
                'created_at' => '2024-05-27 03:42:21',
                'updated_at' => '2024-05-27 03:42:21',
            ),
            42 => 
            array (
                'id' => 43,
                'uuid' => '9c23ef6d-918c-434c-ac86-145810536fe3',
                'name' => 'Dummy 09',
                'class' => '0',
                'created_at' => '2024-05-27 03:45:47',
                'updated_at' => '2024-05-27 03:45:47',
            ),
            43 => 
            array (
                'id' => 44,
                'uuid' => '9c23ef87-8c91-4a11-91e9-e3b58cab7e9d',
                'name' => 'Dummy 10',
                'class' => '0',
                'created_at' => '2024-05-27 03:46:04',
                'updated_at' => '2024-05-27 03:46:04',
            ),
            44 => 
            array (
                'id' => 45,
                'uuid' => '9c23efa1-7383-4b6e-84d4-ac8e8c5c1621',
                'name' => 'Dummy 11',
                'class' => '0',
                'created_at' => '2024-05-27 03:46:21',
                'updated_at' => '2024-05-27 03:46:21',
            ),
            45 => 
            array (
                'id' => 46,
                'uuid' => '9c23efc1-8528-443d-95ac-3f7fea4fe070',
                'name' => 'Dummy 12',
                'class' => '0',
                'created_at' => '2024-05-27 03:46:42',
                'updated_at' => '2024-05-27 03:46:42',
            ),
            46 => 
            array (
                'id' => 47,
                'uuid' => '9c23efe8-9a8d-49e7-bf05-47d742e50a38',
                'name' => 'Dummy 13',
                'class' => '0',
                'created_at' => '2024-05-27 03:47:07',
                'updated_at' => '2024-05-27 03:47:07',
            ),
            47 => 
            array (
                'id' => 48,
                'uuid' => '9c23f006-bce0-42b5-b11d-68d7d82ebf9b',
                'name' => 'Dummy 14',
                'class' => '0',
                'created_at' => '2024-05-27 03:47:27',
                'updated_at' => '2024-05-27 03:47:27',
            ),
            48 => 
            array (
                'id' => 49,
                'uuid' => '9c23f02b-ae75-4532-8ead-0af05f28cd6e',
                'name' => 'Dummy 15',
                'class' => '0',
                'created_at' => '2024-05-27 03:47:51',
                'updated_at' => '2024-05-27 03:47:51',
            ),
            49 => 
            array (
                'id' => 50,
                'uuid' => '9c23f056-854f-462b-9074-fd9b7831084f',
                'name' => 'Dummy 16',
                'class' => '0',
                'created_at' => '2024-05-27 03:48:19',
                'updated_at' => '2024-05-27 03:48:19',
            ),
            50 => 
            array (
                'id' => 51,
                'uuid' => '9c23f076-1daa-4d8c-9bcb-d5da37b09aa9',
                'name' => 'Dummy 17',
                'class' => '0',
                'created_at' => '2024-05-27 03:48:40',
                'updated_at' => '2024-05-27 03:48:40',
            ),
            51 => 
            array (
                'id' => 52,
                'uuid' => '9c23f0a0-c170-45d4-bd4c-f3bc528e01ff',
                'name' => 'Dummy 18',
                'class' => '0',
                'created_at' => '2024-05-27 03:49:08',
                'updated_at' => '2024-05-27 03:49:08',
            ),
            52 => 
            array (
                'id' => 53,
                'uuid' => '9c23f0cd-23fa-4047-91d3-048a72ab320f',
                'name' => 'Dummy 19',
                'class' => '0',
                'created_at' => '2024-05-27 03:49:37',
                'updated_at' => '2024-05-27 03:49:37',
            ),
            53 => 
            array (
                'id' => 54,
                'uuid' => '9c23f0ea-de3e-4d58-9230-e3f0ec1ac04b',
                'name' => 'Dummy 20',
                'class' => '0',
                'created_at' => '2024-05-27 03:49:57',
                'updated_at' => '2024-05-27 03:49:57',
            ),
        ));
        
        
    }
}