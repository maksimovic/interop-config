# Interoperability Configuration

> Fork of [sandrokeil/interop-config](https://github.com/sandrokeil/interop-config) — maintained for PHP 8.1–8.5 compatibility.

[![CI](https://github.com/maksimovic/interop-config/actions/workflows/ci.yml/badge.svg)](https://github.com/maksimovic/interop-config/actions/workflows/ci.yml)
[![License](https://poser.pugx.org/maksimovic/interop-config/license.png)](https://packagist.org/packages/maksimovic/interop-config)

`interop-config` provides interfaces and a concrete implementation to create instances depending on configuration via
factory classes and ensures a valid config structure. It can also be used to auto discover factories
and to create configuration files.

## Installation

```console
$ composer require maksimovic/interop-config
```

Requires PHP 8.1 or later.

## Fork rationale

The upstream package was last released in 2020 and is no longer maintained. This fork:

- Bumps minimum PHP to 8.1
- Fixes implicit nullable type deprecations (PHP 8.4+)
- Fixes `null` as array offset deprecation
- Upgrades PHPUnit to `^10.5` with schema migration
- Replaces Travis CI with GitHub Actions (PHP 8.1–8.5 matrix)
- Suppresses `posix_isatty` warning on user-space streams

Behavior is otherwise unchanged.

## Documentation

See the original documentation at [sandrokeil.github.io/interop-config](http://sandrokeil.github.io/interop-config/).

## License

Released under the BSD-3-Clause License.
