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

        elseif (0 === strpos($pathinfo, '/factorriesgo')) {
            // factorriesgo_index
            if ('/factorriesgo' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_factorriesgo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'factorriesgo_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FactorRiesgoController::indexAction',  '_route' => 'factorriesgo_index',);
            }
            not_factorriesgo_index:

            // factorriesgo_new
            if ('/factorriesgo/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_factorriesgo_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FactorRiesgoController::newAction',  '_route' => 'factorriesgo_new',);
            }
            not_factorriesgo_new:

            // factorriesgo_show
            if (preg_match('#^/factorriesgo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_factorriesgo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factorriesgo_show')), array (  '_controller' => 'AppBundle\\Controller\\FactorRiesgoController::showAction',));
            }
            not_factorriesgo_show:

            // factorriesgo_edit
            if (preg_match('#^/factorriesgo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_factorriesgo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factorriesgo_edit')), array (  '_controller' => 'AppBundle\\Controller\\FactorRiesgoController::editAction',));
            }
            not_factorriesgo_edit:

            // factorriesgo_delete
            if (preg_match('#^/factorriesgo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_factorriesgo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'factorriesgo_delete')), array (  '_controller' => 'AppBundle\\Controller\\FactorRiesgoController::deleteAction',));
            }
            not_factorriesgo_delete:

        }

        elseif (0 === strpos($pathinfo, '/inscripto')) {
            // altaExcelView
            if ('/inscripto/altaExcelView' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\InscriptoController::altaExcel',  '_route' => 'altaExcelView',);
            }

            // inscripto_index
            if ('/inscripto' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_inscripto_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'inscripto_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\InscriptoController::indexAction',  '_route' => 'inscripto_index',);
            }
            not_inscripto_index:

            // inscripto_new
            if ('/inscripto/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_inscripto_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\InscriptoController::newAction',  '_route' => 'inscripto_new',);
            }
            not_inscripto_new:

            // inscripto_show
            if (preg_match('#^/inscripto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_inscripto_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscripto_show')), array (  '_controller' => 'AppBundle\\Controller\\InscriptoController::showAction',));
            }
            not_inscripto_show:

            // inscripto_edit
            if (preg_match('#^/inscripto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_inscripto_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscripto_edit')), array (  '_controller' => 'AppBundle\\Controller\\InscriptoController::editAction',));
            }
            not_inscripto_edit:

            // inscripto_delete
            if (preg_match('#^/inscripto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_inscripto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscripto_delete')), array (  '_controller' => 'AppBundle\\Controller\\InscriptoController::deleteAction',));
            }
            not_inscripto_delete:

            // altaExcel
            if ('/inscripto/altaExcel' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\InscriptoController::altaExcelAction',  '_route' => 'altaExcel',);
            }

        }

        elseif (0 === strpos($pathinfo, '/nodocente')) {
            // nodocente_index
            if ('/nodocente' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_nodocente_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nodocente_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NoDocenteController::indexAction',  '_route' => 'nodocente_index',);
            }
            not_nodocente_index:

            // nodocente_new
            if ('/nodocente/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_nodocente_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NoDocenteController::newAction',  '_route' => 'nodocente_new',);
            }
            not_nodocente_new:

            // nodocente_show
            if (preg_match('#^/nodocente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_nodocente_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nodocente_show')), array (  '_controller' => 'AppBundle\\Controller\\NoDocenteController::showAction',));
            }
            not_nodocente_show:

            // nodocente_edit
            if (preg_match('#^/nodocente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_nodocente_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nodocente_edit')), array (  '_controller' => 'AppBundle\\Controller\\NoDocenteController::editAction',));
            }
            not_nodocente_edit:

            // nodocente_delete
            if (preg_match('#^/nodocente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_nodocente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nodocente_delete')), array (  '_controller' => 'AppBundle\\Controller\\NoDocenteController::deleteAction',));
            }
            not_nodocente_delete:

        }

        elseif (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if ('/usuario' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_usuario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::showAction',));
            }
            not_usuario_show:

        }

        elseif (0 === strpos($pathinfo, '/vacuna')) {
            // vacuna_index
            if ('/vacuna' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_vacuna_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vacuna_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\VacunaController::indexAction',  '_route' => 'vacuna_index',);
            }
            not_vacuna_index:

            // vacuna_new
            if ('/vacuna/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_vacuna_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\VacunaController::newAction',  '_route' => 'vacuna_new',);
            }
            not_vacuna_new:

            // vacuna_show
            if (preg_match('#^/vacuna/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_vacuna_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vacuna_show')), array (  '_controller' => 'AppBundle\\Controller\\VacunaController::showAction',));
            }
            not_vacuna_show:

            // vacuna_edit
            if (preg_match('#^/vacuna/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_vacuna_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vacuna_edit')), array (  '_controller' => 'AppBundle\\Controller\\VacunaController::editAction',));
            }
            not_vacuna_edit:

            // vacuna_delete
            if (preg_match('#^/vacuna/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_vacuna_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vacuna_delete')), array (  '_controller' => 'AppBundle\\Controller\\VacunaController::deleteAction',));
            }
            not_vacuna_delete:

        }

        elseif (0 === strpos($pathinfo, '/visitante')) {
            // visitante_index
            if ('/visitante' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_visitante_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'visitante_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\VisitanteController::indexAction',  '_route' => 'visitante_index',);
            }
            not_visitante_index:

            // visitante_new
            if ('/visitante/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_visitante_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\VisitanteController::newAction',  '_route' => 'visitante_new',);
            }
            not_visitante_new:

            // visitante_show
            if (preg_match('#^/visitante/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_visitante_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visitante_show')), array (  '_controller' => 'AppBundle\\Controller\\VisitanteController::showAction',));
            }
            not_visitante_show:

            // visitante_edit
            if (preg_match('#^/visitante/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_visitante_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visitante_edit')), array (  '_controller' => 'AppBundle\\Controller\\VisitanteController::editAction',));
            }
            not_visitante_edit:

            // visitante_delete
            if (preg_match('#^/visitante/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_visitante_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visitante_delete')), array (  '_controller' => 'AppBundle\\Controller\\VisitanteController::deleteAction',));
            }
            not_visitante_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
