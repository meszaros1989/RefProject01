<?php get_header(); ?>

<!-- HTML goes here -->

<!-- HEADER -->

<section class="header">

    <img src="img/logo.png" alt="" class="logo">

    <ul class="header-list">

      <li><a href="#s1">Rólunk</a></li>
      <li><a href="#s2">Menü</a></li>
      <li><a href="#s4">Foglalás</a></li>
      <li><a href="#s3">Galéria</a></li>
      <li><a href="#s5">Kapcsolat</a></li>
      
    </ul>

</section>

<!-- SECTION 1-->


<section class="section-1" id="s1">

  <div class="section-1-left">

    <div class="section-1-left-box-1 clearfix">
      <img src="wp-content/uploads/2019/07/section-1-1-img.png" alt="" class="section-1-left-box-1-img-1">
      <img src="wp-content/uploads/2019/07/section-1-2-img.png" alt="" class="section-1-left-box-1-img-2">
    </div>

  </div>

  <div class="section-1-middle">

    <div class="section-1-middle-box-1">
      <p class="section-1-middle-box-1-text">Rólunk</p>
    </div>

    <div class="section-1-middle-box-2">
      <p class="section-1-middle-box-2-text">
        In the 1950s, all that stood in this iconic location was a car park
        with a small kiosk. Even then it was the best spot for uninterrupted
        panoramic views of Adelaide, with the address a tourist destination in itself.
        In October 1985, RavoRes as we know it today opened.
    </div>

  </div>

  <div class="section-1-right">

    <div class="section-1-right-box-1 clearfix">
      <img src="wp-content/uploads/2019/07/section-1-3-img.png" alt="" class="section-1-right-box-1-img-1">
    </div>

  </div>

</section>

<!-- SECTION 2-->

