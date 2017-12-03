<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
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

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/enfermedad')) {
            // enfermedad_index
            if ('/enfermedad' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_enfermedad_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'enfermedad_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EnfermedadController::indexAction',  '_route' => 'enfermedad_index',);
            }
            not_enfermedad_index:

            // enfermedad_new
            if ('/enfermedad/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_enfermedad_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EnfermedadController::newAction',  '_route' => 'enfermedad_new',);
            }
            not_enfermedad_new:

            // enfermedad_show
            if (preg_match('#^/enfermedad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_enfermedad_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedad_show')), array (  '_controller' => 'AppBundle\\Controller\\EnfermedadController::showAction',));
            }
            not_enfermedad_show:

            // enfermedad_edit
            if (preg_match('#^/enfermedad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_enfermedad_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedad_edit')), array (  '_controller' => 'AppBundle\\Controller\\EnfermedadController::editAction',));
            }
            not_enfermedad_edit:

            // enfermedad_delete
            if (preg_match('#^/enfermedad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_enfermedad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedad_delete')), array (  '_controller' => 'AppBundle\\Controller\\EnfermedadController::deleteAction',));
            }
            not_enfermedad_delete:

        }

        // vacuna
        if ('/vacuna' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\VacunaController::indexAction',  '_route' => 'vacuna',);
        }

        // visitante
        if ('/visitante' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\VisitanteController::indexAction',  '_route' => 'visitante',);
        }

        if (0 === strpos($pathinfo, '/alta')) {
            // altaVacuna
            if ('/altaVacuna' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VacunaController::altaAction',  '_route' => 'altaVacuna',);
            }

            // altaVisitante
            if ('/altaVisitante' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VisitanteController::alta',  '_route' => 'altaVisitante',);
            }

            if (0 === strpos($pathinfo, '/altaExcel')) {
                // altaExcelView
                if ('/altaExcelView' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\VisitanteController::altaExcel',  '_route' => 'altaExcelView',);
                }

                // altaExcel
                if ('/altaExcel' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\VisitanteController::altaExcelAction',  '_route' => 'altaExcel',);
                }

            }

        }

        // modificarVacuna
        if ('/modificarVacuna' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\VacunaController::modificarAction',  '_route' => 'modificarVacuna',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
