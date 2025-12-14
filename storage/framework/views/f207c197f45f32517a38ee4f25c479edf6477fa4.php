<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Fasilitas Hotel</h4>
                    <div class="d-flex flex-row-reverse">
                        <a class="btn btn-success btn-lg mt-0 mb-3" href="/fasilitasHotel/create"><i class="mdi mdi-library-plus"></i> Add New</a>
                    </div>
                    <?php if(session()->has('message')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('message')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" style="table-layout: fixed; width: 100%">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> Nama Fasilitas </th>
                                    <th> Keterangan </th>
                                    <th> Image </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $fasilitasHotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($loop->iteration); ?> </td>
                                    <td> <?php echo e($row->nama_fasilitas); ?> </td>
                                    <td> <?php echo e($row->keterangan); ?> </td>
                                    <td> <img src="<?php echo e(asset('storage/' . $row->image)); ?>" alt="Fasilitas Hotel" style="border-radius: 0; width: 150px; height: 90px;"> </td>
                                    <td>
                                        <button class="badge bg-info border-0"><a href="<?php echo e(route('fasilitasHotel.edit',$row->id)); ?>"><i class="mdi mdi-pencil"></i></a></button>
                                        &nbsp;
                                        <form action="<?php echo e(route('fasilitasHotel.destroy',$row->id)); ?>" method="post" class="d-inline">
                                            <?php echo method_field('delete'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda yakin?')"><i class="mdi mdi-popcorn"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hotel-hebat-Boni\resources\views/admin/fasilitasHotel/index.blade.php ENDPATH**/ ?>