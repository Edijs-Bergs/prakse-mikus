<div data-control="toolbar">
    <a
        href="<?= Backend::url('mikus/movies/movies/create') ?>"
        class="btn btn-primary oc-icon-plus">
        <?= e(trans('backend::lang.form.create')) ?>
    </a>
    <?php if($this->user->hasAccess('delete_movies')): ?>
        <button
            class="btn btn-default oc-icon-trash-o"
            data-request="onDelete"
            data-request-confirm="<?= e(trans('backend::lang.list.delete_selected_confirm')) ?>"
            data-list-checked-trigger
            data-list-checked-request
            data-stripe-load-indicator>
            <?= e(trans('backend::lang.list.delete_selected')) ?>
        </button>
    <?php endif ?>
</div>
