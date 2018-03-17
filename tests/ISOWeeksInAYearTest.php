<?php declare(strict_types=1);

namespace RobertBasic\WeeksInAYearTest;

use RobertBasic\WeeksInAYear\ISOWeeksInAYear;
use PHPUnit\Framework\TestCase;

class ISOWeeksInAYearTest extends TestCase
{
    /**
     * @test
     * @dataProvider years
    */
    public function calculating_number_of_iso_weeks_in_a_year($year, $expectedWeeks)
    {
        $weeks = ISOWeeksInAYear::calculate($year);

        self::assertSame($expectedWeeks, $weeks);
    }

    public function years()
    {
        return [
            [2000, 52],
            [2001, 52],
            [2002, 52],
            [2003, 52],
            [2004, 53],
            [2005, 52],
            [2006, 52],
            [2007, 52],
            [2008, 52],
            [2009, 53],
            [2010, 52],
            [2011, 52],
            [2012, 52],
            [2013, 52],
            [2014, 52],
            [2015, 53],
            [2016, 52],
            [2017, 52],
            [2018, 52],
            [2019, 52],
            [2020, 53],
            [2021, 52],
        ];
    }
}
