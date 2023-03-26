<a href="https://supportukrainenow.org/"><img src="https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner-direct.svg" width="100%"></a>

------

<b>Binning Utility (uses laravel zero framework)</b>
The engine contains a discretization filter into which a
set of continuous variables (long or float) is input. The output is a lumping of items into 3 discrete
categories or "bins": High, Medium, Low.
For example, if I pass in a set of longs through the filter the output might look something like:
        
        High: 99, 87, 65
        Medium: 35, 60, 24, 43, 50, 55
        Low: 5, 9, 3, 13

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


    php binning filter ef 0.1,3.4,3.5,3.6,7.0,9.0,6.0,4.4,2.5,3.9,4.5,2.8
    High: 4.5,6,7,9
    Medium: 3.5,3.6,3.9,4.4
    Low: 0.1,2.5,2.8,3.4

Unit tests are located inside tests folder. Uses PHPUnit.

eg.
 `./vendor/bin/phpunit ./tests/EqualWidthFilterTest.php`



------------------------------------------
To create a docker image:

` docker build -t binning_utility .`

To run the image:

` docker run -dt binning_utility`

To execute command:

` docker exec <container_id> php binning filter <ef|ew> <comma separated values>`

eg.
    
    docker exec 1ebba6c3737b php binning filter ew 0.1,3.4,3.5,3.6,7.0,9.0,6.0,4.4,2.5,3.9,4.5,2.8
    High: 7,9
    Medium: 3.4,3.5,3.6,3.9,4.4,4.5,6
    Low: 0.1,2.5,2.8
