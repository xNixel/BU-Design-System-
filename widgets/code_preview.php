<div class="border rounded p-4 mt-5 position-relative">
    <!-- Example text -->
    <p class="small position-absolute h6 bg-light text-body-tertiary translate-middle top-0 ms-4 p-1">
        EXAMPLE</p>

    <!-- Preview button -->
    <div class="small position-absolute translate-middle pe-4 pb-4 ps-4 top-0 end-0">
        <button class="btn btn-sm h6 text-body-tertiary p-0 btn-preview active"
            onclick="togglePreview(this.parentNode.parentNode)">PREVIEW</button>
    </div>

    <!-- HTML button -->
    <div class="small position-absolute translate-middle pb-4 top-0 end-0">
        <button class="btn btn-sm h6 text-body-tertiary p-0 btn-html"
            onclick="toggleHtml(this.parentNode.parentNode)">HTML</button>
    </div>

    <div class="position-absolute pt-5 pe-5 top-0 end-0">
        <button data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to Clipboard" class="btn-copy"
            onclick="copyToClipboardButton(this, `<?php echo htmlspecialchars($code); ?>`)">
            <i class="material-icons small fs-5 text-white-50 btn-copy">content_copy</i>
        </button>
    </div>

    <!-- Code preview -->
    <div class="code-preview mt-2">
        <?php echo $code; ?>
    </div>

    <!-- HTML code -->

    <div class="row mt-2" style="max-width: 79.5vh">
        <!-- TODO(patrick): Adding max-width 79.5 as band-aid fix for the expanding width -->
        <div>
            <!-- ! BUG: width expands -->
            <div class="code-html form-control pt-4 pt-sm-0 px-3 pb-4">
                <code class="language-html text-body"> <?php codePreview($code); ?>
                </code>
            </div>
        </div>
    </div>

</div>