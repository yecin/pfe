<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/occasion')) {
            // bo_occasion_home
            if (preg_match('#^/occasion(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bo_occasion_home')), array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
            }

            // bo_occasion_show
            if (0 === strpos($pathinfo, '/occasion/category/show') && preg_match('#^/occasion/category/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bo_occasion_show')), array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::showAction',));
            }

            // bo_occasion_add
            if ($pathinfo === '/occasion/add') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::addAction',  '_route' => 'bo_occasion_add',);
            }

            // bo_occasion_edit
            if (0 === strpos($pathinfo, '/occasion/edit') && preg_match('#^/occasion/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bo_occasion_edit')), array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::editAction',));
            }

            // bo_occasion_delete
            if (0 === strpos($pathinfo, '/occasion/delete') && preg_match('#^/occasion/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bo_occasion_delete')), array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::deleteAction',));
            }

            // bo_occasion_howitworks
            if ($pathinfo === '/occasion/howitworks') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::howitworksAction',  '_route' => 'bo_occasion_howitworks',);
            }

            // bo_occasion_contact
            if ($pathinfo === '/occasion/contact') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::contactAction',  '_route' => 'bo_occasion_contact',);
            }

            // bo_occasion_terms
            if ($pathinfo === '/occasion/terms') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::termsAction',  '_route' => 'bo_occasion_terms',);
            }

            // bo_occasion_mobileapp
            if ($pathinfo === '/occasion/mobileapp') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::mobileappAction',  '_route' => 'bo_occasion_mobileapp',);
            }

            // bo_occasion_privacy
            if ($pathinfo === '/occasion/privacy') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::privacyAction',  '_route' => 'bo_occasion_privacy',);
            }

            // bo_occasion_error
            if ($pathinfo === '/occasion/error') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::errorAction',  '_route' => 'bo_occasion_error',);
            }

            // bo_occasion_feedback
            if ($pathinfo === '/occasion/feedback') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::feedbackAction',  '_route' => 'bo_occasion_feedback',);
            }

            // bo_occasion_login
            if ($pathinfo === '/occasion/login') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::loginAction',  '_route' => 'bo_occasion_login',);
            }

            // bo_occasion_register
            if ($pathinfo === '/occasion/register') {
                return array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::registerAction',  '_route' => 'bo_occasion_register',);
            }

            // bo_occasion_category
            if (0 === strpos($pathinfo, '/occasion/category') && preg_match('#^/occasion/category/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bo_occasion_category')), array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::categoryAction',));
            }

            // bo_occasion_removeadd
            if (0 === strpos($pathinfo, '/occasion/removeadd') && preg_match('#^/occasion/removeadd/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bo_occasion_removeadd')), array (  '_controller' => 'BO\\OccasionBundle\\Controller\\AdvertController::removeaddAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
