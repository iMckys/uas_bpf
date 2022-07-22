
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(url('/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(url('./assets/css/paper-dashboard.css?v=2.0.1')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
<?php if(session()->has('success')): ?>
<div class="alert alert-primary">
    <?php echo e(session()->get('success')); ?>

</div>
<?php endif; ?>
<br>
<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data lokasi</h3>
        </div>
        <form action="<?php echo e(route('lokasi.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" placeholder="Masukkan Nama Lokasi">

                    </div>
                </div>
                <div class="row">
                    <div class="co col-md-12 form-group">
                        <label for="exampleInputFile">Foto</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Alamat lokasi</label>
                        <input type="text" class="form-control" id="alamat_lokasi" name="alamat_lokasi" placeholder="Masukkan Alamat lokasi">

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<script src="./assets/js/core/jquery.min.js"></script>
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?php echo e(url('/assets/js/plugins/chartjs.min.js')); ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo e(url('/assets/js/plugins/bootstrap-notify.js')); ?>"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo e(url('/assets/js/paper-dashboard.min.js?v=2.0.1')); ?>" type="text/javascript"></script>
<script>
    $(function() {
        $('#deskripsi_form').summernote()
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Framework\laravel_iqbal\resources\views/lokasi/tambah.blade.php ENDPATH**/ ?>