<!-- FOOTER
	================================================== -->
<footer class="section section_footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">

        <!-- About Us -->
        <h5 class="section_footer__heading">
          Tentang Kami
        </h5>
        <p>
          Restoran kami menyediakan berbagai kuliner nusantara dan juga dunia. Untuk reservasi dapat menghubungi
          kontak yang udah tersedia
        </p>

      </div>
      <div class="col-sm-4">

        <!-- Contact info -->
        <h5 class="section_footer__heading">
          Info Kontak
        </h5>
        <ul class="section_footer__info">
          <li>
            <i class="fas fa-map-marker-alt"></i> Jl. Gajah Mada No. 267, Jember, Jawa Timur
          </li>
          <li>
            <i class="fas fa-phone"></i> +62 888 123 4567
          </li>
          <li>
            <i class="far fa-envelope"></i> <a href="mailto:admin@domain.com">nusantara_resto@gmail.com</a>
          </li>
        </ul>

      </div>
      <div class="col-sm-4">

        <!-- Opening hours -->
        <h5 class="section_footer__heading">
          Jam Buka
        </h5>
        <div class="section_footer__open">
          <div class="section_footer__open__days">Senin - Minggu</div>
          <div class="section_footer__open__time">10.00 WIB - 22.00 WIB</div>
        </div>
      </div>
    </div> <!-- / .row -->
    <div class="row">
      <div class="col-12">

        <!-- Copyright -->
        <div class="section_footer__copyright">
          &copy; <span id="js-current-year"></span> Kelompok 10B PBF. All rights reserved.
        </div>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</footer>

<!-- JAVASCRIPT
    ================================================== -->

<!-- JS Global -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

<!-- JS Plugins -->
<script src="assets/plugins/parallax/parallax.min.js"></script>
<script src="assets/plugins/isotope/lib/imagesloaded.pkgd.min.js"></script>
<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
<script src="assets/plugins/flickity/flickity.pkgd.min.js"></script>
<script src="assets/plugins/lightbox/js/lightbox.min.js"></script>
<script src="assets/plugins/reservation/reservation.js"></script>
<script src="assets/plugins/alerts/alerts.js"></script>

<!-- JS Custom -->
<script src="assets/js/theme.min.js"></script>
<script src="assets/js/custom.js"></script>

<script>
  $(document).on('click','#delete-button',function(){
    var menuid=$(this).attr('data_menuid');
    $('#menuid').val(menuid);
    $('#delete-modal').modal('show');
});
</script>
<script>
  $(document).on('click','#delete-button',function(){
    var reservasiid=$(this).attr('data_reservasiid');
    $('#reservasiid').val(reservasiid);
    $('#delete-modal').modal('show');
});
</script>

</body>

</html>
