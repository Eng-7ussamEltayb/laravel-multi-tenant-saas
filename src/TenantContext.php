<?php
class TenantContext
{
    public function __construct(private string $tenantId) {}

    public function id(): string
    {
        return $this->tenantId;
    }
}
