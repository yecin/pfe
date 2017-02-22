<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'bo_occasion_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::indexAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/occasion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/occasion/category/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/occasion/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/occasion/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_howitworks' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::howitworksAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/howitworks',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_terms' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::termsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/terms',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_mobileapp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::mobileappAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/mobileapp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_privacy' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::privacyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/privacy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_error' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::errorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_feedback' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::feedbackAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/feedback',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occasion/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_category' => array (  0 =>   array (    0 => 'category',  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::categoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    1 =>     array (      0 => 'text',      1 => '/occasion/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bo_occasion_removeadd' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::removeaddAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/occasion/removeadd',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
