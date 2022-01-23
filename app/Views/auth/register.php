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

        <form action="<?= base_url('/register') ?>" method="post">
            <div class="div form-control mb-4">
                <label for="name" class="label">
                    <span class="label-text">
                        Full Name
                    </span>
                </label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="input input-bordered"
                    value="<?= old('name') ?>"
                    required
                >
            </div>

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
                    value="<?= old('username') ?>"
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

            <div class="div form-control mb-6">
                <label for="password_confirmation" class="label">
                    <span class="label-text">
                        Confirm Password
                    </span>
                </label>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    class="input input-bordered"
                    required
                >
            </div>

            <div class="flex items-center justify-end text-sm">
                <a href="<?= base_url('/login') ?>" class="underline">
                    Already have an account? Log in here.
                </a>
                <button class="btn btn-primary ml-4">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>