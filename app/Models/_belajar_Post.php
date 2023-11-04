<?php

namespace App\Models;


class Post 
{
   private static $blog_posts = [[
"title"=>"Judul Post Pertama",
"slug"=>"judul-post-pertama",
"author"=> "Harman Hariady",
"body"=> "Menjalani kehidupan tidaklah bisa dibilang sederhana. Dilahirkan ke dunia ini berarti juga siap untuk menghadapi setiap ujian yang diberikan oleh Allah. Oleh karena itu, agar kamu tak terjerumus ke dalam jurang yang menyesatkan, Islam memberikan pedoman kepada umatnya berupa kitab suci Al-Quran. 
<p>Menjalani kehidupan tidaklah bisa dibilang sederhana. Dilahirkan ke dunia ini berarti juga siap untuk menghadapi setiap ujian yang diberikan oleh Allah. Oleh karena itu, agar kamu tak terjerumus ke dalam jurang yang menyesatkan, Islam memberikan pedoman kepada umatnya berupa kitab suci Al-Quran Menjalani kehidupan tidaklah bisa dibilang sederhana. Dilahirkan ke dunia ini berarti juga siap untuk menghadapi setiap ujian yang diberikan oleh Allah. Oleh karena itu, agar kamu tak terjerumus ke dalam jurang yang menyesatkan, Islam memberikan pedoman kepada umatnya berupa kitab suci Al-Quran. 
<p>Menjalani kehidupan tidaklah bisa dibilang sederhana. Dilahirkan ke dunia ini berarti juga siap untuk menghadapi setiap ujian yang diberikan oleh Allah. Oleh karena itu, agar kamu tak terjerumus ke dalam jurang yang menyesatkan, Islam memberikan pedoman kepada umatnya berupa kitab suci Al-QuranMenjalani kehidupan tidaklah bisa dibilang sederhana. Dilahirkan ke dunia ini berarti juga siap untuk menghadapi setiap ujian yang diberikan oleh Allah. Oleh karena itu, agar kamu tak terjerumus ke dalam jurang yang menyesatkan,",

],[
"title"=>"Judul Post Kedua",
"slug"=>"judul-post-kedua",
"author"=> "Dio Erananta",
"body"=> "Belajar di waktu kecil bagai mengukir di atas batu, sedangkan belajar sesudah besar bagai melukis di atas air, begitu sebuah kalimat bijak yang sering kita dengar, memberikan tunjuk ajar. Namun demikian dan meskipun laksana mengukir di atas air, di usia tua pun kita harus tetap belajar. <p>Teks Menuntut Ilmu di waktu Kecil bagaikan Mengukir di atas Batu, atau dalam teks yang lebih panjang Menuntut Ilmu di Waktu Kecil bagaikan Mengukir di atas Batu dan menuntut Ilmu di masa Tua bagaikan menulis di atas air, adalah teks yang sangat terkenal, terutama dalam dunia pendidikan Islam. elajar di waktu kecil bagai mengukir di atas batu, sedangkan belajar sesudah besar bagai melukis di atas air, begitu sebuah kalimat bijak yang sering kita dengar, memberikan tunjuk ajar. </p> <p>Namun demikian dan meskipun laksana mengukir di atas air, di usia tua pun kita harus tetap belajar. Teks Menuntut Ilmu di waktu Kecil bagaikan Mengukir di atas Batu, atau dalam teks yang lebih panjang Menuntut Ilmu di Waktu Kecil bagaikan Mengukir di atas Batu dan menuntut Ilmu di masa Tua bagaikan menulis di atas air, adalah teks yang sangat terkenal, terutama dalam dunia pendidikan Islam. Anak yang terbiasa belajar sedari kecil akan lebih siap dan cepat dalam menerima informasi baru. <p> Belajar di waktu kecil bagai mengukir di atas batu, sedangkan belajar sesudah besar bagai melukis di atas air, begitu sebuah kalimat bijak yang sering kita dengar, memberikan tunjuk ajar. Namun demikian dan meskipun laksana mengukir di atas air, di usia tua pun kita harus tetap belajar. <p>Teks Menuntut Ilmu di waktu Kecil bagaikan Mengukir di atas Batu, atau dalam teks yang lebih panjang Menuntut Ilmu di Waktu Kecil bagaikan Mengukir di atas Batu dan menuntut Ilmu di masa Tua bagaikan menulis di atas air, adalah teks yang sangat terkenal, terutama dalam dunia pendidikan Islam. elajar di waktu kecil bagai mengukir di atas batu, sedangkan belajar sesudah besar bagai melukis di atas air, begitu sebuah kalimat bijak yang sering kita dengar, memberikan tunjuk ajar. </p> "

]];

public static function all()
{

    return collect( self::$blog_posts);
}
public static function find($slug)
{

    $post = static::all();
//     $posts=self::$blog_posts;

// $post= [];
// foreach( $posts as $p) {
// if ($p["slug"] === $slug)
// {

//     $post=$p;
// }
return $post->firstWhere('slug', $slug);
}

}


