<?php if(!is_front_page()) : ?>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <?php 
          if(is_active_sidebar('sidebar')) :
          dynamic_sidebar('sidebar');
          endif; 
          ?>

        </div><!-- /.blog-sidebar -->
<?php endif; ?>
    </div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <p>&copy; <?php echo Date('Y');?> - <?php bloginfo('name');?> </p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
<?php wp_footer();?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
<!--
     IE10 viewport hack for Surface/desktop Windows 8 bug
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
-->
</body>
</html>