# Multi-Tenant Architecture

- **Tenant resolution:** subdomain (`acme.app.com`) أو Header `X-Tenant`.
- **Isolation:** عمود `tenant_id` في كل جدول (Shared DB) أو قاعدة لكل مستأجر.
- **Auth:** المستخدم ينتمي لمستأجر واحد أو أكثر مع أدوار.
- **Safety:** Global scope في Eloquent لمنع تسرّب البيانات بين الشركات.
