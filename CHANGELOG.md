# Changelog

All notable changes to this project will be documented in this file.

## 2.0.0 - 2026-11-18

### Breaking

- The engine moves to [laravel-privacy](https://github.com/jeffersongoncalves/laravel-privacy), the base shared by the LGPD, GDPR, CCPA, US privacy and Quebec suites. Every class of this package keeps its name and now extends its `JeffersonGoncalves\Privacy` base. If you extend one of them, check your overrides.

### Unchanged

- Config keys, tables, migrations, commands, events and the `#[PersonalData]` declarations: apps need no change.

### Added

- Suites installed side by side (e.g. LGPD and GDPR) only see their own declarations and events.

## 1.0.0 - 2026-11-17

First release: CCPA/CPRA audit log for Laravel, part of the laravel-ccpa suite.

- Logs who viewed, changed, exported or deidentified personal information. Only column names are stored, never values.
- The log is append-only and hash-chained (HMAC). `ccpa:audit-verify` finds altered, removed or inserted entries.
- The `AuditsPersonalData` trait logs changes to declared columns and deletions, and every deidentification (deletion requests, retention) is logged automatically. `auditAccess()` records views.

## [Unreleased]
