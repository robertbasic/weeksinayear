# Weeks in a year

This small library calculates how many ISO weeks are there in a given year.

## Install

```
composer require robertbasic/weeksinayear
```

## Usage

``` php
<?php

use RobertBasic\WeaksInAYear\ISOWeeksInAYear;

$year = 2018;

$weeks = ISOWeeksInAYear::calculate($year);

echo $weeks; // 52
```