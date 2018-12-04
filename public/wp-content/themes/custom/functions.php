<?php

/** Mailer config */
add_action('phpmailer_init', 'send_smtp_email');
function send_smtp_email($mailer) {
    $mailer->isSMTP();
    $mailer->Host       = SMTP_HOST;
    $mailer->SMTPAuth   = SMTP_AUTH;
    $mailer->Port       = SMTP_PORT;
    $mailer->Username   = SMTP_USER;
    $mailer->Password   = SMTP_PASS;
    $mailer->SMTPSecure = SMTP_SECURE;
    $mailer->From       = SMTP_FROM;
    $mailer->FromName   = SMTP_NAME;
}

/** Helper to get any theme asset (also reads manifest.json for versioning) */
function asset($path) {
    $manifest = @json_decode(file_get_contents(__DIR__ . '/build/manifest.json'), true);

    return isset($manifest[$path])
        ? $manifest[$path]
        : get_template_directory_uri() . '/' . $path;
}