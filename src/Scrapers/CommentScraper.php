<?php

declare(strict_types=1);

namespace BVP\HamanakoScraper\Scrapers;

use BVP\ScraperCore\Normalizer;
use BVP\ScraperCore\Scraper;
use Carbon\CarbonImmutable as Carbon;
use Carbon\CarbonInterface;

/**
 * @author shimomo
 */
class CommentScraper extends BaseScraper implements CommentScraperInterface
{
    /**
     * @param  string|int                           $raceNumber
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    public function scrape(string|int $raceNumber, CarbonInterface|string|null $date = null): array
    {
        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $crawlerUrl = sprintf($this->baseUrl, 'group-yosou', $date, $raceNumber, '&kind=1');
        $crawler = Scraper::getInstance()->request('GET', $crawlerUrl);
        $comments = Scraper::filterByKey($crawler, '.tbl_cyokuzen_comment > tbody > tr > td');

        if (empty($comments)) {
            throw new \RuntimeException(
                __METHOD__ . "() - The specified key '.tbl_cyokuzen_comment > tbody > tr > td' is not found " .
                "in the content of the URL: '{$crawlerUrl}'."
            );
        }

        $response = [];
        foreach (range(1, 6) as $boatNumber) {
            $racerName = $comments[$boatNumber * 5 - 5] ?? '';
            $racerName = Normalizer::normalize($racerName, [
                'shouldRemoveAllSpaces' => true,
                'shouldRemoveAllNumbers' => true,
            ]);
            $racerYesterdayCommentLabel = '前日コメント';
            $racerYesterdayComment = $comments[$boatNumber * 5 - 3] ?? '';
            $racerYesterdayComment = Normalizer::normalize($racerYesterdayComment);
            $racerTodayCommentLabel = $comments[$boatNumber * 5 - 2] ?? '';
            $racerTodayCommentLabel = Normalizer::normalize($racerTodayCommentLabel);
            $racerTodayComment = $comments[$boatNumber * 5 - 1] ?? '';
            $racerTodayComment = Normalizer::normalize($racerTodayComment);

            $response['boat_number_' . $boatNumber . '_racer_name'] = $racerName;
            $response['boat_number_' . $boatNumber . '_racer_yesterday_comment_label'] = $racerYesterdayCommentLabel;
            $response['boat_number_' . $boatNumber . '_racer_yesterday_comment'] = $racerYesterdayComment;
            $response['boat_number_' . $boatNumber . '_racer_today_comment_label'] = $racerTodayCommentLabel;
            $response['boat_number_' . $boatNumber . '_racer_today_comment'] = $racerTodayComment;
        }

        return $response;
    }
}
