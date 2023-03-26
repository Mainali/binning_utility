<a href="https://supportukrainenow.org/"><img src="https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner-direct.svg" width="100%"></a>

------

<b>Binning Utility (uses laravel zero framework)</b>

Steps for running:

Clone the repo.

Run `composer update` to get all the dependencies.

run the command:
    `php binning filter <ef|ew> <comma separated values>`
, `ef` for Equal Frequency and `ew` for Equal Width algorithm

eg:

    php binning filter ew 0.1,3.4,3.5,3.6,7.0,9.0,6.0,4.4,2.5,3.9,4.5,2.8
    High: 7,9
    Medium: 3.4,3.5,3.6,3.9,4.4,4.5,6
    Low: 0.1,2.5,2.8


Unit tests are located inside tests folder. Uses PHPUnit.

eg.
 `./vendor/bin/phpunit ./tests/EqualWidthFilterTest.php`

