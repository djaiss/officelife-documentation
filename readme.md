# Documentation for OfficeLife

This repository is the official documentation of OfficeLife, a tool used to take the pulse of your company and empower managers to take care of their employees.

This documentation is powered by [Jigsaw](https://jigsaw.tighten.co/docs), a static site generator.

### How to use

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

### Deployment

Before deploying the site to production, we need to compile the assets in a certain way.

```bash
npm run production
```