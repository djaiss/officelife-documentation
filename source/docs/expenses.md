---
title: Expenses
description: Manage expenses made by your employees.
extends: _layouts.documentation
section: content
---

# Expenses {#expenses}

## Overview {#overview}

Employees sometimes have the right to buy stuff on behalf of the company. They can either invite clients to the restaurant. Buy a book to help them acquire knowledge. Go to a conference. You name it.

It’s well-known that managing expenses is a pain, in general, for the employer and the employees. It’s either done on a spreadsheet, or with extremely expensive and complex tools like Acumatica or Concorde. We can do better, and simpler. The OfficeLife way, basically.

OfficeLife makes it really easy for employees to record an expense, and for the employer to manage those expenses. It also allows for a very strict internal audit, necessary for most companies.

## Expense categories {#expense-categories}

Expenses are classified into categories. This is to help the accounting department at the end of the day.

A category (sometimes called GL) represents a type of expense. OfficeLife comes pre-configured with a set of categories, but you can change those categories or add new ones anytime:

* maintenance and repairs,
* meals and entertainment,
* office expense,
* travel,
* motor vehicle expenses.

An expense doesn’t necessarily have to be associated with a category, but it’ll be much easier accounting-wise if it’s associated with one upon creation.

### Creating an expense category {#creating-an-expense-category}

Creating an expense category is done in Adminland.

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>Only employees with either <a href="/docs/understanding-roles">the HR or administrator role</a> can create a category.</li>
    <li>The name of the category is mandatory and limited to 255 characters.</li>
  </ul>
</div>

### Updating an expense category {#updating-an-expense-category}

Updating an expense category is done in Adminland.

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>Only employees with either <a href="/docs/understanding-roles">the HR or administrator role</a> can update a category.</li>
    <li>The name of the category is mandatory and limited to 255 characters.</li>
  </ul>
</div>

### Deleting an expense category {#deleting-an-expense-category}

Deleting an expense category is done in Adminland. When a category is deleted, all expenses linked to this category will be moved to the category called `Not classified` – which is a category that can’t be deleted. This is necessary as we need to find a way to find all those expenses back.

Before deleting a category, you also have the option to move all the expenses linked with this category to another category.

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>Only employees with either <a href="/docs/understanding-roles">the HR or administrator role</a> can delete a category.</li>
  </ul>
</div>

## Employee’s expenses {#employees-expenses}

Employees are responsible to enter their expenses. In real life, employees want to be reimbursed as quickly as possible, and OfficeLife lets companies achieve this goal efficiently.

### Creating an expense {#creating-an-expense}

Expenses are logged on the employee’s dashboard. Anyone can logged an expense as long as this feature is enabled on the account.

To create an expense, a few fields have to be filled:

* the amount, along with the currency,
* the date,
* a description,
* the category of the expense.

<div class="rules">
  <h4>Rules</h4>
  <ul>
    <li>All employees can log an expense.</li>
    <li>Only a manager can approve an expense of an employee.</li>
    <li>Only employees with either <a href="/docs/understanding-roles">the HR or administrator role</a> can approve an expense already approved by a manager.</li>
    <li>The amount has to be a number. We support both comas or dots in the number, and spaces are allowed too. The amount is stored as cents anyway. The maximum number of characters is 255.</li>
    <li>The currency is mandatory.</li>
    <li>Description is optional, can contain up to 65 535 characters and supports [the Markdown format](/docs/markdown).</li>
    <li>The category is optional but highly recommended.</li>
  </ul>
</div>

### Flow to reimburse an expense {#flow-to-reimburse-an-expense}

There are several gates needed to reimburse an expense:

* the expense needs to be approved by the employee’s manager,
* the expense needs to be approved by the accounting department after the manager’s approval.

Now, let’s analyze in details what will happen as soon as the expense is created:

* if the employee has a manager:
  * a task will be created and assigned to the manager so he knows he has to approve the expense.
  * the status of the expense becomes `waiting for manager’s approval`.
* if the employee doesn’t have a manager:
  * the expense goes straight to the approval by the accounting department.
  * the status of the expense becomes `waiting for accounting’s approval`.
* The manager has to approve the expense:
  * a notification is created for the employee to let him know that the expense goes to the next phase.
  * the expense goes straight to the approval by the accounting department.
  * the status of the expense becomes `waiting for accounting’s approval`.
* The manager can reject the expense:
  * the expense’s status becomes `rejected by manager`.
  * a notification is sent to the employee to let him know that the expense has been rejected.
* After the manager’s approval, it’s up to the accounting department to accept the expense. They have the final word.
  * If they accept the expense, a notification is created for the employee so he knows the expense is finally accepted. Also, the expense’s status becomes `accepted`.
  * If they reject the expense, a notification is created for the employee so he knows the expense is rejected. The status becomes `rejected by accounting`.

### Dealing with rejected expenses {#dealing-with-rejected-expenses}

Expenses that are rejected, should always come with a note explaining why it’s been rejected.