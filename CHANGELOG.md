# Cortex Auth Change Log

All notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](CONTRIBUTING.md).


## [v4.0.5] - 2019-10-14
- Update menus & breadcrumbs event listener to accessarea.ready
- Fix wrong dependencies letter case

## [v4.0.4] - 2019-10-06
- Refactor menus and breadcrumb bindings to utilize event dispatcher
- Drop wrong useless adminarea.register route

## [v4.0.3] - 2019-09-24
- Add missing laravel/helpers composer package

## [v4.0.2] - 2019-09-23
- Fix outdated package version

## [v4.0.1] - 2019-09-23
- Fix outdated package version

## [v4.0.0] - 2019-09-23
- Upgrade to Laravel v6 and update dependencies

## [v3.0.6] - 2019-09-03
- Skip Javascrip validation for file input fields to avoid size validation conflict with jquery.validator
- Fix size validation rule

## [v3.0.5] - 2019-09-03
- Fix wrong hardcoded members guard name

## [v3.0.4] - 2019-09-03
- Enforce profile_picture and cover_photo image validation rules & update media config
- Because session last_activity store timestamp we should comapre by time function instead of now (#82)
- Fix redirection routes for different accessareas
- Use $_SERVER instead of $_ENV for PHPUnit
- Remove new password validation from broker
- Update HttpKernel to use Authenticate middleware under App namespace

## [v3.0.3] - 2019-08-03
- Tweak menus & breadcrumbs performance
- Fix menu issues

## [v3.0.2] - 2019-08-03
- Update composer dependencies

## [v3.0.1] - 2019-08-03
- Upgrade rinvex/laravel-auth package

## [v3.0.0] - 2019-08-03
- Upgrade composer dependencies
- Upgrade socialite to v4 (#77)
- Override AuthenticateSession middleware to support multi-guard authentication
- Merge cortex/auth-b2b2c2 into this core cortex/auth module

## [v2.1.3] - 2019-06-03
- Enforce latest composer package versions

## [v2.1.2] - 2019-06-03
- Update publish commands to support both packages and modules natively

## [v2.1.1] - 2019-06-02
- Fix yajra/laravel-datatables-fractal and league/fractal compatibility

## [v2.1.0] - 2019-06-02
- Fix twofactor route
- Update composer deps
- Drop PHP 7.1 travis test
- Add settings to managerarea menu
- Refactor migrations and artisan commands, and tweak service provider publishes functionality

## [v2.0.0] - 2019-03-03
- Require PHP 7.2 & Laravel 5.8
- Utilize includeWhen blade directive
- Replace __ CLASS __ with self::class (potentially deprecated in PHP 7.4)
- Fix json/array casting type
- Add files option to the form to allow file upload
- Fix wrong authorization check method for superadmins
- Refactor abilities seeding
- Refactor managed roles/abilities retrieval
- Drop role Tenantability, and use bouncer native scopes features
- Refactor isManager & isSupermanager methods
- Drop ownership feature of tenants

## [v1.0.6] - 2019-01-04
- Drop member & manager seeds

## [v1.0.5] - 2019-01-03
- Add settings link to logged-in user menu
- Seed member & manager accounts
- Force save password regardless of any other fields validation errors
  - This action only deal with password change anyway.
- Simplify and flatten create & edit form controller actions
- Tweak and simplify FormRequest validations

## [v1.0.4] - 2018-12-25
- Rename environment variable QUEUE_DRIVER to QUEUE_CONNECTION
- Fix wrong media destroy route
- Fix cortex:seed:auth

## [v1.0.3] - 2018-12-23
- Apply spatie/laravel-activitylog updates
- Fix macroable recursive calls

## [v1.0.2] - 2018-12-23
- Fix wrong pragmarx/google2fa dependency version

## [v1.0.1] - 2018-12-22
- Update composer dependencies
- Add PHP 7.3 support to travis

## [v1.0.0] - 2018-10-01
- Support Laravel v5.7, bump versions and enforce consistency

## [v0.0.3] - 2018-09-22
- Too much changes to list here!!

## [v0.0.2] - 2018-02-17
- Complete package refactor!

## v0.0.1 - 2017-03-13
- Tag first release

[v4.0.5]: https://github.com/rinvex/cortex-auth/compare/v4.0.4...v4.0.5
[v4.0.4]: https://github.com/rinvex/cortex-auth/compare/v4.0.3...v4.0.4
[v4.0.3]: https://github.com/rinvex/cortex-auth/compare/v4.0.2...v4.0.3
[v4.0.2]: https://github.com/rinvex/cortex-auth/compare/v4.0.1...v4.0.2
[v4.0.1]: https://github.com/rinvex/cortex-auth/compare/v4.0.0...v4.0.1
[v4.0.0]: https://github.com/rinvex/cortex-auth/compare/v3.0.6...v4.0.0
[v3.0.6]: https://github.com/rinvex/cortex-auth/compare/v3.0.5...v3.0.6
[v3.0.5]: https://github.com/rinvex/cortex-auth/compare/v3.0.4...v3.0.5
[v3.0.4]: https://github.com/rinvex/cortex-auth/compare/v3.0.3...v3.0.4
[v3.0.3]: https://github.com/rinvex/cortex-auth/compare/v3.0.2...v3.0.3
[v3.0.2]: https://github.com/rinvex/cortex-auth/compare/v3.0.1...v3.0.2
[v3.0.1]: https://github.com/rinvex/cortex-auth/compare/v3.0.0...v3.0.1
[v3.0.0]: https://github.com/rinvex/cortex-auth/compare/v2.1.2...v3.0.0
[v2.1.2]: https://github.com/rinvex/cortex-auth/compare/v2.1.1...v2.1.2
[v2.1.1]: https://github.com/rinvex/cortex-auth/compare/v2.1.0...v2.1.1
[v2.1.0]: https://github.com/rinvex/cortex-auth/compare/v2.0.0...v2.1.0
[v2.0.0]: https://github.com/rinvex/cortex-auth/compare/v1.0.6...v2.0.0
[v1.0.6]: https://github.com/rinvex/cortex-auth/compare/v1.0.5...v1.0.6
[v1.0.5]: https://github.com/rinvex/cortex-auth/compare/v1.0.4...v1.0.5
[v1.0.4]: https://github.com/rinvex/cortex-auth/compare/v1.0.3...v1.0.4
[v1.0.3]: https://github.com/rinvex/cortex-auth/compare/v1.0.2...v1.0.3
[v1.0.2]: https://github.com/rinvex/cortex-auth/compare/v1.0.1...v1.0.2
[v1.0.1]: https://github.com/rinvex/cortex-auth/compare/v1.0.0...v1.0.1
[v1.0.0]: https://github.com/rinvex/cortex-auth/compare/v0.0.2...v1.0.0
[v0.0.2]: https://github.com/rinvex/cortex-auth/compare/v0.0.2...v0.0.3
[v0.0.2]: https://github.com/rinvex/cortex-auth/compare/v0.0.1...v0.0.2
