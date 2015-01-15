<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>
<topbar class="row col-lg-12">
  <div class="col-sm-10" id="header">
    <?php print render($page['header']); ?>
  </div>

  <div class="col-sm-2">
    <?php if (!empty($secondary_nav)): ?>
      <?php print render($secondary_nav); ?>
    <?php endif; ?>
  </div>
</topbar>

<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav)): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div class="main-container container">
  <div class="row col-lg-12">
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
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

  <?php if (!empty($page['help'])): ?>
    <div class="row col-lg-12" id="help">
      <?php print render($page['help']); ?>
    </div>
  <?php endif; ?>

  <div class="row col-lg-12">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

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
</div>

<footer class="footer container">
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

  <div class="row col-lg-12" id="footer">
    <?php print render($page['footer']); ?>
  </div>

  <div class="row col-lg-12" id="copyright">
    <?php print render($page['copyright']); ?>
  </div>
</footer>
