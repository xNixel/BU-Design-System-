<?php

function codePreview($htmlCode)
{
    // Convert special characters to HTML entities
    $htmlCode = str_replace("<", '&lt', $htmlCode);
    $htmlCode = str_replace(">", '&gt', $htmlCode);

    // Split the code into lines
    $lines = explode("\n", $htmlCode);

    // Find the minimum indentation for the content lines (excluding the first line)
    $minIndent = PHP_INT_MAX;
    for ($i = 1; $i < count($lines); $i++) {
        if (trim($lines[$i]) !== '') {
            $indentLength = strlen($lines[$i]) - strlen(ltrim($lines[$i]));
            $minIndent = min($minIndent, $indentLength);
        }
    }

    // Remove the minimum indentation from each content line
    for ($i = 1; $i < count($lines); $i++) {
        if (trim($lines[$i]) !== '') {
            $lines[$i] = substr($lines[$i], $minIndent);
        }
    }

    // Reassemble the modified HTML code
    $modifiedHtmlCode = implode("\n", $lines);

    echo $modifiedHtmlCode;
}

$GLOBALS['copy'] = '<button class="btn-code" data-bs-toggle="tooltip" data-bs-placement="top"
data-bs-title="Copy to Clipboard" onclick="copyToClipboard(this)">';


?>