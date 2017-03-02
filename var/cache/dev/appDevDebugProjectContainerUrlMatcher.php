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

        if (0 === strpos($pathinfo, '/back')) {
            // centre_medic_back_homepage
            if (rtrim($pathinfo, '/') === '/back') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'centre_medic_back_homepage');
                }

                return array (  '_controller' => 'BackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'centre_medic_back_homepage',);
            }

            // centre_medic_back_pacients_new
            if ($pathinfo === '/back/newPacient') {
                return array (  '_controller' => 'BackBundle\\Controller\\PacientsController::newAction',  '_route' => 'centre_medic_back_pacients_new',);
            }

            // centre_medic_back_pacients_view
            if (0 === strpos($pathinfo, '/back/viewPacient') && preg_match('#^/back/viewPacient/(?P<dni>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_pacients_view')), array (  '_controller' => 'BackBundle\\Controller\\PacientsController::viewAction',));
            }

            // centre_medic_back_pacients_edit
            if (0 === strpos($pathinfo, '/back/editPacient') && preg_match('#^/back/editPacient/(?P<dni>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_pacients_edit')), array (  '_controller' => 'BackBundle\\Controller\\PacientsController::editAction',));
            }

            // centre_medic_back_pacients_delete
            if (0 === strpos($pathinfo, '/back/deletePacient') && preg_match('#^/back/deletePacient/(?P<dni>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_pacients_delete')), array (  '_controller' => 'BackBundle\\Controller\\PacientsController::deleteAction',));
            }

            // centre_medic_back_metges_new
            if ($pathinfo === '/back/newMetge') {
                return array (  '_controller' => 'BackBundle\\Controller\\MetgesController::newAction',  '_route' => 'centre_medic_back_metges_new',);
            }

            // centre_medic_back_metges_view
            if (0 === strpos($pathinfo, '/back/viewMetge') && preg_match('#^/back/viewMetge/(?P<dni>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_metges_view')), array (  '_controller' => 'BackBundle\\Controller\\MetgesController::viewAction',));
            }

            // centre_medic_back_metges_edit
            if (0 === strpos($pathinfo, '/back/editMetge') && preg_match('#^/back/editMetge/(?P<dni>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_metges_edit')), array (  '_controller' => 'BackBundle\\Controller\\MetgesController::editAction',));
            }

            // centre_medic_back_metges_delete
            if (0 === strpos($pathinfo, '/back/deleteMetge') && preg_match('#^/back/deleteMetge/(?P<dni>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_metges_delete')), array (  '_controller' => 'BackBundle\\Controller\\MetgesController::deleteAction',));
            }

            // centre_medic_back_visites_new
            if ($pathinfo === '/back/newVisita') {
                return array (  '_controller' => 'BackBundle\\Controller\\VisitesController::newAction',  '_route' => 'centre_medic_back_visites_new',);
            }

            // centre_medic_back_visites_view
            if (0 === strpos($pathinfo, '/back/viewVisita') && preg_match('#^/back/viewVisita/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_visites_view')), array (  '_controller' => 'BackBundle\\Controller\\VisitesController::viewAction',));
            }

            // centre_medic_back_visites_edit
            if (0 === strpos($pathinfo, '/back/editVisita') && preg_match('#^/back/editVisita/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_visites_edit')), array (  '_controller' => 'BackBundle\\Controller\\VisitesController::editAction',));
            }

            // centre_medic_back_visites_delete
            if (0 === strpos($pathinfo, '/back/deleteVisita') && preg_match('#^/back/deleteVisita/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_medic_back_visites_delete')), array (  '_controller' => 'BackBundle\\Controller\\VisitesController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/back/llista_')) {
                // centre_medic_llista_back_pacients
                if ($pathinfo === '/back/llista_pacients') {
                    return array (  '_controller' => 'BackBundle\\Controller\\PacientsController::llistaPacientsAction',  '_route' => 'centre_medic_llista_back_pacients',);
                }

                // centre_medic_llista_back_metges
                if ($pathinfo === '/back/llista_metges') {
                    return array (  '_controller' => 'BackBundle\\Controller\\MetgesController::llistaMetgesAction',  '_route' => 'centre_medic_llista_back_metges',);
                }

                // centre_medic_llista_back_visites
                if ($pathinfo === '/back/llista_visites') {
                    return array (  '_controller' => 'BackBundle\\Controller\\VisitesController::llistaVisitesAction',  '_route' => 'centre_medic_llista_back_visites',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/front')) {
            // centre_medic_front_homepage
            if (rtrim($pathinfo, '/') === '/front') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'centre_medic_front_homepage');
                }

                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'centre_medic_front_homepage',);
            }

            if (0 === strpos($pathinfo, '/front/l')) {
                // centre_medic_front_login
                if ($pathinfo === '/front/login') {
                    return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::loginAction',  '_route' => 'centre_medic_front_login',);
                }

                if (0 === strpos($pathinfo, '/front/llista_')) {
                    // centre_medic_llista_pacients
                    if ($pathinfo === '/front/llista_pacients') {
                        return array (  '_controller' => 'FrontBundle\\Controller\\PacientsController::llistaPacientsAction',  '_route' => 'centre_medic_llista_pacients',);
                    }

                    // centre_medic_llista_metges
                    if ($pathinfo === '/front/llista_metges') {
                        return array (  '_controller' => 'FrontBundle\\Controller\\MetgesController::llistaMetgesAction',  '_route' => 'centre_medic_llista_metges',);
                    }

                    // centre_medic_llista_visites
                    if ($pathinfo === '/front/llista_visites') {
                        return array (  '_controller' => 'FrontBundle\\Controller\\VisitesController::llistaVisitesAction',  '_route' => 'centre_medic_llista_visites',);
                    }

                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
