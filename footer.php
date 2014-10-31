<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package holyarchers
 */
?>
      </div><!-- #col -->
    </div><!-- #row -->
	</div><!-- #content -->

  <div class="container container-widgets">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="box container-about">
          <?php if(dynamic_sidebar('footer_left') ): ?>

          <?php else: ?>
            No Left Sidebar Setup
          <?php endif; ?>
        </div>
      </div>

      <!-- <div class="col-sm-3">
        <div class="box">
          <?php if(dynamic_sidebar('footer_middle_left') ): ?>

          <?php else: ?>
            No Mid Sidebar Setup
          <?php endif; ?>
        </div>
      </div> -->

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="box">
          <?php if(dynamic_sidebar('footer_middle_right') ): ?>
          <?php else: ?>
            No Right Sidebar Setup
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="box box-highlight">
          <?php if(dynamic_sidebar('footer_right') ): ?>
          <?php else: ?>
            No Right Sidebar Setup
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


  <div class="wrapper wrapper-footer">
    <div class="container container-footer cf">
      &copy; <?php echo bloginfo("name"); ?> <?php echo date("Y"); ?>. All rights reserved (whatever that means)
      <a href="http://holyarchers.com"><img class="footer-ha-badge pull-right" src="<?php echo get_template_directory_uri() . "/img/ha-badge.svg"; ?>" onerror="this.onerror=null; this.src='image.png'" /></a>
    </div>
  </div>


<?php wp_footer(); ?>

</body>
</html>
