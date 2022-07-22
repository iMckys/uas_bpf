
<?php $__env->startSection('container'); ?>
<br>
<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Data Barang</h3>
        </div>
        <form action="<?php echo e(route('barang.update',$barang->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama" value="<?php echo e($barang->nama_barang); ?>">

                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Toko / pasar</label>
                        <input type="text" class="form-control" id="toko" name="toko" placeholder="Masukkan Nama toko" value="<?php echo e($barang->toko); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Jenis Barang</label>
                        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" placeholder="Masukkan Jenis Barang" value="<?php echo e($barang->jenis_barang); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Barang" value="<?php echo e($barang->harga); ?>">
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
<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Framework\laravel_iqbal\resources\views/barang/update.blade.php ENDPATH**/ ?>