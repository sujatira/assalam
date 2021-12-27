<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>/vendor/jquery/jquery.min.js"></script>
<!-- flash data supaya ngaleungit -->
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideToggle(200, function() {
            $(this).remove();
        })
    }, 2000);
</script>

</body>

</html>