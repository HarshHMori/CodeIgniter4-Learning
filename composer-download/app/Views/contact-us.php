<?= $this -> extend("layout/main"); ?>

<?= $this -> section("pageTitle"); ?>
    Contact Us
<?= $this -> endSection(); ?>

<?= $this -> section("pageBody"); ?>
    Contact Us Content
    <?= $this -> include("partials/contact-form"); ?>
<?= $this -> endSection(); ?>