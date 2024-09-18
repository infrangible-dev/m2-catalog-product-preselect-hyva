<?php

declare(strict_types=1);

namespace Infrangible\CatalogProductPreselectHyva\Plugin\CatalogProductPreselect\Helper;

use FeWeDev\Base\Arrays;

/**
 * @author      Andreas Knollmann
 * @copyright   Copyright (c) 2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class Data
{
    /** @var Arrays */
    protected $arrays;

    public function __construct(Arrays $arrays)
    {
        $this->arrays = $arrays;
    }

    /** @noinspection PhpUnusedParameterInspection */
    public function aroundGetPreselectedAttributes(
        \Infrangible\CatalogProductPreselect\Helper\Data $subject,
        callable $proceed,
        array $config,
        int $preselectedProductId
    ): ?array {
        return $this->arrays->getValue(
            $config,
            sprintf(
                'index:%d',
                $preselectedProductId
            )
        );
    }
}
