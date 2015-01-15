
  <div class="row col-lg-12">
    <div class="col-sm-10" id="header-left">
      <?php print render($page['header-left']); ?>
    </div>

    <div class="col-sm-2" id="header-right">
      <?php print render($page['header-right']); ?>
    </div>
  </div>

  <div class="row col-lg-12">
    <div class="col-sm-2">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

    </div>
    <div class="col-sm-10" id="main_menu">
      <?php print render($page['main_menu']); ?>
    </div>
  </div>

  <div class="row col-lg-12">
    <?php print render($page['highlighted']); ?>
  </div>

  <div class="row col-lg-12">

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_top1">
        <?php print render($page['page_top1']); ?>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_top2">
        <?php print render($page['page_top2']); ?>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_top3">
        <?php print render($page['page_top3']); ?>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_top4">
        <?php print render($page['page_top4']); ?>
      </div>

  </div>

  <div class="row col-lg-12">

    <div class="col-sm-4" id="gallery1">
      <?php print render($page['gallery1']); ?>
    </div>

    <div class="col-sm-4" id="gallery2">
      <?php print render($page['gallery2']); ?>
    </div>

    <div class="col-sm-4" id="gallery3">
      <?php print render($page['gallery3']); ?>
    </div>

  </div>

  <div class="row col-lg-12" id="help">
    <?php print render($page['help']); ?>
  </div>

  <div class="row col-lg-12">

    <div class="col-sm-3" id="sidebar_first">
      <?php print render($page['sidebar_first']); ?>
    </div>

    <div class="col-sm-6" id="content">
      <?php print render($page['content']); ?>
    </div>

    <div class="col-sm-3" id="sidebar_second">
      <?php print render($page['sidebar_second']); ?>
    </div>

  </div>

  <div class="row col-lg-12">

    <div class="col-xs-12 col-md-6 col-lg-3" id="page_bottom1">
      <?php print render($page['page_bottom1']); ?>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-3" id="page_bottom2">
      <?php print render($page['page_bottom2']); ?>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-3" id="page_bottom3">
      <?php print render($page['page_bottom3']); ?>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-3" id="page_bottom4">
      <?php print render($page['page_bottom4']); ?>
    </div>

  </div>

  <div class="row col-lg-12">

    <div class="col-xs-12 col-sm-6" id="footer_top1">
      <?php print render($page['footer_top1']); ?>
    </div>

    <div class="col-xs-12 col-sm-6" id="footer_top2">
      <?php print render($page['footer_top2']); ?>
    </div>

  </div>

  <div class="row col-lg-12">

    <div class="col-xs-12 col-sm-6" id="footer_top3">
      <?php print render($page['footer_top3']); ?>
    </div>

    <div class="col-xs-12 col-sm-6" id="footer_top4">
      <?php print render($page['footer_top4']); ?>
    </div>

  </div>

  <div><hr/></div>

  <div class="row col-lg-12" id="footer">
    <?php print render($page['footer']); ?>
  </div>

  <div class="row col-lg-12" id="copyright">
    <?php print render($page['copyright']); ?>
  </div>

