
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
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable Barang</h3>
    </div>
    <div class="card-body">

        <a href="<?php echo e(route('barang.create')); ?>"><button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis barang</th>
                    <th>Toko</th>
                    <th>harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->nama_barang); ?></td>
                    <td><?php echo e($data->jenis_barang); ?></td>
                    <td><?php echo e($data->toko); ?></td>
                    <td><?php echo e($data->harga); ?></td>
                    <td>
                        <div class="col-xs-6">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('barang.destroy', $data->id)); ?>" method="POST">
                        </div>
                        
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>

                        </form>
                        &nbsp;
                        <a href="<?php echo e(route('barang.edit', $data->id)); ?>" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuliah\Framework\laravel_iqbal\resources\views/barang/index.blade.php ENDPATH**/ ?>