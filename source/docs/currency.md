---
title: Currency
description: Everything to know about the currency used in the company.
extends: _layouts.documentation
section: content
---

# Currency {#currency}

## Overview {#overview}

Every company needs to deal with money at some point. And at the end of the day, there is always one currency that the company uses to manage this money, even though it has offices around the world.

This is why OfficeLife lets you define one currency for the entire company.

Every amount entered in OfficeLife (mainly for the Expenses feature) will be eventually translated to this currency. Amounts are always stored in the currency that was entered by the employee, but we also convert this amount to the default company currency.

If you change the currency of the company, we will recalculate all the converted amounts used in the company to match the new currency – however we will use the rate that were effective at the date the amount was spent.

Currencies in OfficeLife strictly follow the [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) specification, meaning that they are defined by a three letters code. Thus, Euro is `EUR`, US dollars is `USD` and so on.

## Define the company’s currency {#define-company-currency}

By default, when you create your OfficeLife account, your account is assigned a default currency automatically: USD, or US dollars. You can change this in Adminland very easily.

Simply go to Adminland section, under general, and indicate which currency is the default in your company.

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>Only someone with <a href="/docs/understanding-roles">the administrator role</a> can change the currency used in the company.</li>
  </ul>
</div>