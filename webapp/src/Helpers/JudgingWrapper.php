<?php declare(strict_types=1);

namespace App\Helpers;

use App\Entity\Judging;
use App\Utils\Utils;
use JMS\Serializer\Annotation as Serializer;

class JudgingWrapper
{
    /**
     * @var Judging
     * @Serializer\Inline()
     */
    protected $judging;

    /**
     * @var float|null
     * @Serializer\Exclude()
     */
    protected $maxRunTime;

    /**
     * @var string
     * @Serializer\SerializedName("judgement_type_id")
     */
    protected $judgementTypeId;

    public function __construct(Judging $judging, ?float $maxRunTime = null, ?string $judgementTypeId = null)
    {
        $this->judging         = $judging;
        $this->maxRunTime      = $maxRunTime;
        $this->judgementTypeId = $judgementTypeId;
    }

    /**
     * @Serializer\VirtualProperty()
     * @Serializer\SerializedName("max_run_time")
     * @Serializer\Type("float")
     */
    public function getMaxRunTime(): ?float
    {
        return Utils::roundedFloat($this->maxRunTime);
    }
}
