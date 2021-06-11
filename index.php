<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minuman Favorite</title>
</head>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="stylee.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<body>

    <section id="home">
        <div class="circle"></div>
        <header>
            <div class="menu">
                <a href=""><img src="img/logoo.png" alt="" class="logo"></a>
                <div class="toggle" onclick="toggleMenu()"></div>
                <ul class="navigation">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#pucuk">Teh Pucuk</a></li>
                    <li><a href="#kopiko">Kopiko</a></li>
                    <li><a href="#ichitan">Ichitan Thai</a></li>
                </ul>
            </div>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>Minuman Favorite Ku</h2>
                <p>
                    Berikut ini adalah beberapa minuman favorit gw dikala iseng nugas buat memperbanyak portfolio, yang nantinya bisa untuk dikembagkan lagi dikemudian hari. Jadi List minuman yang ada disini ada Teh Pucuk, Teh Ichithan Thai Thea, Kopiko. Nah yang kopiko yang paling sering gw minum buat begadang sambil main dota atau mobile legends, intinya semua yang ada disini enak buat Mabar.
                    <br><a href="#">Learn More</a>
                </p>
            </div>

        <div class="imgBox">
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/ichi.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="img/2.png" />
                    </div>
                    <div class="swiper-slide">
                        <img src="img/3.png" />
                    </div>
                </div>
            </div>
        </div>
        
        </div> 
        <ul class="sosial">
            <li><a href="#"><img src="img/facebook.png" alt="facebook"></a></li>
            <li><a href="#"><img src="img/twitter.png" alt="twitter"></a></li>
            <li><a href="#"><img src="img/instagram.png" alt="instagram"></a></li>
        </ul>
        <div class="bubbles">
        <img src="img/bubble.png" />
        <img src="img/bubble.png" />
        <img src="img/bubble.png" />
        <img src="img/bubble.png" />
        <img src="img/bubble.png" />
        <img src="img/bubble.png" />
        <img src="img/bubble.png" />
      </div>

    </section>

    <section id="pucuk" class="pucuk">
        <div class="container-fluid">
            <h2>Teh Pucuk</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-light bg-custom-1">
                        <img src="img/pucuk.png" class="card-img-top" alt="teh pucuk">
                    </div>
                </div>

                <div class="col-md-6">
                    <p>Teh Pucuk Harum terbuat dari ujung daun teh, diproduksi secara higienis dengan teknologi canggih AST (Advanced Sterilizing Technology) untuk memberikan kesegaran yang luar biasa.</p>
                </div>

            </div>
        </div>
    </section>

    <section id="kopiko" class="pucuk">
        <div class="container-fluid">
            <h2>Kopiko</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-light bg-custom-1">
                        <img src="img/kopiko.png" class="card-img-top" alt="teh pucuk">
                    </div>
                </div>

                <div class="col-md-6">
                    <p>Kopiko adalah merek permen kopi dan kopi instan yang diproduksi di Indonesia oleh PT Mayora Indah Tbk. ... Selain Indonesia, Kopiko tersedia di sejumlah negara, termasuk Beneluks, Italia, Portugal, Spanyol, Jerman, Filipina, Australia, Singapura, dan Taiwan.</p>
                </div>

            </div>
        </div>
    </section>

    <section id="ichitan" class="pucuk">
        <div class="container-fluid">
            <h2>Ichitan Thai Thea</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-light bg-custom-1">
                        <img src="img/ichitan.png" class="card-img-top" alt="teh pucuk">
                    </div>
                </div>

                <div class="col-md-6">
                    <p>Kopiko adalah merek permen kopi dan kopi instan yang diproduksi di Indonesia oleh PT Mayora Indah Tbk. ... Selain Indonesia, Kopiko tersedia di sejumlah negara, termasuk Beneluks, Italia, Portugal, Spanyol, Jerman, Filipina, Australia, Singapura, dan Taiwan.</p>
                </div>

            </div>
        </div>
    </section>
    <footer>
        <div>
            Copyright By Praditya Achmad Ifandi Made With Love
            <a href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a>
            <a href="http://www.freepik.com">Designed by vectorpouch / Freepik</a>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Slider -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 200,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        loop: true,
      });


      function toggleMenu(){
          const menuToggle = document.querySelector('.toggle');
          const navigation = document.querySelector('.navigation');
          menuToggle.classList.toggle('active')
          navigation.classList.toggle('active')
      }
    </script>
</body>
</html>

