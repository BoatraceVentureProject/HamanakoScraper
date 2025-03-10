<?php

declare(strict_types=1);

namespace BVP\HamanakoScraper\Tests;

/**
 * @author shimomo
 */
final class ScraperCoreDataProvider
{
    /**
     * @return array
     */
    public static function scrapeCommentsProvider(): array
    {
        return [
            [
                'arguments' => [1, '2025-01-01'],
                'expected' => [
                    'boat_number_1_racer_name' => '山口晃朋',
                    'boat_number_1_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_1_racer_yesterday_comment' => '全体的に足落ちしている。ターン回りが欲しいですね。',
                    'boat_number_1_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_1_racer_today_comment' => '行き足、伸びとも安定した印象を受けた。',
                    'boat_number_2_racer_name' => '眞崎武蔵',
                    'boat_number_2_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_2_racer_yesterday_comment' => 'ペラを大きく方向性変えて、良くなる兆しが見えた。回り足を求めていく。',
                    'boat_number_2_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_2_racer_today_comment' => 'スリット付近の伸びは微妙。',
                    'boat_number_3_racer_name' => '大石真央',
                    'boat_number_3_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_3_racer_yesterday_comment' => 'かなり劣勢。行き足が悪いし行き足を良くするとターン回りが悪くなる。',
                    'boat_number_3_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_3_racer_today_comment' => '特訓はスロー、ダッシュいずれも行き足から伸びへのつながりが良かった。',
                    'boat_number_4_racer_name' => '金子良昭',
                    'boat_number_4_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_4_racer_yesterday_comment' => 'エンジンは出てるよ。ぶんぶん。',
                    'boat_number_4_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_4_racer_today_comment' => '特訓は2本ともスロー起こし(4、2コース)。行き足は決して悪くない。',
                    'boat_number_5_racer_name' => '原豊土',
                    'boat_number_5_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_5_racer_yesterday_comment' => '何パターンか試したけど、重いけど押す感じ、スリットは持つ感じで行った。',
                    'boat_number_5_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_5_racer_today_comment' => 'レバーを握り込んでからの加速感が甘い。',
                    'boat_number_6_racer_name' => '大橋純一郎',
                    'boat_number_6_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_6_racer_yesterday_comment' => '初日が一番良かった。悪くはないですけどね。特徴は特にない。',
                    'boat_number_6_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_6_racer_today_comment' => '原豊土に対して、2本ともスリット付近は伸び加減。',
                ],
            ],
            [
                'arguments' => [2, '2025-01-01'],
                'expected' => [
                    'boat_number_1_racer_name' => '本田愛',
                    'boat_number_1_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_1_racer_yesterday_comment' => 'リング交換で直線が結構、良くなりました。ペラ調整で乗りやすさもある。',
                    'boat_number_1_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_1_racer_today_comment' => '出ていくことも下がることもなかった。',
                    'boat_number_2_racer_name' => '金子萌',
                    'boat_number_2_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_2_racer_yesterday_comment' => '(連勝だが)余裕があるわけではない。出足も伸びも全体的に上積みは欲しい。',
                    'boat_number_2_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_2_racer_today_comment' => '特訓1本目は握り遅れ。2本目のスリット付近はまずまず。',
                    'boat_number_3_racer_name' => '山田雄太',
                    'boat_number_3_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_3_racer_yesterday_comment' => '後半は自分の感触的には良かった。足はまずまず行ってる。',
                    'boat_number_3_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_3_racer_today_comment' => '行き足、伸びとも金子萌と大差なし。',
                    'boat_number_4_racer_name' => '豊田祥生',
                    'boat_number_4_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_4_racer_yesterday_comment' => '回転を上げすぎた。欲をかきすぎた。滑った。直線はマシになって、合えば昨日以上の足はあった。',
                    'boat_number_4_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_4_racer_today_comment' => 'スリット前後の伸びはやや微妙な感じ。',
                    'boat_number_5_racer_name' => '河合佑樹',
                    'boat_number_5_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_5_racer_yesterday_comment' => '合っていなくてそんなにいい感じはしなかった。またペラ調整。',
                    'boat_number_5_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_5_racer_today_comment' => '特訓1本目の行き足から伸びはスムーズ。2本目は握り遅れた。',
                    'boat_number_6_racer_name' => '鈴木柊介',
                    'boat_number_6_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_6_racer_yesterday_comment' => '大橋さんにペラ相談して、ターンしやすくなっている感じがある。',
                    'boat_number_6_racer_today_comment_label' => '試運転記者の目',
                    'boat_number_6_racer_today_comment' => 'スリット手前からの伸びは良さそう。',
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public static function scrapeForecastsProvider(): array
    {
        return [
            [
                'arguments' => [1, '2025-01-01'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '山口が気配を立て直してイン先制。原、大橋はダッシュ攻勢で迫る。金子押さえ',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '142/356',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['1=5-6', '1=5-2', '1=6-5', '1=6-2', '1-2-5'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['1=5-6', '1=5-2', '1=6-5', '1=6-2', '1-2-5'],
                    'jlc_yesterday_course_label' => 'JLC予想 前日コース',
                    'jlc_yesterday_course' => '123456',
                    'jlc_yesterday_focus_label' => 'JLC予想 前日フォーカス',
                    'jlc_yesterday_focus' =>['5-6-4', '5-6-1', '6-5-4', '6-5-1', '5-4-6'],
                    'jlc_yesterday_focus_exacta_label' => 'JLC予想 前日フォーカス 2連単',
                    'jlc_yesterday_focus_exacta' =>[],
                    'jlc_yesterday_focus_trifecta_label' => 'JLC予想 前日フォーカス 3連単',
                    'jlc_yesterday_focus_trifecta' =>['5-6-4', '5-6-1', '6-5-4', '6-5-1', '5-4-6'],
                    'jlc_yesterday_reliability_label' => 'JLC予想 前日信頼度',
                    'jlc_yesterday_reliability' => '80%',
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => '皆さま、新年明けましておめでとうございます。本年もBOATRACE浜名湖へのご愛顧、よろしくお願いいたします。金子が動いて山口の起こしは深くなるが、逃げ期待。次位は差す金子がやや優勢。大石は握りマイ、原は展開突いて連へ。',
                    'reporter_today_focus_label' => '記者予想 当日フォーカス',
                    'reporter_today_focus' => ['1-345-3456'],
                    'reporter_today_focus_exacta_label' => '記者予想 当日フォーカス 2連単',
                    'reporter_today_focus_exacta' => [],
                    'reporter_today_focus_trifecta_label' => '記者予想 当日フォーカス 3連単',
                    'reporter_today_focus_trifecta' => ['1-345-3456'],
                ],
            ],
            [
                'arguments' => [2, '2025-01-01'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '連勝と好ムードの金子と山田に、河合がスピード戦で絡む。本田は仕掛けに奮起',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/456',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['2=3-5', '2=3-1', '2=5-3', '2=5-1', '2-1-3'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['2=3-5', '2=3-1', '2=5-3', '2=5-1', '2-1-3'],
                    'jlc_yesterday_course_label' => 'JLC予想 前日コース',
                    'jlc_yesterday_course' => '123456',
                    'jlc_yesterday_focus_label' => 'JLC予想 前日フォーカス',
                    'jlc_yesterday_focus' =>['5-3-2', '5-3-1', '3-5-2', '3-5-1', '5-2-3'],
                    'jlc_yesterday_focus_exacta_label' => 'JLC予想 前日フォーカス 2連単',
                    'jlc_yesterday_focus_exacta' =>[],
                    'jlc_yesterday_focus_trifecta_label' => 'JLC予想 前日フォーカス 3連単',
                    'jlc_yesterday_focus_trifecta' =>['5-3-2', '5-3-1', '3-5-2', '3-5-1', '5-2-3'],
                    'jlc_yesterday_reliability_label' => 'JLC予想 前日信頼度',
                    'jlc_yesterday_reliability' => '85%',
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => '本田に持つ足はあるが、インの経験値の浅さは否めず。行き足で分がいい金子が余裕を持って差し切るとみた。山田は初手から握りマイで渡り合う。河合の展示気配は決して目立たないが、切れ味を駆使して首位争いに割って入る。',
                    'reporter_today_focus_label' => '記者予想 当日フォーカス',
                    'reporter_today_focus' => ['235BOX', '235-1-235', '235-235-1'],
                    'reporter_today_focus_exacta_label' => '記者予想 当日フォーカス 2連単',
                    'reporter_today_focus_exacta' => [],
                    'reporter_today_focus_trifecta_label' => '記者予想 当日フォーカス 3連単',
                    'reporter_today_focus_trifecta' => ['235BOX', '235-1-235', '235-235-1'],
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public static function scrapeTimesProvider(): array
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
