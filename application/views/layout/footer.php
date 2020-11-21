<footer class="footer">
    <div class="container-fluid">

        <div class="copyright float-right">

            made with <i class="material-icons">favorite</i> by
            Luis Mendoza
        </div>
    </div>
</footer>
</div>
</div>
<div class="loading__wraper" id="loader">
    <div class="loading__content">
        <div class="lds-dual-ring"></div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/core/bootstrap-material-design.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/plugins/sweetalert2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
const BASE_URL = "<?= base_url(); ?>/api/"
const req = axios.create({
    baseURL: BASE_URL,
    timeout: 2000,
})
</script>
<?php if ($ubicacion == 'proyectos') : ?>

<script src="<?php echo base_url(); ?>assets/js/proyectos.js"></script>
<?php elseif ($ubicacion == 'leads') : ?>
<script src="<?php echo base_url(); ?>assets/js/leads.js"></script>
<?php endif; ?>

</body>

</html>