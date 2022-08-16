<style>
    .button-like-text {
        border: 0;
        padding: 0;
        background-color: transparent;
    }

    .color-danger {
        color: #aa0000;
    }

    .color-danger:hover {
        color: #dc3232;
    }

</style>


<div style="text-align: center;">
    <p>
        <button type="button" class="button js-open-book-cover-media">표지 넣기</button>
    </p>
    <div class="js-book-cover-thumbnail"></div>
    <p>
        <button type="button" class="button-like-text color-danger js-remove-book-cover-media" style="display: none">표지 제거</button>
    </p>
    <input type="hidden" name="meta[cover_id]" value="<?= esc_attr(get_post_meta(get_the_ID(), 'cover_id', true)) ?>">
</div>