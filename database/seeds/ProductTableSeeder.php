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
                – Kiểu dáng sang trọng, mẫu đẹp, khung giường to khỏe. Đầu giường với thiết kế cong mềm mại mang lại chỗ dựa thoải mái cho người sử dụng.',
                'size' =>'Giường 1m: 100 x 200',
                'material' => 'Gỗ Sồi Nga tự nhiên đã được tẩm sấy đảm bảo chắc, bền, đẹp, không sợ nước, không mọt hay nứt nẻ.',       
                'color' => '',
                'tag' => 'giường, giường đơn, giường gỗ, gỗ',
                'cat_id' => 1,
                'rating' => 4.5,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Giường gia đình gỗ sồi',
                'product_price' => 5500000,
                'infor' => 'Giường ngủ gỗ sồi Nga phù hợp với các căn phòng ngủ có diện tích vừa phải từ 20-30m2. Có thể kết hợp thêm các loại bàn trang điểm gọn gàng, ngăn nắp làm cho không gian nội thất phòng ngủ thêm phần lãng mạn, ấm cúng.
                – Gỗi sồi tự nhiên, chắc bền, đẹp
                - kiểu dáng độc đáo, mẫu mã đẹp, tạo cảm giác ấm cúng, tiện lợi cho người sử dụng.',
                'size' =>'2165 x 1855 x 905mm',
                'material' => 'Gỗ sồi tự nhiên',       
                'color' => '',
                'tag' => 'giường, giường đôi, giường gỗ, gỗ',
                'cat_id' => 1,
                'rating' => 3,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Giường đôi gỗ sồi',
                'product_price' => 6000000,
                'infor' => '"Giường ngủ gỗ sồi Nga nhập khẩu với chất lượng gỗ được đánh giá là tốt nhất luôn là những ưu tiên lựa chọn của các gia đình. Gỗ sồi Nga là một trong những lựa chọn được nhiều gia đình Việt yêu thích bởi đây là loại gỗ có chất lượng tốt và mức giá hợp lý. Mua giường ngủ gỗ sồi Nga đẹp giá rẻ ở đâu là câu hỏi của nhiều người đang có nhu cầu mua giường ngủ gỗ tự nhiên. 
                – Gỗ Sồi Nga tự nhiên đã được tẩm sấy đảm bảo chắc, bền, đẹp, không sợ nước, không mọt hay nứt nẻ.
                
                – Kiểu dáng sang trọng, mẫu đẹp, khung giường to khỏe. Đầu giường với thiết kế cong mềm mại mang lại chỗ dựa thoải mái cho người sử dụng."
                ',
                'size' =>'1m8 x 2m',
                'material' => 'Gỗ sồi Nga tự nhiên',       
                'color' => '',
                'tag' => 'giường, giường đôi, giường gỗ, gỗ',
                'cat_id' => 1,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'giường ngủ gỗ đơn 1 ngăn hộc kéo',
                'product_price' => 5200000,
                'infor' => '"Bạn đang sở hữu một căn phòng nhỏ cho chính mình, vậy thì hãy tham khảo ngay mẫu giường ngủ đơn siêu tiện ích này nhé. Ưu điểm của mẫu giường này là khá gọn và tích hợp thêm ngăn kéo chứa đồ hoàn hảo. Phòng nhỏ vẫn tiện nghi và thẩm mỹ vô cùng.
                Chiếc giường ngủ đơn dành cho 1 người đơn giản nhưng khá bắt mắt. Thiết kế độc đáo tận dụng mọi khoảng trống gầm giường để tạo này nơi cất giữ đồ. Khoảng không gian đủ lớn để bạn cất giữ quần áo, vali hay giầy dép và những vật dụng cần thiết khác. "',
                'size' =>'120cm x 200cm',
                'material' => 'Gỗ',       
                'color' => 'trắng',
                'tag' => 'giường, giường đơn, một ngăn, ngăn kéo, ngăn hộc, giường gỗ',
                'cat_id' => 1,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Giường gỗ đơn 2 ngăn hộc kéo',
                'product_price' => 8000000,
                'infor' => '"Bạn đang sở hữu một căn phòng nhỏ cho chính mình, vậy thì hãy tham khảo ngay mẫu giường ngủ đơn siêu tiện ích này nhé. Ưu điểm của mẫu giường này là khá gọn và tích hợp thêm ngăn kéo chứa đồ hoàn hảo. Phòng nhỏ vẫn tiện nghi và thẩm mỹ vô cùng.
                Chiếc giường ngủ đơn dành cho 1 người đơn giản nhưng khá bắt mắt. Thiết kế độc đáo tận dụng mọi khoảng trống gầm giường để tạo này nơi cất giữ đồ. Khoảng không gian đủ lớn để bạn cất giữ quần áo, vali hay giầy dép và những vật dụng cần thiết khác. "',
                'size' =>'120cm x 200cm',
                'material' => 'Gỗ',       
                'color' => 'trắng',
                'tag' => 'giường, giường đơn, ngăn kéo, hai ngăn, ngăn hộc, giường gỗ',
                'cat_id' => 1,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Giường gỗ 1 ngăn hộc kéo',
                'product_price' => 9800000,
                'infor' => '"Hiện nay nhu cầu mua giường ngủ đẹp, hiện đại phù hợp với không gian phòng ngủ không phải là điều đơn giản. Ngoài việc có quá nhiều chất liệu, kiểu dáng, xuất xứ,… của các loại giường ngủ trên thị trường hiện nay thì việc chọn được nơi bán hàng uy tín, giá rẻ cũng khiến người mua gặp khó khăn. Nếu như ngày trước giường ngủ chỉ đơn giản chỉ là nơi nghỉ ngơi, thư giãn thì ngày nay giường ngủ phải trở thành vật trang trí cho không gian phòng ngủ, nhất là với những không gian phòng ngủ hiện đại sang trọng thì tính thẩm mỹ của chiếc giường ngủ lại càng được quan tâm hơn.
                Giường Hộc Kéo 601T"',
                'size' =>'1.6*2.0m',
                'material' => 'Gỗ MDF veneer sồi, bọc nệm đầu giường Simili',       
                'color' => '',
                'tag' => 'giường, giường gỗ, ngăn kéo, 1 ngăn, hộc kéo',
                'cat_id' => 1,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Giường gỗ 2 ngăn hộc kéo',
                'product_price' => 7000000,
                'infor' => '"Là sản phẩm giường ngủ hiện đại của thương hiệu nội thất Top 3 tại Nội thất Kagu. Là một sản phẩm giúp bạn có không gian lưu trữ hoàn hảo hơn, tận dụng tối đa không gian của phòng ngủ, thiết kê hiện đại, tiện nghi, và hợn bao giờ hết sản phẩm đảm bảo cho bạn một giấc ngủ thật ngon sau một ngày dài làm việc vất vả."',
                'size' =>'2m x 1.2m x 400mm',
                'material' => 'gỗ phong',       
                'color' => 'Trắng',
                'tag' => 'giường gỗ, giường, ngăn kéo, 2 ngăn, hộc kéo',
                'cat_id' => 1,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Giường ngủ 2 tầng gỗ thông',
                'product_price' => 7000000,
                'infor' => '"Giường ngủ tầng cho bé với kiểu dáng đơn giản, gọn gàng cùng các gam màu ấn tượng sẽ rất phù hợp với những căn phòng của các bé có độ tuổi trưởng thành, bắt đầu định hình được cho mình cá tính và sở thích riêng biệt.
                hiện nay có gam trắng cơ bản, cùng một số màu sắc mới khá bắt mắt như xanh, than, vàng… với kiểu dáng sang trọng và đặc biệt là có thể cho phép phối hợp với nhiều vật dụng nội thất có màu sắc đa dạng khác nhau mà không gây lệch lạc về thẩm mỹ với kích thước – Toàn Phần ( Phủ Bì ) : Dài 205 cm x Rộng 145 cm X Cao 177 Cm và kích thước – Tầng 2 ( Phủ Bì – Trên Cùng ) : Dài 205 cm x Rộng 105 cm
                "',
                'size' =>' Tổng: 205 cm x 145 cm x 177 Cm, Tầng 2: 205cm x 105cm',
                'material' => '',       
                'color' => 'Màu trắng(Basic), xanh, than, vàng… ',
                'tag' => 'giường, giường tầng, 2 tầng, gỗ thông, gỗ',
                'cat_id' => 1,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Giường tầng gỗ tự nhiên',
                'product_price' => 20000000,
                'infor' => '"Giường Ngủ bằng Gỗ sồi nhập khẩu từ Nga đã qua sử lý cong vênh, mối mọt và được kiểm định kỹ càng bởi Go Home. Sản phẩm được sơn công nghệ LacKer 7 lớp đảm bảo an toàn sức khỏe cho Bé. 
                Giường tầng với 2 tầng & 2 ngăn kéo đựng đồ tầng 1. Bậc thang di động gồm 4 ngăn kéo để đồ. Chất liệu gỗ đã qua xử lý công nghiệp không vênh, chống mối mọt"',
                'size' =>'(D) 2600 x (R) 1220 x (C) 1800 (Thay đổi kích thước theo nhu cầu)',
                'material' => ' Gỗ sồi tự nhiên 100%',       
                'color' => 'Để nguyên màu gỗ phun PU bóng hoặc phun màu tùy lựa tại cửa hàng.',
                'tag' => 'giường, giường tầng, gỗ, gỗ tự nhiên',
                'cat_id' => 1,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Giường gỗ Melamaine',
                'product_price' => 4000000,
                'infor' => '"Hiện nay gỗ công nghiệp được ứng dụng trong hầu hết các thiết kế nội thất bởi tính thân thiện với môi trường (không phải tàn phá những cánh rừng để lấy gỗ) và giá thành hợp lý. Bên cạnh đó việc ứng dụng các kỹ thuật tiên tiến vào sản xuất gỗ công nghiệp đã đáp ứng những yêu cầu cao về chất lượng, tính thẩm mỹ cho các sản phẩm. Lớp nhựa Melamine phủ ngoài có tác dụng chống mài mòn, chống chầy xước, chống ẩm mốc và thấm nước…nên đảm bảo giấc ngủ ngon và sâu sau một ngày làm việc vất vả cho bản thân và gia đình. Giường dạt phản, có 2 hộc kéo lắp bên nào cũng được.hàng việt nam chất lượng cao."',
                'size' =>'200D x 180R cm',
                'material' => 'gỗ MDF phủ melamine vân gỗ chống trày, chống cong vênh, mối mọt',       
                'color' => '2 màu nâu, vàng',
                'tag' => 'giường, giường gỗ, melamaine, gỗ',
                'cat_id' => 1,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ăn gỗ cao su',
                'product_price' => 6000000,
                'infor' => '"Với thiết kế tiện dụng, kết cấu chắc chắn Bàn ăn với kích thước vừa phải, có thể ngồi từ 4 thành viên. Chân bàn, ghế được làm từ gỗ đặc, kết cấu vững chãi giúp cố định trên mọi bề mặt phẳng mà không làm trầy xước sàn nhà. Kiểu dáng hiện đại, phù hợp nhiều không gian Với thiết kế đơn giản, mộc mạc nhưng không kém phần tinh tế. Bộ bàn ăn gỗ cao su của Nội Thất kagu mang vẻ đẹp tự nhiên của gỗ giúp người dùng dễ dàng bố trí trong mọi không gian sống, góp phần cho ngôi nhà trở nên tiện nghi và sang trọng hơn.
                Bộ bàn ghế ăn gỗ 4 ghế gỗ cao su gồm:
                - 4 ghế ăn gỗ cao su đạt tiêu chuẩn xuất khẩu
                - Bàn ăn gỗ cao su hình chữ nhật 
                Sản phẩm bàn ăn bằng gỗ cao su được bảo hành mối mọt cong vênh nứt nẻ"',
                'size' =>'115D x 75R X 75C (cm)',
                'material' => 'Gỗ cao su',       
                'color' => '',
                'tag' => 'bàn, bàn ăn, bàn gỗ, gỗ, cao su, bộ',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ăn 4 ghế',
                'product_price' => 3000000,
                'infor' => '" Bộ bàn ăn 4 ghế được làm từ gỗ MDF phủ verneer sồi chống nước, chân bàn và ghế bằng gỗ cao su tự nhiên, ghế mặt ngồi bọc nệm simili cao cấp
                Kiểu dáng đẹp, hiện đại, đa năng, an toàn khi sử dụng, phù hợp với mọi không gian phòng khách hoặc phòng ăn. tạo nên cảm giác thoải mái, ngon miệng trong những bữa ăn gia đình đầm ấm.
                Sở hữu đủ ba yếu tố: rẻ - đẹp - bền, bộ bàn ghế này chắc chắn sẽ không làm bạn thất vọng vì sự tiện nghi và đẹp bền này.
                Phù hợp : bếp ăn gia đình, nhà hàng, quán ăn."',
                'size' =>'Ghế cao 45 bàn 80x160x75',
                'material' => 'Gỗ cao su, mặt bàn mdf.',       
                'color' => 'Vàng, trắng, đen, nâu',
                'tag' => 'bàn, bàn ăn, 4 ghế, banan',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ăn tròn',
                'product_price' => 5000000,
                'infor' => '"Thiết kế theo phong cách hiện đại, có thể sắp xếp cùng các loại ghế gỗ và trang trí với mọi không gian phòng ăn. Bàn được thiết kế dạng tròn, khung 3 chân gắn liền với nhau tạo một thế trụ rất chắc chắn, không bị rung lắc khi va chạm mạnh. Mặt bàn cũng được cấu tạo từ gỗ nguyên bản, dễ lăp ghép và di chuyển. Bàn ăn gỗ tự nhiên có thể sử dụng trong thời gian lâu dài mà không hề lo sợ bị mối mọt, nấm mốc hay đổi màu khác. Không chỉ thế, dạng tròn của mặt bàn còn rất an toàn đối với người dùng đặc biệt là trẻ nhỏ, ngoài ra còn tiết kiệm không gian phòng ăn. "',
                'size' =>'Đường kính mặt bàn 915 x cao 750 (mm)',
                'material' => 'Gỗ tự nhiên 100% có vân nổi bật, được sấy khô hoàn toàn.',       
                'color' => 'Màu hạt dẻ, trắng, vàng gỗ tự nhiên',
                'tag' => 'bàn, bàn tròn, bàn ăn, bộ',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ăn thông minh',
                'product_price' => 3000000 ,
                'infor' => '"Với thiết kế đơn giản, dễ dàng sử dụng cho mọi thành viên trong gia đình. Với kiểu dáng toát lên vẻ đẹp hiện đại và sang trọng cho ngôi nhà thì chiếc bàn ăn thông minh nhập khẩu tiện ích này chiếm được không ít sự tin dùng của khách hàng. Tại sao gọi nó thông minh vì sản phẩm này nó thực hiện được nhiều chức năng dùng làm bàn ăn, bàn trang trí góc tường, đặc biệt là rất tiện cho bàn làm việc. Quả là tuyệt vời phải không các bạn vừa sử dụng làm nhiều chức năng khác nhau mà giá thì rất rẻ so với những mẫu thị trường đang kinh doanh. 
                Sản phẩm bao gồm: 1 bàn + 6 ghế"',
                'size' =>'Full: (Dài x Rộng x Cao): 140 x 80 x 74 cm.
                Xếp gọn: (Dài x Rộng x Cao): 80 x 25 x 74 cm.',
                'material' => 'Gỗ MFC, bề mặt phủ Melamine chống thấm (chưa bao gồm ghế ăn)',       
                'color' => ' màu vàng oak + màu nâu walnut',
                'tag' => 'bàn, bàn ăn, thông minh, gỗ, bộ',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ăn tựa tròn',
                'product_price' => 6000000,
                'infor' => '"Bộ bàn ăn tựa tròn có kích thước vừa đủ để không chiếm quá nhiều diện tích của phòng ăn. Chỉ cần một góc nhỏ với bộ bàn ăn, bạn đã có một bữa cơm gia đình đầm ấm. Thiết kế mang phong cách Hàn quốc rất phù hợp với căn hộ chung cư, đặc biệt là các gia đình trẻ. Tuy đơn giản nhưng bộ bàn ăn này vẫn  mang đến vẻ đẹp sang trọng, hiện đại cho không gian nhà bạn.

                Bộ bàn ăn có màu (màu tự nhiên) với tone màu tự nhiên, không quá sáng cũng không quá tối, sẽ mang lại cảm giác tươi mới, nhẹ nhàng cho không gian nhà bạn. Tựa hình cung tròn tạo cảm giác thoải mái khi ăn uống và phù hợp với trẻ nhỏ.

                Gồm: 1 bàn + 4 ghế"',
                'size' =>'120D x 75R x 74C cm',
                'material' => 'Gỗ cao su',       
                'color' => 'Màu tự nhiên',
                'tag' => 'bàn, bàn ăn, bàn tròn, tựa, gỗ, cao su, bộ',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ăn chân gỗ sồi',
                'product_price' => 5000000,
                'infor' => '"Bàn ghế chân gỗ sồi có thiết kế đẹp, hiện đại, giá thành rẻ, dễ dàng tháo lắp và vận chuyển, trọng lượng nhẹ, phù hợp với hầu hết các phòng bếp căn hộ chung cư và nhà mặt đất. Bàn chữ nhật thiết kế đơn giản nhưng sang trọng thích hợp với những người có phong cách đơn giản không cầu kỳ.  Ghế ăn chân gỗ đan chắc chắn, và tạo cảm giác ấm cũng trong bữa ăn gia đình. "',
                'size' =>'Bàn: 120 x 80 x 75(cm)',
                'material' => ' Bàn: Gỗ cao su, chân gỗ sồi
                Ghế: Nhựa PP chân gỗ sồi',       
                'color' => 'Trắng, chân màu gỗ.',
                'tag' => 'bàn, bàn ăn, gỗ, sồi, cao su, bộ',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ăn 6 ghế màu tự nhiên',
                'product_price' => 7000000,
                'infor' => '"Bộ bàn ghế ăn có kích thước vừa đủ để không chiếm quá nhiều diện tích của phòng ăn. Chỉ cần một góc nhỏ với bộ bàn ăn, bạn đã có một bữa cơm gia đình đầm ấm. Thiết kế mang phong cách Hàn quốc rất phù hợp với căn hộ chung cư, đặc biệt là các gia đình trẻ. Tuy đơn giản nhưng bộ bàn ăn này vẫn  mang đến vẻ đẹp sang trọng, hiện đại cho không gian nhà bạn. 
                Sản xuất trên dây chuyền hiện đại, nhằm đáp ứng các tiêu chuẩn khắt khe của những thị trường xuất khẩu khó tính như Mỹ, Nhật, Châu Âu… Nguyên liệu chính là gỗ cao su đã qua chế biến chống cong vênh mối mọt, đạt trình độ thẩm mỹ và có độ bền rất cao. Lưng và mặt  ghế có nệm dày, vỏ bọc simily cao cấp tạo cảm giác êm ái, thoáng mát cho người ngồi. "',
                'size' =>'165 x 80 x 74 cm',
                'material' => ' Gỗ cao su',       
                'color' => 'Màu tự nhiên',
                'tag' => 'bộ, bàn ăn, bàn, 6 ghế, gỗ, cao su',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ăn mây tre',
                'product_price' => 7000000,
                'infor' => '"Bộ bàn ghế ăn mây tre đan cao cấp cỡ lớn với thiết kế sang trọng và vững chắc theo phong cách Châu Âu. Bộ bàn ghế ăn với kích thước lớn đi kèm với 8 ghế ăn thích hợp với các phòng ăn lớn và dùng trong các buổi đãi khách quý.
                Một bộ gồm 8 ghế mây và 1 bàn mây"',
                'size' =>'– Ghế mây: 50 x 55 x 95 cm
                – Bàn mây: 160 x 80 x 84 cm' ,
                'material' => 'Mây tre đan và sợi lục bình, chân bàn và chân ghế bằng gỗ nâu',       
                'color' => 'Màu tự nhiên',
                'tag' => 'bộ, bàn, bàn ăn, mây, tre',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ghế hiện đại',
                'product_price' => 4500000,
                'infor' => '"Bộ bàn ăn được thiết kế theo phong cách của Châu Âu vừa đơn giản, vừa sang trọng, dễ dàng phối hợp với mọi không gian nội thất hiện đại. Bộ bàn ăn được làm bằng gỗ cao su tự nhiên cho toàn khung , chân bàn và chân ghế, mặt bàn, mặt ghế được làm bằng tấm MDF nguyên tấm nhập khẩu phủ veneer
                Màu trắng mang đến sự nhẹ nhàng, sang trọng. tô điểm cho ngôi nhà bạn. làm không gian phòng ăn bừng sáng lên. "',
                'size' =>' 120 x 80 x 74 (cm)',
                'material' => 'Mặt bàn MDF sơn phủ NC 5 lớp. Sơn sạch 1 thành phần không có chất gây ung thư theo tiêu chuẩn Châu Âu ',       
                'color' => 'Trắng',
                'tag' => 'bộ, bàn, ghế, hiện đại, bàn ăn, châu âu, sang trọng',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ bàn ăn 6 ghế',
                'product_price' => 15000000,
                'infor' => '"Chất liệu toàn bộ là gỗ tự nhiên không pha tạp
                Sản xuất trên dây truyền hiện đại, đủ tiêu chuẩn xuất khẩu, làm hoàn toàn thủ công với nguyên vật liệu của bàn từ gỗ Walnut (gỗ óc chó) và ghế là gỗ Ash (gỗ tần bì) được biết tới với những ưu điểm như: có độ cứng và chịu lực tốt, dẻo dai, tâm gỗ có khả năng kháng sâu mang đến độ bền cao cho sản phẩm. Những đường nét đậm, đơn giản không cầu kỳ càng tôn thêm nét thanh lịch và sang trọng cho mẫu thiết kế này. Toàn bộ gỗ đã qua xử lý chống cong vênh, mối mọt. Bề mặt gỗ được sơn phủ kỹ càng, vừa giữ nguyên được vẻ đẹp mộc mạc của gỗ, vừa bảo vệ sản phẩm bền bỉ theo thời gian, hạn chế trầy xước và dễ dàng lau chùi vệ sinh. 
                Bộ bàn gồm: 1 bàn + kính và 6 ghế. "',
                'size' =>' 160 x 80 x 75 (cm)',
                'material' => 'Gỗ óc chó+ tần bì',       
                'color' => 'Màu tự nhiên & màu xoan đào',
                'tag' => 'bộ, bàn ăn, 6 ghế, thủ công, tự nhiên',
                'cat_id' => 2,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Sofa gỗ óc chó',
                'product_price' => 120000000,
                'infor' => '"Bộ sofa gỗ óc chó chữ L thiết kế tinh tế, thanh thoát vừa mang lại sự sang trọng, trang nhã vừa tận dụng không gian diện tích phòng khách.
                Khác với các mẫu sofa gỗ óc chó kiểu tay vịn truyền thống, sofa gỗ chữ L có không gian phẳng liền mạch và rộng rãi hơn. Mang đến ưu điểm vượt trội về sự thoải mái cả khi ngồi và nằm thư giãn. Để sofa không chỉ là nơi ngồi tiếp đón khách tới chơi mà còn là nơi lý tưởng để gia chủ nghỉ ngơi, nằm ngả lưng xem tivi, đọc sách, lướt web,…
                Bao gồm: 01 ghế sofa góc chữ L(Tặng gối ôm cao cấp)
                Kiểu dáng: Hiện đại',
                'size' =>'(3000+1800) x 900 x 820mm',
                'material' => 'Gỗ óc chó Bắc Mỹ (Loại FAS)"',       
                'color' => 'Màu tự nhiên',
                'tag' => 'Sofa, gỗ, óc chó, tinh tế, sang trọng, trang nhã',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Sofa giường kết hợp bàn trà',
                'product_price' => 14000000,
                'infor' => '"Bạn có tin rằng bàn trà cũng có thể làm được giường ngủ ? không những vậy nó còn giúp tiết kiệm tối đa diện tích cho căn nhà của bạn ,bàn trà kết hợp với ghế sofa giường của chúng tôi là một minh chứng.
                Bàn trà kết hợp ghế giường và ghế đơn là sản phẩm mới của Nội thất Kagu ,bộ sản phẩm này ban ngày bạn có thể dùng để tiếp khách và đến tối bạn có thể kết hợp chúng để làm giường ngủ tiết kiệm 50% không gian cho nhà chật, ghế làm bằng gỗ tự nhiên, cách sử dụng rất dễ dàng, giá thành hợp lý so với chất lượng và độ bền."',
                'size' =>' 1m7 x 2m',
                'material' => 'Gỗ tự nhiên',       
                'color' => 'Màu gỗ tự nhiên',
                'tag' => 'sofa, giường, bàn trà',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Sofa gỗ đỏ',
                'product_price' => 30000000,
                'infor' => '"Với thiết kế tinh giản, nội thất Kagu Sang Trọng đem đến những bộ SOFA GỖ TỰ NHIÊN được gia công một cách cẩn thận và tỷ mỉ nhưng vẫn đảm bảo giữ được vẻ đẹp tự nhiên vốn có.
                SOFA được chế tác từ gỗ Gõ Đỏ và nhiều loại gỗ quý hiếm khác như: gỗ Cẩm, Gõ Vàng, Hương đỏ… nên tính thẩm mỹ vô cùng cao, đẹp sắc nét trong từng đường vân, sự hòa quyện của từng thớ gỗ và màu sắc tạo nên một tổng thể hài hòa.
                Mặt bàn 60cm x 1m2"',
                'size' =>'1 chiều 2m65, 1 chiều 2m15',
                'material' => 'Gỗ đỏ (chính), gỗ Cẩm, gỗ Vàng,...',       
                'color' => 'Màu tự nhiên',
                'tag' => 'Sofa, gỗ, gỗ đỏ',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ sofa 5 món',
                'product_price' => 15000000,
                'infor' => '"Bộ ghế sofa được thiết kế với phong cách hiện đại và kiểu dáng khá nhỏ gọn so với các mẫu ghế sofa truyền thống. Chính vì vậy, dù cho bạn lựa chọn cả bộ sản phẩm với 3 mẫu ghế nhưng cũng không chiếm nhiều diện tích. Bộ ghế sofa tích hợp luôn với mẫu bàn trà được làm từ chất liệu gỗ sồi giúp bạn không cần nhọc công tìm kiếm chiếc bàn trà phù hợp. "',
                'size' =>'1 ghế băng 3 : D175 x R72 x C68cm
                1 ghế băng 2 chỗ: D112 x R72 x C68cm
                1 ghế sofa đơn 1 chỗ: 72 x R72 x C68cm
                1 Bàn sofa: D112 x R65 x C45cm
                1 bàn đôn để góc :D50 x 50 x 50cm',
                'material' => 'gỗ sồi Mỹ nhập khẩu',       
                'color' => 'Màu tự nhiên',
                'tag' => 'Bộ, sofa, gỗ, 5 món, hiện đại, gọn',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bộ sofa phòng khách',
                'product_price' => 29000000,
                'infor' => '"Bộ ghế sofa được thiết kế với phong cách hiện đại và kiểu dáng khá nhỏ gọn so với các mẫu ghế sofa truyền thống. Chính vì vậy, dù cho bạn lựa chọn cả bộ sản phẩm với 3 mẫu ghế nhưng cũng không chiếm nhiều diện tích. Khung gỗ tự nhiên mang đến cho bộ sản phẩm chất lượng vượt trội, tuổi thọ lâu. Hệ thống lò xo lưới và mút xốp cao cấp mang đến khách hàng cảm giác thoải mái nhất khi sử dụng."',
                'size' =>'Ghế 3 chỗ: 2140 x 770 x 830mm
                Ghế 2 chỗ: 1480 x 770 x 830mm
                Ghế đơn: 820 x 770 x 830mm',
                'material' => 'Khung gỗ tự nhiên, lò xo lưới, mút xốp cao cấp và vải nỉ bọc cao cấp',       
                'color' => 'Khách hàng tùy ý lựa chọn trong 120 mẫu vải nỉ tại cửa hàng',
                'tag' => 'Sofa, phòng khách, gọn, gỗ',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Sofa giường gỗ',
                'product_price' => 10000000,
                'infor' => 'Sofa giường gỗ là sản phẩm kết hợp hài hoà giữa ghế sofa và giường ngủ, với chất liệu được làm hoàn toàn từ gỗ tự nhiên với thiết kế lưng tựa và mê ngồi bằng thanh chắn thông thoáng, đẹp mắt, dễ dàng vệ sinh khi lau dọn. 
                Với Sofa Bed này Quý Khách có thể đặt ở phòng khách dùng để tiếp khách hay cùng đồng nghiệp, bạn bè, hàng xóm cùng ngồi xuống uống chén trà đàm đạo.... Bên cạnh đó Quý Khách có thể làm giường ngủ gỗ cho khách lưu lại qua đêm.Với thiết kế đẹp mắt gọn gàng nhằm tiết kiệm được không gian trong nhà bạn. Đặc biệt được làm từ gỗ tự nhiên bền chắc theo thời gian.',
                'size' =>'Kích thước phủ bì: 218cm (Rộng) X 83cm (Sâu) X 81cm (Cao)
                Kích thước khi kéo ra thành giường: 194cm (Rộng) X 134cm (Sâu) X 28cm (Cao)',
                'material' => 'gỗ tần bì',       
                'color' => 'màu gỗ tự nhiên',
                'tag' => 'Sofa, giường ngủ, sang trọng, hiện đại',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Sofa giường ngủ Kagu',
                'product_price' => 10000000,
                'infor' => '"Bạn đang muốn tìm kiếm món đồ nội thất để xây dựng cho mình một không gian đa năng vừa làm việc, vừa tiếp khách, rồi nghỉ ngơi trong căn phòng nhỏ của riêng mình sao cho thật tiện lợi, gọn gàng thì sofa giường gỗ chính là giải pháp hữu ích cho bạn. Nội thất Kagu xin giới thiệu cho quý khách hàng mẫu sofa giường gỗ Kagu tiện lợi và sang trọng.
                Với thiết kế hiện đại và tiện lợi chiếc ghế sofa giường gỗ không chỉ có công dụng là chỗ ngồi, chỗ ngủ mà nó còn là món đồ trang trí của căn phòng. Chiếc sofa này được thiết kế một cách rất tỉ mỉ, vì là một thiết kế đa công dụng nên không được phép có một chi tiết nào lỗi, chỉ cần một chi tiết lỗi sẽ làm hỏng cả sản phẩm. "',
                'size' =>'190 x 90 (cm)',
                'material' => 'Gỗ tự nhiên',       
                'color' => 'màu gỗ tự nhiên',
                'tag' => 'Sofa, giường ngủ, sang trọng, hiện đại',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Sofa gỗ tự nhiên',
                'product_price' => 10000000,
                'infor' => '"Mang đến căn phòng khách vẻ đẹp hiện đại, bầu không khí gia đình ấm cúng, bộ ghế sofa gỗ tự nhiên là một trong những lựa chọn hàng đầu mà khách hàng không nên bỏ qua. Bộ ghế sofa thiết kế dựa trên phong cách hiện đại tối giản, vừa đáp ứng tốt nhu cầu sử dụng của người dùng, vừa tiết kiệm diện tích. 
                Kích thước (DxRxC): Bộ sản phẩm bao gồm 1 ghế văng 3 chỗ và 1 ghế đôn.
                Ghế văng 3 chỗ có giá bán 16.000.000vnđ
                Ghế đôn có giá bán 4.800.000vnđ
                ',
                'size' =>'Ghế văng 3 chỗ: 2560 x 850 x 635mm
                Ghế đôn: 880 x 800 x 400mm',
                'material' => 'Khung gỗ tự nhiên, lò xo lưới, mút xốp K35, nỉ nhập khẩu cao cấp',       
                'color' => 'khách hàng tùy chọn trong 120 mẫu vải nỉ bọc ngoài',
                'tag' => 'sofa, gỗ, hiện đại',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Sofa gỗ đan mây',
                'product_price' => 10000000,
                'infor' => '"Đúng như tên gọi của mình, bộ sản phẩm mang đậm phong cách Indochine – gợi sự hoài niệm về những miền ký ức đáng nhớ, tạo chất riêng biệt, đáng chú ý cho không gian phòng khách gia đình bạn.
                Một chút mây đan tự nhiên tạo điểm nhấn cho sản phẩm, sự cầu kỳ trong khâu chế tác nhưng cũng chính là niềm vui của những người thợ bởi cái mà họ nhận được là sự hài lòng của khách hàng. Nội thất Kagu hướng tới sự hoàn hảo về thẩm mỹ và độ bền cao vì thế đảm bảo sản phẩm này sẽ không làm cho khách hàng phải thất vọng."',
                'size' =>'D180 x R80 x C85',
                'material' => 'Mây',       
                'color' => 'Phun sơn nâu trầm',
                'tag' => 'Sofa, gỗ, mây, hoài niệm',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Sofa gỗ sồi',
                'product_price' => 20000000,
                'infor' => '"Bạn là người yêu cái đẹp, bạn là người có gu thẩm mĩ tuyệt vời, bạn là người luôn được khen là người giỏi trong việc mua hàng và đặc biệt bạn thích cái gọi là cổ điển. Vậy thì chúng tôi chắc rằng bạn không thể bỏ qua sản phẩm sofa gỗ sồi Mỹ đẹp theo phong cách sang trọng này. Chất liệu Gỗ sồi Mỹ hay còn gọi là oak được nhập khẩu từ Mỹ, đặc tính nổi bật là độ cứng cao, rất chắc và nặng, chịu được lực nén tốt, đặc biệt tâm gỗ có khả năng kháng sâu, chống được mục nát và thối rữa chính vì thế những bộ ghế sofa gỗ sồi Mỹ thường rất bền, đường vân rõ nét và mịn màng."',
                'size' =>'270+65+45',
                'material' => 'Gỗ + nệm',       
                'color' => 'Màu gỗ nâu có sơn PU.',
                'tag' => 'sofa, gỗ, sồi',
                'cat_id' => 3,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ quần áo MFC',
                'product_price' => 5000000,
                'infor' => '"Với chất liệu gỗ công nghiệp cao cấp phủ laminate dễ dàng lau chùi làm sạch bụi bẩn, giữ được vẻ sáng bóng của sản phẩm. Sản phẩm có nhiều màu sắc và kích thước cho bạn lựa chọn phù hợp với nhu cầu và sở thích cá nhân.
                Tủ được thiết kế nhiều ngăn nhỏ tiện cho việc trang trí và phân loại đồ dùng. Kích thước khá rộng rãi để có thể đặt được nhiều đồ như áo quần, gối, chăn, ga... giúp bạn vô cùng thoải mái sử dụng.
                Màu sắc nhẹ nhàng tạo cảm giác dễ chịu và thoải mái."',
                'size' =>'Rộng 180cm – Cao 200cm – Sâu 60cm',
                'material' => 'Gỗ Công nghiệp MFC',       
                'color' => 'Sắc vàng nhẹ nhàng từ gỗ MFC',
                'tag' => 'tủ, tủ quần áo, gỗ, mfc',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ cánh lùa',
                'product_price' => 9000000,
                'infor' => '"Tủ áo cánh lùa hay còn gọi là tủ quần áo cánh trượt. Nó được thiết kế có ít nhất 2 cánh trở lên và sử dụng kéo lùa cánh sang một bên để mở một bên tủ. Hiện nay tủ quần áo cửa lùa ít phổ biến hơn tủ quần áo cửa kéo. Nhưng xét về thiết kế và sự tiện nghi thì tủ quần áo cánh trượt có những điểm ưu việt hơn, nhất là những căn phòng có diện tích khiêm tốn.
                Tủ quần áo 2 cửa trượt là mẫu tủ không kén chọn mẫu thiết kế và diện tích. Chúng được sử dụng khá phổ biến hiện nay. Đặc biệt là những căn phòng có thiết kế hiện đại hoặc có diện tích nhỏ hẹp. Đối với những căn phòng có diện tích lớn hơn thì hai ngăn buồng được thiết kế rộng hơn với sức chứa nhiều hơn. "',
                'size' =>'200x240x60 (cm)',
                'material' => 'MDF chống ẩm phủ melamine',       
                'color' => 'Sồi + trắng, Óc Chó + trắng',
                'tag' => 'Tủ, tủ áo, cánh lùa, cánh trượt, melamine, chống ẩm',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ cánh lùa gỗ sồi',
                'product_price' => 20000000,
                'infor' => '"Tủ quần áo cửa lùa hai khoang gỗ sồi có kích thước nhỏ gọn, phù hợp với không gian phòng ngủ. Nội thất tủ gồm 1 khoang treo đồ rộng rãi và 1 khoang gồm các ngăn kệ để quần áo gấp gọn. Bên dưới 2 khoang thêm 1 ngăn kệ có thể chứa thêm những đồ dùng phong ngủ khác hoặc thậm chí là giầy dép. Thiết kế cánh lùa giúp tiết kiệm không gian, phù hợp với phòng ngủ nhỏ. Tủ được làm từ gỗ sồi trắng Mỹ nhập khẩu, đã qua xử lý chống cong vênh mối mọt và chế tác hoàn toàn thủ công bởi những người thợ mộc lành nghề. Toàn bộ bề mặt được sơn PU cao cấp,  vừa giữ nguyên được vẻ đẹp của vân gỗ, vừa bảo vệ sản phẩm lâu dài trong các điều kiện khí hậu khác nhau. "',
                'size' =>'1m6',
                'material' => 'nâu tự nhiên của gỗ, sơn PU bóng',       
                'color' => 'gỗ sồi',
                'tag' => 'Tủ, tủ quần áo, cửa lùa, cửa trượt, gỗ, sồi',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ quần áo vân gỗ',
                'product_price' => 2000000,
                'infor' => '"Phong cách : Đơn giản và hiện đại.
                Thao tác lắp ráp dễ dàng, nhiều ngăn chứa rộng rãi, chất liệu an toàn, không độc hại, kiểu dáng hiện đại bắt mắt, màu sắc trang nhã hài hòa. Sản phẩm vừa là vật dụng tiết kiệm không gian và bảo quản đồ dùng hiệu quả, vừa là món nội thất mang tính thẩm mỹ cao, cho góc nhà trở nên gọn gàng, sang trọng ."',
                'size' =>'123x30x145 cm',
                'material' => ' Mây tre thủ công',       
                'color' => 'Vân gỗ',
                'tag' => 'tủ, tủ quần áo, gỗ',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ quần áo thiết kế MDF',
                'product_price' => 14000000,
                'infor' => '"Tủ MDF sở hữu thiết kế tinh tế, phù hợp với nhiều phong cách nội thất khác nhau, từ đơn giản đến sang trọng, cổ điển đến hiện đại. Tủ có màu sắc và kiểu dáng thanh lịch, không chỉ giúp bạn bảo quản quần áo tốt hơn mà còn góp phần tô điểm cho không gian sống thêm. "',
                'size' =>'200 cm x 240 cm x 60 cm',
                'material' => 'Chất liệu MDF, phủ bên trên là Melamine',       
                'color' => 'Trắng',
                'tag' => 'tủ, tủ quần áo, mdf',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ quần áo gỗ tự nhiên',
                'product_price' => 8000000,
                'infor' => '"Tủ áo đã được khách hàng tin dùng vì uy tín và chất lượng sản phẩm vượt trội. Để có bộ nội thất phòng ngủ nói chung như Giường, Tủ Áo, Bàn Trang Điểm và Tủ Đầu Giường, Mỗi gia chủ chọn sản phẩm đúng Style riêng cho từng căn phòng tạo không gian hài hòa là điều luôn quan tâm khi mua sản phẩm.
                Chất liệu ngoại nhập từ Malaysia, chất lượng vượt trội và nhiều loại vân gỗ tự nhiên giúp cho quý khách hàng yên tâm chọn lựa cho mình sản phẩm ưng ý.
                Thiết kế hiện đại, tinh xảo phù hợp phong cách người Việt. Nội thất các ngăn tủ được chia ra thông thoáng rất hợp lý. Đặc biệt có 3 hộc kéo tiện dụng chứa nước hoa, đồ trang điểm. 3 Ngăn kệ phía trên trưng bày túi xách tay và đồ trang trí khác"',
                'size' =>'180cm x 200cm  x 60cm (Ngang x Cao x Sâu',
                'material' => 'Gỗ tự nhiên',       
                'color' => 'Màu tự nhiên',
                'tag' => 'Tủ, tủ quần áo, gỗ, tự nhiên',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ quần áo hai cánh',
                'product_price' => 15000000,
                'infor' => '"Tủ Quần Áo 2 cánh Gỗ Tự Nhiên- Xanh là nơi lưu trữ tuyệt vời những đồ dùng trong phòng ngủ, với vẻ ngoài mang hai màu sắc tương phản của lớp sơn xanh navy bắt mắt trên nền gỗ tự nhiên ấm cúng.
                Tủ được chế tác từ chất liệu gỗ cao su thiên nhiên loại A, đat các tiêu chuẩn về chất lượng xuất khẩu. Loại gỗ có sẵn tại Việt nam và rất được tin dùng tại các thị trường khó tính như Nhật Bản, Hàn quốc…
                Thiết kế với hai ngăn tủ cánh có không gian treo đồ rộng lớn, ẩn bên trong là mặt kê chắc chắn, có thể được gắn linh hoạt để thay đổi chiều cao phù hợp với nhu cầu lưu trữ.
                Ngoài ra, còn có 2 ngăn kéo rộng rãi đáp ứng nhu cầu lưu trữ đồ dùng trong ngủ gọn gàng."',
                'size' =>'120cm x 210cm',
                'material' => 'Gỗ cao su loại A',       
                'color' => 'Màu tự nhiên',
                'tag' => 'tủ quần áo, tủ, hai cánh',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ quần áo 3 cánh',
                'product_price' => 13000000,
                'infor' => '"Thiết kế hiện đại, đường nét tinh xảo phù hợp phong cách người Việt.
                Nội thất các ngăn tủ bên trong được chia ra thông thoáng rất hợp lý.
                Tủ chia thành 2 ngăn đứng và 3 cách cửa giúp việc mở đóng nhẹ nhàng và tiện dụng.
                Ngăn đứng lớn treo quần áo, ngay phía dưới được trang bị thêm ngăn mở chứa các vật dụng cần thiết
                Ngăn đứng nhỏ hơn chi thành 4 ngăn tủ mở để chăn ga, gối vô cùng thoải mái
                Chất liệu: Gỗ MFC phủ Melamine vân gỗ, cánh MDF chống ẩm phủ Arilux cao cấp."',
                'size' =>' 1.8M x 0.5M x 2.2M',
                'material' => 'Gỗ tự nhiên',       
                'color' => 'Màu tự nhiên',
                'tag' => 'tủ, tủ quần áo, 3 cánh, hiện đại, gỗ, melamine',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ quần áo 4 cánh',
                'product_price' => 11000000,
                'infor' => '"Tủ quần áo thiết kế hiện đại, đường nét tinh xảo phù hợp phong cách người Việt.
                Nội thất các ngăn tủ bên trong được chia ra thông thoáng rất hợp lý.
                Tủ áo 4 cánh, làm bằng ván MFC Melamine vân gỗ. Bên trong gồm 5 ngăn và 4 ngăn kéo, trong đó có 2 lớn ngăn dùng để treo quần áo.
                Phụ kiện kèm theo: 2 thanh treo quần áo, 1 ngăn kéo kèm thanh treo quần áo nhỏ cho bé, kính ốp 1 cánh cửa."',
                'size' =>'Rộng 167cm x Cao 185cm x Sâu 48cm',
                'material' => 'Ván MFC Melamine vân gỗ',       
                'color' => 'Vân gỗ',
                'tag' => 'tủ, tủ quần áo, 4 cánh, hiện đại, gỗ, melamine',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Tủ gỗ sồi',
                'product_price' => 15000000,
                'infor' => '"Tủ quần áo cửa lùa 2 khoang được sản xuất từ gỗ sồi trắng Mỹ nhập khẩu, đã qua xử lý chống cong vênh, mối mọt và chế tác hoàn toàn thủ công bởi những người thợ mộc lành nghề. Toàn bộ bề mặt tủ được sơn PU cao cấp, vừa giữ nguyên được vẻ đẹp và màu sắc tự nhiên của vân gỗ. Bề mặt tủ trơn nhẵn, được xử lý kỹ lưỡng, không bị sót dằm gỗ, đảm bảo an toàn cho người dùng. Sản phẩm cứng chắc, chịu lực tốt, hạn chế trầy xước và dễ dàng lau chùi khi bám bẩn.
                Nội thất tủ gồm 1 khoang treo đồ rộng rãi và 1 khoang với các ngăn kệ để quần áo gấp gọn. Bên dưới khoang có thêm 1 ngăn kệ có thể dùng chứa những đồ dùng phòng ngủ hoặc giày dép. Thiết kế cửa lùa giúp tiết kiệm không gian, phù hợp với phòng ngủ nhỏ. Cánh cửa được gia công tỉ mỉ, bản lề trơn tru nên hoạt động êm ái, không gây tiếng ồn khi đóng/mở."',
                'tag' => 'tủ, tủ quần áo, gỗ, sồi, nhập khẩu, Mỹ',
                'size' =>'120cm x 55cm x 215cm (Rộng x Sâu x Cao)',
                'material' => 'Gỗ sồi',       
                'color' => 'Màu tự nhiên',
                'cat_id' => 4,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kệ Tivi hiện đại',
                'product_price' => 7000000,
                'infor' => '"Kệ tivi kết hợp giá sách là một ý tưởng kết hợp tuyệt vời giữa kệ TV và giá sách giúp đem lại một thiết kế hiện đại, tinh tế và đầy ấn tượng. Bên cạnh đó, ý tưởng kết hợp này cũng rất hiệu quả trong việc tối ưu hóa không gian sống trong nội thất phòng khách nhà bạn. Kệđược chúng tôi sử dụng loại gỗ tự nhiên mỏng (18 mm) giúp nó chiếm không quá nhiều diện tích lại luôn tạo được sự thông thoáng cần thiết cho một căn phòng khách hiện đại. Các ngăn, hộc giá kệ là những kệ ô vuông và kệ thanh ngang được chúng tôi phân bổ đều hai bên với khoảng cách hợp lý vừa giúp bạn dễ dàng để đồ vật trang trí, vừa tạo tính thẩm mỹ, tính hài hòa với phong cách nội thất của căn nhà, không hề tạo cảm giác bí bách hay rập khuôn, điều này rất có ý nghĩa cho việc lau chùi và dọn dẹp vệ sinh.Màu sắc:"',
                'size' =>' 200x40x200 (cm) - Kệ để tivi 220x40 (cm)',
                'material' => 'Gỗ cao su AA - Sắt hộp sơn tĩnh điện',       
                'color' => 'Màu gỗ tự nhiên',
                'tag' => 'kệ, kệ tivi, giá sách, gỗ',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kệ gỗ hình cây',
                'product_price' => 3000000,
                'infor' => '"Kệ gỗ trang trí được thiết kế vô cùng tinh tế, phù hợp với nhiều phong cách nội thất hiện đại, được làm bằng gỗ công nghiệp, phủ bề mặt melamine không trầy xước, cạnh dán nẹp chống thấm nước khi dùng bền bỉ vô cùng.
                Màu sắc nhã nhặn, tạo cảm giác trong lành, thoải mái cho không gian đặt kệ. Có thể đặt các vật dụng trang trí như sách, chậu cây, khung ảnh,... theo ý tưởng của người dùng muốn thiết kế. Chiếc kệ này chắc chắc sẽ làm không gian sống của bạn thêm thú vị và tràn đầy sự an nhiên. "',
                'size' =>'D42 X W22 X H110(cm)',
                'material' => 'Gỗ công nghiệp',       
                'color' => 'Màu gỗ',
                'tag' => 'kệ, gỗ',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bàn học kết hợp kệ sách',
                'product_price' => 3600000,
                'infor' => '"Kệ gỗ trang trí là xu hướng trang trí nội thất mới của thế giới. Những chiếc kệ nhỏ gọn vừa tiết kiệm diện tích lại tăng tính thẩm mỹ cho ngôi nhà của bạn. 
                Sản phẩm nội thất Kagu luôn đặt ra tiêu chí:
                TIỆN LỢI - Có thể dùng vào nhiều mục đích như: lưu trữ đồ dùng sinh hoạt, sách vở, đồ trang trí,…
                ĐẸP - Thiết kê tinh tế với nhiều hoa văn và kiểu dáng bắt mắt.
                BỀN - Khả năng kháng nước, chống ẩm mốc tuyệt đối.
                SANG TRỌNG - Với gam màu trắng hiện đại.
                HỢP LÝ - Kết hợp 2 trong 1 vừa trang trí vừa để đồ tiện lợi, giá thành phải chăng. 
                Mô hình: Tháo - Lắp Ráp "',
                'size' =>' Cao 1m85, rộng 60cm, dài 140cm',
                'material' => 'Gỗ MDF bề mặt phủ Melamine ',       
                'color' => 'Vân gỗ - Trắng - Đen',
                'tag' => 'kệ, kệ sách, bàn học, gỗ',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Bàn học gỗ tự nhiên kết hợp kệ sách',
                'product_price' => 7500000,
                'infor' => '"Bàn học gỗ tự nhiên cao cấp khiến bạn không thể làm ngơ khi đến với Nội Thất Kagu. Mẫu bàn học được làm từ chất liệu gỗ sồi tự nhiên thân thiện với người dùng, cùng với thiết kế hiện đại, tiện dụng với người dùng chắc chắn sẽ khiến người dùng cảm thấy hài lòng.
                Mẫu bàn học sinh được thiết kế nhằm mang đến người dùng sự thoải mái và tiện dụng khi sử dụng với giá sách phía trên và ngăn kéo lưu trữ đồ bên dưới. "',
                'size' =>'122 x 60x 160cm (DxRxC)',
                'material' => 'Gỗ sồi tự nhiên',       
                'color' => 'như sản phẩm mẫu hoặc khách hàng tùy ý lựa chọn màu sơn phủ bên ngoài',
                'tag' => 'bàn học, kệ sách, gỗ',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kệ sách bộ 8 kệ',
                'product_price' => 5000000,
                'infor' => '"Hãy tô điểm ngay bằng Kệ Sách Bộ 8 với thiết kế độc đáo, mới lạ, tiết kiệm diện tích giúp không gian căn nhà bạn thêm phần xinh xắn và đáng yêu.
                Sản phẩm kệ gỗ trang trí sang trọng, dễ sử dụng cho nhiều mục đích khác nhau, có thể lắp đặt ở nhiều vị trí, làm kệ sách bằng gỗ, trưng bày các đồ vật trang trí phòng khách, phòng học, phòng làm việc, phòng ngủ, phòng ăn,... làm mới không gian nhà bạn.
                Hàng sơn thẩm mỹ không phải dán cạnh, lắp nguyên khối không phải lắp ráp từng miếng nhỏ thấy ốc vít.
                Kệ cao cấp nguyên khối không lắp ráp chắc chắn hơn rất nhiều so với kệ lắp ráp."
                ',
                'size' =>'120cm x 140cm x 30 cm',
                'material' => 'Gỗ MDF hàng phun sơn, được xử lý keo, nhám, lót, sơn đúng qui trình cho ra sản phẩm đẹp, thẩm mỹ.',       
                'color' => '9 tông màu chính: Đen, đỏ, trắng, vàng, xanh lá, xanh dương, tím, hồng, cam',
                'tag' => 'Kệ, kệ sách, gỗ, bộ 8',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kệ tivi MDF',
                'product_price' => 4000000,
                'infor' => '"Nếu như không gian sống của bạn quá nhỏ hẹp không đủ cho những sản phẩm nội thất có kích thước lớn thì một sản phẩm nhỏ gọn, đa dụng như kệ tivi MDF chính là một lựa chọn tốt nhất dành cho bạn.
                Mẫu kệ tivi gỗ MDF được thiết kế theo phong cách hiện đại, đường nét tinh tế thanh lịch chắc chắn sẽ trở thành tâm điểm của căn phòng. "',
                'size' =>'Ngang 140cm x cao 60cm x sâu 40cm',
                'material' => 'Gỗ MDF có khả năng chống mối mọt, bề mặt phủ melamine chống trầy xước, va đập.',       
                'color' => 'Màu gỗ tần bì (Ash)',
                'tag' => 'kệ, kệ tivi, mdf',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kệ trang trí gõ',
                'product_price' => 10000000,
                'infor' => '"Ngày nay, kệ sách gỗ đẹp là món đồ nội thất không thể thiếu trong không gian đọc sách. Những chiếc kệ gỗ hiện đại không chỉ dùng để lưu trữ sách mà còn có thể lưu trữ những đồ vật, đồ trang trí đẹp mắt khác. Với thiết kế đơn giản của mẫu kệ, người dùng có thể sắp xếp nhiều kệ với nhau để tăng không gian lưu trữ sách. Đối với phòng có diện tích hạn chế bạn nên lựa chọn những góc tường để xóa bỏ góc chết của tường nhà. Sản phẩm có nhiều màu sắc đẹp mắt sẽ là ý tưởng sang tạo mới cho không gian gia đình.',
                'size' =>'D 2400 x S 240 x C 1700(mm)',
                'material' => 'Gỗ công nghiệp MDF phủ melamine đẹp',       
                'color' => 'Đen, trắng, vàng gỗ, đỏ.',
                'tag' => 'kệ, gỗ, thông, kệ sách, kệ rượu, kệ trưng bày',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kệ gỗ thông',
                'product_price' => 1500000,
                'infor' => '"Sở hữu những chiếc kệ trang trí bằng gỗ thông như: kệ rượu, kệ sách, kệ trưng bày quà lưu niệm, kệ shop thời trang hay đơn giản là những khung kệ treo tạo điểm nhấn trên tường…Với thiết kế sáng tạo, tinh tế sang trọng và rất chắc chắn, tất cả sẽ tạo nên một phần không gian tuyệt vời cho căn phòng, cho quán cà phê, quán ăn của bạn một phong cách mới lạ và trẻ trung. Những kiểu trang trí lạ mắt từ những thùng gỗ pallet có kích thước khác nhau.
                Được đóng rất chắn chắn, mài nhẵn bên trong và bên ngoài"',
                'size' =>'2 cái D50 x R30 x C20
                1 cái D40 x R30 x C20
                2 cái D30 x R20 x C20',
                'material' => 'Gỗ thông Chille nhập khẩu',       
                'color' => 'Màu gỗ tự nhiên',
                'tag' => 'kệ, gỗ, thông, kệ sách, kệ rượu, kệ trưng bày',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kệ rượu gỗ',
                'product_price' => 5000000,
                'infor' => '"Kệ rượu có thiết kế đa dạng, đơn giản, hiện đại và tinh tế.
                Được làm từ MDF lõi xanh chống ẩm phủ melamine.
                Kệ được treo lên tường với kết cấu hoàn toàn âm bên trong thân kệ, không để lộ bất kỳ chi tiết nào, giúp tăng tính thẩm mỹ nhưng cực kỳ chắc chắn. "',
                'size' =>'140cm x 120cm x 23cm (dài x cao x sâu)',
                'material' => 'Gỗ MDF lõi xanh chống ẩm phủ melamine',       
                'color' => 'vân gỗ sồi',
                'tag' => 'Kệ rượu, gỗ, sồi',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_name' => 'Kệ trang trí',
                'product_price' => 1300000,
                'infor' => '"Sản phẩm sản xuât từ gỗ MDF phủ melamin cao cấp chống xước chống nước bề mặt sáng bóng. với thiết kế độc đáo từ các ô vuông lồng vào nhau màu trắng và đen, rất hài hòa và có sự phá cách.
                Có thể làm giá sách tại phòng đọc, phòng học, phòng làm việc, văn phòng làm việc. Làm kệ để đồ, kệ trưng sản phẩm, kệ trang trí tại cửa hàng... giúp không gian sống trở nên thải mái, thư giãn và thú vị hơn, tạo cảm giác thứ giãn khi nghỉ ngơi ở phòng khách, hay thích thú mỗi khi học tập và làm việc. "',
                'size' =>'2 ô hình chữ nhật lớn(DxRxC):44x32x13cm
                4 ô hình chữ nhật nhỏ(DxRxC):27x16x13cm
                3 thanh ngang màu đen trắng: rộng 50cm x sâu 13cm',
                'material' => 'gỗ MDF nhập khẩu , phủ Melamin bong mịn trước khi sơn 2k 3 lớp bong bền màu',       
                'color' => 'Đen – Trắng',
                'tag' => 'Kệ, kệ trang trí, gỗ, giá sách',
                'cat_id' => 5,
                'rating' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        
        foreach ($products as $key => $product) {
            Product::create($product);
        }
    }
}
