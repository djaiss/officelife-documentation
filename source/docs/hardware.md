---
title: Hardware
description: Manage your hardware inventory right into OfficeLife.
extends: _layouts.documentation
section: content
---

# Hardware inventory management {#hardware}

Introduced in OfficeLife 2020.1.

## Overview {#overview}

Every company gives their employees some tools to work. Companies using OfficeLife are probably related to technology somehow, and if that's the case, they have laptops and desktops and mice and keyboards and cables that they give to their employees. Keeping track of who has what, and the company's inventory in general, can quickly become a mess. This is why OfficeLife gives companies an easy and simple way of keeping track of hardware.

## How to manage hardware {#how-to-manage-hardware}

The management of your hardware is done inside [Adminland](/docs/adminland).

### Create a new item {#create-a-new-item}

![track a new item](/assets/img/hardware_creation.png)

To create a new item, you need to specify its name. This is the only information that is required. However, you can also provide another information, labelled as serial number, to help you uniquely identify the object. You don't have to use this field to store the serial number per se, as you can enter whatever you want in it. The goal, really, is to help you identify the object.

Even though you can do it later, you can also associate this item to an employee right away. When you associate an item to an employee, this item will appear on the employee profile.

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>Only employees with the <a href="/docs/understanding-roles">HR or administrator roles</a> can create an item.</li>
    <li>Both the name and the serial number fields are limited to 255 characters.</li>
  </ul>
</div>

### Listing all items {#listing-all-items}

![list all hardware](/assets/img/hardware_list_items.png)

Sometimes you need to have an overview of all the hardware you have in your company. The hardware screen, by default, lists all the items in your company. It has 3 filters:

* one that displays all the items in the company
* one that shows only the items that have been given to employees,
* one that shows the items that are available.

Each line of the table shows the name of the item, its serial number if it’s defined, and the name of the employee this item belongs to, if applicable.

On this page you can also search a specific item by using the filter field above the list of items. Search here performs a partial or exact match, on the name or the serial number attributes.

### Hardware lent to an employee

Many items can be lent to an employee. Once an item is lent, it will appear on the employee's profile page.

![items on the employee page](/assets/img/hardware_list_employee.png)

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>Only the employee who views his profile, or employees with the <a href="/docs/understanding-roles">HR or administrator roles</a>, can view the list of items lent on an employee's profile page.</li>
  </ul>
</div>