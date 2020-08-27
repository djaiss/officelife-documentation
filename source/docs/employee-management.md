---
title: Employee management
description: How to add and delete an employee.
extends: _layouts.documentation
section: content
---

# Employee management {#employee-management}

<div class="version badge -rot-3">
  Introduced in OfficeLife 2020.1.
</div>

## Overview {#overview}

Employees are managed in Adminland. Here are all the things you can do in Adminland about employees:

* add and invite employees,
* lock an employee’s account,
* delete an employee.

Below is a screenshot showing how you manage employees inside OfficeLife.

![list of employees in adminland](/assets/img/adminland_employees_list.png)

## Add a new employee {#add-an-employee}

To add a new employee, you need 3 pieces of mandatory information:

* first name,
* last name,
* and email address.

![add a new employee in adminland](/assets/img/adminland_employees_new.png)

During this process, you can invite the employee by email. This will send an email to this employee, inviting him to create an account on OfficeLife so he actually use the software. You don't have to invite this person by email at this stage as you can do this later on.

If an employee is invited to create a user account, he will be put in an `Invited` state. This state will simply serve as an indicator on the list of employees and will disappear as soon as the employee creates an account after being invited.

The final mandatory information is the role this employee will have. Refer to the [documentation about roles](/docs/understanding-roles) to know more about what that means.

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>Only employees with the <a href="/docs/understanding-roles">HR or administrator roles</a> can add an employee.</li>
    <li>The first name, last name and email address fields are limited to 255 characters.</li>
  </ul>
</div>

## Locking an employee {#locking-an-employee}

Instead of having to [delete an employee](#deleting-an-employee), you can lock the employee’s account. Locking lets you prevent the employee from logging into his account, but keep track of everything this employee has ever done in OfficeLife.

Locking an employee should be used in those cases:

* when an employee leaves the company,
* when an employee has been let go.

Locking is not a permanent action as you can unlock an account anytime if you change your mind.

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>Only employees with the <a href="/docs/understanding-roles">HR or administrator roles</a> can lock an employee.</li>
    <li>An employee can't lock himself, even with enough permissions. That means an administrator can't lock himself.</li>
    <li>Once an employee is locked, he won’t appear in the search results anymore, nor in the list of employees in the application.</li>
    <li>He won’t be listed in the list of team members if he was part of a team.</li>
    <li>If the employee was a manager with expenses to validate, expenses will be moved to the accounting stage directly.</li>
    <li>If the employee was had [the accountant role](/expenses/#who-can-manage-expenses), this role will automatically be removed.</li>
    <li>[Current polls](/rate-your-manager) about the employee (if this employee was a manager) will be stopped immediately.</li>
    <li>He will still appear in the list of employees inside Adminland.</li>
    <li>All content written by the employee will still be available for everyone to see (worklogs, answers to questions,…).</li>
    <li>The employee’s profile will still be accessible through direct links.</li>
  </ul>
</div>

## Deleting an employee {#deleting-an-employee}

Deleting an employee is an important decision. It will immediately destroy everything OfficeLife knows about an employee, and will prevent the employee to log in to this OfficeLife account. Those changes will be effective immediately.

There are two ways to delete an employee:

* either by choosing the employee on the list of employees in Adminland,
* or by going through the employee's profile and select the Delete option in the upper right menu.

Once an employee is removed from OfficeLife, everything that is linked to this employee is also removed. That means, for instance, if the employee was a team leader, the team won’t have a team lead anymore. All answers will be removed. All worklogs will also be removed. And so on.

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>Only employees with the <a href="/docs/understanding-roles">HR or administrator roles</a> can delete an employee.</li>
    <li>An employee can't delete himself, even with enough permissions (for instance, an administrator can't delete himself).</li>
  </ul>
</div>
