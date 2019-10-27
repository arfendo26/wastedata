<style type="text/css">
  .pricing_row .pricing_item{
    margin-bottom: 40px !important;
  }
  .pricing{
    margin-top: 40px;
  }
</style>
 <div class="pricing">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title_container text-center">
            <div class="section_title"><h2>Tren Harga Sampah Saat Ini</h2></div>
          </div>
        </div>
      </div>
      <div class="row pricing_row">
        
        <!-- Pricing Item -->
      <?php foreach ($cards as $key) : ?>
        <div class="col-lg-4">
          <div class="pricing_item trans_200">
            <div class="pricing_item_background trans_200"></div>
            <div class="pricing_title_container d-flex flex-column align-items-center justify-content-start">
              <div class="pricing_title_background trans_200">
                <svg class="waves" width="100%" height="100%" viewBox="0 0 1920 218" preserveAspectRatio="none">
                  <path class="wave_path trans_200" fill="url(#grad_1)" d="M0,0 V210 S500,218 860,193  S1400,125 1920,155 V0 H0"></path>
                  <defs>
                    <linearGradient id="grad_1">
                      <stop offset="0%" stop-color="#487fee" />
                      <stop offset="100%" stop-color="#b632fa" />
                    </linearGradient>
                    <linearGradient id="grad_2">
                      <stop offset="0%" stop-color="#9cb9f6" />
                      <stop offset="100%" stop-color="#d691fc" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>
            <?php if ($key['tren'] == 2) : ?>
              <div class="pricing_title">Tren Naik<span style="color:white"> ( <i class="fa fa-arrow-up"></i> <?php echo round($key['rate'],2) ?> % )</span></div>
            <?php elseif ($key['tren'] == 1) : ?>
              <div class="pricing_title">Tren Normal<span style="color:white"> ( <i class="fa fa-exchange"></i> <?php echo round($key['rate'],2) ?> % )</span></div>
            <?php else : ?>
              <div class="pricing_title">Tren Turun<span style="color:white"> ( <i class="fa fa-arrow-down"></i> <?php echo round($key['rate'],2) ?> % )</span></div>
            <?php endif; ?>
              <div class="pricing_price"><span>Rp </span><?php echo $key['harga'] ?><div>per 1 Kg</div></div>
            </div>
            <div class="pricing_content d-flex flex-column align-items-center justify-content-start">
              <div class="pricing_list">
                <ul class="d-flex flex-column align-items-center justify-content-start">
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    </div>
                    <div><center><h3 style="color:grey"><?php echo $key['jenis'] ?></h3></center></div>
                  </li>                
                </ul>
              </div>
            
              <div class="button pricing_button trans_200"><a href="<?php echo $key['link'] ?>">Selengkapnya</a></div>
            </div>
          </div>
        </div>

      <?php endforeach; ?>

      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="pricing_text text-center">
            <p>Sampah Satu Orang Adalah Harta Orang Lain. Orang yang Berbeda Memiliki Ide Berbeda Tentang Apa yang Bagi Mereka Berharga</p>
          </div>
        </div>
      </div>
    </div>
  </div>  