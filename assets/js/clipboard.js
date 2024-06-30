function copyToClipboard(copyText) {
    // Select the text inside the anchor tag
    const textToCopy = copyText.innerText;

    // Create a temporary input element
    const tempInput = document.createElement('textarea');
    tempInput.value = textToCopy;

    // Append the temporary input element to the DOM
    document.body.appendChild(tempInput);

    // Select the text inside the temporary input
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the temporary input to the clipboard
    document.execCommand('copy');

    // Remove the temporary input from the DOM
    document.body.removeChild(tempInput);

    // Set the updated title to "Copied!"
    copyText.setAttribute('data-bs-title', 'Copied!');

    // Destroy the existing tooltip instance
    const tooltip = bootstrap.Tooltip.getInstance(copyText);
    if (tooltip) {
        tooltip.dispose();
    }

    // Create a new tooltip instance with the updated title and "manual" option
    const updatedTooltip = new bootstrap.Tooltip(copyText, {
        trigger: 'manual'
    });

    updatedTooltip.show();

    // Restore the original title and hide the tooltip after 2 seconds
    setTimeout(() => {
        copyText.setAttribute('data-bs-title', 'Copy to Clipboard');
        updatedTooltip.hide(); // Hide the tooltip after 2 seconds
    }, 2000);

    // TODO(patrick): Upon dismiss, it should switch back the hover to the original behavior

}

function copyToClipboardButton(copyText, code) {

    // ! BUG(patrick): Upon copy, there is an extra line

    // Select the text inside the anchor tag
    const textToCopy = code;

    // Create a temporary input element
    const tempInput = document.createElement('textarea');
    tempInput.value = textToCopy;

    // Append the temporary input element to the DOM
    document.body.appendChild(tempInput);

    // Select the text inside the temporary input
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the temporary input to the clipboard
    document.execCommand('copy');

    // Remove the temporary input from the DOM
    document.body.removeChild(tempInput);

    const icon = copyText.querySelector('.material-icons');
    if (icon) {
        icon.textContent = 'check';
    }
    // Set the updated title to "Copied!"
    copyText.setAttribute('data-bs-title', 'Copied!');

    // Destroy the existing tooltip instance
    const tooltip = bootstrap.Tooltip.getInstance(copyText);
    if (tooltip) {
        tooltip.dispose();
    }

    // Create a new tooltip instance with the updated title and "manual" option
    const updatedTooltip = new bootstrap.Tooltip(copyText, {
        trigger: 'manual'
    });

    updatedTooltip.show();

    // Restore the original title and hide the tooltip after 2 seconds
    setTimeout(() => {
        copyText.setAttribute('data-bs-title', 'Copy to Clipboard');
        updatedTooltip.hide(); // Hide the tooltip after 2 seconds
        icon.textContent = 'content_copy';
    }, 2000);

    // TODO(patrick): Upon dismiss, it should switch back the hover to the original behavior

}

