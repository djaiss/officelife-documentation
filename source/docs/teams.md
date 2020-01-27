---
title: Teams
description: Understand what teams are in OfficeLife.
extends: _layouts.documentation
section: content
---

# Teams {#teams}

A team is a group of people. This is vague on purpose. It’s up to you to decide whether a team is a department, a separate business entity or a team within another bigger team. Employees can be part of one or more teams. When they are part of a team, employees have access to a new tab on their dashboard to see what's going on this team.

Teams are public. It’s part of the philosophy of OfficeLife to encourage trust, transparency and collaboration. That means everyone in the company knows who is part of which team, what the team does, and what the people inside this team do.

A team can only be created in Adminland by an administrator or a human resource representative. While a team is public, there are some actions that only team members can do, and other actions that only HR or administrator can do.

## Core concepts

### Team leader

A team has the concept of team leads. This information is useful, mainly, to understand the hierarchy of a team, and also to know who to contact when important information needs to be shared. However, there can only be one team leader per team. Perhaps I'll change this in the future, but it’s not in the plans right now. I think teams thrive on having one boss, and that's it.

* Everyone in the company can become a team lead.
* An employee can be a team lead of multiple teams.
* When a team lead is assigned to the team, if that's not already the case, he will become part of the team.
* However, when a team lead is unassigned, he will remain in the team until he’s manually removed.
* Anyone in the company can see who is the team leader of a team.
* Once an employee becomes a team lead, this information appears on the employee's profile page.
* Assigning a team lead can be edited by employees with the [HR and administrator roles](/docs/understanding-roles).
* When an employee becomes a team lead, [a notification](/docs/ui-notifications) is created for this employee.
* When a team lead is removed from this position in a team, [another notification](/docs/ui-notifications) is also created for this employee.

### Team news

Every team can have a dedicated set of news, called Team News. These news appear at two places:
* on the team's page,
* on the employee's dashboard page, in the Team tab.

These news serve as a way to inform all team members about important events or information that members should care about.

* Everyone in the company can read all the team news.
* By default, only the 3 latest news are displayed on the team page.
* Creating a team news is restricted to team members, and employees with the [HR and administrator roles](/docs/understanding-roles).
* Updating and deleting a news can be done by anyone in the company, regardless of their roles.

### Useful links

A team has a life on its own. There are many online places that are useful to a particular team: a dedicated Slack channel, a mailing list name, a private joke... Because each team is unique, it deserves its own set of links.

A team can have multiple links, called "useful links".

* Anyone in the team, and employees with the [HR and administrator roles](/docs/understanding-roles), can add, edit or remove these links.
* A link has a type. Right now we support only Slack, emails and external urls.

### Team description and useful links

Teams have several elements that help different people in the company: description and useful links.

The description, simply put, is all about what the team does. It should be a simple sentence, or can contain interesting facts about the team. Useful links are links that help understand how the team works. They could be a link to a JIRA instance, to a private Slack channel,...

Having those two concepts help different kind of people:

* new team members can quickly have a glance of what the team does and how it operates,
* members from other teams, especially in larger organizations, can understand why the team exists and how it can help them.

#### Team description

* Can be viewed by anyone in the company.
* Can be edited by any members of the team (regardless of [their roles](/docs/understanding-roles)).
* Can be edited by employees with HR and administrator roles.
* Description can contain up to 65 535 characters and supports [the Markdown format](/docs/markdown).