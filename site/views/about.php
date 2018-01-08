<?php
  $o = (object)[];
  $o->page = $page->slug();// $page->intendedTemplate();
  $o->class = "about";
  $o->title = b::title($page, $site);
  $o->tree = c::get("tree");
  ob_start();
?>


<main>
  <div class="content box">
    <div class="heading ac">
      <div class="middle">
        <?php echo $page->intro()->kt() ?>
      </div>
      <div class="left">
        <img src="<?php echo b::asset($page->image1()->toFile()->url()) ?>" 
          alt="<?php echo $page->image1()->toFile()->alt() ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="470" height="470" viewBox="0 0 942 942">
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M86 670l199-200L86 272 272 86l199 198L668 88l188 184-198 197 198 200-185 187-200-200-199 198L86 670z"/>
        </svg>
      </div>
      <div class="right">
        <img src="<?php echo b::asset($page->image2()->toFile()->url()) ?>" 
          alt="<?php echo $page->image2()->toFile()->alt() ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="470" height="470" viewBox="0 0 942 942">
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M86 670l199-200L86 272 272 86l199 198L668 88l188 184-198 197 198 200-185 187-200-200-199 198L86 670z"/>
        </svg>
      </div>
    </div>
  </div>
</main>


<section class="who">
  <div class="box content ac">
    <h2>Who we are</h2>
    <div class="left"><?php echo $page->owner1()->kt() ?></div>
    <div class="right"><?php echo $page->owner2()->kt() ?></div>
  </div>
</section>


<section class="workwith">
  <div class="box content">
    <?php echo $page->bottom()->kt() ?>
  </div>
</section>


<?php $o->view = ob_get_clean() ?>
<?php include layouts . "layout1.php" ?>