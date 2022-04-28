<?php

namespace App\Twig;

use App\Entity\Menu;
use App\Entity\Category;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Symfony\Component\Routing\RouterInterface;

class AppExtension extends AbstractExtension
{
    public function __construct(
        private RouterInterface $router
    )
    {

    }
    public function getFilters(): array
    {
        return [
            new TwigFilter('menuLink', [$this, 'menuLink']),
        ];
    }

    public function menuLink(Menu $menu): string
    {
      // si jamais notre menu contient un lien o,n mettra l'url et si c pas le cas il il autra un #
      //operateur va permettre de verifier si  ll'orateur getlink n'est pas nul sinon si elle est nulle on mettra un #
        $url = $menu->getLink() ?: '#';

        if ('#' !== $url) {
            return $url;
        }

         $category = $menu->getCategory();

        if ($category) {
            $name = 'category_show';
            $slug = $category->getSlug();
        }
         return $this->router->generate($name, [
            'slug' => $slug
        ]);
    }

}