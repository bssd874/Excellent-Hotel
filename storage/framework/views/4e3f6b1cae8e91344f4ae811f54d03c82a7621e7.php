<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Fasilitas Kamar</h4>
                        <form class="forms-sample" method="post" action="<?php echo e(route('fasilitasKamar.update', $fasilitaskamar->id)); ?>" enctype="multipart/form-data">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="tipe_kamar">Tipe Kamar</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['tipe_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tipe_kamar" placeholder="Edit tipe kamar" name="tipe_kamar" value="<?php echo e(old('tipe_kamar', $fasilitaskamar->tipe_kamar)); ?>">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_kamar">Fasilitas</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['fasilitas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="fasilitas" placeholder="Edit fasilitas" name="fasilitas" value="<?php echo e(old('fasilitas', $fasilitaskamar->fasilitas)); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg mr-2">Submit</button>
                            <a class="btn btn-dark btn-lg" href="/fasilitasKamar">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hotel-hebat-Boni\resources\views/admin/fasilitasKamar/edit.blade.php ENDPATH**/ ?>