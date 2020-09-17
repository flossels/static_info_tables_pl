<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (PL)" extension for TYPO3 CMS.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    /**
     * @var string
     */
    protected $namePl = '';

    /**
     * @return string
     */
    public function getNamePl(): string
    {
        return $this->namePl;
    }

    /**
     * @param string $namePl
     */
    public function setNamePl(string $namePl)
    {
        $this->namePl = $namePl;
    }
}
