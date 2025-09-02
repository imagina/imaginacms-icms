# ICMS – Quasar CMS for Laravel

This package integrates a **Quasar/Vue CMS** into a Laravel project,  
serving the compiled `dist` files directly from `public/iadmin`.

---

## 🚀 Installation

1. Require the package in your project:

```bash
composer require imagina/icms
```

2. Publish the CMS
```bash
php artisan icms:publish
```
- This will create a symbolic link: `public/iadmin  →  vendor/imagina/icms/dist`

