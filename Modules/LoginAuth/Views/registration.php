<?php $this->extend('app/Views/layouts') ?>
<?php $this->section('content') ?>
<h5 class="text-center">User Registration</h5>
<form class="col-md-6 offset-3 my-5" action="<?php echo route_to('store_test') ?>" method="post" enctype="multipart/form-data">
    <!-- <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" /> -->
    <?= csrf_field() ?>
    <div class="mb-3">
        <input type="text" name="name" class="form-control" placeholder="name">
    </div>
    <div class="mb-3">
        <input type="text" name="email" class="form-control" placeholder="email">
    </div>
    <div class="mb-3">
        <input type="text" name="contact" class="form-control" placeholder="contact">
    </div>
    <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Enter Password">
    </div>
    <div class="mb-3">
        <input type="file" name="file" class="form-control" placeholder="file">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="submit">
    </div>
</form>
<?php $this->endSection() ?>