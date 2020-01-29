---
title: Release notes
description: All the release notes for all Officelife’s versions.
extends: _layouts.documentation
section: content
---

# Release notes {#release-notes}

## Versioning scheme {#versioning-scheme}

As described on [the Getting started page](/docs/getting-started#pricing) and unlike most softwares, OfficeLife is offered in two flavors:

* an hosted version, on https://officelife.io, that we host and that you need to pay to access,
* as an open source solution, on https://github.com/djaiss/officelife, that you need to install and maintain yourself.

I can't simply ship new versions of the software without versioning it. That would greatly complexify the upgrade process of companies who choose to use the open source version. Thus, every new version should have a proper image and name.

The traditional way of naming versions would be to follow [Semantic Versioning](https://semver.org/) (or SemVer). But I find it hard to understand. Version numbers don’t really matter anymore. SemVer is useful to track breaking changes on packages, but in the context of an application, they don't mean much. You don’t expect an app to break because you’ve upgraded to a new version of the software.

Date-based version-numbering scheme (I first saw this on [Marco’s blog](https://marco.org/2019/04/27/overcast-clip-sharing)) seems easier. Version 2020.3 for instance, would be the third version released in 2020.
