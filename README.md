<p align="center"><a href="https://craftcms.com/" target="_blank"><img width="312" height="90" src="https://craftcms.com/craftcms.svg" alt="Craft CMS"></a></p>

This repository is a fork of the official [Craft CMS starter project](https://github.com/craftcms/craft), acting as a bootstrap template. If you've not used Craft before, I would recommend using the official repository, as this repo is quite opinionated on several structural decisions.

## Getting started

You will need [composer](https://getcomposer.org/) to follow these instructions.

1. Configure an SQL database for the site to connect to.
2. Create the project. This will take a few minutes while it pulls down all the dependencies it requires:

        composer create-project -n punchbuggy/craft <path>

    Replace `<path>` with the path to the project folder, or `.` if you would like to use the current folder.

3. Configure the site to connect to the DB set up in step 1. You can do this by visiting `/admin` in a web browser, or running `./craft setup` in your terminal.
4. Hydrate the rest of the system with the following commands:

        ./craft migrate
        ./craft schematic/import

---

Original README:

## About Craft CMS

Craft is a flexible and scalable CMS for creating bespoke digital experiences on the web and beyond.

It features:

- An intuitive Control Panel for administration tasks and content creation.
- A clean-slate approach to content modeling and [front-end development](https://docs.craftcms.com/v3/dev/).
- A built-in Plugin Store with hundreds of free and commercial [plugins](https://plugins.craftcms.com/).
- A robust framework for [module and plugin development](https://docs.craftcms.com/v3/extend/).

Learn more about it at [craftcms.com](https://craftcms.com).

## Tech Specs

Craft is written in PHP (7+), and built on the [Yii 2 framework](https://www.yiiframework.com/). It can connect to MySQL (5.5+) and PostgreSQL (9.5+) for content storage.

## Installation

See the following documentation pages for help installing Craft 3:

- [Server Requirements](https://docs.craftcms.com/v3/requirements.html)
- [Installation Instructions](https://docs.craftcms.com/v3/installation.html)
- [Upgrading from Craft 2](https://docs.craftcms.com/v3/upgrade.html)

## Resources

#### Official Resources
- [Documentation](https://docs.craftcms.com/v3/) – Everything from usage instructions to plugin guides.
- [Class Reference](https://docs.craftcms.com/api/v3/) – Full API and class reference for plugin and module developers.
- [Demo site](https://demo.craftcms.com/) – Quickly launch a personalized demo of a Craft site.
- [Craft Slack](https://craftcms.com/community#slack) – Join one of the most friendly and helpful Slack groups around.
- [Craft Commerce](https://craftcommerce.com/) – First-party e-commerce platform for Craft.

#### Community Resources
- [CraftQuest](https://craftquest.io/) – Unlimited access to Craft training (and more) from Mijingo.
- [Envato Tuts+](https://webdesign.tutsplus.com/categories/craft-cms/courses) – Video courses.
- [nystudio107 Blog](http://straightupcraft.com/) – Articles about Craft and modern web development.
- [Craft Link List](http://craftlinklist.com/) – Bimonthly newsletter about the Craft ecosystem.
- [Craft CMS Stack Exchange](http://craftcms.stackexchange.com/) – Community-run Q&A for Craft developers.
