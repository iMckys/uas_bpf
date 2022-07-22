
<?php $__env->startSection('container'); ?>
<br>
<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Data lokasi</h3>
        </div>
        <form action="<?php echo e(route('lokasi.update',$lokasi->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" placeholder="Masukkan Nama" value="<?php echo e($lokasi->nama_lokasi); ?>">

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
                        <input type="text" class="form-control" id="alamat_lokasi" name="alamat_lokasi" placeholder="Masukkan Jenis lokasi" value="<?php echo e($lokasi->alamat_lokasi); ?>">

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(url('plugins/summernote/summernote-bs4.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<script>
    $(function() {
        $('#deskripsi_form').summernote()
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Framework\laravel_iqbal\resources\views/lokasi/update.blade.php ENDPATH**/ ?>