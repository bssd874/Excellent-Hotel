<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5">Data Reservasi</h4>
                <form action="/dataReservasi/filter" method="GET">
                    <div class="row justify-content-md-center mb-4">
                        <div class="col col-lg-2">
                            <input type="date" class="form-control" name="fromdate" value="<?php echo e(old('fromdate')); ?>">
                        </div>
                        <div class="col-md-auto">
                            <button type="submit" class="btn btn-warning">&nbsp;<i class="mdi mdi-filter"></i></button>
                        </div>
                        <div class="col col-lg-2">
                            <input type="date" class="form-control" name="todate" value="<?php echo e(old('todate')); ?>">
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> No. </th>
                                <th> Nama Tamu </th>
                                <th> Email </th>
                                <th> Check In </th>
                                <th> Check Out </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $dataReservasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($loop->iteration); ?> </td>
                                <td> <?php echo e($row->nama_tamu); ?> </td>
                                <td> <?php echo e($row->email); ?> </td>
                                <td> <?php echo e($row->tgl_check_in); ?> </td>
                                <td> <?php echo e($row->tgl_check_out); ?> </td>
                                <td>
                                    <div class="badge badge-outline-success">Check In</div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="card chart-container">
                    <canvas id="chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('resepsionis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hotel-hebat-Boni\resources\views/resepsionis/dataReservasi.blade.php ENDPATH**/ ?>