<?= $this->extend('layout/layoutPesan'); ?>

<?= $this->section('content'); ?>
<div class="container pt-3">
    <div class="form-group ml-3">
        <form action="/Pesan/submit" method="POST">
            <h1>Pesan</h1>
            <div class="form-row">
                <div class="col">
                    <br><br>
                    <label for="Pesan">Masukkan Pesan </label>
                    <input type="text" name="pesan" id="pesan" 
                    class="form-control">
                </div>
                <div class="col pt-4 mt-2">
                    <br><br>
                    <input type="submit" value="Submit" name="submit" 
                    id="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>