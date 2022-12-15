<?php

$htmlNo = 1;
$cssNo = 1;
$bootsNo = 1;
$uiNo = 1;

// HTML 
$html1 = ['Project' => 'HTML', 'Tugas' => 'Tugas' . $htmlNo++ . ' - Halaman Web Sederhana', 'Img' => 'assets/img/tasks/tasks-1.jpg', 'Github' => 'https://github.com/ziyad1412/NFComputer/blob/main/tugas1_Abdurrahman%20Ziyad_Nasrul_STTNF.html'];
$html2 = ['Project' => 'HTML', 'Tugas' => 'Tugas' . $htmlNo++ . ' - Layout Web dengan Table', 'Img' => 'assets/img/tasks/tasks-2.jpg', 'Github' => 'https://github.com/ziyad1412/NFComputer/blob/main/tugas2_Abdurrahman%20Ziyad_Nasrul_STTNF.html'];
$html3 = ['Project' => 'HTML', 'Tugas' => 'Tugas' . $htmlNo++ . ' - Form Register <br> Menggunakan Tag HTML Murni', 'Img' => 'assets/img/tasks/tasks-3.jpg', 'Github' => 'https://github.com/ziyad1412/NFComputer/blob/main/tugas3a_Abdurrahman%20Ziyad_Nasrul_STTNF.html'];
$html4 = ['Project' => 'HTML', 'Tugas' => 'Tugas' . $htmlNo++ . ' - Frame HTML', 'Img' => 'assets/img/tasks/tasks-4.jpg', 'Github' => 'https://github.com/ziyad1412/NFComputer/tree/main/tugas4'];


//CSS
$css1 = ['Project' => 'CSS', 'Tugas' => 'Tugas' . $cssNo++ . ' -  Halaman web profile <br> dengan CSS',  'Img' => 'assets/img/tasks/css-1.jpg', 'Github' => 'https://github.com/ziyad1412/NFComputer/tree/main/tugas5'];
$css2 = ['Project' => 'CSS', 'Tugas' => 'Tugas' . $cssNo++ . ' - Layout Web dengan CSS',  'Img' => 'assets/img/tasks/css-2.jpg', 'Github' => 'https://github.com/ziyad1412/NFComputer/tree/main/tugas6'];

// Bootstrap 
$boots1 = ['Project' => 'RWD Bootstrap', 'Tugas' => 'Tugas' . $bootsNo++ . '- layout web <br> dengan konsep RWD Boostrap', 'Img' => 'assets/img/tasks/boots-1.jpg', 'Github' => 'https://github.com/ziyad1412/NFComputer/tree/main/tugas7'];

//Design UI/UX
$ui1 = ['Project' => 'Design UI/UX', 'Tugas' => 'Tugas' . $uiNo++ . '- Copy Work <br> menggunakan figma', 'Img' => 'assets/img/tasks/ui-1.jpg', 'Figma' => 'https://www.figma.com/file/yDfuf4O5jgfgirkUZdxEDu/Tugas-UI-UX-Nfcom?node-id=0%3A1&t=Fxkjn0l5KAchvEpX-1'];
$ui2 = ['Project' => 'Design UI/UX', 'Tugas' => 'Tugas' . $uiNo++ . '- Tampilan Web <br> menggunakan figma', 'Img' => 'assets/img/tasks/ui-2.jpg', 'Figma' => 'https://www.figma.com/file/yDfuf4O5jgfgirkUZdxEDu/Tugas-UI-UX-Nfcom?node-id=0%3A1&t=Fxkjn0l5KAchvEpX-1'];



$html_ = [$html1, $html2, $html3, $html4];
$css_ = [$css1, $css2];
$bootstrap_ = [$boots1];
$designuiux_ = [$ui1, $ui2];

?>


<!-- ======= portfolio Section ======= -->
<section id="tasks" class="portfolio">
  <div class="container d-flex justify-content-between">
    <h1><a href="index.html">Abdurrahman Ziyad</a></h1>
    <?php include_once 'navbar.php' ?>
  </div>

  <div class="container">

    <div class="section-title">
      <h2>Tasks</h2>
      <p>My Task</p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-html">HTML</li>
          <li data-filter=".filter-css">CSS</li>
          <li data-filter=".filter-bootstrap">bootstrap</li>
          <li data-filter=".filter-designuiux">Design UI/UX</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <!--- HTML --->
      <?php foreach ($html_ as $html) : ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-html">
          <div class="portfolio-wrap">
            <img src="<?= $html['Img'] ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $html['Project'] ?></h4>
              <p><?= $html['Tugas'] ?></p>
              <div class="portfolio-links">
                <a href="<?= $html['Img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?= $html['Github'] ?>" target="_blank" title="open in repository"><i class="bx bxl-github"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>


      <!--- CSS --->
      <?php foreach ($css_ as $css) : ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-css">
          <div class="portfolio-wrap">
            <img src="<?= $css['Img'] ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $css['Project'] ?></h4>
              <p><?= $css['Tugas'] ?></p>
              <div class="portfolio-links">
                <a href="<?= $css['Img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?= $css['Github'] ?>" target="_blank" title="open in repository"><i class="bx bxl-github"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>

      <!--- bootstrapp -->
      <?php foreach ($bootstrap_ as $boots) : ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bootstrap">
          <div class="portfolio-wrap">
            <img src="<?= $boots['Img'] ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $boots['Project'] ?></h4>
              <p><?= $boots['Tugas'] ?></p>
              <div class="portfolio-links">
                <a href="<?= $boots['Img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?= $boots['Github'] ?>" target="_blank" title="open in repository"><i class="bx bxl-github"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>

      <!-- Design UI/UX -->
      <?php foreach ($designuiux_ as $ui) : ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-designuiux">
          <div class="portfolio-wrap">
            <img src="<?= $ui['Img'] ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $ui['Project'] ?></h4>
              <p><?= $ui['Tugas'] ?></p>
              <div class="portfolio-links">
                <a href="<?= $ui['Img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?= $ui['Figma'] ?>" target="_blank" title="open in repository"><i class="bx bxl-figma"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>


    </div>

  </div>
</section><!-- End portfolio Section -->