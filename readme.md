[![Netlify Status](https://api.netlify.com/api/v1/badges/1bad6fb9-3f56-4f6c-8551-284f53339e57/deploy-status)](https://app.netlify.com/sites/officelifedocumentation/deploys)

# Documentation for OfficeLife

This repository is the official documentation of OfficeLife, a tool used to take the pulse of your company and empower managers to take care of their employees.

This documentation is powered by [Jigsaw](https://jigsaw.tighten.co/docs), a static site generator.

## How to use

As Jigsaw generates static sites, we need to compile before being able to use it.

```bash
./vendor/bin/jigsaw build
```

We also need to compile the assets if you’ve changed them.

```bash
npm run dev
```

To serve the site locally, you have to run

```bash
./vendor/bin/jigsaw serve
```

## Deployment

Before deploying the site to production, we need to compile the assets in a certain way.

```bash
npm run production
```

### Netlify

This documentation is hosted on [Netlify](https://app.netlify.com/sites/officelifedocumentation/overview). The page is automatically build after each commit in the Github repository, but remember: if assets change, they need to be compiled first, and pushed to the repository.

Netlify takes care of minifying all assets upon deployment.