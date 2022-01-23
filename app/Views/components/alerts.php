<?php if (session()->get('errors')): ?>
    <div class="alert alert-error flex flex-col items-start mb-4 text-sm">
        <p class="mb-2">Errors occured: </p>
        <ul class="flex flex-col list-disc">
            <?php foreach (session()->get('errors') as $error): ?>
                <li class="ml-4 mt-2"><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (session()->get('error')): ?>
    <div class="alert alert-error flex flex-col items-start mb-4 text-sm">
        <p>
            <?= session()->get('error') ?>
        </p>
    </div>
<?php endif; ?>

<?php if (session()->get('success')): ?>
    <div class="alert alert-success flex flex-col items-start mb-4 text-sm">
        <p>
            <?= session()->get('success') ?>
        </p>
    </div>
<?php endif; ?>