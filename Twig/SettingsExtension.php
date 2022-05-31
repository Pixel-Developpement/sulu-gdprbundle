<?php

namespace Pixel\GDPRBundle\Twig;

use Doctrine\ORM\EntityManagerInterface;
use Pixel\GDPRBundle\Entity\Setting;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\Environment;

class SettingsExtension extends AbstractExtension
{
    /**
     *
     */
    private EntityManagerInterface $entityManager;

    /**
     * @var Environment
     */
    private Environment $environment;

    public function __construct(EntityManagerInterface $entityManager, Environment $environment)
    {
        $this->entityManager = $entityManager;
        $this->environment = $environment;
    }

    public function getFunctions()
    {
        return [
            new TwigFunction("gdpr_settings", [$this, "gdprSettings"]),
            new TwigFunction("gdpr_script", [$this, "gdprScript"], ["is_safe" => ["html"]])
        ];
    }

    public function gdprSettings()
    {
        return $this->entityManager->getRepository(Setting::class)->findOneBy([]);
    }

    public function gdprScript()
    {
        $setting = $this->entityManager->getRepository(Setting::class)->findOneBy([]);
        if($setting === null){
            $setting = new Setting();
            $setting->setUseCookieHandling(false);
        }
        $useCookieHandling = $setting->getUseCookieHandling();
        if($useCookieHandling){
            return $this->environment->render("@GDPR/twig/scripts.html.twig", ["setting" => $setting]);
        }
    }
}
