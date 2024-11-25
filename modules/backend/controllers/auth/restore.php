<h2><?= e(trans('backend::lang.account.enter_login')) ?></h2>

<?= Form::open() ?>
    <input type="hidden" name="postback" value="1" />

    <div class="form-elements" role="form">
        <div class="form-group text-field horizontal-form">

            <input
                type="text"
                name="login"
                value="<?= e(post('login')) ?>"
                class="form-control icon user"
                placeholder="<?= e(trans('backend::lang.account.login_placeholder')) ?>"
                autocomplete="off"
                maxlength="255" />

            <button type="submit" class="btn btn-primary restore-button">
                <?= e(trans('backend::lang.account.restore')) ?>
            </button>
        </div>

        <p class="pull-right forgot-password">
            <a href="<?= Backend::url('backend/auth') ?>" class="text-muted">
                <?= e(trans('backend::lang.form.cancel')) ?>
            </a>
        </p>
    </div>
<?= Form::close() ?>

<?= $this->fireViewEvent('backend.auth.extendRestoreView') ?>
