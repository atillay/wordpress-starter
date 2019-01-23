<?php

/** Mailer config */
add_action('phpmailer_init', function ($mailer) {
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
});

/** Save ACF fields into Json files for versioning */
add_filter('acf/settings/save_json', function () {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});

/** Helper to get any theme asset (also reads manifest.json for versioning) */
function asset($path) {
    $manifest = @json_decode(file_get_contents(__DIR__ . '/../dist/manifest.json'), true);
    $versionedPath = 'wp-content/themes/' . get_template() .  '/' . $path;
    return isset($manifest[$versionedPath])
        ? $manifest[$versionedPath]
        : get_template_directory_uri() . '/' . $path;
}

