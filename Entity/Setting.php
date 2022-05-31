<?php

namespace Pixel\GDPRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Sulu\Component\Persistence\Model\AuditableInterface;
use Sulu\Component\Persistence\Model\AuditableTrait;

/**
 * @ORM\Entity()
 * @ORM\Table(name="gdpr_settings")
 * @Serializer\ExclusionPolicy("all")
 */
class Setting implements AuditableInterface
{
    use AuditableTrait;

    public const RESOURCE_KEY = "gdpr_settings";
    public const FORM_KEY = "gdpr_settings";
    public const SECURITY_CONTEXT = "gdpr_settings.settings";

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Serializer\Expose()
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $googleTagManager = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $googleAnalyticsGaJs = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $googleAnalyticsGtagJs = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $googleAnalyticsUniversal = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $pixelFacebook = null;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $useCookieHandling = false;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $privacyUrl = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $bodyPosition = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $hashtag = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $cookieName = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $orientation = null;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $groupServices = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $showAlertSmall = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $cookielist = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $closePopup = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $showIcon = true;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $iconPosition = null;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $adblocker = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $denyAllCta = true;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $acceptAllCta = true;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $highPrivacy = true;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $handleBrowserDNTRequest = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $removeCredit = true;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $moreInfoLink = true;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $useExternalCss = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $useExternalJs = false;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose()
     */
    private ?string $readmoreLink = null;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $mandatory = true;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Serializer\Expose()
     */
    private ?bool $mandatoryCta = true;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getGoogleTagManager(): ?string
    {
        return $this->googleTagManager;
    }

    /**
     * @param string|null $googleTagManager
     */
    public function setGoogleTagManager(?string $googleTagManager): void
    {
        $this->googleTagManager = $googleTagManager;
    }

    /**
     * @return string|null
     */
    public function getGoogleAnalyticsGaJs(): ?string
    {
        return $this->googleAnalyticsGaJs;
    }

    /**
     * @param string|null $googleAnalyticsGaJs
     */
    public function setGoogleAnalyticsGaJs(?string $googleAnalyticsGaJs): void
    {
        $this->googleAnalyticsGaJs = $googleAnalyticsGaJs;
    }

    /**
     * @return string|null
     */
    public function getGoogleAnalyticsGtagJs(): ?string
    {
        return $this->googleAnalyticsGtagJs;
    }

    /**
     * @param string|null $googleAnalyticsGtagJs
     */
    public function setGoogleAnalyticsGtagJs(?string $googleAnalyticsGtagJs): void
    {
        $this->googleAnalyticsGtagJs = $googleAnalyticsGtagJs;
    }

    /**
     * @return string|null
     */
    public function getGoogleAnalyticsUniversal(): ?string
    {
        return $this->googleAnalyticsUniversal;
    }

    /**
     * @param string|null $googleAnalyticsUniversal
     */
    public function setGoogleAnalyticsUniversal(?string $googleAnalyticsUniversal): void
    {
        $this->googleAnalyticsUniversal = $googleAnalyticsUniversal;
    }

    /**
     * @return string|null
     */
    public function getPixelFacebook(): ?string
    {
        return $this->pixelFacebook;
    }

    /**
     * @param string|null $pixelFacebook
     */
    public function setPixelFacebook(?string $pixelFacebook): void
    {
        $this->pixelFacebook = $pixelFacebook;
    }

    /**
     * @return bool|null
     */
    public function getUseCookieHandling(): ?bool
    {
        return $this->useCookieHandling;
    }

    /**
     * @param bool|null $useCookieHandling
     */
    public function setUseCookieHandling(?bool $useCookieHandling): void
    {
        $this->useCookieHandling = $useCookieHandling;
    }

    /**
     * @return string|null
     */
    public function getPrivacyUrl(): ?string
    {
        return $this->privacyUrl;
    }

    /**
     * @param string|null $privacyUrl
     */
    public function setPrivacyUrl(?string $privacyUrl): void
    {
        $this->privacyUrl = $privacyUrl;
    }

    /**
     * @return string|null
     */
    public function getBodyPosition(): ?string
    {
        return $this->bodyPosition;
    }

    /**
     * @param string|null $bodyPosition
     */
    public function setBodyPosition(?string $bodyPosition): void
    {
        $this->bodyPosition = $bodyPosition;
    }

    /**
     * @return string|null
     */
    public function getHashtag(): ?string
    {
        return $this->hashtag;
    }

    /**
     * @param string|null $hashtag
     */
    public function setHashtag(?string $hashtag): void
    {
        $this->hashtag = $hashtag;
    }

    /**
     * @return string|null
     */
    public function getCookieName(): ?string
    {
        return $this->cookieName;
    }

    /**
     * @param string|null $cookieName
     */
    public function setCookieName(?string $cookieName): void
    {
        $this->cookieName = $cookieName;
    }

    /**
     * @return string|null
     */
    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    /**
     * @param string|null $orientation
     */
    public function setOrientation(?string $orientation): void
    {
        $this->orientation = $orientation;
    }

    /**
     * @return bool|null
     */
    public function getGroupServices(): ?bool
    {
        return $this->groupServices;
    }

    /**
     * @param bool|null $groupServices
     */
    public function setGroupServices(?bool $groupServices): void
    {
        $this->groupServices = $groupServices;
    }

