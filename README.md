[![Build Status](https://travis-ci.com/geomiam/geomiam-api.svg?branch=develop)](https://travis-ci.com/geomiam/geomiam-api)
[![Build Status](https://dev.azure.com/geomiam/geomiam-api/_apis/build/status/geomiam.geomiam-api?branchName=develop)](https://dev.azure.com/geomiam/geomiam-api/_build/latest?definitionId=1&branchName=develop)

![Docker Automated build](https://img.shields.io/docker/automated/cvilleger/geomiam.svg?style=flat-square)
[![](https://images.microbadger.com/badges/image/cvilleger/geomiam.svg)](https://microbadger.com/images/cvilleger/geomiam "Get your own image badge on microbadger.com")

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them?

- [Docker CE](https://www.docker.com/community-edition)
- [Docker Compose](https://docs.docker.com/compose/install)

### Install

- (optional) Create your `docker-compose.override.yml` file

```bash
cp docker-compose.override.yml.dist docker-compose.override.yml
```
> Notice : Check the file content. If other containers use the same ports, change yours.

#### Init

```bash
cp .env.dist .env
docker-compose up -d
docker-compose exec --user=application api composer install
```

```bash
docker-compose exec --user=application api php bin/console hautelook:fixtures:load --purge-with-truncate
```