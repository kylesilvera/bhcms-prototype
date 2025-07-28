# BH-CMS Prototype

## Setup
1. Install XAMPP and start Apache & MySQL.
2. Copy this folder to `/Applications/XAMPP/xamppfiles/htdocs/bhcms`.
3. In phpMyAdmin, create database `bhcms` and import `init.sql`.
4. Run `http://localhost/bhcms/hash.php` to generate a password hash.
5. Insert users `customer1` and `staff1` in `users` table using that hash.

## Usage
- **Login**: `http://localhost/bhcms/login.php`
- **Menu**: `http://localhost/bhcms/menu.php`
- **Staff Orders**: `http://localhost/bhcms/staff_orders.php`

## Testing
See `tests/TEST_REPORT.md` for manual test cases.

## Branching Model
We use `feature/*` branches, PRs into `main`, and descriptive `feat:`/`chore:` commits.
