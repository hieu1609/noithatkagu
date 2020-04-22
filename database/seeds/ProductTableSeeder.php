<?php

use Illuminate\Database\Seeder;
use App\Product;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'product_name' => 'Giường đơn gỗ sồi',
                'product_price' => 5000000,
                'infor' => 'Chất liệu chính của giường ngủ gỗ sồi Nga vẫn là gỗ sồi Nga chắc chắn, bền dai. Do đó các thành viên có thể sinh hoạt thoải mái mà không lo bị hỏng. Tuổi thọ của giường ngủ lên tới trên 10 năm.
                Ngoài ra có thêm một lớp sơn PU làm cho thành giường và cạnh giường thêm phần sáng bóng, tạo cảm giác ngủ ngon cho quý khách hàng.
                – Kích thước Kích thước:Giường 1m: 100 x 200
                – Gỗ Sồi Nga tự nhiên đã được tẩm sấy đảm bảo chắc, bền, đẹp, không sợ nước, không mọt hay nứt nẻ.
                
                – Kiểu dáng sang trọng, mẫu đẹp, khung giường to khỏe. Đầu giường với thiết kế cong mềm mại mang lại chỗ dựa thoải mái cho người sử dụng.',
                'tag' => 'giường, giường đơn, giường gỗ, gỗ',
                'cat_id' => 1,
                'rating' => 5,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Giường gia đình gỗ sồi',
                'product_price' => 5500000,
                'infor' => 'Giường ngủ gỗ sồi Nga phù hợp với các căn phòng ngủ có diện tích vừa phải từ 20-30m2. Có thể kết hợp thêm các loại bàn trang điểm gọn gàng, ngăn nắp làm cho không gian nội thất phòng ngủ thêm phần lãng mạn, ấm cúng.
                Chất liệu: gỗ sồi tự nhiên
                
                – Kích thước (D x R x C):  2165 x 1855 x 905mm
                – Gỗi sồi tự nhiên, chắc bền, đẹp
                - kiểu dáng độc đáo, mẫu mã đẹp, tạo cảm giác ấm cúng, tiện lợi cho người sử dụng.',
                'tag' => 'giường, giường đôi, giường gỗ, gỗ',
                'cat_id' => 1,
                'rating' => 5,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            
        ];
        
        foreach ($products as $key => $product) {
            Product::create($product);
        }
    }
}
