<?php
$dataProduk = array(
    array("Galaxy S21", "Samsung", 19000000, true),
    array("Galaxy A71", "Samsung", 6999000, false),
    array("iPhone 12 Pro Max", "Apple", 20999000, true),
    array("iPhone 12 Mini", "Apple", 10999000, false),
);
?>

<?php foreach ($dataProduk as $produk) : ?>
    <div class="card">
        <div class="card-header"><?php echo $produk[1]; ?></div>
        <div class="card-body">
            <p><?php echo $produk[0]; ?></p>
            <p>Rp <?php echo number_format($produk[2], 0, ',', '.'); ?></p>
            <p class="<?php echo ($produk[3] ? 'stok-ada' : 'stok-habis'); ?>">
                <?php echo ($produk[3] ? 'Stok Tersedia' : 'Stok Habis'); ?>
            </p>
            <?php if ($produk[3]) : ?>
                <button class="order-button">Order</button>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; ?>
