<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/0bd32dd')) {
            // _assetic_0bd32dd
            if ($pathinfo === '/css/0bd32dd.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0bd32dd',);
            }

            if (0 === strpos($pathinfo, '/css/0bd32dd_part_1_')) {
                if (0 === strpos($pathinfo, '/css/0bd32dd_part_1_bootstrap')) {
                    if (0 === strpos($pathinfo, '/css/0bd32dd_part_1_bootstrap-')) {
                        // _assetic_0bd32dd_0
                        if ($pathinfo === '/css/0bd32dd_part_1_bootstrap-select_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_0',);
                        }

                        if (0 === strpos($pathinfo, '/css/0bd32dd_part_1_bootstrap-theme')) {
                            // _assetic_0bd32dd_1
                            if ($pathinfo === '/css/0bd32dd_part_1_bootstrap-theme_2.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_1',);
                            }

                            // _assetic_0bd32dd_2
                            if ($pathinfo === '/css/0bd32dd_part_1_bootstrap-theme.min_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_2',);
                            }

                        }

                    }

                    // _assetic_0bd32dd_3
                    if ($pathinfo === '/css/0bd32dd_part_1_bootstrap_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_3',);
                    }

                    if (0 === strpos($pathinfo, '/css/0bd32dd_part_1_bootstrap.min_')) {
                        // _assetic_0bd32dd_4
                        if ($pathinfo === '/css/0bd32dd_part_1_bootstrap.min_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_4',);
                        }

                        // _assetic_0bd32dd_5
                        if ($pathinfo === '/css/0bd32dd_part_1_bootstrap.min_1_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_5',);
                        }

                    }

                }

                // _assetic_0bd32dd_6
                if ($pathinfo === '/css/0bd32dd_part_1_easy-responsive-tabs_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_6',);
                }

                if (0 === strpos($pathinfo, '/css/0bd32dd_part_1_f')) {
                    // _assetic_0bd32dd_7
                    if ($pathinfo === '/css/0bd32dd_part_1_flexslider_8.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_7',);
                    }

                    // _assetic_0bd32dd_8
                    if ($pathinfo === '/css/0bd32dd_part_1_font-awesome.min_9.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_8',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/0bd32dd_part_1_jquery')) {
                    // _assetic_0bd32dd_9
                    if ($pathinfo === '/css/0bd32dd_part_1_jquery-ui1_10.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_9',);
                    }

                    if (0 === strpos($pathinfo, '/css/0bd32dd_part_1_jquery.uls')) {
                        // _assetic_0bd32dd_10
                        if ($pathinfo === '/css/0bd32dd_part_1_jquery.uls_11.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_10',);
                        }

                        if (0 === strpos($pathinfo, '/css/0bd32dd_part_1_jquery.uls.')) {
                            // _assetic_0bd32dd_11
                            if ($pathinfo === '/css/0bd32dd_part_1_jquery.uls.grid_12.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_11',);
                            }

                            // _assetic_0bd32dd_12
                            if ($pathinfo === '/css/0bd32dd_part_1_jquery.uls.lcd_13.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_12',);
                            }

                        }

                    }

                }

                // _assetic_0bd32dd_13
                if ($pathinfo === '/css/0bd32dd_part_1_style_14.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0bd32dd',  'pos' => 13,  '_format' => 'css',  '_route' => '_assetic_0bd32dd_13',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/072ed14')) {
            // _assetic_072ed14
            if ($pathinfo === '/js/072ed14.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_072ed14',);
            }

            if (0 === strpos($pathinfo, '/js/072ed14_part_1_')) {
                if (0 === strpos($pathinfo, '/js/072ed14_part_1_bootstrap')) {
                    // _assetic_072ed14_0
                    if ($pathinfo === '/js/072ed14_part_1_bootstrap-select_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_072ed14_0',);
                    }

                    // _assetic_072ed14_1
                    if ($pathinfo === '/js/072ed14_part_1_bootstrap_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_072ed14_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/072ed14_part_1_bootstrap.min_')) {
                        // _assetic_072ed14_2
                        if ($pathinfo === '/js/072ed14_part_1_bootstrap.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_072ed14_2',);
                        }

                        // _assetic_072ed14_3
                        if ($pathinfo === '/js/072ed14_part_1_bootstrap.min_1_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_072ed14_3',);
                        }

                        // _assetic_072ed14_4
                        if ($pathinfo === '/js/072ed14_part_1_bootstrap.min_2_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_072ed14_4',);
                        }

                    }

                    // _assetic_072ed14_5
                    if ($pathinfo === '/js/072ed14_part_1_bootstrap_1_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_072ed14_5',);
                    }

                }

                // _assetic_072ed14_6
                if ($pathinfo === '/js/072ed14_part_1_easyResponsiveTabs_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_072ed14_6',);
                }

                // _assetic_072ed14_7
                if ($pathinfo === '/js/072ed14_part_1_filedrag_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_072ed14_7',);
                }

                if (0 === strpos($pathinfo, '/js/072ed14_part_1_j')) {
                    // _assetic_072ed14_8
                    if ($pathinfo === '/js/072ed14_part_1_jcanvas.min_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_072ed14_8',);
                    }

                    if (0 === strpos($pathinfo, '/js/072ed14_part_1_jquery')) {
                        if (0 === strpos($pathinfo, '/js/072ed14_part_1_jquery-')) {
                            // _assetic_072ed14_9
                            if ($pathinfo === '/js/072ed14_part_1_jquery-1.10.2_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_072ed14_9',);
                            }

                            // _assetic_072ed14_10
                            if ($pathinfo === '/js/072ed14_part_1_jquery-ui_11.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_072ed14_10',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/js/072ed14_part_1_jquery.')) {
                            if (0 === strpos($pathinfo, '/js/072ed14_part_1_jquery.f')) {
                                // _assetic_072ed14_11
                                if ($pathinfo === '/js/072ed14_part_1_jquery.fileupload_12.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_072ed14_11',);
                                }

                                if (0 === strpos($pathinfo, '/js/072ed14_part_1_jquery.flex')) {
                                    // _assetic_072ed14_12
                                    if ($pathinfo === '/js/072ed14_part_1_jquery.flexisel_13.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_072ed14_12',);
                                    }

                                    // _assetic_072ed14_13
                                    if ($pathinfo === '/js/072ed14_part_1_jquery.flexslider_14.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_072ed14_13',);
                                    }

                                }

                            }

                            // _assetic_072ed14_14
                            if ($pathinfo === '/js/072ed14_part_1_jquery.iframe-transport_15.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_072ed14_14',);
                            }

                            // _assetic_072ed14_15
                            if ($pathinfo === '/js/072ed14_part_1_jquery.knob_16.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_072ed14_15',);
                            }

                            // _assetic_072ed14_16
                            if ($pathinfo === '/js/072ed14_part_1_jquery.leanModal.min_17.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_072ed14_16',);
                            }

                            // _assetic_072ed14_17
                            if ($pathinfo === '/js/072ed14_part_1_jquery.min_18.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_072ed14_17',);
                            }

                            if (0 === strpos($pathinfo, '/js/072ed14_part_1_jquery.u')) {
                                // _assetic_072ed14_18
                                if ($pathinfo === '/js/072ed14_part_1_jquery.ui.widget_19.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_072ed14_18',);
                                }

                                if (0 === strpos($pathinfo, '/js/072ed14_part_1_jquery.uls.')) {
                                    // _assetic_072ed14_19
                                    if ($pathinfo === '/js/072ed14_part_1_jquery.uls.core_20.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_072ed14_19',);
                                    }

                                    if (0 === strpos($pathinfo, '/js/072ed14_part_1_jquery.uls.data')) {
                                        // _assetic_072ed14_20
                                        if ($pathinfo === '/js/072ed14_part_1_jquery.uls.data_21.js') {
                                            return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_072ed14_20',);
                                        }

                                        // _assetic_072ed14_21
                                        if ($pathinfo === '/js/072ed14_part_1_jquery.uls.data.utils_22.js') {
                                            return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_072ed14_21',);
                                        }

                                    }

                                    if (0 === strpos($pathinfo, '/js/072ed14_part_1_jquery.uls.l')) {
                                        // _assetic_072ed14_22
                                        if ($pathinfo === '/js/072ed14_part_1_jquery.uls.languagefilter_23.js') {
                                            return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_072ed14_22',);
                                        }

                                        // _assetic_072ed14_23
                                        if ($pathinfo === '/js/072ed14_part_1_jquery.uls.lcd_24.js') {
                                            return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_072ed14_23',);
                                        }

                                    }

                                    // _assetic_072ed14_24
                                    if ($pathinfo === '/js/072ed14_part_1_jquery.uls.regionfilter_25.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_072ed14_24',);
                                    }

                                }

                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/072ed14_part_1_npm_')) {
                    // _assetic_072ed14_25
                    if ($pathinfo === '/js/072ed14_part_1_npm_26.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_072ed14_25',);
                    }

                    // _assetic_072ed14_26
                    if ($pathinfo === '/js/072ed14_part_1_npm_1_27.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_072ed14_26',);
                    }

                }

                // _assetic_072ed14_27
                if ($pathinfo === '/js/072ed14_part_1_script_28.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_072ed14_27',);
                }

                // _assetic_072ed14_28
                if ($pathinfo === '/js/072ed14_part_1_tabs_29.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '072ed14',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_072ed14_28',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
