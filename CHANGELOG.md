# Changelog

All notable changes to this project will be documented in this file.

## 1.0.0 - 2026-11-17

First release: CCPA/CPRA audit log for Laravel, part of the laravel-ccpa suite.

- Logs who viewed, changed, exported or deidentified personal information. Only column names are stored, never values.
- The log is append-only and hash-chained (HMAC). `ccpa:audit-verify` finds altered, removed or inserted entries.
- The `AuditsPersonalData` trait logs changes to declared columns and deletions, and every deidentification (deletion requests, retention) is logged automatically. `auditAccess()` records views.

## [Unreleased]
