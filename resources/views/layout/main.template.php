<?= view('layout->header.template') ?>

    <!-- Your content here -->

    <div class="container h-full mx-auto px-4">
        <div class="flex  gap-10 justify-center items-center h-full">
            <?= $content ?>
        </div>
    </div>

<?= view('layout->footer.template') ?>

