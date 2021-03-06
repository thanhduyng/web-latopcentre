<?php

use Illuminate\Database\Seeder;
use App\Product;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TypeProductTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ReviewProductTableSeeder::class);
        $this->call(ImageProductTableSeeder::class);
        $this->call(CategoryNewsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(BillTableSeeder::class);
        $this->call(BillDetailTableSeeder::class);
    }
}

class BillDetailTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bill_detail')->insert([
            'id_bill' => 2,
            'id_product' => 2,
            'quantity' => 1,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 2,
            'id_product' => 6,
            'quantity' => 2,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 2,
            'id_product' => 3,
            'quantity' => 3,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 3,
            'id_product' => 3,
            'quantity' => 3,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 3,
            'id_product' => 5,
            'quantity' => 4,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 4,
            'id_product' => 3,
            'quantity' => 6,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 5,
            'id_product' => 1,
            'quantity' => 7,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 6,
            'id_product' => 1,
            'quantity' => 11,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
        DB::table('bill_detail')->insert([
            'id_bill' => 7,
            'id_product' => 3,
            'quantity' => 1,
            'unit_price' => 19190000,
            'promotion_price' => 19190000
        ]);
    }
}

class BillTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bill')->insert([
            'id_users' => 1,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 1,
        ]);
        DB::table('bill')->insert([
            'id_users' => 2,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 1,
        ]);
        DB::table('bill')->insert([
            'id_users' => 3,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 0,
        ]);
        DB::table('bill')->insert([
            'id_users' => 4,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 0,
        ]);
        DB::table('bill')->insert([
            'id_users' => 7,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 1,
        ]);
        DB::table('bill')->insert([
            'id_users' => 8,
            'date_order' => '2021-08-15',
            'total' => 233000000,
            'shipping' => 'Free',
            'payment' => 'COD',
            'status' => 0,
        ]);
    }
}

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->insert([
            'id_category_new' => 1,
            'title' => 'Tr???i nghi???m ASUS ZenBook UX325: N??ng c???p l??n m??n h??nh OLED khi???n chi???c m??y ????ng t???ng xu',
            'info' => 'D?? kh??ng c?? s??? thay ?????i v??? ngo???i h??nh nh??ng vi???c ??em m??n h??nh OLED ?????n s???n ph???m n??y gi??p cho ng?????i d??ng c?? m???t tr???i nghi???m ho??n to??n m???i m???.',
            'content' => '<p>ZenBook l&agrave; d&ograve;ng laptop h?????ng ?????n ng?????i d&ugrave;ng tr??? ????? cao t&iacute;nh th???m m??? v&agrave; nh&acirc;n vi&ecirc;n v??n ph&ograve;ng kh&aacute; quen thu???c c???a nh&agrave; s???n xu???t ASUS. Tr???i qua nhi???u n??m c???i ti???n, gi??? ??&acirc;y d&ograve;ng ZenBook Series n&agrave;y ??&atilde; c&oacute; ???????c m???t l?????ng l???n ng?????i d&ugrave;ng tr&ecirc;n to&agrave;n th??? gi???i n&oacute;i chung l???n Vi???t Nam n&oacute;i ri&ecirc;ng. V???y phi&ecirc;n b???n 2021 n&agrave;y c&oacute; g&igrave; ?????c bi???t? H&atilde;y c&ugrave;ng ch&uacute;ng t&ocirc;i t&igrave;m hi???u.</p>
 
            <p><strong>Thi???t k??? thanh l???ch, ph??? ki???n k&egrave;m theo c&oacute; c??? t&uacute;i ?????ng</strong></p>
            
            <p>ZenBook UX325 ???????c nh&agrave; s???n xu???t kho&aacute;c l&ecirc;n cho l???p &aacute;o thanh l???ch v&agrave; cao c???p. Ngay t??? c&aacute;i nh&igrave;n ?????u ti&ecirc;n, ch&uacute;ng ta c&oacute; th??? th???y m&aacute;y to&aacute;t l&ecirc;n v??? c???ng c&aacute;p v&agrave; pha ch&uacute;t l???nh l&ugrave;ng nh??? s??? d???ng v???t li???u kim lo???i cho v??? ngo&agrave;i. Ki???u d&aacute;ng g???n nh???, ch??? v???i 1,14kg c&ugrave;ng ????? m???ng ???n t?????ng 13,9mm, c??ng l&agrave; ??u ??i???m c???a d&ograve;ng s???n ph???m n&agrave;y. Hay n&oacute;i c&aacute;ch kh&aacute;c, n&oacute; r???t c?? ?????ng ????? c&oacute; th??? mang l???i kh???p n??i m???t c&aacute;ch tho???i m&aacute;i v&agrave; ?????c bi???t v???n cung c???p ?????y ????? c&aacute;c c???ng k???t n???i n&ecirc;n ng?????i d&ugrave;ng c??ng kh&ocirc;ng c???n v?????ng b???n ?????n vi???c mang theo c&aacute;c b??? chuy???n ?????i.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-1-1630292504889457794582.jpg" target="_blank"><img alt="Tr???i nghi???m ASUS ZenBook UX325: N??ng c???p l??n m??n h??nh OLED khi???n chi???c m??y ????ng t???ng xu - ???nh 1." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-1-1630292504889457794582.jpg" /></a></p>
            
            <p>N???u lo ng???i vi???c m???nh mai c???a chi???c m&aacute;y n&agrave;y s??? ???nh h?????ng ?????n ????? b???n th&igrave; ng?????i d&ugrave;ng c&oacute; th??? an t&acirc;m v&igrave; m&aacute;y UX325 n&agrave;y c??ng ??&atilde; tr???i qua nhi???u b&agrave;i ki???m tra ????? b???n ti&ecirc;u chu???n qu&acirc;n ?????i MIL-STD-810G. Chu???n n&agrave;y c??ng ???????c &aacute;p d???ng cho phi&ecirc;n b???n tr?????c v&agrave; c??ng ??&atilde; ???????c ch???ng th???c v???i ng?????i d&ugrave;ng trong th???i gian d&agrave;i. Kh&ocirc;ng ch??? ch???ng ch???u va ?????p, m&aacute;y c&ograve;n c&oacute; kh??? n??ng t???n t???i trong nhi???t ????? m&ocirc;i tr?????ng kh???c nghi???t v&agrave; ????? ???m cao.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-1-1630292508418144812219.jpg" target="_blank"><img alt="Tr???i nghi???m ASUS ZenBook UX325: N??ng c???p l??n m??n h??nh OLED khi???n chi???c m??y ????ng t???ng xu - ???nh 2." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-1-1630292508418144812219.jpg" /></a></p>
            
            <p><strong>C???i ti???n l???n n???m ??? m&agrave;n h&igrave;nh OLED - ??i???m ??&aacute;ng ti???n c???a d&ograve;ng s???n ph???m n??m nay</strong></p>
            
            <p>V&agrave;o ?????u n??m nay, ASUS ra m???t chi???c ZenBook Flip 13 UX363 v???i m&agrave;n h&igrave;nh OLED v&agrave; cho bi???t s??? c??? g???ng ph??? c???p c&ocirc;ng ngh??? m&agrave;n h&igrave;nh t&acirc;n ti???n n&agrave;y ?????n v???i ng?????i d&ugrave;ng nhi???u h??n th&ocirc;ng qua c&aacute;c d&ograve;ng s???n ph???m laptop s???p t???i.</p>
            
            <p>Gi??? ??&uacute;ng l???i h???a, phi&ecirc;n b???n ZenBook UX325 l???n n&agrave;y l&agrave; m???t trong s??? nh???ng chi???c laptop ???????c n&acirc;ng c???p c&ocirc;ng ngh??? m&agrave;n h&igrave;nh OLED v???i k&iacute;ch th?????c 13 inch v&agrave; ????? ph&acirc;n gi???i Full HD. V???y v&igrave; sao ASUS l???i quy???t t&acirc;m ????a OLED l&ecirc;n c&aacute;c s???n ph???m laptop c???a h??? trong n??m nay?</p>
            
            <p>1. ??i???u ?????u ti&ecirc;n c???n ph???i gi???i thi???u r???ng OLED l&agrave; c&ocirc;ng ngh??? m&agrave;n h&igrave;nh ???????c xem l&agrave; &quot;hot&quot; hi???n nay d&agrave;nh cho ng?????i d&ugrave;ng cu???i. M&agrave;u s???c lu&ocirc;n l&agrave; v???n ????? ???????c ng?????i d&ugrave;ng quan t&acirc;m h&agrave;ng ?????u m???i khi l???a ch???n m???t chi???c laptop v&agrave; OLED ???????c cam k???t mang ?????n ????? chu???n x&aacute;c m&agrave;u kh&aacute; cao. C??ng theo ASUS, chi???c laptop n&agrave;y ??&aacute;p ???ng ???????c 100% d???i m&agrave;u DCI-P3, gi&uacute;p ch&uacute;ng ta c&oacute; th??? xem ???????c nh???ng th?????c phim ??i???n ???nh ch&acirc;n th???t v&agrave; ??&uacute;ng v???i &yacute; ????? c???a ?????o di???n h??n.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-2-16302925084191738286845.jpg" target="_blank"><img alt="Tr???i nghi???m ASUS ZenBook UX325: N??ng c???p l??n m??n h??nh OLED khi???n chi???c m??y ????ng t???ng xu - ???nh 3." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-2-16302925084191738286845.jpg" /></a></p>
            
            <p>2. OLED c??ng gi???m t???i 70% l?????ng &aacute;nh s&aacute;ng xanh g&acirc;y h???i cho m???t ??????c ch???ng nh???n b???i hi???p h???i TUV Rheinland. Th???i ??i???m hi???n t???i ch&uacute;ng ta l&agrave;m vi???c Work From Home v&agrave; ch???c ch???n m???t ch&uacute;ng ta s??? &quot;d&iacute;nh&quot; r???t nhi???u th???i gian v???i chi???c m&aacute;y t&iacute;nh h??n l&agrave; l&uacute;c tr?????c ??? c&ocirc;ng ty. V???y n&ecirc;n vi???c b???o v??? m???t r???t quan tr???ng trong th???i gian n&agrave;y, l&agrave;m vi???c ???????c tho???i m&aacute;i h??n v&agrave; h??n n???a, &aacute;nh s&aacute;ng xanh c??ng khi???n bu???i ??&ecirc;m ch&uacute;ng ta kh&oacute; ng??? h??n, v&igrave; v???y vi???c gi???m b???t l?????ng n&agrave;y s??? gi&uacute;p cho gi???c ng??? c???a b???n th&acirc;n c??ng ???????c ch???t l?????ng h??n. Ngo&agrave;i ra, v???i ?????i t?????ng ng?????i d&ugrave;ng tr??? nh?? h???c sinh, sinh vi&ecirc;n, th???i gian n&agrave;y c??ng l&agrave; l&uacute;c h???c online r???t nhi???u th&ocirc;ng qua m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh, v&igrave; v???y l???a ch???n m???t chi???c m&aacute;y c&oacute; m&agrave;n h&igrave;nh OLED c??ng l&agrave; ??i???u c???n thi???t ????? b???o v??? m???t.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-3-16302925084201209730949.jpg" target="_blank"><img alt="Tr???i nghi???m ASUS ZenBook UX325: N??ng c???p l??n m??n h??nh OLED khi???n chi???c m??y ????ng t???ng xu - ???nh 4." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-3-16302925084201209730949.jpg" /></a></p>
            
            <p>3. M&agrave;n h&igrave;nh OLED cho h&igrave;nh ???nh r&otilde; r&agrave;ng v&agrave; s???c n&eacute;t ??? m???i ????? s&aacute;ng, hay n&oacute;i c&aacute;ch kh&aacute;c, d&ugrave; ??? ????? s&aacute;ng th???p nh???t th&igrave; h&igrave;nh ???nh v???n ???????c th??? hi???n r&otilde; r&agrave;ng v&agrave; chi ti???t. V???i LCD truy???n th???ng, ch???t l?????ng chi ti???t v&agrave; m&agrave;u s???c s??? b??? gi???m ??&aacute;ng k??? khi ch&uacute;ng ta h??? ????? s&aacute;ng, tuy nhi&ecirc;n v???i OLED trang b??? tr&ecirc;n d&ograve;ng laptop ASUS s??? v???n ?????m b???o ch???t l?????ng cho h&igrave;nh ???nh ?????u ra. C??ng nh??? v???y, ng?????i d&ugrave;ng khi l&agrave;m vi???c trong bu???i ??&ecirc;m c??ng tho???i m&aacute;i h??n, kh&ocirc;ng c???n t??ng ????? s&aacute;ng qu&aacute; nhi???u ????? th???y c&aacute;c chi ti???t trong v&ugrave;ng t???i v&agrave; c??ng nh??? ??&oacute; ????? ch&oacute;i m???t, h???i m???t h??n.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-4-1630292508422453799656.jpg" target="_blank"><img alt="Tr???i nghi???m ASUS ZenBook UX325: N??ng c???p l??n m??n h??nh OLED khi???n chi???c m??y ????ng t???ng xu - ???nh 5." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-4-1630292508422453799656.jpg" /></a></p>
            
            <p>C&aacute;ch th??? hi???n m&agrave;u ??en c???a m&agrave;n h&igrave;nh OLED tr&ecirc;n ZenBook UX325 r???t s&acirc;u, kh&ocirc;ng c&ograve;n c???m gi&aacute;c nh??? nh??? x&aacute;m nh?? c&aacute;c d&ograve;ng m&agrave;n h&igrave;nh kh&aacute;c tr&ecirc;n th??? tr?????ng.</p>
            
            <p>4. B&ecirc;n c???nh ??&oacute;, OLED tr&ecirc;n ZenBook UX325 c??ng cho ????? t????ng ph???n r???t cao, ?????t chu???n HDR 500 True Black mang ?????n tr???i nghi???m ??i???n ???nh ho&agrave;n to&agrave;n kh&aacute;c bi???t v&agrave; c&oacute; th??? th???y ???????c nhi???u chi ti???t t???i nh???t c???a m???t b??? phim.</p>
            
            <p>5. Cu???i c&ugrave;ng, UX325 c&oacute; th???i gian ph???n h???i 0,2ms nh??? c&ocirc;ng ngh??? m&agrave;n h&igrave;nh OLED. Nh??? th???i gian ph???n h???i c???c th???p n&ecirc;n nh???ng pha h&agrave;nh ?????ng nh???p ????? nhanh trong phim s??? m?????t m&agrave; h??n, th???m ch&iacute; khi cu???n v??n b???n c??ng kh&ocirc;ng g&acirc;y hi???n t?????ng m??? ch??? kh&oacute; ch???u cho m???t, ph&ugrave; h???p v???i ng?????i d&ugrave;ng v??n ph&ograve;ng.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-5-16302925084231152783012.jpg" target="_blank"><img alt="Tr???i nghi???m ASUS ZenBook UX325: N??ng c???p l??n m??n h??nh OLED khi???n chi???c m??y ????ng t???ng xu - ???nh 6." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-5-16302925084231152783012.jpg" /></a></p>
            
            <p>????? ph???n h???i nhanh s??? gi&uacute;p vi???c l?????t v??n b???n hay xem phim ???????c m?????t m&agrave; h??n, gi???m thi???u t&igrave;nh tr???ng b&oacute;ng m???.</p>
            
            <p><strong>Nh???ng ??i???m n???i b???t kh&aacute;c b???n c???n bi???t</strong></p>
            
            <p>Ngo&agrave;i m&agrave;n h&igrave;nh OLED s&aacute;ng gi&aacute;, nh???ng ??i???m kh&aacute;c c???a chi???c laptop n&agrave;y c??ng ??&aacute;ng ???????c quan t&acirc;m. Tr?????c h???t l&agrave; b???n l??? ErgoLift ?????c s???n c???a nh&agrave; ASUS gi&uacute;p n&acirc;ng b&agrave;n ph&iacute;m l&ecirc;n m???t g&oacute;c nghi&ecirc;ng, t???o c???m gi&aacute;c g&otilde; tho???i m&aacute;i h??n c??ng nh?? t???n nhi???t t???t h??n ??? khu v???c ??&aacute;y m&aacute;y.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-6-1630292508425252778343.jpg" target="_blank"><img alt="Tr???i nghi???m ASUS ZenBook UX325: N??ng c???p l??n m??n h??nh OLED khi???n chi???c m??y ????ng t???ng xu - ???nh 7." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-6-1630292508425252778343.jpg" /></a></p>
            
            <p>B&ecirc;n c???nh ??&oacute;, tuy m&aacute;y kh&aacute; m???ng nh??ng b&agrave;n ph&iacute;m v???n t???o c???m gi&aacute;c g&otilde; r???t t???t, h&agrave;nh tr&igrave;nh ph&iacute;m v???a ????? v&agrave; k&iacute;ch th?????c ph&iacute;m c&ugrave;ng k&yacute; t??? in to r&otilde; gi&uacute;p vi???c g&otilde; c??ng d??? d&agrave;ng h??n, kh&ocirc;ng b??? nh???m trong qu&aacute; tr&igrave;nh thao t&aacute;c. ?????c bi???t, ph???n TouchPad c&oacute; th&ecirc;m kh??? n??ng hi???n th??? b&agrave;n ph&iacute;m s??? ???o th&ocirc;ng qua ??&egrave;n LED v???i t&ecirc;n g???i NumberPad 2.0.</p>
            
            <p>V??? c???u h&igrave;nh, m&aacute;y ???????c trang b??? vi x??? l&yacute; Intel Core i7 th??? h??? 11 m???i nh???t, k&egrave;m theo ??&oacute; l&agrave; 16GB RAM c&ugrave;ng SSD 512GB v&agrave; GPU Intel Iris Xe gi&uacute;p x??? l&yacute; ??a t&aacute;c v??? ho???c ch??i game nh??? nh&agrave;ng v???n ?????m b???o ???????c ????? m?????t m&agrave; nh???t.</p>
            
            <p>Cu???i c&ugrave;ng, nh??? ???ng d???ng m&agrave;n h&igrave;nh OLED n&ecirc;n m&aacute;y ??&atilde; gi???m b???t g&aacute;nh n???ng v??? ??i???n n??ng ti&ecirc;u th???, c??ng v&igrave; th??? laptop c&oacute; th??? ??&aacute;p ???ng ???????c th???i l?????ng s??? d???ng l&ecirc;n ?????n 13 ti???ng, t???c gi&uacute;p cho ng?????i d&ugrave;ng c&oacute; th??? s??? d???ng c??? ng&agrave;y m&agrave; kh&ocirc;ng qu&aacute; b???n t&acirc;m ?????n chuy???n s???c pin. B&ecirc;n c???nh ??&oacute;, ASUS ZenBook UX325 c??ng trang b??? c&ocirc;ng ngh??? s???c nhanh, cho ph&eacute;p n???p pin l&ecirc;n ?????n 60% ch??? trong v&ograve;ng 49 ph&uacute;t.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/30/photo-7-16302925084261584047174.jpg" target="_blank"><img alt="Tr???i nghi???m ASUS ZenBook UX325: N??ng c???p l??n m??n h??nh OLED khi???n chi???c m??y ????ng t???ng xu - ???nh 8." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/30/photo-7-16302925084261584047174.jpg" /></a></p>
            
            <p>T???ng k???t l???i, ASUS ZenBook UX325 x???ng ??&aacute;ng l&agrave; m???t chi???c laptop ti&ecirc;n phong trong ph&acirc;n kh&uacute;c ng?????i d&ugrave;ng v??n ph&ograve;ng, t???o m???t tr&agrave;o l??u m???i cho vi???c &aacute;p d???ng m&agrave;n h&igrave;nh OLED ?????n g???n m???i ng?????i h??n. D&ugrave; kh&ocirc;ng thay ?????i v??? m???t thi???t k??? nh??ng vi???c n&acirc;ng c???p m&agrave;n h&igrave;nh ch???t l?????ng cao c&ugrave;ng c???u h&igrave;nh t???t ??&atilde; khi???n chi???c m&aacute;y n&agrave;y tr??? n&ecirc;n ??&aacute;ng t???ng ?????ng xu h??n bao gi??? h???t.</p>',
            'image' => '6nKi_banner17.jpg',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 1,
            'title' => 'Lo???t laptop ??ang sale trong t???m gi?? 15 tri???u: Qu?? nhi???u l???a ch???n, ???? r??? nay c??n r??? h??n',
            'info' => '????y l?? m???t t???m gi?? "v???a ph???i", kh??ng qu?? th???p ????? ph???i mua nh???ng laptop ch???t l?????ng th???p nh??ng c??ng kh??ng v?????t qu?? budget c???a ??a s??? ng?????i d??ng!',
            'content' => '<p>Trong t&igrave;nh h&igrave;nh gi&atilde;n c&aacute;ch x&atilde; h???i, nhu c???u h???c t???p v&agrave; l&agrave;m vi???c t???i nh&agrave; ng&agrave;y c&agrave;ng t??ng cao v&agrave; k&eacute;o theo l&agrave; vi???c nhi???u b???n mu???n n&acirc;ng c???p ho???c mua m???i laptop. N???u b???n ??ang trong qu&aacute; tr&igrave;nh &quot;??i s??n&quot; m???t chi???c laptop d&agrave;nh cho m&igrave;nh trong t???m gi&aacute; 15 tri???u ?????ng, h&atilde;y ????? WeBuy ????a ra m???t v&agrave;i l???a ch???n ch???t l?????ng cao v&agrave; ??ang ???????c gi???m gi&aacute;.</p>
 
            <p>Mua laptop trong m???c gi&aacute; 15 tri???u ?????ng, ta kh&oacute; c&oacute; th??? ??&ograve;i h???i ???????c m&aacute;y v???i c???u h&igrave;nh cao c???p nh???t hay c&oacute; thi???t k???&nbsp;<em>&quot;si&ecirc;u sang x???n m???n&quot;</em>, nh??ng v???n ????? ????? t&igrave;m ???????c nh???ng d&ograve;ng m&aacute;y c&oacute; c???u h&igrave;nh ????? d&ugrave;ng v???i Intel Core i3 - i5, m&agrave;n h&igrave;nh 14 - 15.6 inch FullHD v&agrave; m???t thi???t k??? c???ng c&aacute;p k???t h???p gi???a nh???a v&agrave; nh&ocirc;m.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://shopee.vn/Laptop-Acer-Aspire-5-A514-54-38TM-14FHDIPS-i3-1115G4-4OB-256-PCIe-AX-Backlit-KB-Win-M%C3%A0u-Sliver-i.270156897.3053594313?position=63" target="_blank"><img alt="Lo???t laptop ??ang sale trong t???m gi?? 15 tri???u: Qu?? nhi???u l???a ch???n, ???? r??? nay c??n r??? h??n - ???nh 1." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-7-16301218243991340397633.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://tiki.vn/may-tinh-xach-tay-laptop-huawei-matebook-d15-8gb-256gb-share-man-hinh-huawei-fullview-huawei-phim-nguon-ket-hop-bao-mat-van-tay-hang-chinh-hang-p74556865.html" target="_blank"><img alt="Lo???t laptop ??ang sale trong t???m gi?? 15 tri???u: Qu?? nhi???u l???a ch???n, ???? r??? nay c??n r??? h??n - ???nh 2." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-1630121824414861559481.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.hanoicomputer.vn/laptop-hp-probook-445-g6-6xp98pa-ryzen-5-2500u-4gb-ram-1tb-hdd-radeon-rx-vega-14-inch-fhd-dos" target="_blank"><img alt="Lo???t laptop ??ang sale trong t???m gi?? 15 tri???u: Qu?? nhi???u l???a ch???n, ???? r??? nay c??n r??? h??n - ???nh 3." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-2-1630121824349313142917.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.hanoicomputer.vn/laptop-lenovo-ideapad-3-14itl6-82h700d6vn-xanh" target="_blank"><img alt="Lo???t laptop ??ang sale trong t???m gi?? 15 tri???u: Qu?? nhi???u l???a ch???n, ???? r??? nay c??n r??? h??n - ???nh 4." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-4-16301218243662115579326.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.phucanh.vn/laptop-dell-inspiron-3501-nk5ck-laptop-van-phong-gia-canh-tranh.html" target="_blank"><img alt="Lo???t laptop ??ang sale trong t???m gi?? 15 tri???u: Qu?? nhi???u l???a ch???n, ???? r??? nay c??n r??? h??n - ???nh 5." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-3-1630121824363627184244.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.anphatpc.com.vn/laptop-asus-x415ja-ek259t-core-i5-1035g1-4gb-512gb-intel-uhd-14.0-inch-fhd-win-10-bac_id37560.html" target="_blank"><img alt="Lo???t laptop ??ang sale trong t???m gi?? 15 tri???u: Qu?? nhi???u l???a ch???n, ???? r??? nay c??n r??? h??n - ???nh 6." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-5-16301218243761993265293.jpg" /></a></p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://www.anphatpc.com.vn/laptop-msi-modern-14-b11mo-682vn-core-i3-1115g4-8gb-256gb-intel-uhd-14-inch-fhd-win-10-blue-stone_id38901.html" target="_blank"><img alt="Lo???t laptop ??ang sale trong t???m gi?? 15 tri???u: Qu?? nhi???u l???a ch???n, ???? r??? nay c??n r??? h??n - ???nh 7." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/28/xml-loist-6-163012182438021924247.jpg" /></a></p>',
            'image' => 'vl5z_1.png',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 2,
            'title' => 'M??a Back to School l???i t???i, ????y l?? 8 m??n ????? h???c sinh, sinh vi??n n??n s???m ????? h???c h??nh, gi???i tr?? ?????u vui',
            'info' => 'Tr??? l???i tr?????ng h???c v???i tinh th???n ph???n kh???i c??ng lo???i ph??? ki???n, ????? ch??i c??ng ngh??? gi?? b??o must have cho h???c sinh, sinh vi??n.',
            'content' => '<p><strong>M&oacute;n ?????u ti&ecirc;n n&ecirc;n l&ecirc;n ?????i cho d???p Back to School ch&iacute;nh l&agrave; chi???c laptop c?? k??. Hi???n t???i gi&aacute; laptop ??ang r??? ch??a t???ng th???y c&ugrave;ng s??? xu???t hi???n c???a d&ograve;ng chip Ryzen m???i hi???u n??ng m???nh m???, c&aacute;c b???n tr??? s??? ???????c d&ugrave;ng m&aacute;y x???n h??n, nhanh h??n m&agrave; ti???t ki???m kha kh&aacute; so v???i laptop chip Intel.</strong></p>
 
            <p>&nbsp;</p>
            
            <p><em><a href="https://gearvn.com/products/laptop-asus-d515da-ej711t" target="_blank"><img alt="M??a Back to School l???i t???i, ????y l?? 8 m??n ????? h???c sinh, sinh vi??n n??n s???m ????? h???c h??nh, gi???i tr?? ?????u vui - ???nh 2." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist14-1629226369411575133612.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://gearvn.com/products/laptop-ideapad-5-14alc05-82lm00d5vn" target="_blank"><img alt="M??a Back to School l???i t???i, ????y l?? 8 m??n ????? h???c sinh, sinh vi??n n??n s???m ????? h???c h??nh, gi???i tr?? ?????u vui - ???nh 3." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist17-16292266179111232863193.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p><strong>Chi???c ??i???n tho???i ?????i c??? ch???m ch???p c??ng n&ecirc;n ???????c thay th???, v&agrave; hai option &quot;ngon&quot; nh???t hi???n t???i c&oacute; POCO X3 Pro gi&aacute; ch??? d?????i 6 tri???u m&agrave; c???u h&igrave;nh si&ecirc;u m???nh, ho???c n???u mu???n tr???i nghi???m nh???ng t&iacute;nh n??ng cao c???p th&igrave; kho???ng 12 tri???u ??&atilde; mua ???????c Galaxy Note 10 sang ch???nh r???i.</strong></p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://clickbuy.com.vn/xiaomi-poco-x3-pro-chinh-hang/" target="_blank"><img alt="M??a Back to School l???i t???i, ????y l?? 8 m??n ????? h???c sinh, sinh vi??n n??n s???m ????? h???c h??nh, gi???i tr?? ?????u vui - ???nh 4." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist10-16292263693782122926496.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://tiki.vn/dien-thoai-samsung-galaxy-note-10-256gb-8gb-hang-chinh-hang-p22356225.html?spid=22356228" target="_blank"><img alt="M??a Back to School l???i t???i, ????y l?? 8 m??n ????? h???c sinh, sinh vi??n n??n s???m ????? h???c h??nh, gi???i tr?? ?????u vui - ???nh 5." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist11-16292263693441687910346.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p><strong>Tai nghe kh&ocirc;ng d&acirc;y gi??? c??ng r???t r??? r???i, ch??? v&agrave;i tr??m ngh&igrave;n l&agrave; mua ???????c h&agrave;ng ch???t l?????ng. B???n n&agrave;o th&iacute;ch ch???ng ???n th???t ngon c&oacute; th??? th??? ?????u t?? h???n m???u tai m???i t??? JBL ?????m b???o kh&ocirc;ng th???t v???ng.</strong></p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://cellphones.com.vn/tai-nghe-bluetooth-oppo-enco-buds-w12.html" target="_blank"><img alt="M??a Back to School l???i t???i, ????y l?? 8 m??n ????? h???c sinh, sinh vi??n n??n s???m ????? h???c h??nh, gi???i tr?? ?????u vui - ???nh 6." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist15-16292263694431929713455.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><em><a href="https://cellphones.com.vn/tai-nghe-khong-day-jbl-live-pro-plus.html" target="_blank"><img alt="M??a Back to School l???i t???i, ????y l?? 8 m??n ????? h???c sinh, sinh vi??n n??n s???m ????? h???c h??nh, gi???i tr?? ?????u vui - ???nh 7." src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2021/8/18/xml-loist16-1629226369363427778238.jpg" style="margin:0px; width:625px" /></a></em></p>
            
            <p>&nbsp;</p>',
            'image' => 'HkYX_2.png',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 4,
            'title' => 'M??a t???u tr?????ng ???? r???t g???n, c??c b???n sinh vi??n h??y ch???n 1 trong 5 laptop n??y ????? ph???c v??? h???c t???p v?? gi???i tr??',
            'info' => 'D?? c?? h???c t???p t???i tr?????ng hay ??? nh??, laptop v???n l?? "v???t b???t ly th??n" v???i b???t c??? b???n h???c sinh, sinh vi??n n??o!',
            'content' => '<h3>N???m b???t nhu c???u ??&oacute;, Asus ??&atilde; ra m???t hai m???u laptop m???i ASUS ExpertBook B1 v???i hai phi&ecirc;n b???n B1400 (m&agrave;n h&igrave;nh 14 inch) v&agrave; B1500 (m&agrave;n h&igrave;nh 15.6 inch), thu???c ph&acirc;n kh&uacute;c Thi???t Y???u d&agrave;nh cho c&aacute;c doanh nghi???p v???a &amp; nh??? t???i Vi???t Nam. ??&acirc;y l&agrave; phi&ecirc;n b???n h???u du???, v???i m???c gi&aacute; d??? ti???p c???n h??n nh??ng th???a h?????ng nhi???u ??u ??i???m c???a chi???c ExpertBook B9 ??ang l&agrave;m m??a l&agrave;m gi&oacute; ??? ph&acirc;n kh&uacute;c Laptop d&agrave;nh cho Doanh nh&acirc;n, Nh&agrave; qu???n l&yacute;.</h3>
 
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 1." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/14/ava-1628914655060846405650.png" /></p>
            
            <p><strong>M???nh m???, d??? d&agrave;ng n&acirc;ng c???p gi&uacute;p t???i ??u chi ph&iacute; ?????u t?? ban ?????u</strong></p>
            
            <p>Ng&ocirc;n ng??? thi???t k??? c???a ExpertBook B1 gi??? b???n s???c chuy&ecirc;n nghi???p, thanh l???ch, sang tr???ng c???a d&ograve;ng ExpertBook. ?????c bi???t, ph???n n???p m&aacute;y ???????c ho&agrave;n thi???n b???ng h???p kim nh&ocirc;m ??i c&ugrave;ng ch???t l?????ng gia c&ocirc;ng ch???c ch???n mang l???i x&uacute;c gi&aacute;c, ????? b???n c??ng nh?? ngo???i h&igrave;nh r???t cao c???p. Ch&uacute;ng ta s??? c&oacute; nh???ng chi???c Laptop n???ng h??n m???t ch&uacute;t so v???i ExpertBook B9 nh??ng v???n ?????m b???o t&iacute;nh di ?????ng (ch??? 1,45kg), ?????i l???i l&agrave; card ????? ho??? r???i v&agrave; kh??? n??ng n&acirc;ng c???p RAM, ??? c???ng.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 2." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-1-162884676854078379359.jpg" /></p>
            
            <p>ExpertBook B1 b???n 15 inch v???i b&agrave;n ph&iacute;m s??? T9</p>
            
            <p>C??? hai phi&ecirc;n b???n 14 v&agrave; 15 inch c???a ExpertBook B1 ?????u ???????c trang b??? vi x??? l&yacute; Intel th??? h??? 11 m???i nh???t, t&ugrave;y ch???n card ????? h???a r???i Nvidia MX330, kh??? n??ng n&acirc;ng c???p RAM linh ho???t t???i ??a ?????n 48GB, gi???i ph&aacute;p l??u tr??? k&eacute;p v???i 1 SSD PCIe + ??? c???ng 2,5&quot;.</p>
            
            <p>C&oacute; th??? th???y ExpertBook B1 series mang l???i kh??? n??ng n&acirc;ng c???p v&agrave; thay ?????i r???t linh ho???t. B???n hay doanh nghi???p c???a b???n kh&ocirc;ng c???n ph???i b??? ra chi ph&iacute; ?????u t?? ban ?????u qu&aacute; l???n, nh??ng v???n c&oacute; kh??? n??ng n&acirc;ng c???p, m??? r???ng trong t????ng lai. ??i???u n&agrave;y l???i c&agrave;ng tr??? n&ecirc;n &yacute; ngh??a trong th???i ??i???m kinh t??? g???p nhi???u b???t ???n nh?? hi???n nay.</p>
            
            <p><strong>Kh??? n??ng k???t n???i ??a d???ng v&agrave; ?????y ?????</strong></p>
            
            <p>Kh&ocirc;ng gi???ng nh?? nh???ng nh&agrave; s???n xu???t kh&aacute;c, hi sinh s??? ti???n d???ng c???a ng?????i d&ugrave;ng khi lo???i b??? c&aacute;c c???ng k???t n???i, ASUS ExpertBook B1 trang b??? ?????y ????? c&aacute;c c???ng k???t n???i nh?? USB-A, HDMI, VGA, RJ45 (m???ng Lan), ?????u ?????c th??? nh??? MicroSD cho ?????n USB-C h??? tr??? truy???n ??i???n n??ng c??ng nh?? xu???t h&igrave;nh ???nh. Nh??? ??&oacute;, ExpertBook B1 mang l???i kh??? n??ng k???t n???i v???i c&ugrave;ng l&uacute;c 3 m&agrave;n h&igrave;nh ngo&agrave;i, c??ng nh?? k???t n???i v???i h???u h???t c&aacute;c m&aacute;y m&oacute;c trong m&ocirc;i tr?????ng c&ocirc;ng s???, s???n xu???t.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 3." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-1-1628846773689270250684.jpg" /></p>
            
            <p>M&aacute;y ???????c trang b??? ?????y ????? c&aacute;c c???ng k???t n???i cho nhu c???u l&agrave;m vi???c ??a nhi???m</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>M&ocirc;i tr?????ng l&agrave;m vi???c t???i nh&agrave; v???i c&aacute;c cu???c h???p tr???c tuy???n c??ng ???????c ASUS t&iacute;nh to&aacute;n v&agrave; t???i ??u cho ExpertBook B1 v???i webcam ????? ph&acirc;n gi???i cao, 2 microphone thu &acirc;m 360 ????? k???t h???p c&ocirc;ng ngh??? kh??? ???n th&ocirc;ng minh ASUS AI Noise-Cancelling cho ch???t l?????ng ??&agrave;m tho???i t???t trong m???i m&ocirc;i tr?????ng.</p>
            
            <p><strong>B???n b??? v&agrave; b???o m???t</strong></p>
            
            <p>Nh???m h??? tr??? ng?????i d&ugrave;ng l&agrave;m vi???c b???n b??? trong m???i m&ocirc;i tr?????ng t??? v??n ph&ograve;ng, x?????ng s???n xu???t cho t???i gia ??&igrave;nh c&oacute; tr??? em, c&aacute;c k?? s?? c???a ASUS ??&atilde; thi???t k??? ExpertBook B1 v?????t ti&ecirc;u chu???n ????? b???n c???a Qu&acirc;n ?????i M???. N???p m&aacute;y c???a Expert Book B1 ???????c l&agrave;m b???ng h???p kim nh&ocirc;m, b&agrave;n ph&iacute;m c&oacute; kh??? n??ng ch???ng tr&agrave;n gi&uacute;p chi???c m&aacute;y c&ugrave;ng d??? li???u c???a b???n c&oacute; th??? an to&agrave;n sau nh???ng c&uacute; r??i hay nh???ng pha v&ocirc; &yacute; ????? n?????c, cafe l&ecirc;n b&agrave;n ph&iacute;m.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 4." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-2-16288467736911709313938.jpg" /></p>
            
            <p>M&aacute;y v???n ?????m b???o t&iacute;nh di ?????ng v???i tr???ng l?????ng ch??? 1.45 kg.</p>
            
            <p>Ngo&agrave;i ra, trong th???i ?????i &quot;d??? li???u l&agrave; v&agrave;ng&quot;, kh??? n??ng b???o m???t tr&ecirc;n ExpertBook B1 c??ng ???????c ASUS d&agrave;nh nhi???u t&acirc;m huy???t v???i c???m bi???n v&acirc;n tay m???t ch???m t&iacute;ch h???p trong n&uacute;t ngu???n, chip TPM 2.0 v&agrave; ???ng d???ng b???o m???t ??i k&egrave;m ASUS Business Manager. Nh??? ??&oacute;, m&aacute;y c&oacute; kh??? n??ng m&atilde; h&oacute;a, b???o v??? d??? li???u, kh&oacute;a c&aacute;c c???ng k???t n???i v???t l&yacute; m???t c&aacute;ch nhanh ch&oacute;ng khi ph&aacute;t hi???n nguy c?? r&ograve; r??? d??? li???u. ?????c bi???t, webcam ???????c trang b??? t???m che v???t l&yacute;, ?????m b???o an to&agrave;n cho h&igrave;nh ???nh c&aacute; nh&acirc;n c???a ng?????i d&ugrave;ng, h???n ch??? ho&agrave;n to&agrave;n kh??? n??ng l??? h&igrave;nh ???nh nh???y c???m, ?????c bi???t h???u &iacute;ch khi l&agrave;m vi???c t???i nh&agrave;.</p>
            
            <p><strong>Ch??? ????? b???o h&agrave;nh cao c???p v&agrave; linh ho???t</strong></p>
            
            <p>D&ograve;ng s???n ph???m &quot;th???a ri&ecirc;ng&quot; doanh nghi???p n&agrave;y c&ograve;n ??i k&egrave;m ch??? ????? b???o h&agrave;nh cao c???p t??? ASUS v???i th???i gian b???o h&agrave;nh tu??? ch???n t??? 1-5 n??m, d???ch v??? b???o h&agrave;nh t???n n??i, giao nh???n h&agrave;ng t???n n??i. ?????c bi???t t&ugrave;y ch???n gi??? l???i ??? c???ng b??? l???i cho ph&eacute;p doanh nghi???p ?????m b???o an to&agrave;n, b???o m???t d??? li???u kinh doanh.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 5." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-3-16288467736921192717538.jpg" /></p>
            
            <p>M&aacute;y c??ng ph&ugrave; h???p v???i gi&aacute;o vi&ecirc;n, h???c sinh, sinh vi&ecirc;n.</p>
            
            <p>C&oacute; th??? n&oacute;i, ASUS ExpertBook B1 l&agrave; m???nh gh&eacute;p cu???i c&ugrave;ng t???o n&ecirc;n b???c tranh &quot;laptop doanh nghi???p&quot; ho&agrave;n h???o, ph???c v??? ?????y ????? c&aacute;c nhu c???u c???a doanh nghi???p. B&ecirc;n c???nh hai m???u laptop doanh nghi???p tr?????c ??&oacute; l&agrave; ExpertBook B9 cao c???p, ExpertBook P2 di ?????ng, s??? xu???t hi???n c???a ExpertBook B1 ??em l???i s??? l???a ch???n m???nh m???, linh ho???t h??n, gi&uacute;p doanh nghi???p v???a v&agrave; nh??? t???i ??u chi ph&iacute;, n&acirc;ng cao kh??? n??ng th&iacute;ch ???ng trong m&ocirc;i tr?????ng kinh doanh b&igrave;nh th?????ng m???i nhi???u bi???n ?????i. ????? c&oacute; th&ecirc;m th&ocirc;ng tin chi ti???t v&agrave; y&ecirc;u c???u ?????t mua s???n ph???m, b???n ?????c c&oacute; th??? li&ecirc;n h??? hotline 1800 6588.</p>',
            'image' => 'YpYO_4.png',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 1,
            'title' => 'ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t',
            'info' => 'Trong th???i ??i???m ph???n l???n ngu???n nh??n l???c c???a c??c c??ng ty ??ang l??m vi???c t???i nh??, t??? xa, tin c???y c???a c??? ng?????i ??i l??m hay c??c c??c c??ng ty ?????u ??ang t??ng cao.',
            'content' => '<h2>Trong th???i ??i???m ph???n l???n ngu???n nh&acirc;n l???c c???a c&aacute;c c&ocirc;ng ty ??ang l&agrave;m vi???c t???i nh&agrave;, t??? xa, nhu c???u v??? nh???ng chi???c laptop m???nh m???, g???n nh???, tin c???y c???a c??? ng?????i ??i l&agrave;m hay c&aacute;c c&aacute;c c&ocirc;ng ty ?????u ??ang t??ng cao.</h2>
 
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 1." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/14/ava-1628914655060846405650.png" /></p>
            
            <p>N???m b???t nhu c???u ??&oacute;, Asus ??&atilde; ra m???t hai m???u laptop m???i ASUS ExpertBook B1 v???i hai phi&ecirc;n b???n B1400 (m&agrave;n h&igrave;nh 14 inch) v&agrave; B1500 (m&agrave;n h&igrave;nh 15.6 inch), thu???c ph&acirc;n kh&uacute;c Thi???t Y???u d&agrave;nh cho c&aacute;c doanh nghi???p v???a &amp; nh??? t???i Vi???t Nam. ??&acirc;y l&agrave; phi&ecirc;n b???n h???u du???, v???i m???c gi&aacute; d??? ti???p c???n h??n nh??ng th???a h?????ng nhi???u ??u ??i???m c???a chi???c ExpertBook B9 ??ang l&agrave;m m??a l&agrave;m gi&oacute; ??? ph&acirc;n kh&uacute;c Laptop d&agrave;nh cho Doanh nh&acirc;n, Nh&agrave; qu???n l&yacute;.</p>
            
            <p><strong>M???nh m???, d??? d&agrave;ng n&acirc;ng c???p gi&uacute;p t???i ??u chi ph&iacute; ?????u t?? ban ?????u</strong></p>
            
            <p>Ng&ocirc;n ng??? thi???t k??? c???a ExpertBook B1 gi??? b???n s???c chuy&ecirc;n nghi???p, thanh l???ch, sang tr???ng c???a d&ograve;ng ExpertBook. ?????c bi???t, ph???n n???p m&aacute;y ???????c ho&agrave;n thi???n b???ng h???p kim nh&ocirc;m ??i c&ugrave;ng ch???t l?????ng gia c&ocirc;ng ch???c ch???n mang l???i x&uacute;c gi&aacute;c, ????? b???n c??ng nh?? ngo???i h&igrave;nh r???t cao c???p. Ch&uacute;ng ta s??? c&oacute; nh???ng chi???c Laptop n???ng h??n m???t ch&uacute;t so v???i ExpertBook B9 nh??ng v???n ?????m b???o t&iacute;nh di ?????ng (ch??? 1,45kg), ?????i l???i l&agrave; card ????? ho??? r???i v&agrave; kh??? n??ng n&acirc;ng c???p RAM, ??? c???ng.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 2." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-1-162884676854078379359.jpg" /></p>
            
            <p>ExpertBook B1 b???n 15 inch v???i b&agrave;n ph&iacute;m s??? T9</p>
            
            <p>C??? hai phi&ecirc;n b???n 14 v&agrave; 15 inch c???a ExpertBook B1 ?????u ???????c trang b??? vi x??? l&yacute; Intel th??? h??? 11 m???i nh???t, t&ugrave;y ch???n card ????? h???a r???i Nvidia MX330, kh??? n??ng n&acirc;ng c???p RAM linh ho???t t???i ??a ?????n 48GB, gi???i ph&aacute;p l??u tr??? k&eacute;p v???i 1 SSD PCIe + ??? c???ng 2,5&quot;.</p>
            
            <p>C&oacute; th??? th???y ExpertBook B1 series mang l???i kh??? n??ng n&acirc;ng c???p v&agrave; thay ?????i r???t linh ho???t. B???n hay doanh nghi???p c???a b???n kh&ocirc;ng c???n ph???i b??? ra chi ph&iacute; ?????u t?? ban ?????u qu&aacute; l???n, nh??ng v???n c&oacute; kh??? n??ng n&acirc;ng c???p, m??? r???ng trong t????ng lai. ??i???u n&agrave;y l???i c&agrave;ng tr??? n&ecirc;n &yacute; ngh??a trong th???i ??i???m kinh t??? g???p nhi???u b???t ???n nh?? hi???n nay.</p>
            
            <p><strong>Kh??? n??ng k???t n???i ??a d???ng v&agrave; ?????y ?????</strong></p>
            
            <p>Kh&ocirc;ng gi???ng nh?? nh???ng nh&agrave; s???n xu???t kh&aacute;c, hi sinh s??? ti???n d???ng c???a ng?????i d&ugrave;ng khi lo???i b??? c&aacute;c c???ng k???t n???i, ASUS ExpertBook B1 trang b??? ?????y ????? c&aacute;c c???ng k???t n???i nh?? USB-A, HDMI, VGA, RJ45 (m???ng Lan), ?????u ?????c th??? nh??? MicroSD cho ?????n USB-C h??? tr??? truy???n ??i???n n??ng c??ng nh?? xu???t h&igrave;nh ???nh. Nh??? ??&oacute;, ExpertBook B1 mang l???i kh??? n??ng k???t n???i v???i c&ugrave;ng l&uacute;c 3 m&agrave;n h&igrave;nh ngo&agrave;i, c??ng nh?? k???t n???i v???i h???u h???t c&aacute;c m&aacute;y m&oacute;c trong m&ocirc;i tr?????ng c&ocirc;ng s???, s???n xu???t.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 3." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-1-1628846773689270250684.jpg" /></p>
            
            <p>M&aacute;y ???????c trang b??? ?????y ????? c&aacute;c c???ng k???t n???i cho nhu c???u l&agrave;m vi???c ??a nhi???m</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>M&ocirc;i tr?????ng l&agrave;m vi???c t???i nh&agrave; v???i c&aacute;c cu???c h???p tr???c tuy???n c??ng ???????c ASUS t&iacute;nh to&aacute;n v&agrave; t???i ??u cho ExpertBook B1 v???i webcam ????? ph&acirc;n gi???i cao, 2 microphone thu &acirc;m 360 ????? k???t h???p c&ocirc;ng ngh??? kh??? ???n th&ocirc;ng minh ASUS AI Noise-Cancelling cho ch???t l?????ng ??&agrave;m tho???i t???t trong m???i m&ocirc;i tr?????ng.</p>
            
            <p><strong>B???n b??? v&agrave; b???o m???t</strong></p>
            
            <p>Nh???m h??? tr??? ng?????i d&ugrave;ng l&agrave;m vi???c b???n b??? trong m???i m&ocirc;i tr?????ng t??? v??n ph&ograve;ng, x?????ng s???n xu???t cho t???i gia ??&igrave;nh c&oacute; tr??? em, c&aacute;c k?? s?? c???a ASUS ??&atilde; thi???t k??? ExpertBook B1 v?????t ti&ecirc;u chu???n ????? b???n c???a Qu&acirc;n ?????i M???. N???p m&aacute;y c???a Expert Book B1 ???????c l&agrave;m b???ng h???p kim nh&ocirc;m, b&agrave;n ph&iacute;m c&oacute; kh??? n??ng ch???ng tr&agrave;n gi&uacute;p chi???c m&aacute;y c&ugrave;ng d??? li???u c???a b???n c&oacute; th??? an to&agrave;n sau nh???ng c&uacute; r??i hay nh???ng pha v&ocirc; &yacute; ????? n?????c, cafe l&ecirc;n b&agrave;n ph&iacute;m.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 4." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-2-16288467736911709313938.jpg" /></p>
            
            <p>M&aacute;y v???n ?????m b???o t&iacute;nh di ?????ng v???i tr???ng l?????ng ch??? 1.45 kg.</p>
            
            <p>Ngo&agrave;i ra, trong th???i ?????i &quot;d??? li???u l&agrave; v&agrave;ng&quot;, kh??? n??ng b???o m???t tr&ecirc;n ExpertBook B1 c??ng ???????c ASUS d&agrave;nh nhi???u t&acirc;m huy???t v???i c???m bi???n v&acirc;n tay m???t ch???m t&iacute;ch h???p trong n&uacute;t ngu???n, chip TPM 2.0 v&agrave; ???ng d???ng b???o m???t ??i k&egrave;m ASUS Business Manager. Nh??? ??&oacute;, m&aacute;y c&oacute; kh??? n??ng m&atilde; h&oacute;a, b???o v??? d??? li???u, kh&oacute;a c&aacute;c c???ng k???t n???i v???t l&yacute; m???t c&aacute;ch nhanh ch&oacute;ng khi ph&aacute;t hi???n nguy c?? r&ograve; r??? d??? li???u. ?????c bi???t, webcam ???????c trang b??? t???m che v???t l&yacute;, ?????m b???o an to&agrave;n cho h&igrave;nh ???nh c&aacute; nh&acirc;n c???a ng?????i d&ugrave;ng, h???n ch??? ho&agrave;n to&agrave;n kh??? n??ng l??? h&igrave;nh ???nh nh???y c???m, ?????c bi???t h???u &iacute;ch khi l&agrave;m vi???c t???i nh&agrave;.</p>
            
            <p><strong>Ch??? ????? b???o h&agrave;nh cao c???p v&agrave; linh ho???t</strong></p>
            
            <p>D&ograve;ng s???n ph???m &quot;th???a ri&ecirc;ng&quot; doanh nghi???p n&agrave;y c&ograve;n ??i k&egrave;m ch??? ????? b???o h&agrave;nh cao c???p t??? ASUS v???i th???i gian b???o h&agrave;nh tu??? ch???n t??? 1-5 n??m, d???ch v??? b???o h&agrave;nh t???n n??i, giao nh???n h&agrave;ng t???n n??i. ?????c bi???t t&ugrave;y ch???n gi??? l???i ??? c???ng b??? l???i cho ph&eacute;p doanh nghi???p ?????m b???o an to&agrave;n, b???o m???t d??? li???u kinh doanh.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt="ASUS ExpertBook B1 - M???u laptop doanh nghi???p m???nh m??? v???i kh??? n??ng n??ng c???p linh ho???t - ???nh 5." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/13/photo-3-16288467736921192717538.jpg" /></p>
            
            <p>M&aacute;y c??ng ph&ugrave; h???p v???i gi&aacute;o vi&ecirc;n, h???c sinh, sinh vi&ecirc;n.</p>
            
            <p>C&oacute; th??? n&oacute;i, ASUS ExpertBook B1 l&agrave; m???nh gh&eacute;p cu???i c&ugrave;ng t???o n&ecirc;n b???c tranh &quot;laptop doanh nghi???p&quot; ho&agrave;n h???o, ph???c v??? ?????y ????? c&aacute;c nhu c???u c???a doanh nghi???p. B&ecirc;n c???nh hai m???u laptop doanh nghi???p tr?????c ??&oacute; l&agrave; ExpertBook B9 cao c???p, ExpertBook P2 di ?????ng, s??? xu???t hi???n c???a ExpertBook B1 ??em l???i s??? l???a ch???n m???nh m???, linh ho???t h??n, gi&uacute;p doanh nghi???p v???a v&agrave; nh??? t???i ??u chi ph&iacute;, n&acirc;ng cao kh??? n??ng th&iacute;ch ???ng trong m&ocirc;i tr?????ng kinh doanh b&igrave;nh th?????ng m???i nhi???u bi???n ?????i. ????? c&oacute; th&ecirc;m th&ocirc;ng tin chi ti???t v&agrave; y&ecirc;u c???u ?????t mua s???n ph???m, b???n ?????c c&oacute; th??? li&ecirc;n h??? hotline 1800 6588.</p>',
            'image' => 'E1mK_3.png',
        ]);
        DB::table('news')->insert([
            'id_category_new' => 3,
            'title' => 'Microsoft Surface n??o ph?? h???p v???i b???n?',
            'info' => 'D??ng Surface c???a Microsoft ng??y c??ng c?? nh???ng s???n ph???m ???n t?????ng, thu h??t nhi???u ng?????i y??u c??ng ngh??? s??? d???ng. ?????c bi???t l?? c??c b???n fan c???a h??? ??i???u h??nh Windows.',
            'content' => '<p>V???y c&oacute; nh???ng m???u Surface n&agrave;o ??&aacute;ng ch&uacute; &yacute;? B???n n&ecirc;n mua m???u n&agrave;o trong n??m 2021 n&agrave;y? B???n c&oacute; th??? t&igrave;m th???y ?????a ch??? ph&acirc;n ph???i Surface uy t&iacute;n ??? ??&acirc;u?</p>
 
            <p>H&atilde;y c&ugrave;ng t&ocirc;i t&igrave;m hi???u qua b&agrave;i vi???t d?????i ??&acirc;y.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/a1-1628501852939402603874.jpg" target="_blank"><img alt="Microsoft Surface n??o ph?? h???p v???i b???n? - ???nh 1." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/a1-1628501852939402603874.jpg" /></a></p>
            
            <p>Microsoft Surface n&agrave;o ph&ugrave; h???p v???i b???n?</p>
            
            <p><strong>C&aacute;c m???u Surface ??&aacute;ng mua 2021&nbsp;</strong></p>
            
            <p><em>Surface Laptop 4 - Thi???t k??? kh&ocirc;ng th??? ch???i t???&nbsp;</em></p>
            
            <p>Surface Laptop 4 ???????c tr&igrave;nh l&agrave;ng l???n ?????u v&agrave;o n??m 2021, m&aacute;y t&iacute;nh n&agrave;y l&agrave; m???t trong nh???ng chi???c Surface Laptop xu???t s???c nh???t c???a Microsoft.</p>
            
            <p>???????c b&agrave;y b&aacute;n v???i hai size l&agrave; 13,5 inch v&agrave; 15 inch v???i nhi???u phi&ecirc;n b???n v&agrave; dung l?????ng kh&aacute;c nhau, n&oacute; ??&aacute;p ???ng ???????c nhu c???u c???a nhi???u ?????i t?????ng kh&aacute;ch h&agrave;ng.</p>
            
            <p>??u ??i???m:</p>
            
            <p>- M&aacute;y t&iacute;nh m???ng v&agrave; nh???</p>
            
            <p>- Hi???u su???t xu???t s???c (ch??? thua k&eacute;m nh???ng laptop d&ugrave;ng NVIDIA GPU) v&agrave; cho c???m gi&aacute;c nhanh ch&oacute;ng, d??? thao t&aacute;c</p>
            
            <p>- Phi&ecirc;n b???n 15 inch c&oacute; t&ugrave;y ch???n s??? d???ng chip AMD kh&ocirc;ng h??? thua k&eacute;m chip Apple M1.</p>
            
            <p>- Th???i l?????ng pin th???c t??? l&ecirc;n ?????n 8 gi???</p>
            
            <p>- M&agrave;n h&igrave;nh c???m ???ng, h??? tr??? t&iacute;nh n??ng vi???t v???i Surface pen (th&iacute;ch h???p k&yacute; v??n b???n ho???c ghi ch&uacute; nhanh)</p>
            
            <p>Ngo&agrave;i ra m&aacute;y c&ograve;n ra m???t v???i nhi???u phi&ecirc;n b???n kh&aacute;c nhau: m&aacute;y d&ugrave;ng chip Ryzen 5, Ryzen 7, Core i5, Core i7.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/photo-1-16285017686081956089279.jpg" target="_blank"><img alt="Microsoft Surface n??o ph?? h???p v???i b???n? - ???nh 2." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/photo-1-16285017686081956089279.jpg" /></a></p>
            
            <p>Surface Laptop 4 - Thi???t k??? kh&ocirc;ng th??? ch???i t???</p>
            
            <p>Tuy nhi&ecirc;n, m&aacute;y l???i kh&ocirc;ng ???????c trang b??? c???ng Thunderbolt 4. Ch???t l?????ng &acirc;m thanh c??ng kh&ocirc;ng qu&aacute; xu???t s???c nh??ng theo t&ocirc;i th???y n&oacute; ????? d&ugrave;ng cho m???t m&aacute;y t&iacute;nh c&aacute; nh&acirc;n.</p>
            
            <p>V???i thi???t k??? ?????p m???t v&agrave; hi???u xu???t m???nh, Surface Laptop 4 s??? ph&ugrave; h???p v???i c&aacute;c ng?????i d&ugrave;ng l&agrave; doanh nh&acirc;n, ng?????i l&agrave;m l??nh v???c multimedia nh?? vi???t l&aacute;ch, ch???nh ???nh, video v&agrave; nh???ng nh&acirc;n vi&ecirc;n v??n ph&ograve;ng.</p>
            
            <p>&nbsp;<em>Surface Pro 7 - Gi&aacute; t???t nh???t so v???i tr???i nghi???m&nbsp;</em></p>
            
            <p>Surface Pro 7 l&agrave; m???t trong nh???ng m???u surface ??&aacute;ng mua v&igrave; tr???i nghi???m r???t x???ng ??&aacute;ng v???i gi&aacute; ti???n:</p>
            
            <p>- Thi???t k??? 2-in-1, b???n c&oacute; th??? th&aacute;o r???i m&agrave;n h&igrave;nh v&agrave; b&agrave;n ph&iacute;m Surface Type Cover</p>
            
            <p>- Ngo???i h&igrave;nh ?????p, ???????c l&agrave;m t??? h???p kim Magie ch???t l?????ng cao, nh??? g???n v&agrave; cao c???p (m&aacute;y c&oacute; k&iacute;ch th?????c 12.3 inch, ch??? n???ng c&oacute; 775 gram)</p>
            
            <p>- Ph???n ????? ti???n l???i, c&oacute; th??? xoay linh ho???t t??? 0 ?????n 165 ?????</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/photo-1-16285017707541017172344.jpg" target="_blank"><img alt="Microsoft Surface n??o ph?? h???p v???i b???n? - ???nh 3." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/photo-1-16285017707541017172344.jpg" /></a></p>
            
            <p>Surface Pro 7 - Gi&aacute; t???t, tr???i nghi???m h&agrave;i l&ograve;ng</p>
            
            <p>- B&agrave;n ph&iacute;m c&oacute; ??&egrave;n n???n gi&uacute;p b???n l&agrave;m vi???c t???t trong b&oacute;ng t???i</p>
            
            <p>- M&agrave;n h&igrave;nh ph&acirc;n gi???i cao, m&agrave;u s???c s???ng ?????ng</p>
            
            <p>- Hi???u n??ng t???t, m&aacute;y kh&ocirc;ng gi???t lag ngay c??? khi ch???c tab Chrome ???????c m??? k&egrave;m c&aacute;c app nh?? Skype, Netflix, Youtube,...</p>
            
            <p>- Pin c&oacute; th??? s??? d???ng t??? 8 ?????n 12h</p>
            
            <p>??i???m tr??? c&oacute; th??? n&oacute;i l&agrave; duy nh???t c???a m???u Surface n&agrave;y l&agrave; n&oacute; kh&ocirc;ng h??? tr??? Thunderbolt 3. N???u b???n mu???n chuy???n kh???i l?????ng d??? li???u l???n, b???n s??? ph???i l&agrave;m v???i t???c ????? h??i ch???m c???a USB ti&ecirc;u chu???n.</p>
            
            <p>B???n c??ng n&ecirc;n l??u &yacute;, m???t s??? n??i s??? b&aacute;n b&agrave;n ph&iacute;m r???i thay v&igrave; gom chung m???t b???. Tuy nhi&ecirc;n, d&ugrave; mua ri&ecirc;ng th&igrave; gi&aacute; c???a Surface Pro 7 v???n r???t h???p l&yacute; v???i ch???t l?????ng n&oacute; mang l???i.</p>
            
            <p>M&aacute;y ph&ugrave; h???p v???i c&aacute;c b???n ??u ti&ecirc;n t&iacute;nh di ?????ng c???a s???n ph???m, ph???i di chuy???n nhi???u v&agrave; c???n m&aacute;y c&oacute; hi???u su???t m???nh.</p>
            
            <p>&nbsp;<strong>Surface Book 3 - All in One Laptop&nbsp;</strong></p>
            
            <p>Surface Book 3 l&agrave; s???n ph???m tuy???t v???i v???a ???????c Microsoft ra m???t v&agrave;o n??m 2020 Kh&ocirc;ng qu&aacute; ng???c nhi&ecirc;n khi thi???t k??? c???a Surface Book 3 ???????c nhi???u chuy&ecirc;n gia ??&aacute;nh gi&aacute; cao, t???t c??? chi ti???t c???a Surface Book 3 ?????u ??&ograve;i h???i ch???t l?????ng, t??? c???m gi&aacute;c c???ng c&aacute;p c???a b&agrave;n ph&iacute;m cho ?????n b???n l??? hay s??? b&oacute;ng b???y c???a logo Microsoft ??? m???t l??ng.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/photo-2-16285017707561308092891.jpg" target="_blank"><img alt="Microsoft Surface n??o ph?? h???p v???i b???n? - ???nh 4." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/photo-2-16285017707561308092891.jpg" /></a></p>
            
            <p>Surface Book 3 c&oacute; 2 phi&ecirc;n b???n l&agrave; 13.3 inch v&agrave; 15 inch v???i ph???n m&agrave;n h&igrave;nh c&oacute; th??? th&aacute;o r???i d??? d&agrave;ng ????? chuy???n ?????i th&agrave;nh tablet.</p>
            
            <p>Ch&uacute;ng ta s??? c&oacute; c???u h&igrave;nh ??? m???c c?? b???n:</p>
            
            <p>- Phi&ecirc;n b???n 13.3 inch: CPU i5 ho???c i7 th??? h??? 10, RAM 8GB, 16GB v&agrave; 32GB c&ugrave;ng SSD 256GB, 512GB, 1TB</p>
            
            <p>- Phi&ecirc;n b???n 15 inch: CPI i7 th??? h??? 10, RAM 16GB, 32GB c&ugrave;ng SSD 512GB, 1TB ho???c 2TB c&ugrave;ng card ????? ho??? r???i GTX 1660 Ti ho???c RTX-3000 kh???ng.</p>
            
            <p>V???i c???u h&igrave;nh n&agrave;y n&agrave;y cho phi&ecirc;n b???n Laptop c&oacute; th??? n&oacute;i l&agrave; v?????t tr???i ????? ph???c v??? cho c&aacute;c t&aacute;c v??? n???ng nh?? l???p tr&igrave;nh, ????? ho???, render, l&agrave;m phim&hellip; ngo&agrave;i ra c&aacute;c ph???n m???m Office c??ng h??? tr??? tuy???t v???i cho Surface Book 3. Nh??ng khi tr??? th&agrave;nh chi???c tablet th&igrave; ??&acirc;y ???????c ??&aacute;nh gi&aacute; l&agrave; chi???c tablet m???nh m??? th???i ??i???m hi???n t???i.</p>
            
            <p><strong>&nbsp;?????a ch??? mua Surface uy t&iacute;n l&agrave; ??i???u ph???i c&acirc;n nh???c&nbsp;</strong></p>
            
            <p>Khi b???n ??&atilde; x&aacute;c ?????nh ???????c d&ograve;ng m&aacute;y v&agrave; ki???u m&aacute;y y&ecirc;u th&iacute;ch, h&atilde;y ?????m b???o r???ng b???n t&igrave;m ??&uacute;ng ?????a ch??? mua Surface uy t&iacute;n.</p>
            
            <p>C&aacute;c c???a h&agrave;ng n&agrave;y c???n ph???i c&oacute; th&ocirc;ng tin r&otilde; r&agrave;ng, n&ecirc;n c&oacute; website v&agrave; ?????y ????? c&aacute;c d???ch v??? h???u m&atilde;i:</p>
            
            <p>- C???a h&agrave;ng ???????c nhi???u kh&aacute;ch h&agrave;ng ??&aacute;nh gi&aacute; t???t</p>
            
            <p>- Ch??? ????? h??? tr??? k??? thu???t ph???i n&oacute;i l&agrave; t???t nh???t hi???n h&agrave;nh</p>
            
            <p>- C&oacute; ?????a ch??? v&agrave; c&aacute;c th???c li&ecirc;n l???c</p>
            
            <p>- Gi&aacute; c??? ph???i ch??ng v&agrave; minh b???ch</p>
            
            <p>- C&oacute; d???ch v??? b???o h&agrave;nh (ho???c s???a ch???a)</p>
            
            <p>B???n c&oacute; th??? tham kh???o ngay t???i Laptop V&agrave;ng. ?????a ch??? chuy&ecirc;n ph&acirc;n ph???i c&aacute;c s???n ph???m Surface v&agrave; ????? ch??i c&ocirc;ng ngh??? v???i c&aacute;c ch&iacute;nh s&aacute;ch b???o h&agrave;nh t???t, t?? v???n k??? c&agrave;ng.</p>
            
            <p>&nbsp;</p>
            
            <p><a href="https://channel.mediacdn.vn/2021/8/9/photo-3-1628501770760333059248.jpg" target="_blank"><img alt="Microsoft Surface n??o ph?? h???p v???i b???n? - ???nh 5." src="https://channel.mediacdn.vn/thumb_w/640/2021/8/9/photo-3-1628501770760333059248.jpg" /></a></p>
            
            <p>Laptop V&agrave;ng c&ograve;n cho ph&eacute;p thanh to&aacute;n online, tr??? g&oacute;p c??ng nh?? mi???n ph&iacute; v???n chuy???n n???i th&agrave;nh H??? Ch&iacute; Minh.</p>
            
            <p>Th&ocirc;ng tin li&ecirc;n h???:</p>
            
            <p>?????a ch???: 273/8 Nguy???n Tr???ng Tuy???n, Ph?????ng 10, Ph&uacute; Nhu???n, Th&agrave;nh ph??? H??? Ch&iacute; Minh</p>
            
            <p>Hotline: 0868 111 232</p>
            
            <p>H??? tr??? k??? thu???t: 0868 111 242</p>
            
            <p>Website:&nbsp;<a href="https://laptopvang.com/" target="_blank">https://laptopvang.com</a>/</p>
            
            <p>Fanpage: https://facebook.com/laptopvang</p>
            
            <p>Email: sale@laptopvang.com</p>
            
            <p>Hy v???ng qua b&agrave;i vi???t n&agrave;y c&aacute;c b???n ??&atilde; x&aacute;c ?????nh ???????c em Surface m&agrave; m&igrave;nh y&ecirc;u th&iacute;ch, ch&uacute;c c&aacute;c b???n ?????c s???m &quot;t???u&quot; ???????c s???n ph???m m&agrave; m&igrave;nh mong mu???n v??? tay nh&eacute;!</p>
            
            <p><a href="https://genk.vn/tat-tan-tat-ve-surface-duo-2-nang-cap-cau-hinh-camera-nhung-chua-thay-doi-nhieu-ve-thiet-ke-20210806154110733.chn" target="_blank">T???t t???n t???t v??? Surface Duo 2: N&acirc;ng c???p c???u h&igrave;nh, camera nh??ng ch??a thay ?????i nhi???u v??? thi???t k???</a></p>
            
            <p><a href="javascript:void(0);">Theo&nbsp;Tr&iacute; Th???c Tr???&nbsp;<em>Copy link</em></a></p>',
            'image' => 'W20l_5.png',
        ]);
    }
}

class CategoryNewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('category_news')->insert([
            'name' => 'b??i vi???t c??ng ngh??? m???i',
            'sort_order' => 1,
            'status' => 1,
        ]);
        DB::table('category_news')->insert([
            'name' => 'tin khuy???n m??i',
            'sort_order' => 2,
            'status' => 1,
        ]);
        DB::table('category_news')->insert([
            'name' => 'tin th??? tr?????ng',
            'sort_order' => 3,
            'status' => 1,
        ]);
        DB::table('category_news')->insert([
            'name' => 'tin n??ng',
            'sort_order' => 4,
            'status' => 1,
        ]);
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => 'User' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => 'NONX_icon-user.jpg',
                'address' => '218 Ho??ng v??n th??i, ???? N???ng',
                'phone' => '0123456789',
                'level' => 0,
            ]);
        }

        for ($i = 0; $i < 3; $i++) {
            DB::table('users')->insert([
                'name' => 'Admin' . $i,
                'email' => 'admin' . $i . '@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => 'user8.png',
                'address' => '218 Ho??ng v??n th??i, ???? N???ng',
                'phone' => '0123456789',
                'level' => 1,
            ]);
        }

        DB::table('users')->insert([
            'name' => 'Thanh Nguy???n Duy',
            'email' => 'thanhnguyenduyy@gmail.com',
            'password' => bcrypt('12345678'),
            'avatar' => 'user1.png',
            'address' => '218 Ho??ng v??n th??i, ???? N???ng',
            'phone' => '0123456789',
            'level' => 2,
        ]);
    }
}

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('slide')->insert([
            'link' => 'msi',
            'image' => 'slide2.png',
        ]);

        DB::table('slide')->insert([
            'link' => 'asus/republic-of-gamers',
            'image' => 'banner01.jpg',
        ]);

        DB::table('slide')->insert([
            'link' => 'hp/hp-spectre',
            'image' => 'banner02.jpg',
        ]);

        DB::table('slide')->insert([
            'link' => 'dell/dell-xps',
            'image' => 'banner03.jpg',
        ]);

        DB::table('slide')->insert([
            'link' => 'dell/dell-xps',
            'image' => 'slide3.png',
        ]);

        DB::table('slide')->insert([
            'link' => 'msi',
            'image' => 'banner00.jpg',
        ]);
    }
}

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id 1
        DB::table('category')->insert([
            'name' => 'Dell',
            'slug' => changeTitle('Dell'),
            'image' => 'banner10.png',
        ]);

        // id 2
        DB::table('category')->insert([
            'name' => 'Hp',
            'slug' => changeTitle('Hp'),
            'image' => 'banner11.jpg',
        ]);

        // id 3
        DB::table('category')->insert([
            'name' => 'Asus',
            'slug' => changeTitle('Asus'),
            'image' => 'banner12.jpg',
        ]);

        // id 4
        DB::table('category')->insert([
            'name' => 'Msi',
            'slug' => changeTitle('Msi'),
            'image' => 'banner13.jpg',
        ]);

        // id 5
        DB::table('category')->insert([
            'name' => 'Acer',
            'slug' => changeTitle('Acer'),
            'image' => 'banner15.jpg',
        ]);

        // id 6
        DB::table('category')->insert([
            'name' => 'Lenovo',
            'slug' => changeTitle('Lenovo'),
            'image' => 'banner16.jpg',
        ]);

        // id 7
        DB::table('category')->insert([
            'name' => 'Apple Macbook',
            'slug' => changeTitle('Apple Macbook'),
            'image' => 'banner17.jpg',
        ]);
    }
}

class TypeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id 1
        DB::table('type_product')->insert([
            'name' => 'Dell Inspiron',
            'slug' => changeTitle('Dell Inspiron'),
            'id_category' => '1',
        ]);

        // id 2
        DB::table('type_product')->insert([
            'name' => 'Dell Vostro',
            'slug' => changeTitle('Dell Vostro'),
            'id_category' => '1',
        ]);

        // id 3
        DB::table('type_product')->insert([
            'name' => 'Dell Lattitude',
            'slug' => changeTitle('Dell Lattitude'),
            'id_category' => '1',
        ]);

        // id 4
        DB::table('type_product')->insert([
            'name' => 'Dell XPS',
            'slug' => changeTitle('Dell XPS'),
            'id_category' => '1',
        ]);

        // id 5
        DB::table('type_product')->insert([
            'name' => 'Dell Alienware',
            'slug' => changeTitle('Dell Alienware'),
            'id_category' => '1',
        ]);

        // id 6
        DB::table('type_product')->insert([
            'name' => 'Hp Spectre',
            'slug' => changeTitle('Hp Spectre'),
            'id_category' => '2',
        ]);

        // id 7
        DB::table('type_product')->insert([
            'name' => 'Hp Elitebook',
            'slug' => changeTitle('Hp Elitebook'),
            'id_category' => '2',
        ]);

        // id 8
        DB::table('type_product')->insert([
            'name' => 'Hp Envy',
            'slug' => changeTitle('Hp Envy'),
            'id_category' => '2',
        ]);

        // id 9
        DB::table('type_product')->insert([
            'name' => 'Hp Probook',
            'slug' => changeTitle('Hp Probook'),
            'id_category' => '2',
        ]);

        // id 10
        DB::table('type_product')->insert([
            'name' => 'Republic Of Gamers',
            'slug' => changeTitle('Republic Of Gamers'),
            'id_category' => '3',
        ]);

        // id 11
        DB::table('type_product')->insert([
            'name' => 'Asus Zenbook',
            'slug' => changeTitle('Asus Zenbook'),
            'id_category' => '3',
        ]);

        // id 12
        DB::table('type_product')->insert([
            'name' => 'Asus Vivobook',
            'slug' => changeTitle('Asus Vivobook'),
            'id_category' => '3',
        ]);

        // id 13
        DB::table('type_product')->insert([
            'name' => 'GL Gaming',
            'slug' => changeTitle('GL Gaming'),
            'id_category' => '4',
        ]);

        // id 14
        DB::table('type_product')->insert([
            'name' => 'GV Gaming',
            'slug' => changeTitle('GV Gaming'),
            'id_category' => '4',
        ]);

        // id 15
        DB::table('type_product')->insert([
            'name' => 'GP Gaming',
            'slug' => changeTitle('GP Gaming'),
            'id_category' => '4',
        ]);

        // id 16
        DB::table('type_product')->insert([
            'name' => 'GE Gaming',
            'slug' => changeTitle('GE Gaming'),
            'id_category' => '4',
        ]);

        // id 17
        DB::table('type_product')->insert([
            'name' => 'GS Gaming',
            'slug' => changeTitle('GS Gaming'),
            'id_category' => '4',
        ]);

        // id 18
        DB::table('type_product')->insert([
            'name' => 'GT Gaming',
            'slug' => changeTitle('GT Gaming'),
            'id_category' => '4',
        ]);

        // id 19
        DB::table('type_product')->insert([
            'name' => 'Acer Asprie',
            'slug' => changeTitle('Acer Asprie'),
            'id_category' => '5',
        ]);

        // id 20
        DB::table('type_product')->insert([
            'name' => 'Acer Nitro',
            'slug' => changeTitle('Acer Nitro'),
            'id_category' => '5',
        ]);

        // id 21
        DB::table('type_product')->insert([
            'name' => 'Acer Spin',
            'slug' => changeTitle('Acer Spin'),
            'id_category' => '5',
        ]);

        // id 22
        DB::table('type_product')->insert([
            'name' => 'Acer Asprie V Nitro',
            'slug' => changeTitle('Acer Asprie V Nitro'),
            'id_category' => '5',
        ]);

        // id 23
        DB::table('type_product')->insert([
            'name' => 'Lenovo Thinkpad',
            'slug' => changeTitle('Lenovo Thinkpad'),
            'id_category' => '6',
        ]);

        // id 24
        DB::table('type_product')->insert([
            'name' => 'Macbook Pro',
            'slug' => changeTitle('Macbook Pro'),
            'id_category' => '7',
        ]);

        // id 25
        DB::table('type_product')->insert([
            'name' => 'Macbook Air',
            'slug' => changeTitle('Macbook Air'),
            'id_category' => '7',
        ]);
    }
}

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dell Inspiron
        // id 1
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 7567',
            'slug' => changeTitle('Dell Inspiron 7567'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7700HQ, RAM 8GB DDR4, 500GB HDD, 128GB SSD M2 SATA3, NVIDIA GeForce GTX 1050Ti 4GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7700HQ (2.8GHz upto 3.8GHz, 4Cores, 8Threads, 6MB cache, FSB 8GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2400Mhz (2 slot, 8GB x 1)</p><p><b>??? c???ng:</b> 500GB HDD 5400rpm, 128GB SSD M2 SATA3</p><p><b>VGA:</b> NVIDIA GeForce GTX 1050Ti 4GB GDDR5 +  Intel Graphics 630</p><p><b>M??n h??nh:</b> 15.6 inch FHD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.0, 2.4 GHz</p><p><b>T??ch h???p:</b> Webcam, Card Reader, USB 3.0, USB 3.1 Type C, HDMI, Backlit Keyboard, Dual Fans</p><p><b>Tr???ng l?????ng:</b> 2.5 Kg</p><p><b>Pin:</b> 6 Cells</p><p><b>H??? ??i???u h??nh:</b> Free DOS.</p>',
            'unit_price' => 26690000,
            'promotion_price' => 25500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 2
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 5567',
            'slug' => changeTitle('Dell Inspiron 5567'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7500U, RAM 8GB DDR4, 1TB HDD, AMD Radeon R7 M445 4G GDDR5, 15.6 inch HD (1366x768), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7500U (2.7GHz upto 3.5GHz, 2Cores, 4Threads, 4MB cache, FSB 4GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2133Mhz (2 slot)</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b> AMD Radeon R7 M445 4G GDDR5 + Intel HD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 1000Mbps / WLan 802.11b,g,n / Bluetooth 4.0</p><p><b>T??ch h???p:</b> Reader SD | Camera HD | DVI | USB 3.0 | Backlit</p><p><b>Tr???ng l?????ng:</b> 2.3 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Free DOS.</p>',
            'unit_price' => 19190000,
            'promotion_price' => 17400000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 3
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 5570',
            'slug' => changeTitle('Dell Inspiron 5570'),
            'id_type' => '1',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 16400000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 4
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 7373',
            'slug' => changeTitle('Dell Inspiron 7373'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7700HQ, RAM 8GB DDR4, 500GB HDD, 128GB SSD M2 SATA3, NVIDIA GeForce GTX 1050Ti 4GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7700HQ (2.8GHz upto 3.8GHz, 4Cores, 8Threads, 6MB cache, FSB 8GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2400Mhz (2 slot, 8GB x 1)</p><p><b>??? c???ng:</b> 500GB HDD 5400rpm, 128GB SSD M2 SATA3</p><p><b>VGA:</b> NVIDIA GeForce GTX 1050Ti 4GB GDDR5 +  Intel Graphics 630</p><p><b>M??n h??nh:</b> 15.6 inch FHD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.0, 2.4 GHz</p><p><b>T??ch h???p:</b> Webcam, Card Reader, USB 3.0, USB 3.1 Type C, HDMI, Backlit Keyboard, Dual Fans</p><p><b>Tr???ng l?????ng:</b> 2.5 Kg</p><p><b>Pin:</b> 6 Cells</p><p><b>H??? ??i???u h??nh:</b> Free DOS.</p>',
            'unit_price' => 28500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 5
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 7577',
            'slug' => changeTitle('Dell Inspiron 7577'),
            'id_type' => '1',
            'description' => 'Intel Core i7-7700HQ, RAM 8GB DDR4, 500GB HDD, 128GB SSD M2 SATA3, NVIDIA GeForce GTX 1050Ti 4GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i7-7700HQ (2.8GHz upto 3.8GHz, 4Cores, 8Threads, 6MB cache, FSB 8GT/s)</p><p><b>RAM:</b> 8GB DDR4 bus 2400Mhz (2 slot, 8GB x 1)</p><p><b>??? c???ng:</b> 500GB HDD 5400rpm, 128GB SSD M2 SATA3</p><p><b>VGA:</b> NVIDIA GeForce GTX 1050Ti 4GB GDDR5 +  Intel Graphics 630</p><p><b>M??n h??nh:</b> 15.6 inch FHD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.0, 2.4 GHz</p><p><b>T??ch h???p:</b> Webcam, Card Reader, USB 3.0, USB 3.1 Type C, HDMI, Backlit Keyboard, Dual Fans</p><p><b>Tr???ng l?????ng:</b> 2.5 Kg</p><p><b>Pin:</b> 6 Cells</p><p><b>H??? ??i???u h??nh:</b> Free DOS.</p>',
            'unit_price' => 29990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 6
        DB::table('product')->insert([
            'name' => 'Dell Inspiron 5468',
            'slug' => changeTitle('Dell Inspiron 5468'),
            'id_type' => '1',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 14700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell Vostro
        // id 7
        DB::table('product')->insert([
            'name' => 'Dell Vostro 7570',
            'slug' => changeTitle('Dell Vostro 7570'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 30190000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 8
        DB::table('product')->insert([
            'name' => 'Dell Vostro 3568',
            'slug' => changeTitle('Dell Vostro 3568'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 16300000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 9
        DB::table('product')->insert([
            'name' => 'Dell Vostro 5468',
            'slug' => changeTitle('Dell Vostro 5468'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 21000000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 10
        DB::table('product')->insert([
            'name' => 'Dell Vostro 5471',
            'slug' => changeTitle('Dell Vostro 5471'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 24700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 11
        DB::table('product')->insert([
            'name' => 'Dell Vostro 3468',
            'slug' => changeTitle('Dell Vostro 3468'),
            'id_type' => '2',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 10800000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell Lattitude
        // id 12
        DB::table('product')->insert([
            'name' => 'Dell Lattitude 7280',
            'slug' => changeTitle('Dell Lattitude 7280'),
            'id_type' => '3',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 32900000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 13
        DB::table('product')->insert([
            'name' => 'Dell Lattitude E5470',
            'slug' => changeTitle('Dell Lattitude E5470'),
            'id_type' => '3',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 20600000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell XPS
        // id 14
        DB::table('product')->insert([
            'name' => 'Dell XPS 13 9360',
            'slug' => changeTitle('Dell XPS 13 9360'),
            'id_type' => '4',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 46350000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 15
        DB::table('product')->insert([
            'name' => 'Dell XPS 15 9560',
            'slug' => changeTitle('Dell XPS 15 9560'),
            'id_type' => '4',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 48200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Dell Alienware
        // id 16
        DB::table('product')->insert([
            'name' => 'Dell Alienware 17 R4',
            'slug' => changeTitle('Dell Alienware 17 R4'),
            'id_type' => '5',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 40500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Spectre
        // id 17
        DB::table('product')->insert([
            'name' => 'Hp Spectre 13',
            'slug' => changeTitle('Hp Spectre 13'),
            'id_type' => '6',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 41400000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Elitebook
        // id 18
        DB::table('product')->insert([
            'name' => 'Hp Elitebook x360 G2',
            'slug' => changeTitle('Hp Elitebook x360 G2'),
            'id_type' => '7',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 40200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 19
        DB::table('product')->insert([
            'name' => 'Hp Elitebook 1040 G3',
            'slug' => changeTitle('Hp Elitebook 1040 G3'),
            'id_type' => '7',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 27390000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Envy
        // id 20
        DB::table('product')->insert([
            'name' => 'Hp Envy 13',
            'slug' => changeTitle('Hp Envy 13'),
            'id_type' => '8',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 21350000,
            'promotion_price' => 20500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 21
        DB::table('product')->insert([
            'name' => 'Hp Envy 15',
            'slug' => changeTitle('Hp Envy 15'),
            'id_type' => '8',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 23200000,
            'promotion_price' => 21200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Hp Probook
        // id 22
        DB::table('product')->insert([
            'name' => 'Hp Probook 450 G4',
            'slug' => changeTitle('Hp Probook 450 G4'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 15500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 23
        DB::table('product')->insert([
            'name' => 'Hp Probook 450 G3',
            'slug' => changeTitle('Hp Probook 450 G3'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 11700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 24
        DB::table('product')->insert([
            'name' => 'Hp Probook 440 G3',
            'slug' => changeTitle('Hp Probook 440 G3'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 14950000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 25
        DB::table('product')->insert([
            'name' => 'Hp Probook 440 G4',
            'slug' => changeTitle('Hp Probook 440 G4'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 12100000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 26
        DB::table('product')->insert([
            'name' => 'Hp Probook 430 G3',
            'slug' => changeTitle('Hp Probook 430 G3'),
            'id_type' => '9',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 11700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Republic Of Gamers
        // id 27
        DB::table('product')->insert([
            'name' => 'Asus FX503VD',
            'slug' => changeTitle('Asus FX503VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 21490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 28
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Hero GL503VD',
            'slug' => changeTitle('Asus ROG Strix Hero GL503VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 27490000,
            'promotion_price' => 26490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 29
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Scar GL703VD',
            'slug' => changeTitle('Asus ROG Strix Scar GL703VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 27990000,
            'promotion_price' => 26990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 30
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Hero GL503VM',
            'slug' => changeTitle('Asus ROG Strix Hero GL503VM'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 32490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 31
        DB::table('product')->insert([
            'name' => 'Asus ROG GL553VD',
            'slug' => changeTitle('Asus ROG GL553VD'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 24490000,
            'promotion_price' => 22790000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 32
        DB::table('product')->insert([
            'name' => 'Asus ROG Strix Hero GL703VM',
            'slug' => changeTitle('Asus ROG Strix Hero GL703VM'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 39990000,
            'promotion_price' => 38790000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 33
        DB::table('product')->insert([
            'name' => 'Asus ROG GX800VH',
            'slug' => changeTitle('Asus ROG GX800VH'),
            'id_type' => '10',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 145500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Asus Zenbook
        // id 34
        DB::table('product')->insert([
            'name' => 'Asus Zenbook UX430',
            'slug' => changeTitle('Asus Zenbook UX430'),
            'id_type' => '11',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 26990000,
            'promotion_price' => 26200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 35
        DB::table('product')->insert([
            'name' => 'Asus Zenbook 3 Deluxe UX490',
            'slug' => changeTitle('Asus Zenbook 3 Deluxe UX490'),
            'id_type' => '11',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 42490000,
            'promotion_price' => 41200000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Asus Vivobook
        // id 36
        DB::table('product')->insert([
            'name' => 'Asus Vivobook S15',
            'slug' => changeTitle('Asus Vivobook S15'),
            'id_type' => '12',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 16290000,
            'promotion_price' => 15190000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GL
        // id 37
        DB::table('product')->insert([
            'name' => 'Msi GL62 7RDX',
            'slug' => changeTitle('Msi GL62 7RDX'),
            'id_type' => '13',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 21990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GV
        // id 38
        DB::table('product')->insert([
            'name' => 'Msi GV62 7RD',
            'slug' => changeTitle('Msi GV62 7RD'),
            'id_type' => '14',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 23990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 39
        DB::table('product')->insert([
            'name' => 'Msi GV72 7RD',
            'slug' => changeTitle('Msi GV72 7RD'),
            'id_type' => '14',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 25490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 40
        DB::table('product')->insert([
            'name' => 'Msi GV72 7RE',
            'slug' => changeTitle('Msi GV72 7RE'),
            'id_type' => '14',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 25990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GP
        // id 41
        DB::table('product')->insert([
            'name' => 'Msi GP72M 7REX',
            'slug' => changeTitle('Msi GP72M 7REX'),
            'id_type' => '15',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 27990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 42
        DB::table('product')->insert([
            'name' => 'Msi GP62M 7REX',
            'slug' => changeTitle('Msi GP62M 7REX'),
            'id_type' => '15',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 29490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GE
        // id 43
        DB::table('product')->insert([
            'name' => 'Msi GE63VR 7RE',
            'slug' => changeTitle('Msi GE63VR 7RE'),
            'id_type' => '16',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 40990000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 44
        DB::table('product')->insert([
            'name' => 'Msi GE73VR 7RF',
            'slug' => changeTitle('Msi GE73VR 7RF'),
            'id_type' => '16',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 42690000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GS
        // id 45
        DB::table('product')->insert([
            'name' => 'Msi GS63VR 7RF',
            'slug' => changeTitle('Msi GS63VR 7RF'),
            'id_type' => '17',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 53200000,
            'promotion_price' => 50900000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Msi GT
        // id 46
        DB::table('product')->insert([
            'name' => 'Msi GT83VR 7RF Titan',
            'slug' => changeTitle('Msi GT83VR 7RF Titan'),
            'id_type' => '18',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 122900000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 47
        DB::table('product')->insert([
            'name' => 'Msi GT75VR 7RE Titan',
            'slug' => changeTitle('Msi GT75VR 7RE Titan'),
            'id_type' => '18',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 64490000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Asprie
        // id 48
        DB::table('product')->insert([
            'name' => 'Acer Aspire 7 A715',
            'slug' => changeTitle('Acer Aspire 7 A715'),
            'id_type' => '19',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 17550000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Nitro
        // id 49
        DB::table('product')->insert([
            'name' => 'Acer Nitro 5 AN515',
            'slug' => changeTitle('Acer Nitro 5 AN515'),
            'id_type' => '20',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 22950000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Spin
        // id 50
        DB::table('product')->insert([
            'name' => 'Acer Spin 5 SP513',
            'slug' => changeTitle('Acer Spin 5 SP513'),
            'id_type' => '21',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 19800000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Acer Asprie V Nitro
        // id 51
        DB::table('product')->insert([
            'name' => 'Acer VX5 591G',
            'slug' => changeTitle('Acer VX5 591G'),
            'id_type' => '22',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 23900000,
            'promotion_price' => 22100000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Lenovo Thinkpad
        // id 52
        DB::table('product')->insert([
            'name' => 'Lenovo Thinkpad E560',
            'slug' => changeTitle('Lenovo Thinkpad E560'),
            'id_type' => '23',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 11500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Macbook Pro
        // id 53
        DB::table('product')->insert([
            'name' => 'Macbook Pro 2017',
            'slug' => changeTitle('Macbook Pro 2017'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 48500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 54
        DB::table('product')->insert([
            'name' => 'Macbook Pro Retina 2017',
            'slug' => changeTitle('Macbook Pro Retina 2017'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 34500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 55
        DB::table('product')->insert([
            'name' => 'Macbook Pro 2016',
            'slug' => changeTitle('Macbook Pro 2016'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 44500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 56
        DB::table('product')->insert([
            'name' => 'Macbook Pro Retina 2016',
            'slug' => changeTitle('Macbook Pro Retina 2016'),
            'id_type' => '24',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 31800000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // Macbook Air
        // id 57
        DB::table('product')->insert([
            'name' => 'Macbook Air 2017',
            'slug' => changeTitle('Macbook Air 2017'),
            'id_type' => '25',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 20500000,
            'promotion_price' => 19500000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);

        // id 58
        DB::table('product')->insert([
            'name' => 'Macbook Air 2016',
            'slug' => changeTitle('Macbook Air 2016'),
            'id_type' => '25',
            'description' => 'Intel Core i5-8250U, RAM 4GB DDR4, 1TB HDD, AMD?? Radeon 530 2GB GDDR5, 15.6 inch FHD (1920x1080), Free DOS',
            'detail' => '<p><b>CPU:</b> Intel Core i5-8250U (1.60GHz Up to 3.40 GHz, 4Cores, 8Threads, 6MB Cache, FSB 4GT/s)</p><p><b>RAM:</b> GB DDR4 bus 2400Mhz</p><p><b>??? c???ng:</b> 1TB HDD 5400rpm</p><p><b>VGA:</b>   AMD?? Radeon 530 2GB GDDR5 + Intel UHD Graphics 620</p><p><b>M??n h??nh:</b> 15.6 inch HD (1920x1080)</p><p><b>K???t n???i:</b> 802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 1x1</p><p><b>T??ch h???p:</b> USB 3.1 Gen 1, USB2.0, HDMI??? 1.4b, Noble lock, 3-in-1 SD Media Card Reader (SD, SDHC, SDXC)</p><p><b>Tr???ng l?????ng:</b> 2.2 Kg</p><p><b>Pin:</b> 3 Cells</p><p><b>H??? ??i???u h??nh:</b> Windows 10 b???n quy???n.</p>',
            'unit_price' => 19700000,
            'quantity' => mt_rand(10, 20),
            'quantity_sold' => mt_rand(0, 10),
            'hot' => mt_rand(0, 1),
        ]);
    }
}

class ReviewProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $count = count($products);

        for ($i = 1; $i <= $count; $i++) {
            $product = Product::find($i);

            for ($j = 0; $j < 7; $j++) {
                DB::table('review_product')->insert([
                    'name' => 'User' . $j,
                    'email' => 'user' . $j . '@mymail.com',
                    'content' => 's???n ph???m t???t, ch???t l?????ng, gia h???p l??',
                    'rating' => mt_rand(2, 5),
                    'id_product' => $i,
                ]);
            }

            $reviews = $product->reviewProduct;
            $totalReview = count($reviews);
            $totalRating = 0;
            foreach ($reviews as $item) {
                $totalRating += $item['rating'];
            }

            $product->rating = $totalRating / $totalReview;
            $product->save();
        }
    }
}

class ImageProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $count = count($products);

        for ($i = 1; $i <= $count; $i++) {
            $product = Product::find($i);

            for ($j = 1; $j <= 4; $j++) {
                DB::table('image_product')->insert([
                    'name' => $product->slug . '-' . $j . '.jpg',
                    'id_product' => $i,
                ]);
            }
        }
    }
}

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title_gioithieu' => 'LAPTOP-CENTRE CHUY??N B??N L??? LAPTOP UY T??N',
            'title_lienhe' => 'Th??ng tin li??n h???',
            'gioithieu' => '<h2><strong>I. GI???I THI???U CHUNG</strong></h2>
 
            <ul>
                <li><strong>Laptop-</strong><strong>Centre</strong>&nbsp;l&agrave; m???t trong nh???ng ????n v??? ho???t ?????ng trong l??nh v???c kinh doanh d???ch v??? t???i th&agrave;nh ph??? ??&agrave; N???ng&nbsp;trong l??nh v???c kinh doanh c&aacute;c d&ograve;ng s???n ph???m laptop, linh ki???n v&agrave; bapr h&agrave;nh s???a ch???a laptop. Th&agrave;nh l???p t??? n??m 2017 ?????n nay,<strong>&nbsp;Laptop-</strong><strong>Centre&nbsp;</strong>??&atilde; t???o d???ng ???????c ch??? ?????ng v???ng ch???c tr&ecirc;n th??? tr?????ng v&agrave; tr??? th&agrave;nh c&aacute;i t&ecirc;n quen thu???c ?????i v???i kh&aacute;ch h&agrave;ng.&nbsp;<br />
                <br />
                <img src="https://khoahocphattrien.vn/Images/Uploaded/Share/2020/05/28/2Anh-QT-6.jpg" /><br />
                &nbsp;</li>
                <li>Sau 2 n??m th&agrave;nh l???p,&nbsp;<strong>Laptop-</strong><strong>Centre&nbsp;</strong>lu&ocirc;n n??? l???c h???t m&igrave;nh h?????ng ?????n c???a h&agrave;ng n??ng ?????ng, uy t&iacute;n ????? ??em ?????n d???ch v??? t???t nh???t ?????n v???i kh&aacute;ch h&agrave;ng, v???i t&acirc;m ni???m m???i kh&aacute;ch h&agrave;ng khi t&igrave;m ki???m ?????n ch&uacute;ng t&ocirc;i kh&ocirc;ng ch??? tr???i nghi???m d???ch v??? mua b&aacute;n th&ocirc;ng th?????ng m&agrave; s??? c???m nh???n th???y s??? kh&aacute;c bi???t &ndash; tin c???y, an t&acirc;m ?????n t??? ch???t l?????ng s???n ph???m, ch??? ????? h???u m&atilde;i.&nbsp;<strong>Laptop-</strong><strong>Centre&nbsp;</strong>cam k???t c&aacute;c s???n ph???m lu&ocirc;n ?????m b???o ch???t l?????ng cao v&agrave; ngu???n g???c r&otilde; r&agrave;ng, gi&aacute; c???nh tranh tr&ecirc;n th??? tr?????ng, nhi???u ??u ??&atilde;i h???p d???n, b???o h&agrave;nh uy t&iacute;n v???i ch??? ????? h???u m&atilde;i tr???n ?????i.Ch&uacute;ng t&ocirc;i t??? h&agrave;o l&agrave; m???t trong nh???ng ????n v??? c&oacute; th????ng hi???u, uy t&iacute;n v&agrave; ?????ng ?????u v??? ho???t ?????ng kinh doanh c&aacute;c s???n ph???m Laptop, ph??? ki???n uy t&iacute;n t???i Vi???t Nam.</li>
                <li>Quy t??? ?????i ng?? nh&acirc;n vi&ecirc;n tr??? tu???i, l&agrave;m vi???c chuy&ecirc;n nghi???p, k??? lu???t, th&acirc;n thi???n, chuy&ecirc;n m&ocirc;n, nhi???t huy???t, t???n t???y v???i kh&aacute;ch h&agrave;ng, khi t&igrave;m ?????n&nbsp;<strong>Laptop-</strong><strong>Centre</strong>&nbsp;c&aacute;c b???n s??? c???m th???y h&agrave;i l&ograve;ng khi ti???p x&uacute;c tr???c ti???p t???i c???a h&agrave;ng ho???c qua ??i???n tho???i, nh&acirc;n vi&ecirc;n t?? v???n c???a ch&uacute;ng t&ocirc;i s??? h?????ng d???n v&agrave; cung c???p cho kh&aacute;ch h&agrave;ng nh???ng th&ocirc;ng tin h???u &iacute;ch nh???t v???i s??? nhi???t th&agrave;nh v&agrave; th&acirc;n thi???n. ??i theo ph????ng ch&acirc;m &ldquo;Ki???n t???o ch???t l?????ng &ndash; K???t n???i s??? chia&rdquo;, ch&uacute;ng t&ocirc;i lu&ocirc;n l???ng nghe v&agrave; quan t&acirc;m t???i nhu c???u c???a kh&aacute;ch h&agrave;ng, ?????ng th???i kh&ocirc;ng ng???ng n&acirc;ng cao ch???t l?????ng d???ch v??? m???i ng&agrave;y.</li>
            </ul>
            
            <h2><strong>II. C&Aacute;C D???CH V??? CUNG C???P</strong></h2>
            
            <ul>
                <li>Hi???n nay, h??? th???ng c???a h&agrave;ng&nbsp;<strong>Laptop-</strong><strong>Centre</strong>&nbsp;??&atilde; ph&aacute;t tri???n v???ng m???nh t???i ??&agrave; N???ng, c&aacute;c t???nh th&agrave;nh kh&aacute;c v&agrave; t???p trung c&aacute;c d???ch v??? ch&iacute;nh sau:</li>
            </ul>
            
            <ul>
                <li>
                <ul>
                    <li>Ph&acirc;n ph???i v&agrave; b&aacute;n c&aacute;c s???n ph???m laptop c??, ?????c bi???t l&agrave; c&aacute;c s???n ph???m d&ograve;ng Pro Business v&agrave; Mobile Workstation.</li>
                    <li>D???ch v??? c&agrave;i ?????t ph???n m???m, b???o d?????ng, v??? sinh m&aacute;y ?????nh k???</li>
                    <li>D???ch v??? s???a ch???a, thay th??? linh ki???n</li>
                    <li>D???ch v??? n&acirc;ng c???p c???u h&igrave;nh m&aacute;y c??</li>
                    <li>D???ch v??? n&acirc;ng c???p, ?????i m&aacute;y c?? l???y m&aacute;y m???i h??n</li>
                </ul>
                </li>
            </ul>
            
            <h2><strong>III. CH????NG TR&Igrave;NH B???O H&Agrave;NH TR???N ?????I</strong></h2>
            
            <ul>
                <li><strong>Laptop-</strong><strong>Centre</strong>&nbsp;tri???n khai g&oacute;i ch????ng tr&igrave;nh &ldquo;tr???n ?????i b&ecirc;n nhau (l???n h??n 88 th&aacute;ng)&rdquo; nh?? m???t l???i cam k???t h??? tr??? tr???n v???n v&ograve;ng ?????i s???n ph???m m&agrave;<strong><a href="https://laptopngoai.com/">&nbsp;</a>Laptop-</strong><strong>Centre</strong>&nbsp;b&aacute;n ra t???i kh&aacute;ch h&agrave;ng</li>
            </ul>
            
            <h3><strong>1. Duy tr&igrave; ho???t ?????ng c???a m&aacute;y t&iacute;nh ??? t&igrave;nh tr???ng t???t nh???t</strong></h3>
            
            <ul>
                <li>B???o h&agrave;nh ph???n m???m tr???n ?????i</li>
                <li>Mi???n ph&iacute; v??? sinh, b???o d?????ng laptop 06 th&aacute;ng m???t l???n tr???n ?????i m&aacute;y</li>
            </ul>
            
            <h3><strong>2. Kh???c ph???c s??? c??? v???i chi ph&iacute; r??? nh???t</strong></h3>
            
            <ul>
                <li>C??ng nh?? chi???c xe m&aacute;y c???a b???n, ??i m???t th???i gian ph???i thay s??m l???p, nh&ocirc;ng x&iacute;ch, d???u m??? th&igrave; m&aacute;y t&iacute;nh c??ng v???y. M???i n??m b???n s??? ph???i b??? ra m???t kho???n chi ph&iacute; nh??? ????? thay th??? c&aacute;c b??? ph???n hao m&ograve;n nh?? b&agrave;n ph&iacute;m, pin, ??? c???ng&hellip;Th???u hi???u ??i???u ??&oacute;, ch&uacute;ng t&ocirc;i ????a ra ch????ng tr&igrave;nh h??? tr???:</li>
                <li>T???ng 28% ph&iacute; s???a ch???a l???n ?????u ti&ecirc;n sau khi ??&atilde; h???t th???i h???n b???o h&agrave;nh t???i h??? th???ng&nbsp;<strong>Laptop-</strong><strong>Centre</strong></li>
                <li>T???ng 18% ph&iacute; s???a ch???a nh???ng l???n ti???p theo trong 88 th&aacute;ng t???i h??? th???ng&nbsp;<strong>Laptop-</strong><strong>Centre</strong></li>
            </ul>
            
            <h3><strong>3. N&acirc;ng c???p c???u h&igrave;nh m&aacute;y t&iacute;nh c??</strong></h3>
            
            <ul>
                <li>T???ng 2,8% gi&aacute; linh ki???n thay th??? ho???c n&acirc;ng c???p cho m&aacute;y trong v&ograve;ng 88 th&aacute;ng t???i h??? th???ng&nbsp;<strong>Laptop-</strong><strong>Centre</strong></li>
            </ul>
            
            <h3><strong>4. N&acirc;ng c???p, ?????i l???y m&aacute;y ?????i cao h??n</strong></h3>
            
            <ul>
                <li>Khi c&oacute; nhu c???u n&acirc;ng c???p m&aacute;y, Qu&yacute; kh&aacute;ch ?????i m&aacute;y ??ang s??? d???ng l???y m&aacute;y kh&aacute;c ?????i cao h??n s??? ???????c nh&acirc;n g???p 3 l???n s??? t&iacute;ch ??i???m c???a chi???c m&aacute;y ??ang s??? d???ng ??&oacute; v&agrave; ???????c tr??? ngay v&agrave;o ho&aacute; ????n mua m&aacute;y ti???p theo.</li>
                <li>V???i g&oacute;i d???ch v??? n&agrave;y, ch???c ch???n r???ng, m???i chi???c laptop ???????c mua t???i&nbsp;<strong>Laptop-</strong><strong>Centre</strong><a href="https://laptopngoai.com/">&nbsp;</a>s??? ?????ng h&agrave;nh v???i ch??? nh&acirc;n l&acirc;u d&agrave;i v&agrave; b???n b???, tr??? th&agrave;nh &ldquo;ng?????i b???n tri k???&rdquo; c&ugrave;ng b???n g???t h&aacute;i m???i th&agrave;nh qu??? trong h???c t???p v&agrave; s??? nghi???p.</li>
                <li>Xin ch&acirc;n th&agrave;nh c???m ??n qu&yacute; kh&aacute;ch ??&atilde; ???ng h???&nbsp;<strong>Laptop-</strong><strong>Centre</strong>.&nbsp;S??? h&agrave;i l&ograve;ng c???a qu&yacute; kh&aacute;ch ch&iacute;nh l&agrave; ni???m vui v&agrave; t???o ?????ng l???c gi&uacute;p ch&uacute;ng t&ocirc;i kh&ocirc;ng ng???ng ho&agrave;n thi???n v&agrave; ph&aacute;t tri???n d???ch v??? h??n n???a!</li>
            </ul>',
            'diachi' => '218 Ho??ng V??n Th??i, H??a Kh??nh Nam, Li??n Chi???u, ???? N???ng',
            'email' => 'thanhnguyenduyy@gmail.com',
            'phone' => '0843-456-567',
            'created_at' => '2021-09-04 21:55:51',
            'updated_at' => '2021-09-04 21:55:51',
        ]);
    }
}
