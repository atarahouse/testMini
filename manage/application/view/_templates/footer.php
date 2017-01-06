
    <footer>
       <!-- backlink to repo on GitHub, and affiliate link to Rackspace if you want to support the project -->
        <div class="footer">
            Find <a href="https://github.com/atarahouse/testmini">testMini on GitHub</a>.
            If you like the project, just buy me a beer.
        </div>

        <!-- jQuery, loaded in the recommended protocol-less way -->
        <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
        <script>
            var url = "<?php echo URL; ?>";
        </script>

    </footer>

    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>js/application.js"></script>

    <!-- jQuery -->
    <script src="<?php echo URL; ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL; ?>js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- 
    <script src="js/morris/raphael.min.js"></script>
    <script src="js/morris/morris.min.js"></script>
    <script src="js/morris/morris-data.js"></script>
    -->
</body>
</html>
