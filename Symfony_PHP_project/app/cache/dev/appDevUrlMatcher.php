<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        // _assetic_f7a7b5e
        if ($pathinfo === '/images/f7a7b5e') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f7a7b5e',  'pos' => NULL,  '_route' => '_assetic_f7a7b5e',);
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

        // ip_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ip_homepage')), array (  '_controller' => 'IPBundle\\Controller\\DefaultController::indexAction',));
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'IPBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // addNoteEleve
        if (0 === strpos($pathinfo, '/addNoteEleve') && preg_match('#^/addNoteEleve/(?P<valeur>[^/]++)/(?P<cours>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addNoteEleve')), array (  '_controller' => 'IPBundle\\Controller\\DatabaseController::addNoteEleveAction',));
        }

        if (0 === strpos($pathinfo, '/show')) {
            // showAllEleve
            if ($pathinfo === '/showAllEleve') {
                return array (  '_controller' => 'IPBundle\\Controller\\DatabaseController::showAllEleveAction',  '_route' => 'showAllEleve',);
            }

            if (0 === strpos($pathinfo, '/showNotes')) {
                // showNotesEleve
                if (0 === strpos($pathinfo, '/showNotesEleve') && preg_match('#^/showNotesEleve/(?P<prenom>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showNotesEleve')), array (  '_controller' => 'IPBundle\\Controller\\DatabaseController::showNotesEleveAction',));
                }

                // showNotesCours
                if (0 === strpos($pathinfo, '/showNotesCours') && preg_match('#^/showNotesCours/(?P<cours>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showNotesCours')), array (  '_controller' => 'IPBundle\\Controller\\DatabaseController::showNotesCoursAction',));
                }

            }

            // showListeCours
            if ($pathinfo === '/showListeCours') {
                return array (  '_controller' => 'IPBundle\\Controller\\DatabaseController::showListeCoursAction',  '_route' => 'showListeCours',);
            }

        }

        // newEleve
        if ($pathinfo === '/newEleve') {
            return array (  '_controller' => 'IPBundle\\Controller\\CreateController::newEleveAction',  '_route' => 'newEleve',);
        }

        if (0 === strpos($pathinfo, '/exo')) {
            // exoMask
            if ($pathinfo === '/exoMask') {
                return array (  '_controller' => 'IPBundle\\Controller\\ExoController::exoMaskAction',  '_route' => 'exoMask',);
            }

            // exoClass
            if ($pathinfo === '/exoClass') {
                return array (  '_controller' => 'IPBundle\\Controller\\ExoController::exoClassAction',  '_route' => 'exoClass',);
            }

        }

        // giveMask
        if (0 === strpos($pathinfo, '/giveMask') && preg_match('#^/giveMask/(?P<ipBytes>[^/]++)/(?P<nbSubNet>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'giveMask')), array (  '_controller' => 'IPBundle\\Controller\\DefaultController::giveMaskAction',));
        }

        // routingTable
        if ($pathinfo === '/routingTable') {
            return array (  '_controller' => 'IPBundle\\Controller\\ExoController::routingTableAction',  '_route' => 'routingTable',);
        }

        // login_route
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'IPBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_route',);
        }

        if (0 === strpos($pathinfo, '/newC')) {
            // newCours
            if ($pathinfo === '/newCours') {
                return array (  '_controller' => 'IPBundle\\Controller\\CreateController::newCoursAction',  '_route' => 'newCours',);
            }

            // newChapitre
            if ($pathinfo === '/newChapitre') {
                return array (  '_controller' => 'IPBundle\\Controller\\CreateController::newChapitreAction',  '_route' => 'newChapitre',);
            }

        }

        if (0 === strpos($pathinfo, '/show')) {
            // showCours
            if (0 === strpos($pathinfo, '/showCours') && preg_match('#^/showCours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showCours')), array (  '_controller' => 'IPBundle\\Controller\\DefaultController::showCoursAction',));
            }

            // showAllCours
            if ($pathinfo === '/showAllCours') {
                return array (  '_controller' => 'IPBundle\\Controller\\DefaultController::showAllCoursAction',  '_route' => 'showAllCours',);
            }

        }

        // exercises
        if ($pathinfo === '/exercises') {
            return array (  '_controller' => 'IPBundle\\Controller\\DefaultController::exercisesAction',  '_route' => 'exercises',);
        }

        // convert
        if ($pathinfo === '/convert') {
            return array (  '_controller' => 'IPBundle\\Controller\\ExoController::convertAction',  '_route' => 'convert',);
        }

        if (0 === strpos($pathinfo, '/progression')) {
            // progression
            if ($pathinfo === '/progression') {
                return array (  '_controller' => 'IPBundle\\Controller\\DefaultController::progressionAction',  '_route' => 'progression',);
            }

            // progressionCours
            if (0 === strpos($pathinfo, '/progressionCours') && preg_match('#^/progressionCours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'progressionCours')), array (  '_controller' => 'IPBundle\\Controller\\DefaultController::progressionCoursAction',));
            }

        }

        // showChapitre
        if (0 === strpos($pathinfo, '/showChapitre') && preg_match('#^/showChapitre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showChapitre')), array (  '_controller' => 'IPBundle\\Controller\\DefaultController::showChapitreAction',));
        }

        // recupNotes
        if ($pathinfo === '/recupNotes') {
            return array (  '_controller' => 'IPBundle\\Controller\\DatabaseController::recupNotesAction',  '_route' => 'recupNotes',);
        }

        // compte
        if ($pathinfo === '/compte') {
            return array (  '_controller' => 'IPBundle\\Controller\\DefaultController::compteAction',  '_route' => 'compte',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
