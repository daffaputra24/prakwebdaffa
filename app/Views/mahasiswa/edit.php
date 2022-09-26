<form action="/update/<?=$id?>" method="post">
    <div class="form-group">
        <label for="npm" class="form-label" id="npm" value="<?= $npm?>">NPM</label>
        <input type="text" name="npm" id="npm" class="form-control">
    </div>
    <div class="form-group">
        <label for="nama" class="form-label" id="nama" value="<?=$nama?>">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control">
    </div>
    <div class="form-group">
        <label for="alamat" class="form-label" id="alamat" value="<?=$alamat?>">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>