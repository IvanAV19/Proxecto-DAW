<script>
    <?php if(session()->has('message')): ?>
        Toast.fire({
            icon: 'success',
            title: "<?php echo e(session('message')); ?>",
        });
    <?php endif; ?>
</script>
<?php /**PATH /var/www/resources/views/partials/sweetalert_messages.blade.php ENDPATH**/ ?>