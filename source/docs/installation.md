---
title: Installation
description: How to get started for real.
extends: _layouts.documentation
section: content
---

# Installation {#installation}

## Requirements for self-hosting {#requirements-for-self-hosting}

OfficeLife requires the following technologies to run efficiently

- PHP 7.4 or higher,
- the PHP's intl extension,
- mySQL or SQLite,
- Nginx,
- We recommend [Forge](https://forge.laravel.com/) or [Ploi](https://ploi.io) to provision the servers needed to run OfficeLife.

## Populate account with fake data {#populate-account-with-fake-data}

We provide a way to try out OfficeLife with semi-real data that will give you a good sense of what the tool's capabilities are. That will fill your account with a lot of employees with a lot of activities.

We provide a custom command that needs to be executed in the terminal to achieve this.

☢️ Warning: running this command will wipe your database entirely in order to set up a new set of data. Make sure you backup any existing data before running this command.

The CLI command: `php artisan setup:dummyaccount`

![cli command to populate the database](/assets/img/installation_dummy_script.png)

Depending on your database and hardware, it can take up to a minute for the script to completely run.

Once the script has run, two accounts will be created.

One of the account will be Michael Scott, administrator of the account and you should be able to sign in to your account by using `admin@admin.com` as your email address, and `admin` as the password. It will have a lot of data.

The second account will be an empty account, so you can see the blank state. You need to sign in with `blank@blank.com` and the password `blank`.

Both accounts will have the administrator privilege, meaning that you will have full power and control over everything in the instance. It will also have the accountant role, in order to view and manage expenses from everyone.