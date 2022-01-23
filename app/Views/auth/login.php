<?= $this->extend('layouts/auth') ?>

<?= $this->section('content') ?>
<div class="flex justify-center mb-6">
    <a href="<?= base_url('/') ?>">
        <img
            src="<?= base_url('/icon.svg') ?>"
            class="w-24 h-24"
            alt="Developer's Note Logo"
        />
    </a>
</div>

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <?= $this->include('components/alerts') ?>

        <form action="<?= base_url('/login') ?>" method="post">
            <div class="div form-control mb-4">
                <label for="username" class="label">
                    <span class="label-text">
                        Username
                    </span>
                </label>
                <input
                    type="text"
                    name="username"
                    id="username"
                    class="input input-bordered"
                    value="<?= old('name') ?>"
                    required
                >
            </div>

            <div class="div form-control mb-6">
                <label for="password" class="label">
                    <span class="label-text">
                        Password
                    </span>
                </label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="input input-bordered"
                    required
                >
            </div>

            <div class="flex items-center justify-end text-sm">
                <a href="<?= base_url('/register') ?>" class="underline">
                    New user? Register here.
                </a>
                <button class="btn btn-primary ml-4">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>