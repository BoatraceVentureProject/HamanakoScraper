<?php

declare(strict_types=1);

namespace BVP\HamanakoScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class CommentScraperDataProvider
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
}
