<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorOFBooksTableInsert::class);
        $this->call(CategoryTableInsert::class);
        $this->call(ProductTableInsert::class);
        $this->call(ImageTableInsert::class);
    	$this->call(UsersTableInsert::class);

    }


}
/**
* 
*/
/**
* 
*/
class UsersTableInsert extends Seeder
{
	
	public function run()
	{
		DB::table('users')->insert([
			array('name' => 'toan','password'=>Hash::make(12345),'email' => 'toan@gmail.com')
		]);	
			
	}
}
class CategoryTableInsert extends Seeder
{
	
	public function run()
	{
		DB::table('categories')->insert([
			array('name'=>'Art, Architecture'),
			array('name'=>'Photography'),
			array('name'=>'Bibles & Bibles Studies'),
			array('name'=>'Biographies'),
			array('name'=>'Businees & Money'),
			array('name'=>'Children\'s Book'),
			array('name'=>'Computing & Internet'),
			array('name'=>'Cookbooks, Food & Wine'),
			array('name'=>'Craft & Hobbies'),
			array('name'=>'Dies & Hearth'),
			array('name'=>'Education & Teaching'),
			array('name'=>'Fiction & Literature'),
			array('name'=>'Graphic Novels'),
			array('name'=>'History'),
			array('name'=>'Home & Garden'),
			array('name'=>'Humor'),
			array('name'=>'Libros en espacol'),
			array('name'=>'Medicine'),
			array('name'=>'Mystery & Crime'),
			array('name'=>'Nonfiction'),
			array('name'=>'Politics & Current Events'),
			array('name'=>'Psychology')
			]);
	}	
}
class ProductTableInsert extends Seeder
{	
	public function run()
	{
		DB::table('products')->insert([
			array('name'=>'Harry Potter and the Chamber of Secrets','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 1, 'image_link' =>'http://localhost:8000/image/bi_pr_01.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
			array('name'=>'The Chronicles of Narnia','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 1, 'image_link' =>'http://localhost:8000/image/bi_pr_02.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
			array('name'=>'The Mayor\'s Tongue by Nathaniel Rich','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 1, 'image_link' =>'http://localhost:8000/image/bi_pr_03.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
			array('name'=>'The Divine Comedy by Dante','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 2, 'image_link' =>'http://localhost:8000/image/bi_pr_03.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
			array('name'=>'Seven Novels by Jules Verne','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 2, 'image_link' =>'http://localhost:8000/image/bi_pr_04.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
			array('name'=>'Seven Novels','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 2, 'image_link' =>'http://localhost:8000/image/bi_pr_05.jpg', 'description' => 'And you know what? Books always have some notes of mysticism. Just remember that special atmosphere of solitude in the library or in the old book-store, it seemed that imponderable scent of rational identity is in the air... The unique smell of old and new pages, soft cover and so on. Yeah, they are worth our admiring. On-line book stores can offer you a great assortment of books.', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
			array('name'=>'Sin City','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 3, 'image_link' =>'http://localhost:8000/image/bi_pr_06.jpg', 'description' => 'The unique smell of old and new pages, soft cover and so on. Yeah, they are worth our admiring. But those times are long gone and we live in 21 century and the most revolutionary thing that had happened is that books have lost their natural view. Books became more available. On-line book stores can offer you a great assortment of books. Can you imagine a world of knowledge without limits?', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),
			array('name'=>'The Circle Series','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 3, 'image_link' =>'http://localhost:8000/image/bi_pr_07.jpg', 'description' => 'But those times are long gone and we live in 21 century and the most revolutionary thing that had happened is that books have lost their natural view. Books became more available. On-line book stores can offer you a great assortment of books. Can you imagine a world of knowledge without limits? You can get everything you want and all you have to do is just visit our store.', 'price'=> 100000, 'quantity'=>50, 'status'=>'true'),		
			array('name'=>'Rising Stars Compendium','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 3, 'image_link' =>'http://localhost:8000/image/bi_pr_08.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
			array('name'=>'Outliers by Malcolm Gladwell','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 4, 'image_link' =>'http://localhost:8000/image/bi_pr_09.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
			array('name'=>'Harry Potter and the Sorcerer\'s Stone','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 4, 'image_link' =>'http://localhost:8000/image/bi_pr_10.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
			array('name'=>'Harry Potter and the Prizoner of Azkaban','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 4, 'image_link' =>'http://localhost:8000/image/bi_pr_11.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
			array('name'=>'Harry Potter And The Deathly Hallows','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 5, 'image_link' =>'http://localhost:8000/image/bi_pr_12.jpg', 'description' => '', 'price'=> 100000, 'quantity'=>50, 'status'=>'featured'),
			array('name'=>'20,000 Leagues Under the Sea','author_id' => 1, 'publisher_id' => 1, 'pages' =>100, 'category_id' => 5, 'image_link' =>'http://localhost:8000/image/bi_pr_13.jpg', 'description' => 'Books became more available. On-line book stores can offer you a great assortment of books. Can you imagine a world of knowledge without limits? You can get everything you want and all you have to do is just visit our store. We have tremendous variety of products, here you can find the world famous bestsellers and the books of unknown authors. Yeah, they are worth our admiring.', 'price'=> 100000, 'quantity'=>50, 'status'=>'true')
			]);
		
	}	
}

class ImageTableInsert extends Seeder
{	
	public function run()
	{
		DB::table('images')->insert([			
			array('link' => 'http://localhost:8000/image/04-1-large.jpg','product_id'=>1),
			array('link' => 'http://localhost:8000/image/04-2-large.jpg','product_id'=>1),
			array('link' => 'http://localhost:8000/image/04-3-large.jpg','product_id'=>1),
			array('link' => 'http://localhost:8000/image/04-1-medium.jpg','product_id'=>1),
			array('link' => 'http://localhost:8000/image/04-2-medium.jpg','product_id'=>1),
			array('link' => 'http://localhost:8000/image/04-3-medium.jpg','product_id'=>1),

			array('link' => 'http://localhost:8000/image/05-1-large.jpg','product_id'=>2),
			array('link' => 'http://localhost:8000/image/05-2-large.jpg','product_id'=>2),
			array('link' => 'http://localhost:8000/image/05-3-large.jpg','product_id'=>2),
			array('link' => 'http://localhost:8000/image/05-1-medium.jpg','product_id'=>2),
			array('link' => 'http://localhost:8000/image/05-2-medium.jpg','product_id'=>2),
			array('link' => 'http://localhost:8000/image/05-3-medium.jpg','product_id'=>2),

			array('link' => 'http://localhost:8000/image/06-1-large.jpg','product_id'=>3),
			array('link' => 'http://localhost:8000/image/06-2-large.jpg','product_id'=>3),
			array('link' => 'http://localhost:8000/image/06-3-large.jpg','product_id'=>3),
			array('link' => 'http://localhost:8000/image/06-1-medium.jpg','product_id'=>3),
			array('link' => 'http://localhost:8000/image/06-2-medium.jpg','product_id'=>3),
			array('link' => 'http://localhost:8000/image/06-3-medium.jpg','product_id'=>3),

			array('link' => 'http://localhost:8000/image/07-1-large.jpg','product_id'=>4),
			array('link' => 'http://localhost:8000/image/07-2-large.jpg','product_id'=>4),
			array('link' => 'http://localhost:8000/image/07-3-large.jpg','product_id'=>4),
			array('link' => 'http://localhost:8000/image/07-1-medium.jpg','product_id'=>4),
			array('link' => 'http://localhost:8000/image/07-2-medium.jpg','product_id'=>4),
			array('link' => 'http://localhost:8000/image/07-3-medium.jpg','product_id'=>4),

			array('link' => 'http://localhost:8000/image/08-1-large.jpg','product_id'=>5),
			array('link' => 'http://localhost:8000/image/08-2-large.jpg','product_id'=>5),
			array('link' => 'http://localhost:8000/image/08-3-large.jpg','product_id'=>5),
			array('link' => 'http://localhost:8000/image/08-1-medium.jpg','product_id'=>5),
			array('link' => 'http://localhost:8000/image/08-2-medium.jpg','product_id'=>5),
			array('link' => 'http://localhost:8000/image/08-3-medium.jpg','product_id'=>5),
			array('link' => 'http://localhost:8000/image/09-1-large.jpg','product_id'=>6),
			array('link' => 'http://localhost:8000/image/09-2-large.jpg','product_id'=>6),
			array('link' => 'http://localhost:8000/image/09-3-large.jpg','product_id'=>6),
			array('link' => 'http://localhost:8000/image/09-1-medium.jpg','product_id'=>6),
			array('link' => 'http://localhost:8000/image/09-2-medium.jpg','product_id'=>6),
			array('link' => 'http://localhost:8000/image/09-3-medium.jpg','product_id'=>6),

			array('link' => 'http://localhost:8000/image/10-1-large.jpg','product_id'=>7),
			array('link' => 'http://localhost:8000/image/10-2-large.jpg','product_id'=>7),
			array('link' => 'http://localhost:8000/image/10-3-large.jpg','product_id'=>7),
			array('link' => 'http://localhost:8000/image/10-1-medium.jpg','product_id'=>7),
			array('link' => 'http://localhost:8000/image/10-2-medium.jpg','product_id'=>7),
			array('link' => 'http://localhost:8000/image/10-3-medium.jpg','product_id'=>7),

			array('link' => 'http://localhost:8000/image/11-1-large.jpg','product_id'=>8),
			array('link' => 'http://localhost:8000/image/11-2-large.jpg','product_id'=>8),
			array('link' => 'http://localhost:8000/image/11-3-large.jpg','product_id'=>8),
			array('link' => 'http://localhost:8000/image/11-1-medium.jpg','product_id'=>8),
			array('link' => 'http://localhost:8000/image/11-2-medium.jpg','product_id'=>8),
			array('link' => 'http://localhost:8000/image/11-3-medium.jpg','product_id'=>8),

			array('link' => 'http://localhost:8000/image/12-1-large.jpg','product_id'=>9),
			array('link' => 'http://localhost:8000/image/12-2-large.jpg','product_id'=>9),
			array('link' => 'http://localhost:8000/image/12-3-large.jpg','product_id'=>9),
			array('link' => 'http://localhost:8000/image/12-1-medium.jpg','product_id'=>9),
			array('link' => 'http://localhost:8000/image/12-2-medium.jpg','product_id'=>9),
			array('link' => 'http://localhost:8000/image/12-3-medium.jpg','product_id'=>9),

			array('link' => 'http://localhost:8000/image/13-1-large.jpg','product_id'=>10),
			array('link' => 'http://localhost:8000/image/13-2-large.jpg','product_id'=>10),
			array('link' => 'http://localhost:8000/image/13-3-large.jpg','product_id'=>10),
			array('link' => 'http://localhost:8000/image/13-1-medium.jpg','product_id'=>10),
			array('link' => 'http://localhost:8000/image/13-2-medium.jpg','product_id'=>10),
			array('link' => 'http://localhost:8000/image/13-3-medium.jpg','product_id'=>10),

			array('link' => 'http://localhost:8000/image/14-1-large.jpg','product_id'=>11),
			array('link' => 'http://localhost:8000/image/14-2-large.jpg','product_id'=>11),
			array('link' => 'http://localhost:8000/image/14-3-large.jpg','product_id'=>11),
			array('link' => 'http://localhost:8000/image/14-1-medium.jpg','product_id'=>11),
			array('link' => 'http://localhost:8000/image/14-2-medium.jpg','product_id'=>11),
			array('link' => 'http://localhost:8000/image/14-3-medium.jpg','product_id'=>11),

			array('link' => 'http://localhost:8000/image/15-1-large.jpg','product_id'=>12),
			array('link' => 'http://localhost:8000/image/15-2-large.jpg','product_id'=>12),
			array('link' => 'http://localhost:8000/image/15-3-large.jpg','product_id'=>12),
			array('link' => 'http://localhost:8000/image/15-1-medium.jpg','product_id'=>12),
			array('link' => 'http://localhost:8000/image/15-2-medium.jpg','product_id'=>12),
			array('link' => 'http://localhost:8000/image/15-3-medium.jpg','product_id'=>12),

			array('link' => 'http://localhost:8000/image/16-1-large.jpg','product_id'=>13),
			array('link' => 'http://localhost:8000/image/16-2-large.jpg','product_id'=>13),
			array('link' => 'http://localhost:8000/image/16-3-large.jpg','product_id'=>13),
			array('link' => 'http://localhost:8000/image/16-1-medium.jpg','product_id'=>13),
			array('link' => 'http://localhost:8000/image/16-2-medium.jpg','product_id'=>13),
			array('link' => 'http://localhost:8000/image/16-3-medium.jpg','product_id'=>13),

			array('link' => 'http://localhost:8000/image/17-1-large.jpg','product_id'=>14),
			array('link' => 'http://localhost:8000/image/17-2-large.jpg','product_id'=>14),
			array('link' => 'http://localhost:8000/image/17-3-large.jpg','product_id'=>14),
			array('link' => 'http://localhost:8000/image/17-1-medium.jpg','product_id'=>14),
			array('link' => 'http://localhost:8000/image/17-2-medium.jpg','product_id'=>14),
			array('link' => 'http://localhost:8000/image/17-3-medium.jpg','product_id'=>14),

			array('link' => 'http://localhost:8000/image/18-1-large.jpg','product_id'=>15),
			array('link' => 'http://localhost:8000/image/18-2-large.jpg','product_id'=>15),
			array('link' => 'http://localhost:8000/image/18-3-large.jpg','product_id'=>15),
			array('link' => 'http://localhost:8000/image/18-1-medium.jpg','product_id'=>15),
			array('link' => 'http://localhost:8000/image/18-2-medium.jpg','product_id'=>15),
			array('link' => 'http://localhost:8000/image/18-3-medium.jpg','product_id'=>15),

			array('link' => 'http://localhost:8000/image/19-1-large.jpg','product_id'=>16),
			array('link' => 'http://localhost:8000/image/19-2-large.jpg','product_id'=>16),
			array('link' => 'http://localhost:8000/image/19-3-large.jpg','product_id'=>16),
			array('link' => 'http://localhost:8000/image/19-1-medium.jpg','product_id'=>16),
			array('link' => 'http://localhost:8000/image/19-2-medium.jpg','product_id'=>16),
			array('link' => 'http://localhost:8000/image/19-3-medium.jpg','product_id'=>16),

			array('link' => 'http://localhost:8000/image/20-1-large.jpg','product_id'=>17),
			array('link' => 'http://localhost:8000/image/20-2-large.jpg','product_id'=>17),
			array('link' => 'http://localhost:8000/image/20-3-large.jpg','product_id'=>17),
			array('link' => 'http://localhost:8000/image/20-1-medium.jpg','product_id'=>17),
			array('link' => 'http://localhost:8000/image/20-2-medium.jpg','product_id'=>17),
			array('link' => 'http://localhost:8000/image/20-3-medium.jpg','product_id'=>17),

			array('link' => 'http://localhost:8000/image/21-1-large.jpg','product_id'=>18),
			array('link' => 'http://localhost:8000/image/21-2-large.jpg','product_id'=>18),
			array('link' => 'http://localhost:8000/image/21-3-large.jpg','product_id'=>18),
			array('link' => 'http://localhost:8000/image/21-1-medium.jpg','product_id'=>18),
			array('link' => 'http://localhost:8000/image/21-2-medium.jpg','product_id'=>18),
			array('link' => 'http://localhost:8000/image/21-3-medium.jpg','product_id'=>18)
			]);
	}
}

class AuthorOFBooksTableInsert extends Seeder
{	
	public function run()
	{
		DB::table('authors')->insert([
			array('name'=>'J. K. Rowling','description' => 'Joanne "Jo" Rowling, OBE, FRSL, pen names J. K. Rowling and Robert Galbraith, is a British novelist, screenwriter and film producer best known as the author of the Harry Potter fantasy series.'),
			array('name'=>'Daniel A. Dombrowski','description' => 'Daniel A. Dombrowski is Professor of Philosophy at Seattle University. He is the author of seventeen books and over a hundred articles in scholarly journals in philosophy, theology, classics, and literature.'),						
			array('name'=>'Anne Frank','description' => 'Annelies Marie Frank (German pronunciation; Dutch pronunciation; 12 June 1929 – February or March 1945) was a German-born diarist and writer. One of the most discussed Jewish victims of the Holocaust, she gained fame posthumously following the publication of her diary, The Diary of a Young Girl (originally Het Achterhuis; English: The Secret Annex), which documents her life in hiding from 1942 to 1944, during the German occupation of the Netherlands in World War II. It is one of the world\'s most widely known books and has been the basis for several plays and films.'),						
			array('name'=>'Rafael Sabatini','description' => 'Rafael Sabatini (1875 – 1950) được coi là chàng hiệp sĩ cuối cùng của thể loại tiểu thuyết "áo choàng và thanh kiếm".Ông mang trong mình hai dòng máu Anh và Ý. Thành danh với những câu chuyện phiêu lưu đầy kịch tính và lãng mạn, ông là một trong những nhà văn nổi tiếng và được hâm mộ nhất khi còn sinh thời. Những cuộc phiêu lưu dưới ngòi bút của ông không chỉ làm say mê bạn đọc mà còn tạo cảm hứng cho sự ra đời của hàng loạt phim điện ảnh. Ảnh hưởng của ông thậm chí còn kéo dài đến sau này.'),						
			array('name'=>'Vikas Swarup','description' => 'Sinh ra ở Allahabad, Ấn Độ, trong một gia đình gồm các luật sư và cố vấn pháp luật, tác giả Vikas Swarup đã lớn lên giữa những cuộc nói chuyện quanh bàn ăn về các thẩm phán và các vụ án xét xử tại tòa. “Một thuận lợi của việc lớn lên trong môi trường đó là tôi có lẽ là đứa trẻ bảy tuổi duy nhất ở Allahabad có thể đánh vần từ ‘jurisprudence’[1] và ‘habeas corpus’[2]!” nhà ngoại giao người Ấn Độ từng công tác tại Thổ Nhĩ Kỳ, Mỹ, Ethiopia và Vương quốc Anh nói. Khi còn nhỏ, Vikas Swarup mơ ước sau này trở thành phi công hoặc nhà du hành vũ trụ vì mẹ ông đã loại bỏ khả năng nối nghiệp gia đình bằng một tối hậu thư ngắn gọn: “Trong [ba] đứa con trai của tôi, đứa nào trở thành luật sư là tôi tống cổ ra khỏi nhà ngay.” Sự nghiệp khoa học cũng bị bác bỏ một cách tương tự bởi những trải nghiệm khiến người ta nản lòng thối chí liên quan đến các cuộc giải phẫu ếch trong phòng thí nghiệm và những bộ sách hàng nghìn trang như “Các nguyên lý của vật lý lý thuyết”. Ý tưởng trở thành một nhân viên công vụ dần được củng cố và Vikas tốt nghiệp đại học chuyên ngành Lịch sử hiện đại, Tâm lý và Triết học, rồi cuối cùng nhận công tác ở Bộ Ngoại giao Ấn Độ. Theo lời bộc bạch của Vikas Swarup, mặc dù Q&A là cuốn tiểu thuyết đầu tiên của ông được xuất bản nhưng từ nhỏ đến lớn ông đã luôn là người có tư duy sáng tạo. Trí tưởng tượng quá phong phú của Swarup bước đầu được bộc lộ trong bài văn do giáo viên lớp Sáu của ông giao cho viết về một sự việc kém may mắn. Trong khi những đứa trẻ khác viết về những sự cố chẳng có gì đặc biệt như gặp một con mèo đen đi ngang qua đường, Vikas thuật lại những gian nan thử thách của ba tên cướp người Nhật bị kẹt trong một trận động đất sau khi thực hiện trót lọt một vụ cướp nhà băng. Hồi còn đi học, Vikas đã thử sức với một truyện khác mang tên Tự truyện của một con lừa trước khi bắt tay vào viết cuốn tiểu thuyết gặt hái được thành công trên khắp thế giới, cuốn Q&A.'),											
			array('name'=>'Erin Hunter','description' => 'Erin Hunter là tên bút danh chung của một nhóm 6 tác giả gồm có Victoria Holmes, Cherith Baldry, Kate Cary, Tui Sutherland, Gillian Philip và Inbali Iserles. Họ được truyền cảm hứng từ tình yêu động vật và sự quyến rũ mê hoặc của thế giới thiên nhiên hoang dã dữ dội. Dù luôn tôn trọng thiên nhiên, Erin vẫn luôn tạo nên những lý giải hoang đường về hành vi của động vật. Erin Hunter cũng đồng thời là tác giả của hai bộ truyện bán chạy nhất là Seekers và Survivor. ')
			]);
	}	
}
