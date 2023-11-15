</main> <!-- END Wrapper -->

<?php /* GET part footer */ get_template_part('template-parts/layout/footer/footer'); ?>

<?php wp_footer(); ?>

<!-- Matomo -->
<script>
var _paq = window._paq = window._paq || [];
/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
    var u = "https://statistiques.inha.fr/";
    _paq.push(['setTrackerUrl', u + 'piwik.php']);
    _paq.push(['setSiteId', '33']);
    var d = document,
        g = d.createElement('script'),
        s = d.getElementsByTagName('script')[0];
    g.async = true;
    g.src = u + 'piwik.js';
    s.parentNode.insertBefore(g, s);
})();
</script>
<!-- End Matomo Code -->

</body>

</html>