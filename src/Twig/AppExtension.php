<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
  public function getFunctions()
  {
    return array(
      new TwigFunction('serverTimeZone', array($this, 'getServerTimeZone')),
    );
  }

  public function getServerTimeZone()
  {
    if (date_default_timezone_get()) {
      return date_default_timezone_get();
    } else if (ini_get('date.timezone')) {
      return ini_get('date.timezone');
    } else {
      return false;
    }
  }
}