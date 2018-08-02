![Twitter-like Search API Server](https://user-images.githubusercontent.com/9766310/43558271-29cf6a68-963b-11e8-9849-1db2c5226143.png)

# [Twitter-like Search API Server](http://twitter-like-search-api-server.herokuapp.com)
This Web API provides simple dummy tweets data with same JSON response structure with Twitter's Search API. Please feel free to use the endpoint for your project. Available in http://twitter-like-search-api-server.herokuapp.com

Note: Heroku free dynos sleep after 30 minutes of inactivity so sometimes your first request might take a bit longer to receive response.

## Features

* Uses OAuth2 instead of Oauth v1.0a
* Same response data structure but simpler
* [Live and hosted on heroku](http://twitter-like-search-api-server.herokuapp.com)

## Built With
* Laravel 5.6
* OAuth2

## Usage

### Access Token

Create account and generate Personal Access Token. API consumers should specify their access token as a Bearer token in the Authorization header of their request.

### API Endpoints
![Endpoints](https://user-images.githubusercontent.com/9766310/43558474-471ed09e-963c-11e8-9489-0c572a2a852e.png)


### Sample API Request
``` bash
$ curl --request GET 
 --url 'http://twitter-like-search-api-server.herokuapp.com/api/1.1/search/tweets.json?q=promise' 
 --header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImY0NjQzMzc4NDI4YjVhMDRmMjdlMmFiM2MyNWVmYzA3ZjM2Mzc5Mzc4ZWJkOTlmNGYxMzVhODE3OGRmOWQyMGQ1ZjJkOGI2YjM2MGM1Y2Y1In0.eyJhdWQiOiIxIiwianRpIjoiZjQ2NDMzNzg0MjhiNWEwNGYyN2UyYWIzYzI1ZWZjMDdmMzYzNzkzNzhlYmQ5OWY0ZjEzNWE4MTc4ZGY5ZDIwZDVmMmQ4YjZiMzYwYzVjZjUiLCJpYXQiOjE1MzMxNzYzODYsIm5iZiI6MTUzMzE3NjM4NiwiZXhwIjoxNTY0NzEyMzg2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.UMi-0NgCBCrYAhMOsStJBQtPruryB7_8FBnsnmQ76JQgcLR8uwc-yTw9WE21MJ0g6Ro7HryYTshYez16PiPffW-ieg-rGGSY-R2SLc1NkyqRD5x2kpQGki-7k346mNFUf-mRJezySSPVFp98xNkYJw-I86B7GeM4zq1rtpxiXJ3SHAUqXjOTS9hTWM_2DbAdSr66M-3yYjZS8IY_6adUcXSj2fQonrdb9kyCuLZ-QpcWhZIXPjlnRPV0ONBASf_AHReNnrzhzbh13jbKpEYK3dnnzhPibNJMTuqNUU5uAkMDSJs2rt4EPnh3k-1wzBDH1Ch86Rt3FpYTZlfk7cQmquRllnkJjJS99x22LZjm9K-AVfPBFtu7DjBpj0w8QHwLgty1ZDHLzNxrhcuYL9qWrquqnDoWrX6lUOWgNxMJnfn0oeNoMWPElZDtKZmihZgSpRruWf5Hu3VqHOJLpCr06aC9plV65In9WPT0izc15bChO-pB8DFNHruZ5uOazJhmNyacUV4ZrguTsBCnD34lnPKkgL7q5RfVCEoRbd5vlkMwHqzKNmEM9zw33H9LhAfSlatNKxK0_Boorlq2gNyGdX9szgJ09rPvFUZioi93OHzXn6w7OSrsA3O08vLLNugEveG2NMb7NfALOxm6Di8LeUKQN23tf_ooGlJtIuGXDig'
  --header 'Accept: application/json'
```

### Sample API Response
![Response](https://user-images.githubusercontent.com/9766310/43559018-b3dc248c-963e-11e8-842c-f3bcef56a0f7.png)


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
