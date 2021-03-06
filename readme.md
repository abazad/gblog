<p align="center">
    <a href="https://godruoyi.com/">
        <img src="https://godruoyi.com/vendor/images/logo.png" alt="Powered By godruoyi">
    </a>
</p>

<p align="center">GBlog is an easy blog, built with Laravel and Vue.js. <a href="https://godruoyi.com">https://godruoyi.com</a></p>

<p align="center">
  <b>Blog stylesheet reference from:</b>
  <br><br>
  <a href="https://laravel-news.com/">
    <img src="https://godruoyi.com/vendor/images/laravel-news.png" width="160">
  </a>
  <br><br>
  <a href="https://github.com/the-control-group/voyager">
    <img src="https://godruoyi.com/vendor/images/voyager.png" width=400>
  </a>
</p>

## About

Gblog is easy blog build with `laravel5.5` and `vue2.*`, The `front-end` styles from [laravel-news](http://laravel-news.com), `Back-end` styles from [voyager](https://github.com/the-control-group/voyager).

## Basic Features

- Beautiful dashboard (Voyager, The Missing Laravel Admin)
- Categorize manage
- Manage users and articles
- Multi-language switching
- Markdown Editor

## Server Requirements

- PHP >= 7.0.0
- Node >= 6.x
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- XML PHP Extension

## Preview

![godruoyi.com](http://7xsyri.com2.z0.glb.qiniucdn.com/2018-04-08_10h38_03.png)

![godruoyi.com](http://7xsyri.com2.z0.glb.qiniucdn.com/2018-04-08_10h39_36.png)

![godruoyi.com](http://7xsyri.com2.z0.glb.qiniucdn.com/2018-04-08_10h40_00.png)

![godruoyi.com](http://7xsyri.com2.z0.glb.qiniucdn.com/2018-04-08_10h41_07.png)

## Install

### 1. Clone project from github

```bash
git clone https://github.com/godruoyi/gblog
```

### 2. Set the basic config

```bash
cp .env.example .env
```

Edit the `.env` file and set the `database` and `api` config. By default, we use `ADMIN_DOMAIN` to  represent the management domain name, use `HOME_DOMAIN` to represent the home domain name.

### 3. Install the extended package dependency

Install `laravel` framework dependent

```bash
composer install
```

Install the front-end environment dependent.

```bash
npm install
```

Or

```bash
yarn install
```

Next, you can start compiling `js` file.

```bash
npm run dev

//or

npm run watch-poll

//or

npm run prod
```

### 4. Run gblog install command.

```bash

php artisan gblog:install

```

> The command will run the `migrate` command, if you whant generate test data, you can append `--test` option on command end.

```bash
php artisan gblog:install --test
```

You can run the following command to generate an administrator account, he will prompt you to complete step by step.

```bash
php artisan gblog:adduser
```

## Contributors

- [Lianbo Xu](https://github.com/godruoyi)

## Thanks

- [Laravel-news](https://laravel-news.com)
- [Laravel-china](laravel-china.org)
- [Jcc blog](https://github.com/jcc/blog)

## License

The project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
