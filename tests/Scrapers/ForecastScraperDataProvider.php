<?php

declare(strict_types=1);

namespace BVP\HamanakoScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class ForecastScraperDataProvider
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
}
