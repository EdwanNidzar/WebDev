<!-- buat data tables -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<!-- ini optional js -->
<script src="<?= base_url('assets/assets/vendor/jquery/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/assets/vendor/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
<script src="<?= base_url('assets/assets/vendor/slimscroll/jquery.slimscroll.js'); ?>"></script>
<script src="<?= base_url('assets/assets/libs/js/main-js.js'); ?>"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/assets/vendor/datatables/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/assets/vendor/datatables/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/assets/vendor/datatables/js/data-table.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script>
    setTimeout(function() {
        document.getElementById("success-alert").style.display = "none";
        document.getElementById("error-alert").style.display = "none";
    }, 2500);
</script>
<script>
    new DataTable('#example');
</script>
</body>

</html>