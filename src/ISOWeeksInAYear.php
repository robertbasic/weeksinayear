<?php declare(strict_types=1);

namespace RobertBasic\WeeksInAYear;

class ISOWeeksInAYear
{
    /**
     * Calculates how many ISO weeks are in a given year.
     *
     * A week starts on a Monday, the first week of a year
     * is the week that has January 4th in it according to
     * the Gregorian calendar.
     *
     * This method actually looks at the January 1st of the
     * next year and its ISO week number. If it belongs to
     * week 1, then it goes back 7 days and looks the week
     * number for that date.
     *
     * @param int $year for what year to calculate
     * @return int
     */
    public static function calculate(int $year): int
    {
        $timestamp = sprintf("%d-0%d-0%d", $year + 1, 1, 1);
        $januaryFirstNextYear = new \DateTimeImmutable($timestamp, new \DateTimeZone('UTC'));

        $januaryFirstNextYearInWeek = (int) $januaryFirstNextYear->format('W');

        if ($januaryFirstNextYearInWeek !== 1) {
            return $januaryFirstNextYearInWeek;
        }

        $sevenDaysBeforeJanuaryFirstNextYear = $januaryFirstNextYear->modify('-7 day');

        return (int) $sevenDaysBeforeJanuaryFirstNextYear->format('W');
    }
}
