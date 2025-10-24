

    
    <?= $this->extend('templates/templeta') ?>

 
    <?= $this->section('content') ?>

    <div class="max-w-6xl mx-auto mt-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
        <?= $this->include('templates/cards') ?>
    </div>
    
       <?= $this->endSection() ?>
 