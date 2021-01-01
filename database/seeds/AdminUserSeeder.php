<?php

use Carbon\Carbon;
use App\Base\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $faker = Faker\Factory::create();
//         $limit = 1000;
        User::create([
            'name'       => 'Admin',
            'username'   => 'admin',
            'email'      => 'admin@example.com',
            'active'     => 1,
            'role_id'    => 1,
            'password'   => bcrypt('secret'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
//         for ($i = 0; $i < $limit; $i++) {
//             // DB::table('outdocumentary')->insert([
//             //     'TenCV' => $faker->name,
//             //     'KiHieuCV' => $faker->name,
//             //     'NoiBH' => $faker->name,
//             //     'NgayBH' =>  Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString(),
//             //     'NoiDung' =>$faker->name,
//             //     'TrangThai' => 'Bình Thường',
//             //     'NguoiKi' => 'Giám Đốc',
//             //     'TinhTrang' => 'Đã Phê Duyệt',
//             //     'File' => uniqid() .'.pdf',
//             //     'GhiChu' => 'Không có gì để ghi',
//             //     // 'email' => $faker->unique()->email,
//             //     // 'department_id' => rand(1, 10)
//             // ]);
//             User::create([
//                 'name'       => $faker->name,
//                 'username'   => $faker->name,
//                 'email'      => $faker->name,
//                 'active'     => 1,
//                 'role_id'    => 5,
//                 'password'   => bcrypt('guestpass'),
//                 'created_at' => Carbon::now(),
//                 'updated_at' => Carbon::now(),
//             ]);
//         }
        // Guest User
       
    }
}
