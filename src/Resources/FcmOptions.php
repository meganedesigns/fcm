<?php

namespace NotificationChannels\Fcm\Resources;

class FcmOptions implements FcmResource
{
    /**
     * @var string|null
     */
    protected $analyticsLabel;

    /**
     * @var string|null
     */
    protected $link;

    /**
     * @return string|null
     */
    public function getAnalyticsLabel(): ?string
    {
        return $this->analyticsLabel;
    }

    /**
     * @param string|null $analyticsLabel
     * @return FcmOptions
     */
    public function setAnalyticsLabel(?string $analyticsLabel): self
    {
        $this->analyticsLabel = $analyticsLabel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $link
     * @return FcmOptions
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return static
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return [
            'analytics_label' => $this->getAnalyticsLabel(),
            'link' => $this->getLink(),
        ];
    }
}
