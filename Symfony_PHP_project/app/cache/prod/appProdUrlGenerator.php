<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'ip_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addNoteEleve' => array (  0 =>   array (    0 => 'valeur',    1 => 'cours',  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DatabaseController::addNoteEleveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cours',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'valeur',    ),    2 =>     array (      0 => 'text',      1 => '/addNoteEleve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showAllEleve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DatabaseController::showAllEleveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showAllEleve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showNotesEleve' => array (  0 =>   array (    0 => 'prenom',  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DatabaseController::showNotesEleveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prenom',    ),    1 =>     array (      0 => 'text',      1 => '/showNotesEleve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showNotesCours' => array (  0 =>   array (    0 => 'cours',  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DatabaseController::showNotesCoursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cours',    ),    1 =>     array (      0 => 'text',      1 => '/showNotesCours',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showListeCours' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DatabaseController::showListeCoursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showListeCours',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newEleve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\CreateController::newEleveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newEleve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'exoMask' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\ExoController::exoMaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exoMask',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'exoClass' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\ExoController::exoClassAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exoClass',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'giveMask' => array (  0 =>   array (    0 => 'ipBytes',    1 => 'nbSubNet',  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::giveMaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nbSubNet',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ipBytes',    ),    2 =>     array (      0 => 'text',      1 => '/giveMask',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'routingTable' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\ExoController::routingTableAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/routingTable',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_route' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newCours' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\CreateController::newCoursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newCours',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newChapitre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\CreateController::newChapitreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newChapitre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showCours' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::showCoursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/showCours',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showAllCours' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::showAllCoursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showAllCours',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'exercises' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::exercisesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exercises',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\ExoController::convertAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/convert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'progression' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::progressionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/progression',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'progressionCours' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::progressionCoursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/progressionCours',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'progressionEleves' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::progressionElevesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/progressionEleves',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'progressionEleve' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::progressionEleveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/progressionEleve\\',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showChapitre' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::showChapitreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/showChapitre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recupNotes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DatabaseController::recupNotesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recupNotes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'compte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IPBundle\\Controller\\DefaultController::compteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/compte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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