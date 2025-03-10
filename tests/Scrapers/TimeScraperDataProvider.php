<?php

declare(strict_types=1);

namespace BVP\HamanakoScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class TimeScraperDataProvider
{
    /**
     * @return array
     */
    public static function scrapeProvider(): array
    {
        return [
            [
                'arguments' => [1, '2025-01-01'],
                'expected' => [
                    'boat_number_1_racer_name' => '山口晃朋',
                    'boat_number_1_racer_exhibition_time' => 6.74,
                    'boat_number_1_racer_lap_time' => 36.58,
                    'boat_number_1_racer_turn_time' => 5.35,
                    'boat_number_1_racer_straight_time' => 7.70,
                    'boat_number_2_racer_name' => '眞崎武蔵',
                    'boat_number_2_racer_exhibition_time' => 6.77,
                    'boat_number_2_racer_lap_time' => 37.53,
                    'boat_number_2_racer_turn_time' => 5.61,
                    'boat_number_2_racer_straight_time' => 7.69,
                    'boat_number_3_racer_name' => '大石真央',
                    'boat_number_3_racer_exhibition_time' => 6.79,
                    'boat_number_3_racer_lap_time' => 37.60,
                    'boat_number_3_racer_turn_time' => 5.80,
                    'boat_number_3_racer_straight_time' => 7.64,
                    'boat_number_4_racer_name' => '金子良昭',
                    'boat_number_4_racer_exhibition_time' => 6.81,
                    'boat_number_4_racer_lap_time' => 37.43,
                    'boat_number_4_racer_turn_time' => 5.70,
                    'boat_number_4_racer_straight_time' => 7.68,
                    'boat_number_5_racer_name' => '原豊土',
                    'boat_number_5_racer_exhibition_time' => 6.72,
                    'boat_number_5_racer_lap_time' => 37.54,
                    'boat_number_5_racer_turn_time' => 5.67,
                    'boat_number_5_racer_straight_time' => 7.88,
                    'boat_number_6_racer_name' => '大橋純一郎',
                    'boat_number_6_racer_exhibition_time' => 6.78,
                    'boat_number_6_racer_lap_time' => 37.22,
                    'boat_number_6_racer_turn_time' => 5.28,
                    'boat_number_6_racer_straight_time' => 8.20,
                ],
            ],
            [
                'arguments' => [2, '2025-01-01'],
                'expected' => [
                    'boat_number_1_racer_name' => '本田愛',
                    'boat_number_1_racer_exhibition_time' => 6.82,
                    'boat_number_1_racer_lap_time' => 37.09,
                    'boat_number_1_racer_turn_time' => 5.63,
                    'boat_number_1_racer_straight_time' => 7.74,
                    'boat_number_2_racer_name' => '金子萌',
                    'boat_number_2_racer_exhibition_time' => 6.78,
                    'boat_number_2_racer_lap_time' => 36.73,
                    'boat_number_2_racer_turn_time' => 5.41,
                    'boat_number_2_racer_straight_time' => 7.74,
                    'boat_number_3_racer_name' => '山田雄太',
                    'boat_number_3_racer_exhibition_time' => 6.78,
                    'boat_number_3_racer_lap_time' => 36.66,
                    'boat_number_3_racer_turn_time' => 5.60,
                    'boat_number_3_racer_straight_time' => 7.67,
                    'boat_number_4_racer_name' => '豊田祥生',
                    'boat_number_4_racer_exhibition_time' => 6.80,
                    'boat_number_4_racer_lap_time' => 37.66,
                    'boat_number_4_racer_turn_time' => 5.77,
                    'boat_number_4_racer_straight_time' => 7.88,
                    'boat_number_5_racer_name' => '河合佑樹',
                    'boat_number_5_racer_exhibition_time' => 6.75,
                    'boat_number_5_racer_lap_time' => 37.15,
                    'boat_number_5_racer_turn_time' => 5.66,
                    'boat_number_5_racer_straight_time' => 7.91,
                    'boat_number_6_racer_name' => '鈴木柊介',
                    'boat_number_6_racer_exhibition_time' => 6.84,
                    'boat_number_6_racer_lap_time' => 37.22,
                    'boat_number_6_racer_turn_time' => 5.65,
                    'boat_number_6_racer_straight_time' => 7.99,
                ],
            ],
        ];
    }
}
