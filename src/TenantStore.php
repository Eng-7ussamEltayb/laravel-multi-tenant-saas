<?php
class TenantStore
{
    public function __construct(private string $file) {}

    public function forTenant(string $tenantId): array
    {
        $all = json_decode((string)file_get_contents($this->file), true) ?: [];
        return $all[$tenantId] ?? ['company' => $tenantId, 'assets' => []];
    }
}
