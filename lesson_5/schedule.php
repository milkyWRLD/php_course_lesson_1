<?php

// Функция для генерации расписания
function generateSchedule(int $year, int $month, int $monthsCount = 1)
{
    $currentYear = $year;
    $currentMonth = $month;

    for ($i = 0; $i < $monthsCount; $i++) {
        $monthName = date('F', mktime(0, 0, 0, $currentMonth, 1, $currentYear));
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);

        echo "\nРасписание на $monthName $currentYear\n";
        echo str_repeat('-', 30) . PHP_EOL;

        $workingDay = 1;
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $dayOfWeek = date('N', mktime(0, 0, 0, $currentMonth, $day, $currentYear));

            if ($day === $workingDay) {
                if ($dayOfWeek > 5) {
                    $workingDay += (8 - $dayOfWeek);
                } else {
                    $workingDay += 3;
                }
            }

            $isWorkingDay = ($day === $workingDay - 3);

            $output = str_pad($day, 2, '0', STR_PAD_LEFT);
            if ($isWorkingDay) {
                echo "\033[32m $output (+)\033[0m\n";
            } else {
                echo " $output\n";
            }
        }

        echo str_repeat('-', 30) . PHP_EOL;

        $currentMonth++;
        if ($currentMonth > 12) {
            $currentMonth = 1;
            $currentYear++;
        }
    }
}

$year = (int) ($argv[1] ?? date('Y')); // Год (по умолчанию текущий)
$month = (int) ($argv[2] ?? date('m')); // Месяц (по умолчанию текущий)
$monthsCount = (int) ($argv[3] ?? 1); // Количество месяцев (по умолчанию 1)

generateSchedule($year, $month, $monthsCount);
