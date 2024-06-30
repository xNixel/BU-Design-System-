<div class="border rounded p-4 <?php echo $preview_margin ?> position-relative">
    <!-- Example text -->
    <p class="small position-absolute h6 bg-light text-body-tertiary translate-middle top-0 ms-4 p-1">
        <?php echo $preview_title ?>
    </p>

    <div class="position-absolute pt-5 pe-5 top-0 end-0">
        <button data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to Clipboard" class="btn-copy"
            style="display: block;" onclick="copyToClipboardButton(this, `<?php echo htmlspecialchars($code); ?>`)">
            <i class="material-icons small fs-5 text-white-50 btn-copy">content_copy</i>
        </button>
    </div>

    <div class="row mt-2" style="max-width: 79.5vh">
        <!-- TODO(patrick): Adding max-width 79.5 as band-aid fix for the expanding width -->
        <div>
            <!-- ! BUG: width expands -->
            <div class="code-html form-control pt-4 pt-sm-0 px-3 pb-4" style="display: block;">
                <code class="language-html text-body"><?php codePreview($code); ?></code>
            </div>
        </div>
    </div>

</div>