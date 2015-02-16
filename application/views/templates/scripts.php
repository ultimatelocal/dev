<!--===================================================-->
<!--                 JAVASCRIPT                        -->
<!--===================================================-->



<!-- MAIN PLUGIN -->
<!-- ================================================= -->


<!-- jQuery Version 2.1.1 -->
<script src="<?php echo base_url() . JS . "jquery-2.1.1.min.js"; ?>"></script>


<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url() . JS . "bootstrap.min.js"; ?>"></script>


<!-- ================================================= -->







<!-- ADMIN PLUGIN & DEMO -->
<!-- ================================================= -->

<!-- Plugins -->
<script src="<?php echo base_url() . JS . "plugins.min.js"; ?>"></script>


<!-- Admin Core -->
<script src="<?php echo base_url() . JS . "nifty.min.js"; ?>"></script>


<!-- Demo JavaScript -->
<script src="<?php echo base_url() . JS . "demo/nifty-demo.min.js"; ?>"></script>


<!-- ================================================= -->


<!-- custom for pages -->
<?php foreach ($js as $j): ?>
    <script src="<?php echo base_url() . JS . $j; ?>"></script>
<?php endforeach; ?>