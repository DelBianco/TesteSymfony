<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/assetic/bootstrap_')) {
            if (0 === strpos($pathinfo, '/assetic/bootstrap_js')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/assetic/bootstrap_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                // _assetic_bootstrap_js_0
                if ($pathinfo === '/assetic/bootstrap_js_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/bootstrap_css')) {
                // _assetic_bootstrap_css
                if ($pathinfo === '/assetic/bootstrap_css.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
                }

                if (0 === strpos($pathinfo, '/assetic/bootstrap_css_bootstrap')) {
                    // _assetic_bootstrap_css_0
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                    }

                    // _assetic_bootstrap_css_1
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap-theme_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/fonts/glyphicons-halflings-regular')) {
            // _assetic_bootstrap_glyphicons_ttf
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf',);
            }

            // _assetic_bootstrap_glyphicons_ttf_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf_0',);
            }

            // _assetic_bootstrap_glyphicons_eot
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot',);
            }

            // _assetic_bootstrap_glyphicons_eot_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot_0',);
            }

            // _assetic_bootstrap_glyphicons_svg
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg',);
            }

            // _assetic_bootstrap_glyphicons_svg_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg_0',);
            }

            // _assetic_bootstrap_glyphicons_woff
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff',);
            }

            // _assetic_bootstrap_glyphicons_woff_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff_0',);
            }

        }

        if (0 === strpos($pathinfo, '/assetic/jquery')) {
            // _assetic_jquery
            if ($pathinfo === '/assetic/jquery.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
            }

            // _assetic_jquery_0
            if ($pathinfo === '/assetic/jquery_jquery_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/fddb9b6')) {
            // _assetic_fddb9b6
            if ($pathinfo === '/css/fddb9b6.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fddb9b6',);
            }

            // _assetic_fddb9b6_0
            if ($pathinfo === '/css/fddb9b6_part_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fddb9b6_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/a56fa94')) {
            // _assetic_a56fa94
            if ($pathinfo === '/js/a56fa94.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a56fa94',);
            }

            if (0 === strpos($pathinfo, '/js/a56fa94_part_')) {
                // _assetic_a56fa94_0
                if ($pathinfo === '/js/a56fa94_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a56fa94_0',);
                }

                // _assetic_a56fa94_1
                if ($pathinfo === '/js/a56fa94_part_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a56fa94_1',);
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'EventWeb\\UserBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'EventWeb\\UserBundle\\Controller\\LoginController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'EventWeb\\UserBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
            }

        }

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'EventWeb\\UserBundle\\Controller\\RegisterController::registerAction',  '_route' => 'user_register',);
        }

        if (0 === strpos($pathinfo, '/sistemadesocios')) {
            // sistemadesocios
            if (rtrim($pathinfo, '/') === '/sistemadesocios') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sistemadesocios');
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\SistemaDeSociosController::indexAction',  '_route' => 'sistemadesocios',);
            }

            // sistemadesocios_show
            if (preg_match('#^/sistemadesocios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemadesocios_show')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\SistemaDeSociosController::showAction',));
            }

            // sistemadesocios_new
            if ($pathinfo === '/sistemadesocios/new') {
                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\SistemaDeSociosController::newAction',  '_route' => 'sistemadesocios_new',);
            }

            // sistemadesocios_create
            if ($pathinfo === '/sistemadesocios/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sistemadesocios_create;
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\SistemaDeSociosController::createAction',  '_route' => 'sistemadesocios_create',);
            }
            not_sistemadesocios_create:

            // sistemadesocios_edit
            if (preg_match('#^/sistemadesocios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemadesocios_edit')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\SistemaDeSociosController::editAction',));
            }

            // sistemadesocios_update
            if (preg_match('#^/sistemadesocios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_sistemadesocios_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemadesocios_update')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\SistemaDeSociosController::updateAction',));
            }
            not_sistemadesocios_update:

            // sistemadesocios_delete
            if (preg_match('#^/sistemadesocios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_sistemadesocios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemadesocios_delete')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\SistemaDeSociosController::deleteAction',));
            }
            not_sistemadesocios_delete:

        }

        if (0 === strpos($pathinfo, '/periododeinscricao')) {
            // periododeinscricao
            if (rtrim($pathinfo, '/') === '/periododeinscricao') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'periododeinscricao');
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoDeInscricaoController::indexAction',  '_route' => 'periododeinscricao',);
            }

            // periododeinscricao_show
            if (preg_match('#^/periododeinscricao/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'periododeinscricao_show')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoDeInscricaoController::showAction',));
            }

            // periododeinscricao_new
            if ($pathinfo === '/periododeinscricao/new') {
                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoDeInscricaoController::newAction',  '_route' => 'periododeinscricao_new',);
            }

            // periododeinscricao_create
            if ($pathinfo === '/periododeinscricao/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_periododeinscricao_create;
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoDeInscricaoController::createAction',  '_route' => 'periododeinscricao_create',);
            }
            not_periododeinscricao_create:

            // periododeinscricao_edit
            if (preg_match('#^/periododeinscricao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'periododeinscricao_edit')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoDeInscricaoController::editAction',));
            }

            // periododeinscricao_update
            if (preg_match('#^/periododeinscricao/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_periododeinscricao_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'periododeinscricao_update')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoDeInscricaoController::updateAction',));
            }
            not_periododeinscricao_update:

            // periododeinscricao_delete
            if (preg_match('#^/periododeinscricao/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_periododeinscricao_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'periododeinscricao_delete')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoDeInscricaoController::deleteAction',));
            }
            not_periododeinscricao_delete:

        }

        if (0 === strpos($pathinfo, '/metododepagamento')) {
            // metododepagamento
            if (rtrim($pathinfo, '/') === '/metododepagamento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'metododepagamento');
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\MetodoDePagamentoController::indexAction',  '_route' => 'metododepagamento',);
            }

            // metododepagamento_show
            if (preg_match('#^/metododepagamento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'metododepagamento_show')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\MetodoDePagamentoController::showAction',));
            }

            // metododepagamento_new
            if (0 === strpos($pathinfo, '/metododepagamento/new') && preg_match('#^/metododepagamento/new/(?P<evento_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'metododepagamento_new')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\MetodoDePagamentoController::newAction',));
            }

            // metododepagamento_create
            if ($pathinfo === '/metododepagamento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_metododepagamento_create;
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\MetodoDePagamentoController::createAction',  '_route' => 'metododepagamento_create',);
            }
            not_metododepagamento_create:

            // metododepagamento_edit
            if (preg_match('#^/metododepagamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'metododepagamento_edit')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\MetodoDePagamentoController::editAction',));
            }

            // metododepagamento_update
            if (preg_match('#^/metododepagamento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_metododepagamento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'metododepagamento_update')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\MetodoDePagamentoController::updateAction',));
            }
            not_metododepagamento_update:

            // metododepagamento_delete
            if (preg_match('#^/metododepagamento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_metododepagamento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'metododepagamento_delete')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\MetodoDePagamentoController::deleteAction',));
            }
            not_metododepagamento_delete:

        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // categoria
            if (rtrim($pathinfo, '/') === '/categoria') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categoria');
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\CategoriaController::indexAction',  '_route' => 'categoria',);
            }

            // categoria_show
            if (preg_match('#^/categoria/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\CategoriaController::showAction',));
            }

            // categoria_new
            if (0 === strpos($pathinfo, '/categoria/new') && preg_match('#^/categoria/new/(?P<evento_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_new')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\CategoriaController::newAction',));
            }

            // categoria_adicionarMaisCategorias
            if (0 === strpos($pathinfo, '/categoria/adicionarMaisCategorias') && preg_match('#^/categoria/adicionarMaisCategorias/(?P<evento_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categoria_adicionarMaisCategorias;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_adicionarMaisCategorias')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\CategoriaController::adicionarMaisCategoriasAction',));
            }
            not_categoria_adicionarMaisCategorias:

            // categoria_PersisteEProximo
            if (0 === strpos($pathinfo, '/categoria/PersisteEProximo') && preg_match('#^/categoria/PersisteEProximo/(?P<evento_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categoria_PersisteEProximo;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_PersisteEProximo')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\CategoriaController::PersisteEProximoAction',));
            }
            not_categoria_PersisteEProximo:

            // categoria_create
            if ($pathinfo === '/categoria/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categoria_create;
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\CategoriaController::createAction',  '_route' => 'categoria_create',);
            }
            not_categoria_create:

            // categoria_edit
            if (preg_match('#^/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\CategoriaController::editAction',));
            }

            // categoria_update
            if (preg_match('#^/categoria/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categoria_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_update')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\CategoriaController::updateAction',));
            }
            not_categoria_update:

            // categoria_delete
            if (preg_match('#^/categoria/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categoria_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\CategoriaController::deleteAction',));
            }
            not_categoria_delete:

        }

        if (0 === strpos($pathinfo, '/acompanhantes')) {
            // acompanhantes
            if (rtrim($pathinfo, '/') === '/acompanhantes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acompanhantes');
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\AcompanhantesController::indexAction',  '_route' => 'acompanhantes',);
            }

            // acompanhantes_show
            if (preg_match('#^/acompanhantes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acompanhantes_show')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\AcompanhantesController::showAction',));
            }

            // acompanhantes_new
            if ($pathinfo === '/acompanhantes/new') {
                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\AcompanhantesController::newAction',  '_route' => 'acompanhantes_new',);
            }

            // acompanhantes_create
            if ($pathinfo === '/acompanhantes/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_acompanhantes_create;
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\AcompanhantesController::createAction',  '_route' => 'acompanhantes_create',);
            }
            not_acompanhantes_create:

            // acompanhantes_edit
            if (preg_match('#^/acompanhantes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acompanhantes_edit')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\AcompanhantesController::editAction',));
            }

            // acompanhantes_update
            if (preg_match('#^/acompanhantes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_acompanhantes_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acompanhantes_update')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\AcompanhantesController::updateAction',));
            }
            not_acompanhantes_update:

            // acompanhantes_delete
            if (preg_match('#^/acompanhantes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_acompanhantes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acompanhantes_delete')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\AcompanhantesController::deleteAction',));
            }
            not_acompanhantes_delete:

        }

        if (0 === strpos($pathinfo, '/regra')) {
            // regra
            if (rtrim($pathinfo, '/') === '/regra') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'regra');
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\RegraController::indexAction',  '_route' => 'regra',);
            }

            // regra_show
            if (preg_match('#^/regra/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'regra_show')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\RegraController::showAction',));
            }

            // regra_new
            if ($pathinfo === '/regra/new') {
                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\RegraController::newAction',  '_route' => 'regra_new',);
            }

            // regra_create
            if ($pathinfo === '/regra/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_regra_create;
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\RegraController::createAction',  '_route' => 'regra_create',);
            }
            not_regra_create:

            // regra_edit
            if (preg_match('#^/regra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'regra_edit')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\RegraController::editAction',));
            }

            // regra_update
            if (preg_match('#^/regra/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_regra_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'regra_update')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\RegraController::updateAction',));
            }
            not_regra_update:

            // regra_delete
            if (preg_match('#^/regra/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_regra_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'regra_delete')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\RegraController::deleteAction',));
            }
            not_regra_delete:

        }

        if (0 === strpos($pathinfo, '/periodo')) {
            // periodo
            if (rtrim($pathinfo, '/') === '/periodo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'periodo');
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoController::indexAction',  '_route' => 'periodo',);
            }

            // periodo_show
            if (preg_match('#^/periodo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodo_show')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoController::showAction',));
            }

            // periodo_new
            if ($pathinfo === '/periodo/new') {
                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoController::newAction',  '_route' => 'periodo_new',);
            }

            // periodo_create
            if ($pathinfo === '/periodo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_periodo_create;
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoController::createAction',  '_route' => 'periodo_create',);
            }
            not_periodo_create:

            // periodo_edit
            if (preg_match('#^/periodo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodo_edit')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoController::editAction',));
            }

            // periodo_update
            if (preg_match('#^/periodo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_periodo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodo_update')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoController::updateAction',));
            }
            not_periodo_update:

            // periodo_delete
            if (preg_match('#^/periodo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_periodo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodo_delete')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\PeriodoController::deleteAction',));
            }
            not_periodo_delete:

        }

        if (0 === strpos($pathinfo, '/evento')) {
            // evento
            if (rtrim($pathinfo, '/') === '/evento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'evento');
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\EventoController::indexAction',  '_route' => 'evento',);
            }

            // evento_show
            if (preg_match('#^/evento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_show')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\EventoController::showAction',));
            }

            // evento_new
            if ($pathinfo === '/evento/new') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_evento_new;
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\EventoController::newAction',  '_route' => 'evento_new',);
            }
            not_evento_new:

            // evento_create
            if ($pathinfo === '/evento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_evento_create;
                }

                return array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\EventoController::createAction',  '_route' => 'evento_create',);
            }
            not_evento_create:

            // evento_edit
            if (preg_match('#^/evento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_edit')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\EventoController::editAction',));
            }

            // evento_update
            if (preg_match('#^/evento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_evento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_update')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\EventoController::updateAction',));
            }
            not_evento_update:

            // evento_delete
            if (preg_match('#^/evento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_evento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_delete')), array (  '_controller' => 'EventWeb\\EventFormBundle\\Controller\\EventoController::deleteAction',));
            }
            not_evento_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
