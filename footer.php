<footer class="page-footer" style="min-height:80vh; background:silver;">
  <div class="container">
    <div class="menu-footers">
      <?php if (is_active_sidebar('footer_4')) : ?>
        <div class="footer-widget-logo" role="complementary">
          <?php dynamic_sidebar('footer_4'); ?>
        </div>
      <?php endif; ?>
      <?php if (is_active_sidebar('footer_2')) : ?>
        <?php dynamic_sidebar('footer_2'); ?>
      <?php endif; ?>

      <?php if (is_active_sidebar('footer_5')) : ?>
        <div class="footer-widget-contact-us" role="complementary">
          <?php dynamic_sidebar('footer_5'); ?>
        </div>
      <?php endif; ?>
      <?php if (is_active_sidebar('footer_6')) : ?>
        <div class="footer-widget-image" role="complementary">
          <?php dynamic_sidebar('footer_6'); ?>
        </div>
      <?php endif; ?>
    </div>
    <?php if (is_active_sidebar('footer_1')) : ?>
      <?php dynamic_sidebar('footer_1'); ?>
    <?php endif; ?>
  </div>
</footer>

<!-- wordpress footer includes -->
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>