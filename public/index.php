<?php
require __DIR__ . '/../src/TenantContext.php';
require __DIR__ . '/../src/TenantStore.php';
header('Content-Type: application/json; charset=utf-8');

$tenantId = $_GET['tenant'] ?? 'acme';
$ctx = new TenantContext($tenantId);
$store = new TenantStore(__DIR__ . '/../storage/tenants.json');
$data = $store->forTenant($ctx->id());

echo json_encode([
    'tenant' => $ctx->id(),
    'data' => $data,
    'note' => 'In production, resolve tenant from subdomain/header and scope every DB query.',
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