<section class="section-2" id="s2">

  <div class="section-2-box-1">
    <span class="section-2-box-1-text">Menü</span>
  </div>

  <div class="section-2-box-2">

    <div class="section-2-box-2-buttons">
      <a class="tablinks section-2-box-2-buttons-button" onclick="openMenu(event, '1')" id="defaultOpen">Előételek</a>
      <a class="tablinks section-2-box-2-buttons-button" onclick="openMenu(event, '2')">Levesek</a>
      <a class="tablinks section-2-box-2-buttons-button" onclick="openMenu(event, '3')">Készételek</a>
      <a class="tablinks section-2-box-2-buttons-button" onclick="openMenu(event, '4')">Főételek</a>
      <a class="tablinks section-2-box-2-buttons-button" onclick="openMenu(event, '5')">Saláták</a>
      <a class="tablinks section-2-box-2-buttons-button" onclick="openMenu(event, '6')">Desszertek</a>
    </div>

  </div>

  <div class="section-2-box-3">

    <div id="1" class="tabcontent section-2-box-3-tabcontent">

      <table class="section-2-box-3-tabcontent-table">
        <tr>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Kacsamáj zserbó, kápiakrém, aranymazsola</td>
          <td class="section-2-box-3-tabcontent-table-price">3.990 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Királyrák, balinéz saláta</td>
          <td class="section-2-box-3-tabcontent-table-price">4.990 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Friss kevert saláta, őrségi kecskesajtkrém, tökmagolaj, tökmag</td>
          <td class="section-2-box-3-tabcontent-table-price">4.290 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Sült karfiol, cheddar, curry, római kömény</td>
          <td class="section-2-box-3-tabcontent-table-price">2.790 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Rákkoktél</td>
          <td class="section-2-box-3-tabcontent-table-price">1.990 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Uborka Chips</td>
          <td class="section-2-box-3-tabcontent-table-price">1.490 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Steakhouse Bacon</td>
          <td class="section-2-box-3-tabcontent-table-price">1.490 Ft</td>
        </tr>
      </table>

    </div>

    <div id="2" class="tabcontent section-2-box-3-tabcontent">

      <table class="section-2-box-3-tabcontent-table">
        <tr>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Karalábékrémleves, paraj, túró </td>
          <td class="section-2-box-3-tabcontent-table-price">1.890 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Újházi kakasleves, wonton</td>
          <td class="section-2-box-3-tabcontent-table-price">4.990 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Alföldi gulyásleves, csipetke</td>
          <td class="section-2-box-3-tabcontent-table-price">2.390 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Úri gombák levese, shitake, laska, shimei</td>
          <td class="section-2-box-3-tabcontent-table-price">2.190 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Marhahúsleves velőcsonttal</td>
          <td class="section-2-box-3-tabcontent-table-price">990 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Hagymaleves medvehagymával</td>
          <td class="section-2-box-3-tabcontent-table-price">990 Ft</td>
        </tr>
      </table>

    </div>

    <div id="3" class="tabcontent section-2-box-3-tabcontent">

      <table class="section-2-box-3-tabcontent-table">
        <tr>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Marhapörkölt, sós burgonyával</td>
          <td class="section-2-box-3-tabcontent-table-price">2.500 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Gombapaprikás, galuskával</td>
          <td class="section-2-box-3-tabcontent-table-price">1.800 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Borjúpaprikás, galuskával</td>
          <td class="section-2-box-3-tabcontent-table-price">3000 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Sertéscsülök Jóasszony módra</td>
          <td class="section-2-box-3-tabcontent-table-price">3000 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Sertéscsülök parasztosan</td>
          <td class="section-2-box-3-tabcontent-table-price">3000 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Római csülök</td>
          <td class="section-2-box-3-tabcontent-table-price">3000 Ft</td>
        </tr>
      </table>

    </div>

    <div id="4" class="tabcontent section-2-box-3-tabcontent">

      <table class="section-2-box-3-tabcontent-table">
        <tr>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Tigrisrák, gremolata, rizottó, homárszósz</td>
          <td class="section-2-box-3-tabcontent-table-price">5.990 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Zöldborsófőzelék, házi rántott párizsi, füstölt fürjtojás</td>
          <td class="section-2-box-3-tabcontent-table-price">3.690 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Tőkehal, répa variációk, fodros kel</td>
          <td class="section-2-box-3-tabcontent-table-price">5.990 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Sertésszűz, paraj, ricotta, cheddar, kolbász</td>
          <td class="section-2-box-3-tabcontent-table-price">4.190 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Kijevi gyöngytyúk supreme, arancini, vajmártás </td>
          <td class="section-2-box-3-tabcontent-table-price">4.690 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Kakaspörkölt, juhtúró, spätzle, császárszalonna</td>
          <td class="section-2-box-3-tabcontent-table-price">4.990 Ft</td>
        </tr>
      </table>

    </div>

    <div id="5" class="tabcontent section-2-box-3-tabcontent">

      <table class="section-2-box-3-tabcontent-table">
        <tr>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Káposztasaláta</td>
          <td class="section-2-box-3-tabcontent-table-price">600 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Csemege/Kovászos uborka</td>
          <td class="section-2-box-3-tabcontent-table-price">700 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Ecetes paprika</td>
          <td class="section-2-box-3-tabcontent-table-price">600 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Uborkasaláta</td>
          <td class="section-2-box-3-tabcontent-table-price">600 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Tejfölös uborkasaláta</td>
          <td class="section-2-box-3-tabcontent-table-price">700 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Paradicsomsaláta</td>
          <td class="section-2-box-3-tabcontent-table-price">600 Ft</td>
        </tr>
      </table>

    </div>

    <div id="6" class="tabcontent section-2-box-3-tabcontent">

      <table class="section-2-box-3-tabcontent-table">
        <tr>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Somlói galuska</td>
          <td class="section-2-box-3-tabcontent-table-price">1000 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Gundel palacsinta</td>
          <td class="section-2-box-3-tabcontent-table-price">1000 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Túrós palacsinta</td>
          <td class="section-2-box-3-tabcontent-table-price">1000 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Anaszászos palacsinta</td>
          <td class="section-2-box-3-tabcontent-table-price">1000 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Gesztenyés palacsinta</td>
          <td class="section-2-box-3-tabcontent-table-price">1000 Ft</td>
        </tr>
        <tr>
          <td class="section-2-box-3-tabcontent-table-food">Túrós csusza</td>
          <td class="section-2-box-3-tabcontent-table-price">1000 Ft</td>
        </tr>
      </table>

    </div>

  </div>

</section>

<!-- SECTION 3-->

<section class="section-3" id="s3">

  <div class="section-3-box-1">
    <span class="section-3-box-1-text">Galéria</span>
  </div>

</section>

<!-- SECTION 4-->

<section class="section-4">

<!-- Slideshow container -->
  <div class="slideshow-container clearfix">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="wp-content/uploads/2019/07/section-4-img-1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="wp-content/uploads/2019/07/section-4-img-2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="wp-content/uploads/2019/07/section-4-img-3.jpg" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>


</section>

<!-- SECTION 5-->

<section class="section-5" id="s4">

  <section class="section-5-box-1">
    <span class="section-5-box-1-text">Foglalás</span>
  </section>

</section>

<?php

 if (have_posts() ):

        while (have_posts() ): the_post();?>

        <h3><?php  the_title();  ?></h3>
        <p><?php  the_content();  ?></p>

  <?php  endwhile;
  endif;

?>

<!-- HTML goes here -->

<?php get_footer(); ?>
