<?php

declare(strict_types=1);

it('permanently redirects old URLs to their closest current page', function (string $from, string $to) {
    $this->get($from)->assertStatus(301)->assertRedirect($to);
})->with([
    ['/contact-us', '/contact'],
    ['/services/custom-software-development', '/services/laravel-development'],
    ['/services/admin-dashboard-development', '/services/custom-crm-development'],
    ['/services/maintenance-support', '/services'],
    ['/services/security-performance-optimization', '/services'],
    ['/cdn-cgi/l/email-protection', '/contact'],
]);
