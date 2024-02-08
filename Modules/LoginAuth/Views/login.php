<?php $this->extend('App\Views\layout\layouts') ?>

<?php $this->section('content') ?>
<form class="col-md-6 offset-3 my-5" action="<?php echo route_to('store_test') ?>" method="post" enctype="multipart/form-data">
    <h5 class="text-center mb-3">Login</h5>
    <!-- <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" /> -->
    <?= csrf_field() ?>

    <div class="mb-3">
        <input type="text" name="email" class="form-control" placeholder="email">
    </div>
    <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Enter Password">
    </div>

    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="submit">
    </div>
</form>
<?php $this->endSection() ?>

<?php $this->section('script') ?>
<script src="<?= module_url('Modules/LoginAuth/Assets/script.js') ?>"></script>
<script>
    console.log('login')
</script>

<?php $this->endSection() ?>