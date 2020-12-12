<?php

$name = $email = $address = $date_birth = $gender = $level_edu = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name     = $_POST["nama"];
  $email     = $_POST["Email"];
  $address    = $_POST["alamat"];
  $date_birth  = $_POST['tgl_lhr'];
  $gender      = $_POST['jns_klmin'];
  $level_edu   = $_POST['pendidikan'];
  $comment  = $_POST['komentar'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/Styles/style.css">
   
    <link rel="icon" href="assets/image/mountain.png" >
    <title>5 Gunung Tercantik di Indonesia</title>
    <style type="text/css">
            .jumbotron {
                background-image: url(../web/assets/image/jumbotron.jpg);
                background-position: 0-370px;
                background-size: cover;
                    font-size: 20px;
                    padding: 60px;
                    /* background-color: #677c80; */   
                    text-align: center;
                    color: white;
            }
            .background{
                background-image: url(../coba/gambar.png);
                background-repeat: no-repeat;
                background-size: cover;
                width: 45%;
                margin:auto;
                padding: 20px;
            }
			

			input{
				min-width: 100px;
				width: 200px;
			}
			textarea{
				min-width: 200px;
				max-width: 400px;
				min-height: 100px;
				width: 300px;
				height: 100px;
			}
			.bold{
				font-weight: bold;
                font-size: 2.5em;
                
            }
            table{
                color: black;
            }
            footer {
                padding: 20px;
                color: white;
                background-color: #00a2c6;
                text-align: center;
                font-weight: bold;
            }
            .profile header {
                text-align: center;
                
            }

            .profile p {
                text-align: center;
            }

            .profile a{
                text-decoration: none;
                color: #07c600;
                padding: 5px;
                margin-bottom: 5px;
                
            }
            .profile a:hover {
                font-weight: bold;
            }
            .profile img {
                width: 300px;
                height: auto;
            }
		</style>
         <script type="text/javascript" id="abc">
        let i = 1;
            function kirim() {
                var a=document.getElementById("abc").innerHTML;
                var b=document.getElementById("txt-nama").value;
                var c=document.getElementById("txt-email").value;
                var d=document.getElementById("txt-alamat").value;
                var e=document.getElementById("txt-jenis kelamin").value;
                var f=document.getElementById("txt-pendidikan").value;
                var g=document.getElementById("kepala").value;
                document.write(a + "<br />" + "<br />");
                document.write(b + "<br />" + "<br />");
                document.write(c + "<br />" + "<br />");
                document.write(d + "<br />" + "<br />");
                document.write(e + "<br />" + "<br />");
                document.write(f + "<br />");
                document.write(g);
                document.getElementById('txt-nama').value='';
                document.getElementById('txt-email').value='';
                document.getElementById('txt-alamat').value='';
                document.getElementById('txt-jenis kelamin').value='';
                document.getElementById('txt-pendidikan').value='';
                document.getElementById('kepala').value='';
                document.getElementById("count").innerHTML=i;
                i++;
                
            }
        </script>
</head>
<body>
    <header>
        <div class="jumbotron">
            <h1>5 Gunung Tercantik di Indonesia</h1>
            <p>Indonesia yang terletak di jalur cincin api membuat Indonesia salah satu negara yang memiliki gunung terbanyak di dunia. Setidaknya ada ratusan gunung indah yang tersebar di Wilayah Indonesia.</p>
        </div>
        <nav>
            <ul>
                <li><a href="#gunung_merbabu">Gunung Merbabu</a></li>
                <li><a href="#gunung_semeru">Gunung Semeru</a></li>
                <li><a href="#Gunung_Rinjani">Gunung Rinjani</a></li>
                <li><a href="#Gunung_Kerinci">Gunung Kerinci</a></li>
                <li><a href="#Gunung_Gede">Gunung Gede</a></li>
            </ul>
        </nav>
     </header>

     <main>
        <div id="content">
            <article id="gunung_merbabu" class="card">
                <h2>Gunung Merbabu</h2>
                <section>                   
                   
                         <div class="slideshow-container">
                        <div class="merbabu fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="assets/image/merbabu1.jpg" class="featured-image">
                         
                        </div>
                        
                        <div class="merbabu fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="assets/image/merbabu2.jpg" class="featured-image">
                         
                        </div>
                        
                        <div class="merbabu fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="assets/image/merbabu3.jpg" class="featured-image">    
                          
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <br>
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>
                        
                    <p>&nbsp;&nbsp; &nbsp; Selain Gunung Prau, gunung lain di Jawa Tengah yang memiliki pemandangan luar biasa indah adalah Gunung Merbabu. Gunung ini berada di antara perbatasan Kabupaten Magelang, Boyolali serta Semarang. Gunung Merbabu menyajikan keindahan berupa padang sabana yang bisa kita nikmati dari lereng-lereng puncak serta puncak.</p> <p>&nbsp;&nbsp; &nbsp;Gunung Merbabu sendiri punya beberapa jalur pendakian. Namun, jalur yang dikenal memiliki view paling indah adalah jalur Selo yang berada di kabupaten Boyolali. Mendaki Gunung Merbabu via Selo kita akan disuguhi oleh pemandangan padang sabana yang akan membuat rasa lelah tak begitu terasa.</p>
                      
                    <p>&nbsp;&nbsp;&nbsp; Di sabana terakhir sebelum puncak, pemandangan semakin indah berkat kehadiran bunga-bunga edelweis yang tumbuh di lereng-lereng bukit. Jika sedang musimnya, pemandangan ini akan terlihat sangat indah dan fotogenik. Gunung Merbabu sendiri punya tiga puncak tertinggi yakni Kenteng Songo, Trianggulasi serta Syarif. Yang istimewa dari pendakian gunung Merbabu via Selo adalah kita akan disuguhi pemandangan Gunung Merapi yang berada tepat di hadapan mata. Gunung Merapi terlihat sangat indah dari Gunung Merbabu.</p>
                </section>
                <section>
                  <p>&nbsp;&nbsp;&nbsp;Gunung Merbabu adalah gunung api yang bertipe Strato (lihat Gunung Berapi) Secara administratif gunung ini berada di wilayah Kabupaten Magelang di lereng sebelah barat dan Kabupaten Boyolali di lereng sebelah timur dan selatan, Kabupaten Semarang di lereng sebelah utara, Provinsi Jawa Tengah</p><p> &nbsp;&nbsp;&nbsp; Akses menuju ke gunung ini bisa menggunakan lima jalur antara lain, melalui Boyolali, yaitu Selo, Suwanting, dan Wekas. Kemudian Cunthel, Magelang serta jalur Thekelan, Salatiga.</p>
                </section>
            </article>
  
            <article id="gunung_semeru" class="card">
                <h2 id="gunung_semeru">Gunung Semeru</h2>
                <section>                   
                    <div class="slideshow-container">
                        <div class="semeru fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="assets/image/semeru1.jpg" alt="semeru" class="featured-image">
                         
                        </div>
                        
                        <div class="semeru fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="assets/image/semeru2.jpg" class="featured-image">
                         
                        </div>
                        
                        <div class="semeru fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="assets/image/semeru3.jpg" class="featured-image">    
                          
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <br>
                        
                    <p>&nbsp;&nbsp; &nbsp;Gunung Semeru merupakan gunung paling indah sekaligus paling tinggi di Pulau Jawa. Gunung ini telah menjadi legenda sejak lama. Mulai dari jaman Su Hok Gie hingga jamannya pendaki kekinian seperti sekarang. Keindahan gunung ini tak pernah lekang termakan waktu. Keindahan gunung ini membuat para pendaki dari berbagai daerah rela datang jauh-jauh.</p> <p>&nbsp;&nbsp; &nbsp; Gunung Semeru juga merupakan salah satu gunung paling ramai. Maksimal kuota pendakian yang hanya 500 membuat para pendaki kadang harus antre di Ranu Pani.</p>

                    <p>&nbsp;&nbsp;&nbsp;Sama seperti Rinjani, Gunung Semeru juga memiliki permata super cantik dalam diri Ranu Kumbolo. Sebuah danau alami yang berada pada ketinggian 2.400 mdpl. Di depan Ranu Kumbolo ada Tanjakan Cinta yang juga tidak kalah terkenal di kalangan pendaki. Kemudian ada Oro-oro Ombo yang ditumbuhi oleh bunga lavender. Dengan semua keindahan yang dimilikinya, wajar kalau Gunung Semeru menjadi incaran para pendaki dimanapun berada. Apalagi keindahan gunung ini juga pernah di-film kan.</p>
                </section>
                <section>
                 
                   
                    
                    <p>&nbsp;&nbsp;&nbsp;Gunung Semeru termasuk dalam peta wilayah Kabupaten Malang dan Lumajang, Jawa Timur.</p><p> &nbsp;&nbsp;&nbsp; Rute dari Malang merupakan jalur yang banyak dilewati para pendaki Gunung Semeru. Rute perjalanan bisa dimulai dari Kota Malang menuju Tumpang, Poncokusumo, Gubuk Klakah, Ngadas, dan Ranu Pane. Jarak tempuh untuk melewati jalur ini kurang lebih memakan waktu tiga hingga empat jam. Sepanjang perjalanan, pendaki akan disuguhi pemandangan pegunungan yang sejuk dan jalan berliku serta jurang yang dalam di kanan-kiri.</p>
                </section>
            </article>
  
            <article id="Gunung_Rinjani" class="card">
                <h2>Gunung Rinjani</h2>
                <section>                   
                    <div class="slideshow-container">
                        <div class="rinjani fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="assets/image/rinjani1.jpg" class="featured-image">
                         
                        </div>
                        
                        <div class="rinjani fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="assets/image/rinjani2.jpg" class="featured-image">
                         
                        </div>
                        
                        <div class="rinjani fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="assets/image/rinjani3.jpg" class="featured-image">    
                          
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <br>
                        
                    <p>&nbsp;&nbsp; &nbsp; Selain punya pantai-pantai super cantik yang membuat orang malas pulang, Pulau Lombok di Nusa Tenggara Barat punya primadona lain yang membuat banyak wisatawan jatuh cinta. Primadona tersebut adalah Gunung Rinjani.</p> <p> &nbsp;&nbsp; &nbsp;Gunung Rinjani sering disebut sebagai wisata trekking terbaik di Asia Tenggara. Jika kamu pernah melihat keindahan Gunung Rinjani langsung dengan mata kepala sendiri, tentu kamu akan mengiyakan pendapat itu dengan sangat mudah.</p>

                    <p>&nbsp;&nbsp;&nbsp;Gunung Rinjani adalah gunung yang komplit. Ia punya padang sabana cantik yang ditumbuhi bunda edelweis, ia juga punya pemandangan sunrise yang menawan. Dari semua keindahan yang ada di Gunung Rinjani, Danau Segara Anak adalah yang paling dicari. Danau yang berada di ketinggian 2.000 mdpl ini merupakan permata paling indah di Gunung Rinjani. Keindahan danau ini juga dapat kita saksikan dari puncak Rinjani. Yang unik dari Gunung Rinjani adalah keberadaan Gunung Barujari yang berada di tengah-tengah Danau Segara Anak. Gunung Barujari adalah gunung yang berada di atas gunung sehingga gunung ini sering disebut sebagai anaknya Gunung Rinjani</p>
                </section>
                <section>
                   
                  
                    
                    <p>&nbsp;&nbsp;&nbsp;Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat. Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian 3.726 mdpl.</p><p> &nbsp;&nbsp;&nbsp;Jalur pendakian Gunung Rinjani yang sering dilewati pendaki ada di Lombok Timur yakni Sembalun dan Lombok Utara yakni Senaru. Dua jalur resmi lainnya yakni Timbanuh yang juga di Lombok Timur dan Jalur Aik Berik di Lombok Tengah.</p>
                </section>
            </article>

            <article id="Gunung_Kerinci" class="card">
                <h2>Gunung Kerinci</h2>
                
                <section>                   
                    <div class="slideshow-container">
                        <div class="kerinci fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="assets/image/kerinci1.jpg" class="featured-image">
                         
                        </div>
                        
                        <div class="kerinci fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="assets/image/kerinci2.jpg" class="featured-image">
                         
                        </div>
                        
                        <div class="kerinci fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="assets/image/kerinci3.jpg" class="featured-image">    
                          
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <br>
                        
                    <p>&nbsp;&nbsp; &nbsp;Gunung kerinci merupakan gunung tertinggi di Pulau Sumatera di Indonesia. Ada banyak keindahan di gunung dengan ketinggian 3.805 mdpl tersebut. Alamnya sungguh sempurna, mulai dari danau hingga kekayaan flora dan fauna.</p>

                      <p>&nbsp;&nbsp;&nbsp;Bagi anda para pendaki, keindahan Gunung Kerinci sungguh sayang untuk dilewatkan. Di dalam jalur pendakiannya, ada banyak keindahan yang dapat Anda rasakan. Gunung Kerinci akan membuat siapa pun terpesona akan kemegahannya.</p>
                     
                      <p>&nbsp;&nbsp;&nbsp;Setibanya di puncak Gunung Kerinci ada keindahan yang tak bisa dilukiskan. Anda akan menyaksikan kawah Gunung Kerinci, lanskap Kota Jambi, Padang, Bengkulu, Danau Kerinci, dan Danau Gunung Tujuh, bahkan juga Samudera Hindia yang membentang indah di kejauhan. Ya, dari puncaknya terdapat pemandangan yang sangat menakjubkan.</p>
                </section>
                <section>
                   
                    
                    <p>&nbsp;&nbsp;&nbsp;Gunung Kerinci bisa dicapai lewat jalur darat melalui kota Jambi, kota Padang, Lubuk Linggau, dan Bengkulu</p><p> &nbsp;&nbsp;&nbsp;Ke empat rute ini mudah dijangkau, wisatawan atau pendaki bisa menggunakan bus umum atau travel dari Jambi, Padang, Lubuk Linggau, dan Bengkulu menjuju ke Sungai Penuh dan minta turun ke Desa Kersik Tuo, Kecamatan Kayu Aro.</p>
                </section>
            </article>

            <article id="Gunung_Gede" class="card">
                <h2>Gunung Gede</h2>               
                <section>                   
                    <div class="slideshow-container">
                        <div class="gede fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="assets/image/gede1.jpg" class="featured-image">
                         
                        </div>
                        
                        <div class="gede fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="assets/image/gede2.jpg" class="featured-image">
                         
                        </div>
                        
                        <div class="gede fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="assets/image/gede3.jpg" class="featured-image">    
                          
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <br>
                        
                    <p>&nbsp;&nbsp; &nbsp;Gunung Gede merupakan salah satu gunung paling “laris” di Jawa Barat. Sebabnya apalagi kalau bukan pemandangan indah yang dimilikinya. Tempat yang paling indah di Gunung Gede adalah Alun-alun Suryakencana. Tempat ini merupakan padang rumput yang dipenuhi bunga edelweis. Alun-alun Suryakencana merupakan salah satu tempat terbaik untuk menikmati pemandangan sang bunda abadi, Edelweis.</p>

                      <p>&nbsp;&nbsp;&nbsp;Alun-alun Suryakencana berada di ketinggian 2.750 mdpl. Dibalik keindahannya, tempat ini memiliki sebuah mitos. Konon, di Alun-alun Suryakencana kadang-kadang terdengar suara seperti kaki kuda. Suara tersebut dipercaya sebagai suara kuda yang ditunggangi oleh Pangerah Suryakencana bersama rakyat jin. Pangeran Suryakencana sendiri merupakan putra dari pendiri kota Cianjur yakni Pangeran Aria Wiratanudatar dari hubungannya dengan bangsa jin. Menurut mitos, Pangeran Suryakencana bersemayam di sekitar Alun-alun Suryakencana. Apapun mitosnya, yang jelas Alun-alun Suryakencana memiliki pemandangan yang sedap dipandang</p>
                     
                      <p>&nbsp;&nbsp;&nbsp;Gunung Gede sendiri berada di kawasan Taman Nasional Gunung Gede Pangrango. Selain Gunung Gede, di kawasan taman nasional ini juga terdapat gunung Pangrango yang juga memiliki padang rumput yang dipenuhi Bunga Edelweis. Namanya adalah Mandalawangi.</p>
                </section>
                <section>
                   
                  
                    
                    <p>&nbsp;&nbsp;&nbsp;Gunung gede memiliki ketinggian mencapai 2.958 mdpl yang terletak di perbatasan wilayah Kabupaten Bogor, Cianjur, dan Sukabumi.</p><p> &nbsp;&nbsp;&nbsp;Jika kamu ingin mencoba menjajaki Gunung Gede bisa menggunakan 3 jalur. Akses menuju ke gunung ini bisa menggunakan jalur Cibodas, jalur Gunung Putri di Cipanas, dan jalur Selabintana di Sukabumi.</p>
                </section>
       
            </article>
 <h1>FORMULIR KOMENTAR</h1>
 <h3>Berkat komentarmu membuat hidupku lebih berwarna</h3> 
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <table style="margin-top: 30px">
  <tr><td>Nama Lengkap </td><td><input type="text" name="nama"></td></tr>
  <tr><td>Email </td><td><input type="text" name="Email"></td></tr>
  <tr><td>Alamat </td><td><textarea name="alamat" width="300"></textarea></td></tr>
  <tr><td>Tanggal Lahir</td><td><input type='date' name='tgl_lhr'/></td></tr>  
  <tr><td>Jenis Kelamin</td>
   <td>
    <input type="radio" name="jns_klmin" value="Pria" checked> Pria
   <br>
    <input type="radio" name="jns_klmin" value="Wanita"> Wanita
   </td>
  </tr>
  <tr><td>Pendidikan</td>
   <td>
    <select name ="pendidikan">
                <option value="none">NONE</option>
                <option value="SD">SD</option>
                 <option value="SMP">SMP</option>
                 <option value="SMA">SMA</option>
                 <option value="S1">S1</option>
                 <option value="S2">S2</option>
                <option value="S3">S3</option>
          </select>
   </td>
   <tr><td>Komentar</td><td><input type='text' name='komentar'/></td></tr>
  </tr>
  <tr><td><input type="submit" value="Simpan" name="simpan"></td></tr>
  
 </table>
</form>
<p>Komentar sebanyak: <span id="count">0</span></p>
		<div id="list-comment">
		</div>
        <br/><br/>
<?php
echo '<table>';
echo '<tr><td>'.'Nama Lengkap      : '.'</td><td>'.$name.'</td></tr>';
echo '<tr><td>'.'Email             : '.'</td><td>'.$email.'</td></tr>';
echo '<tr><td>'.'Alamat            : '.'</td><td>'.$address.'</td></tr>';
echo '<tr><td>'.'Tanggal Lahir     : '.'</td><td>'.$date_birth.'</td></tr>';
echo '<tr><td>'.'Jenis Kelamin     : '.'</td><td>'.$gender.'</td></tr>';
echo '<tr><td>'.'Pendidikan        : '.'</td><td>'.$level_edu.'</td></tr>';
echo '<tr><td>'.'Komentar          : '.'</td><td>'.$comment.'</td></tr>';
echo '</table>';

?>
        </div>
          
             <aside>
                <article class="profile">
                     <header>
                         <h2>Profil Penulis</h2>
                        
                         <figure>
                            <img src="assets/image/habib.JPG">
                            <figcaption> <p>Muhamad Habiibullah</p></figcaption>
                            <figcaption> <p>MATEMATIKA</p></figcaption>
                            <figcaption> <p>18610032</p></figcaption>
                          </figure>
                     </header>
                     <section>
                        <h3>Artikel Terkait</h3>
                        <table>
                            <tr>
                                <a href="#">5 Pantai Terindah di Jawa Timur</a><br>
                                
                            </tr>
                            <tr>
                                <a href="#">5 Coban Terkeren di Jawa Timur</a><br>
                              
                            </tr>
                            <tr>
                                <a href="#">4 Wisata yang Cocok Untuk Melepas Penat</a><br>
                               
                            </tr>
                            <tr>
                                <a href="#">5 Taman Rekreasi Keluarga yang Wajib Dikunjungi</a><br>
                               
                            </tr>
                            <tr>
                                <a href="#">4 Pantai yang Wajib Dikunjungi Saat Liburan</a><br>

                            </tr>
                            <tr>
                                <a href="#">4 Wisata yang Wajib Dikunjungi di Malang Selatan dan Utara</a><br>
                                
                            </tr>
                        </table>
                     </section>
                </article>
          
		</aside>
    </main>
     <footer>
        <p>Copyright &#169; 2020, Muhamad Habibullah Matematika 18610032</p>
     </footer>
     <script src="assets/Styles/javascript.js"></script>
</body>
</html>