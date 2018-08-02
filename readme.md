![Backend Developer Challenge](https://user-images.githubusercontent.com/9766310/43590565-d74adb4c-96a3-11e8-8ff1-d47ead279588.png)


# [Backend Developer Challenge](https://github.com/jimmerioles/backend-developer-challenge)
Allows you to search tweets from [Twitter-like Search API Server](https://github.com/jimmerioles/twitter-like-search-api-server) that I also created for this challenge as an alternative to Twitter's Search API, please check it out. 

Consumes same but simpler format with Twitter Seach Api JSON response data from [Twitter-like Search API Server](https://github.com/jimmerioles/twitter-like-search-api-server).

Note: Heroku free dynos sleep after 30 minutes of inactivity so sometimes your first request might take a bit longer to receive response.

## Features

* Search tweets with keywords
* Record and show search activities
* Authentication
* Consumes data from [Twitter-like Search API Server](https://github.com/jimmerioles/twitter-like-search-api-server)

## Built With
* Laravel 5.6

### Requirements

Make sure that your system/server has the required system [requirements](https://laravel.com/docs/5.6#server-requirements) and [Composer](https://getcomposer.org) installed. Or you can use [Homestead](https://laravel.com/docs/5.6/homestead).

### Installation

#### 1. Clone repository and install.

```bash
$ git clone https://github.com/jimmerioles/backend-developer-challenge.git
$ composer install
```

#### 2. Configure settings/environment variables and migrations.
```bash
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
```

## Usage

Register an account and you can start searching for tweets and see your search activity:

![screenshot from 2018-08-02 22-47-39](https://user-images.githubusercontent.com/9766310/43593823-5dbf2faa-96ab-11e8-9469-2ce606c14fc5.png)

## Testing

``` bash
$ phpunit
```

#### Show full specs and features:

``` bash
$ phpunit --testdox
```

## Change log

Please see [CHANGELOG][link-changelog] for more information on what has changed recently.


## Contributing

Open for suggestions and requests. Please request through [issue][link-issue] or [pull requests][link-pull-request].

## Security

If you discover any security related issues, please email jimwisleymerioles@gmail.com instead of using the issue tracker.

## Credits

- [Jim Merioles][link-author]
- [Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

### Want to show some :heart:?

Let's find Satoshi Nakamoto! | or let's have a :coffee:
------------ | ------------
![Donate Bitcoin][ico-bitcoin] | ![Donate Ethereum][ico-ethereum]


[ico-bitcoin]: https://img.shields.io/badge/Bitcoin-1KBT3Mzsr2dZqhQqNYx4gum8Yuyd61UzNk-blue.svg?style=flat-square
[ico-ethereum]: https://img.shields.io/badge/Ethereum-0x7896E9C4118e495Eb7001a847BBFA3C29Dfc69d9-blue.svg?style=flat-square

[link-author]: https://twitter.com/jimmerioles
[link-contributors]: https://github.com/jimmerioles/twitter-like-search-api-server/graphs/contributors
[link-changelog]: https://github.com/jimmerioles/twitter-like-search-api-server/releases
[link-issue]: https://github.com/jimmerioles/twitter-like-search-api-server/issues/new
[link-pull-request]: https://github.com/jimmerioles/twitter-like-search-api-server/pull/new/master
