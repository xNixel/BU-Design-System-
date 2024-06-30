
Prism.highlightAll();

function togglePreview(element) {
    const previewButton = element.querySelector('.btn-preview');
    const htmlButton = element.querySelector('.btn-html');
    const codePreview = element.querySelector('.code-preview');
    const codeHTML = element.querySelector('.code-html');
    const copyButton = element.querySelector('.btn-copy');

    codePreview.style.display = 'block';
    codeHTML.style.display = 'none';
    copyButton.style.display = 'none';

    previewButton.classList.add('active');
    htmlButton.classList.remove('active');

    // TODO(patrick): Add fade in
}

function toggleHtml(element) {
    const previewButton = element.querySelector('.btn-preview');
    const htmlButton = element.querySelector('.btn-html');
    const codePreview = element.querySelector('.code-preview');
    const codeHTML = element.querySelector('.code-html');
    const copyButton = element.querySelector('.btn-copy');

    codePreview.style.display = 'none';
    codeHTML.style.display = 'block';
    copyButton.style.display = 'block';

    htmlButton.classList.add('active');
    previewButton.classList.remove('active');
}