    /**
     * @return bool|null
     */
    public function getShowAlertSmall(): ?bool
    {
        return $this->showAlertSmall;
    }

    /**
     * @param bool|null $showAlertSmall
     */
    public function setShowAlertSmall(?bool $showAlertSmall): void
    {
        $this->showAlertSmall = $showAlertSmall;
    }

    /**
     * @return bool|null
     */
    public function getCookielist(): ?bool
    {
        return $this->cookielist;
    }

    /**
     * @param bool|null $cookielist
     */
    public function setCookielist(?bool $cookielist): void
    {
        $this->cookielist = $cookielist;
    }

    /**
     * @return bool|null
     */
    public function getClosePopup(): ?bool
    {
        return $this->closePopup;
    }

    /**
     * @param bool|null $closePopup
     */
    public function setClosePopup(?bool $closePopup): void
    {
        $this->closePopup = $closePopup;
    }

    /**
     * @return bool|null
     */
    public function getShowIcon(): ?bool
    {
        return $this->showIcon;
    }

    /**
     * @param bool|null $showIcon
     */
    public function setShowIcon(?bool $showIcon): void
    {
        $this->showIcon = $showIcon;
    }

    /**
     * @return string|null
     */
    public function getIconPosition(): ?string
    {
        return $this->iconPosition;
    }

    /**
     * @param string|null $iconPosition
     */
    public function setIconPosition(?string $iconPosition): void
    {
        $this->iconPosition = $iconPosition;
    }

    /**
     * @return bool|null
     */
    public function getAdblocker(): ?bool
    {
        return $this->adblocker;
    }

    /**
     * @param bool|null $adblocker
     */
    public function setAdblocker(?bool $adblocker): void
    {
        $this->adblocker = $adblocker;
    }

    /**
     * @return bool|null
     */
    public function getDenyAllCta(): ?bool
    {
        return $this->denyAllCta;
    }

    /**
     * @param bool|null $denyAllCta
     */
    public function setDenyAllCta(?bool $denyAllCta): void
    {
        $this->denyAllCta = $denyAllCta;
    }

    /**
     * @return bool|null
     */
    public function getAcceptAllCta(): ?bool
    {
        return $this->acceptAllCta;
    }

    /**
     * @param bool|null $acceptAllCta
     */
    public function setAcceptAllCta(?bool $acceptAllCta): void
    {
        $this->acceptAllCta = $acceptAllCta;
    }

    /**
     * @return bool|null
     */
    public function getHighPrivacy(): ?bool
    {
        return $this->highPrivacy;
    }

    /**
     * @param bool|null $highPrivacy
     */
    public function setHighPrivacy(?bool $highPrivacy): void
    {
        $this->highPrivacy = $highPrivacy;
    }

    /**
     * @return bool|null
     */
    public function getHandleBrowserDNTRequest(): ?bool
    {
        return $this->handleBrowserDNTRequest;
    }

    /**
     * @param bool|null $handleBrowserDNTRequest
     */
    public function setHandleBrowserDNTRequest(?bool $handleBrowserDNTRequest): void
    {
        $this->handleBrowserDNTRequest = $handleBrowserDNTRequest;
    }

    /**
     * @return bool|null
     */
    public function getRemoveCredit(): ?bool
    {
        return $this->removeCredit;
    }

    /**
     * @param bool|null $removeCredit
     */
    public function setRemoveCredit(?bool $removeCredit): void
    {
        $this->removeCredit = $removeCredit;
    }

    /**
     * @return bool|null
     */
    public function getMoreInfoLink(): ?bool
    {
        return $this->moreInfoLink;
    }

    /**
     * @param bool|null $moreInfoLink
     */
    public function setMoreInfoLink(?bool $moreInfoLink): void
    {
        $this->moreInfoLink = $moreInfoLink;
    }

    /**
     * @return bool|null
     */
    public function getUseExternalCss(): ?bool
    {
        return $this->useExternalCss;
    }

    /**
     * @param bool|null $useExternalCss
     */
    public function setUseExternalCss(?bool $useExternalCss): void
    {
        $this->useExternalCss = $useExternalCss;
    }

    /**
     * @return bool|null
     */
    public function getUseExternalJs(): ?bool
    {
        return $this->useExternalJs;
    }

    /**
     * @param bool|null $useExternalJs
     */
    public function setUseExternalJs(?bool $useExternalJs): void
    {
        $this->useExternalJs = $useExternalJs;
    }

    /**
     * @return string|null
     */
    public function getReadmoreLink(): ?string
    {
        return $this->readmoreLink;
    }

    /**
     * @param string|null $readmoreLink
     */
    public function setReadmoreLink(?string $readmoreLink): void
    {
        $this->readmoreLink = $readmoreLink;
    }

    /**
     * @return bool|null
     */
    public function getMandatory(): ?bool
    {
        return $this->mandatory;
    }

    /**
     * @param bool|null $mandatory
     */
    public function setMandatory(?bool $mandatory): void
    {
        $this->mandatory = $mandatory;
    }

    /**
     * @return bool|null
     */
    public function getMandatoryCta(): ?bool
    {
        return $this->mandatoryCta;
    }

    /**
     * @param bool|null $mandatoryCta
     */
    public function setMandatoryCta(?bool $mandatoryCta): void
    {
        $this->mandatoryCta = $mandatoryCta;
    }
}
