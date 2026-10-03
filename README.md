# هيكل SaaS متعدد المستأجرين
## Laravel Multi-Tenant SaaS

**Portfolio Demo Project** | المستوى: **متقدم** | المؤلف: [Eng-7ussamEltayb](https://github.com/Eng-7ussamEltayb)

### الفكرة
ديمو يوضح عزل بيانات الشركات (Tenants) مع توثيق معماري للتوسع في Laravel.

### التقنيات
PHP, multi-tenancy concepts, Laravel-ready

### المميزات
- تبديل المستأجر عبر query
- عزل بيانات لكل شركة
- وثيقة معمارية

### طريقة التشغيل
1. cd public
2. php -S localhost:8080
3. http://localhost:8080/?tenant=acme
4. http://localhost:8080/?tenant=nova

### هيكل المشروع
```
src/
public/index.php
storage/tenants.json
docs/ARCHITECTURE.md
README.md
```

### ملاحظات
- هذا مشروع تعليمي/معرض أعمال (Portfolio)، وليس بالضرورة نظام إنتاج كامل.
- لا تضع أسراراً حقيقية داخل المستودع.

### الرخصة
MIT — للاستخدام التعليمي والعرض المهني.
