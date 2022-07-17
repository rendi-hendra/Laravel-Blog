<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\posting;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User

        User::create([
            'name' => 'Babe',
            'username' => 'babe',
            'email' => 'babe25@gmail.com',
            'password' => bcrypt('rendi123')
        ]);
        User::create([
            'name' => 'Rendi Hendra',
            'username' => 'rendi-hendra',
            'email' => 'rendihendra2004@gmail.com',
            'password' => bcrypt('rendi123')
        ]);

        // postingan

        posting::create([
            'judul' => 'Komputer Cepat',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'komputer-cepat',
            'sort' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!',
            'body' => '<p><span class="text-6xl font-serif">L</span> orem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!</P>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!</P><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis labore illum magni veniam mollitia fugit voluptate animi, ab reprehenderit blanditiis, nostrum voluptatum magnam amet eveniet. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio neque, vel eaque temporibus dignissimos facere laboriosam alias consectetur eveniet reiciendis voluptate labore nihil nobis deleniti. Consequatur beatae repellat autem ipsa?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, explicabo minima. Accusamus, dicta ipsa neque ratione natus repellat optio quasi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quibusdam voluptas, quia, quidem debitis possimus exercitationem maiores repudiandae eum corporis harum, magni expedita illum fuga rem? Ea cum, quis consectetur ratione cumque architecto earum rerum quod eum, repellendus tempore quibusdam ex, aspernatur odio pariatur voluptatem et quasi culpa aut blanditiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore tempore in nulla doloremque reiciendis explicabo laboriosam rerum sunt ipsum provident delectus, culpa ea? Aliquam, nobis tempora ducimus temporibus culpa quasi.</p><br>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo voluptatum doloribus quod, debitis beatae sint molestiae ex ipsa quos provident dolorem. Deleniti unde sapiente libero, quisquam totam error in labore rerum harum praesentium temporibus atque nostrum voluptates sint laboriosam. Sequi optio, placeat enim dolorum nobis, fuga corporis qui necessitatibus reprehenderit, labore deleniti dolorem. Vero quae enim similique. Quae laudantium eaque vel consectetur cum ipsam, accusamus repellendus doloremque at, consequatur earum et neque ipsa hic labore expedita explicabo quaerat ad rerum. Neque eius dolore autem nihil. Fugit illum commodi asperiores doloremque maiores earum nostrum praesentium, vitae nulla, ea provident debitis voluptatum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fugiat consectetur, perspiciatis, aliquam maiores est deleniti recusandae nobis asperiores numquam perferendis fuga quia veritatis dolorem! Vitae repellendus quisquam eligendi iste officia recusandae cum. Totam dolor quisquam accusantium eos omnis voluptatum neque unde. Quisquam adipisci, eveniet incidunt suscipit corporis repellat quas reprehenderit numquam ipsum quaerat rerum autem aperiam voluptatum harum, dicta hic quos dignissimos id esse vitae? Necessitatibus laudantium sint perferendis omnis blanditiis reprehenderit quis expedita, sunt sit, beatae illo, sapiente natus totam enim quisquam sed iure eveniet dignissimos dolorem tempora tempore ab. Ea hic dolores asperiores excepturi dolor repudiandae voluptates! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus harum possimus voluptatem, aperiam minus perferendis corporis quam fuga nihil debitis dicta quisquam tempore. Ratione omnis accusamus aliquid cum exercitationem nobis consequuntur amet in deserunt dolores sed quaerat soluta, necessitatibus esse nulla assumenda. Nostrum, placeat reprehenderit! Obcaecati dignissimos quis temporibus minus.</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eum nesciunt laudantium consectetur veniam, laboriosam sapiente quos eius illum numquam at obcaecati voluptates nihil sit. Pariatur at porro magnam nam nemo doloremque tempora, nisi ducimus iure. Recusandae iste ea, corrupti error eaque amet pariatur delectus vel quisquam. Culpa nobis perspiciatis odio voluptates officia illum, repellendus tempora ab obcaecati ratione ipsum illo earum minus pariatur fugit quasi excepturi possimus atque. Rerum repellat nostrum impedit nisi iusto laboriosam, rem atque at sit provident voluptate distinctio deleniti sapiente consectetur vero natus vel neque velit harum voluptas ipsam nemo? Quaerat minus eligendi dolor quas at consequuntur, nemo quo harum voluptates officia iure id. Dolorum, adipisci, aperiam libero excepturi consequuntur cum pariatur mollitia accusantium doloremque sint possimus alias repudiandae neque beatae porro doloribus ipsam suscipit nulla omnis. Velit accusamus voluptatibus voluptate sunt delectus porro in, ullam tempore veritatis expedita, amet eveniet itaque, harum nostrum minima veniam ipsa temporibus cum obcaecati doloremque odio! Natus accusamus nostrum, ipsam tempora molestiae temporibus sed voluptate architecto aut ab. Ullam architecto minus nulla sequi dolor, est recusandae eum illum nemo aut doloribus ea maiores. Quod dolore a maiores ipsam incidunt? Nulla, harum sapiente odio repudiandae molestias debitis atque obcaecati neque placeat dolore enim quos magnam voluptatem maxime fugiat consectetur, impedit vel! Facilis, exercitationem ducimus, temporibus fugit, sequi ipsam eaque facere voluptate impedit dolores inventore deserunt similique officia repellat perspiciatis at rem eligendi! Nemo quod ex ipsam. Beatae accusamus pariatur adipisci, asperiores accusantium hic dolor eligendi quas corporis, provident molestiae minus? Perspiciatis facere ut qui quod ullam delectus dolorem quibusdam maiores, voluptate dolor eius quos sed adipisci odio tenetur maxime, quae ipsum laborum aliquam? Mollitia pariatur sapiente ipsam enim consequatur eos quasi! Recusandae porro architecto possimus eligendi quam error reprehenderit doloribus rerum repellendus quod voluptatem, ducimus suscipit ratione quaerat aliquid nesciunt.</p>'
        ]);
        posting::create([
            'judul' => 'Komputer Kuantum',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'komputer-kuantum',
            'sort' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!'
        ]);
        posting::create([
            'judul' => 'Handphone',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'handphone',
            'sort' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!'
        ]);
        posting::create([
            'judul' => 'Rebahan',
            'category_id' => 4,
            'user_id' => 2,
            'slug' => 'rebahan',
            'sort' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!'
        ]);
        posting::create([
            'judul' => 'Laravel',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'laravel',
            'sort' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!',
            'body' => 'Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consecteturLorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quo, accusantium iure repellat nostrum, suscipit et itaque natus expedita voluptatibus ex repudiandae consectetur dicta dolorum sequi libero rem blanditiis nobis debitis placeat ipsam veritatis? Quaerat repudiandae officia aut ea, alias fuga error cupiditate iure nisi qui. Totam, quo quam!'
        ]);
        posting::create([
            'judul' => 'Tailwind',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'Tailwind',
            'sort' => 'Ive written a few thousand words on why traditional “semantic class names” are the reason CSS is hard to maintain, but the truth is youre never going to believe me until you actually try it. If you can suppress the urge to retch long enough to give it a chance, I really think youll wonder how you ever worked with CSS any other way.',
            'body' => '“Best practices” dont actually work.
            Ive written a few thousand words on why traditional “semantic class names” are the reason CSS is hard to maintain, but the truth is youre never going to believe me until you actually try it. If you can suppress the urge to retch long enough to give it a chance, I really think youll wonder how you ever worked with CSS any other way.'
        ]);



        // Category

        Category::create([
            'name' => 'WEB DESIGN',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'PROGRAMING',
            'slug' => 'programing'
        ]);
        Category::create([
            'name' => 'WEB DEVOLOPER',
            'slug' => 'web-devoloper'
        ]);
        Category::create([
            'name' => 'PERSONAL',
            'slug' => 'personal'
        ]);
    }
}
