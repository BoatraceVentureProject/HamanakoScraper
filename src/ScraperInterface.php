<?php

declare(strict_types=1);

namespace BVP\HamanakoScraper;

/**
 * @author shimomo
 */
interface ScraperInterface extends ScraperContractInterface
{
    /**
     * @param  \BVP\HamanakoScraper\ScraperCoreInterface
     * @return \BVP\HamanakoScraper\ScraperInterface
     */
    public static function getInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @param  \BVP\HamanakoScraper\ScraperCoreInterface
     * @return \BVP\HamanakoScraper\ScraperInterface
     */
    public static function createInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @return void
     */
    public static function resetInstance(): void;
}
