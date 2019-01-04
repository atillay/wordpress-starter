<?php

/** Mailer config */
add_action('phpmailer_init', 'send_smtp_email');
function send_smtp_email($mailer) {
    $mailer->isSMTP();
    $mailer->From        = SMTP_FROM_EMAIL;
    $mailer->FromName    = SMTP_FROM_NAME;
    $mailer->Host        = SMTP_HOST;
    $mailer->SMTPAuth    = SMTP_AUTH;
    $mailer->Port        = SMTP_PORT;
    $mailer->Username    = SMTP_USER;
    $mailer->Password    = SMTP_PASS;
    $mailer->SMTPSecure  = SMTP_ENCRYPTION;
    $mailer->SMTPAutoTLS = SMTP_AUTO_TLS;
}

/** Save ACF fields into Json files for versioning */
function my_acf_json_save_point() {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

/** Helper to get any theme asset (also reads manifest.json for versioning) */
function asset($path) {
    $manifest = @json_decode(file_get_contents(__DIR__ . '/dist/manifest.json'), true);

    return isset($manifest[get_template_directory_uri() . '/' . $path])
        ? $manifest[$path]
        : get_template_directory_uri() . '/' . $path;
}
