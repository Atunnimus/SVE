    </div>
    <footer>
      <div class="navbar navbar-inverse navbar-static-bottom">
        <div class="container">
          <div class="navbar-text pull-left" id="footer">
            <p><em>Hecho en México, Universidad Nacional Autónoma de México (UNAM), todos los derechos reservados. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica. De otra forma, requiere permiso previo por escrito de la institución. </em><a href="javascript:;">Créditos</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url('js/jquery.min.js');?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url('js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('js/jquery.waypoints.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('js/jquery.counterup.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('js/circle-progress.js');?>"></script>
    <script type="text/javascript">
      jQuery('.statistic-counter').counterUp({
        delay: 10,
        time: 800
      });
    </script>
    <script>
        /*
         * Example 2:
         *   - default gradient
         *   - listening to `circle-animation-progress` event and display the animation progress: from 0 to 100%
         */
        $('.second.circle').circleProgress({
            value: 1
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(parseInt(100 * progress) + ' %');
        });
    </script>
  </body>
</html>