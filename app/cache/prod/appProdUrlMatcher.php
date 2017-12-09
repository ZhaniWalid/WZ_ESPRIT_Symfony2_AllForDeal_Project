<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/hello')) {
            // pidev_all_for_deal_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_homepage')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\DefaultController::indexAction',));
            }

            // pidev_all_for_deal_home
            if ($pathinfo === '/hello') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AcceuilController::HelloAction',  '_route' => 'pidev_all_for_deal_home',);
            }

            // pidev_all_for_deal_homeUserConnected
            if ($pathinfo === '/helloConnectedUser') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\LoginUserController::HomeUserConnectedAction',  '_route' => 'pidev_all_for_deal_homeUserConnected',);
            }

            // pidev_all_for_deal_logoutUser
            if ($pathinfo === '/helloApresLogoutUser') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\LoginUserController::logoutUserAction',  '_route' => 'pidev_all_for_deal_logoutUser',);
            }

        }

        // pidev_all_for_deal_InscriptionUser
        if ($pathinfo === '/Inscription') {
            return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\InscriptionUserController::InscriptionAction',  '_route' => 'pidev_all_for_deal_InscriptionUser',);
        }

        // pidev_all_for_deal_LoginUser
        if ($pathinfo === '/Login') {
            return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\LoginUserController::ConnectRechercheAction',  '_route' => 'pidev_all_for_deal_LoginUser',);
        }

        // pidev_all_for_deal_AfterLogin
        if ($pathinfo === '/AfterLogin') {
            return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\LoginUserController::afterLoginAction',  '_route' => 'pidev_all_for_deal_AfterLogin',);
        }

        if (0 === strpos($pathinfo, '/CompteUser')) {
            // pidev_all_for_deal_AccesCompteUser
            if (preg_match('#^/CompteUser/(?P<login>[^/,]++),(?P<pwd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_AccesCompteUser')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\LoginUserController::VersCompteUserAction',));
            }

            // pidev_all_for_deal_AccesCompteUserTest
            if ($pathinfo === '/CompteUser') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\LoginUserController::VersCompteUser2Action',  '_route' => 'pidev_all_for_deal_AccesCompteUserTest',);
            }

            // pidev_all_for_deal_RedirectToCompteUserAfterBeingConnected
            if ($pathinfo === '/CompteUserAfterConnect') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\LoginUserController::VersCompteUserAfterConnectAction',  '_route' => 'pidev_all_for_deal_RedirectToCompteUserAfterBeingConnected',);
            }

        }

        // pidev_all_for_deal_UpdateUserCompte
        if (0 === strpos($pathinfo, '/UpdateCompteUser') && preg_match('#^/UpdateCompteUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_UpdateUserCompte')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\LoginUserController::UserUpdateCompteAction',));
        }

        if (0 === strpos($pathinfo, '/ContactUs')) {
            // pidev_all_for_deal_UserContactUs
            if ($pathinfo === '/ContactUs') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\MailerUserController::UserContactUsAction',  '_route' => 'pidev_all_for_deal_UserContactUs',);
            }

            // pidev_all_for_deal_ConnectedUserContactUs
            if ($pathinfo === '/ContactUsUserConnected') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\MailerUserController::ConnectedUserContactUsAction',  '_route' => 'pidev_all_for_deal_ConnectedUserContactUs',);
            }

        }

        // pidev_all_for_deal_ActionContact
        if ($pathinfo === '/actionContact') {
            return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\MailerUserController::contactAction',  '_route' => 'pidev_all_for_deal_ActionContact',);
        }

        // pidev_all_for_deal_ActionContactUserNonConnected
        if ($pathinfo === '/ContactActionUserNonConnected') {
            return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\MailerUserController::contactUsUserNonConnectedAction',  '_route' => 'pidev_all_for_deal_ActionContactUserNonConnected',);
        }

        if (0 === strpos($pathinfo, '/loginAdmin')) {
            // pidev_all_for_deal_LoginAdmin
            if ($pathinfo === '/loginAdmin') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::AcceuiLoginAdminAction',  '_route' => 'pidev_all_for_deal_LoginAdmin',);
            }

            // pidev_all_for_deal_LogoutAdmin2
            if ($pathinfo === '/loginAdmin2') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::logoutAdminAction',  '_route' => 'pidev_all_for_deal_LogoutAdmin2',);
            }

        }

        if (0 === strpos($pathinfo, '/EspaceAdmin')) {
            // pidev_all_for_deal_EspaceAdmin
            if ($pathinfo === '/EspaceAdmin') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::ApresLoginEspaceAmdinAction',  '_route' => 'pidev_all_for_deal_EspaceAdmin',);
            }

            // pidev_all_for_deal_EspaceAdmin2
            if ($pathinfo === '/EspaceAdmin2') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::ApresLoginEspaceAmdinAction',  '_route' => 'pidev_all_for_deal_EspaceAdmin2',);
            }

        }

        if (0 === strpos($pathinfo, '/A')) {
            if (0 === strpos($pathinfo, '/AllListUsers')) {
                // pidev_all_for_deal_EspaceAdminAllListUser
                if ($pathinfo === '/AllListUsers') {
                    return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::ListUsersAllAction',  '_route' => 'pidev_all_for_deal_EspaceAdminAllListUser',);
                }

                // pidev_all_for_deal_EspaceAdminAllListUser2
                if ($pathinfo === '/AllListUsers2') {
                    return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::ListUsersAllAction',  '_route' => 'pidev_all_for_deal_EspaceAdminAllListUser2',);
                }

                if (0 === strpos($pathinfo, '/AllListUsersEditable')) {
                    // pidev_all_for_deal_EditableEspaceAdminAllListUser
                    if ($pathinfo === '/AllListUsersEditable') {
                        return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::ListEditableUsersAllAction',  '_route' => 'pidev_all_for_deal_EditableEspaceAdminAllListUser',);
                    }

                    // pidev_all_for_deal_EditableEspaceAdminAllListUser2
                    if ($pathinfo === '/AllListUsersEditable2') {
                        return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::ListEditableUsersAllAction',  '_route' => 'pidev_all_for_deal_EditableEspaceAdminAllListUser2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/AcceuilAdminEspace')) {
                // pidev_all_for_deal_EspaceAdminAcceuil
                if ($pathinfo === '/AcceuilAdminEspace') {
                    return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::AcceuilEspaceAdminAction',  '_route' => 'pidev_all_for_deal_EspaceAdminAcceuil',);
                }

                // pidev_all_for_deal_EspaceAdminAcceuil2
                if ($pathinfo === '/AcceuilAdminEspace2') {
                    return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::AcceuilEspaceAdminAction',  '_route' => 'pidev_all_for_deal_EspaceAdminAcceuil2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/SupprimerUser')) {
            // pidev_all_for_deal_EspaceAdminDeleteUser
            if (preg_match('#^/SupprimerUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_EspaceAdminDeleteUser')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::SupprimerUserAction',));
            }

            // pidev_all_for_deal_EspaceAdminDeleteUser2
            if (0 === strpos($pathinfo, '/SupprimerUser2') && preg_match('#^/SupprimerUser2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_EspaceAdminDeleteUser2')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::SupprimerUserAction',));
            }

        }

        if (0 === strpos($pathinfo, '/ViewProfileUser')) {
            // pidev_all_for_deal_EspaceAdminViewProfileUser
            if (preg_match('#^/ViewProfileUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_EspaceAdminViewProfileUser')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::AdminProfilUserAction',));
            }

            // pidev_all_for_deal_EspaceAdminViewProfileUser2
            if (0 === strpos($pathinfo, '/ViewProfileUser2') && preg_match('#^/ViewProfileUser2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_EspaceAdminViewProfileUser2')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::AdminProfilUserAction',));
            }

        }

        if (0 === strpos($pathinfo, '/BloquerUser')) {
            // pidev_all_for_deal_EspaceAdminBloquerUser
            if (preg_match('#^/BloquerUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_EspaceAdminBloquerUser')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::BloquerUserAction',));
            }

            // pidev_all_for_deal_EspaceAdminBloquerUser2
            if (0 === strpos($pathinfo, '/BloquerUser2') && preg_match('#^/BloquerUser2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_EspaceAdminBloquerUser2')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::BloquerUserAction',));
            }

        }

        if (0 === strpos($pathinfo, '/DebloquerUser')) {
            // pidev_all_for_deal_EspaceAdminDebloquerUser
            if (preg_match('#^/DebloquerUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_EspaceAdminDebloquerUser')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::DebloquerUserAction',));
            }

            // pidev_all_for_deal_EspaceAdminDebloquerUser2
            if (0 === strpos($pathinfo, '/DebloquerUser2') && preg_match('#^/DebloquerUser2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_EspaceAdminDebloquerUser2')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::DebloquerUserAction',));
            }

        }

        if (0 === strpos($pathinfo, '/ListeUsersBloques')) {
            // pidev_all_for_deal_EspaceAdminListeUsersBloques
            if ($pathinfo === '/ListeUsersBloques') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::listeUserBloquesAction',  '_route' => 'pidev_all_for_deal_EspaceAdminListeUsersBloques',);
            }

            // pidev_all_for_deal_EspaceAdminListeUsersBloques2
            if ($pathinfo === '/ListeUsersBloques2') {
                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::listeUserBloquesAction',  '_route' => 'pidev_all_for_deal_EspaceAdminListeUsersBloques2',);
            }

        }

        if (0 === strpos($pathinfo, '/CompteAdmin')) {
            // pidev_all_for_deal_AccesAdminCompte
            if (preg_match('#^/CompteAdmin/(?P<login>[^/,]++),(?P<pwd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_AccesAdminCompte')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::AdminProfileAction',));
            }

            if (0 === strpos($pathinfo, '/CompteAdmin2')) {
                // pidev_all_for_deal_AccesAdminCompte2
                if (preg_match('#^/CompteAdmin2/(?P<login>[^/,]++),(?P<pwd>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_AccesAdminCompte2')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::AdminProfileAction',));
                }

                // pidev_all_for_deal_AccesAdminCompteTest2
                if ($pathinfo === '/CompteAdmin2') {
                    return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::AdminProfile2Action',  '_route' => 'pidev_all_for_deal_AccesAdminCompteTest2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/UpdateAdminCompte')) {
            // pidev_all_for_deal_UpdateCompteAdmin
            if (preg_match('#^/UpdateAdminCompte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_UpdateCompteAdmin')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminController::AdminUpdateCompteAction',));
            }

            // pidev_all_for_deal_UpdateCompteAdmin2
            if (0 === strpos($pathinfo, '/UpdateAdminCompte2') && preg_match('#^/UpdateAdminCompte2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_all_for_deal_UpdateCompteAdmin2')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::AdminUpdateCompteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/userSearching')) {
            // pidev_all_for_deal_Admin2SearchAllUsers
            if ($pathinfo === '/userSearching') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pidev_all_for_deal_Admin2SearchAllUsers;
                }

                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::DynamicSearchAllListUsersAction',  '_route' => 'pidev_all_for_deal_Admin2SearchAllUsers',);
            }
            not_pidev_all_for_deal_Admin2SearchAllUsers:

            // pidev_all_for_deal_Admin2SearchAllEditableUsers
            if ($pathinfo === '/userSearchingEdit') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pidev_all_for_deal_Admin2SearchAllEditableUsers;
                }

                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::DynamicSearchAllListEditableUsersAction',  '_route' => 'pidev_all_for_deal_Admin2SearchAllEditableUsers',);
            }
            not_pidev_all_for_deal_Admin2SearchAllEditableUsers:

            // pidev_all_for_deal_Admin2SearchAllBlockedUsers
            if ($pathinfo === '/userSearchingBlocked') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pidev_all_for_deal_Admin2SearchAllBlockedUsers;
                }

                return array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\AdminNewController::DynamicListBlockedUsersAction',  '_route' => 'pidev_all_for_deal_Admin2SearchAllBlockedUsers',);
            }
            not_pidev_all_for_deal_Admin2SearchAllBlockedUsers:

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/activateMail')) {
                // validate_mail_inscription
                if (preg_match('#^/activateMail/(?P<loginUser>[^/,]++),(?P<confirm_code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_mail_inscription')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\InscriptionUserController::activateAccountAction',));
                }

                // validate_mail_inscription_complete
                if (0 === strpos($pathinfo, '/activateMail_complete') && preg_match('#^/activateMail_complete/(?P<loginUser>[^/,]++),(?P<confirm_code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_mail_inscription_complete')), array (  '_controller' => 'Pidev\\AllForDealBundle\\Controller\\InscriptionUserController::activationAccountCompleteAction',));
                }

            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/newsletter')) {
            // usn_newsletter_subscribe
            if ($pathinfo === '/newsletter/subscribe') {
                return array (  '_controller' => 'Usn\\NewsletterBundle\\Controller\\DefaultController::subscribeAction',  '_route' => 'usn_newsletter_subscribe',);
            }

            // usn_newsletter_complete
            if ($pathinfo === '/newsletter/complete') {
                return array (  '_controller' => 'Usn\\NewsletterBundle\\Controller\\DefaultController::completeAction',  '_route' => 'usn_newsletter_complete',);
            }

            if (0 === strpos($pathinfo, '/newsletter/unsubscribe')) {
                // usn_newsletter_unsubscribe
                if (preg_match('#^/newsletter/unsubscribe/(?P<access_key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usn_newsletter_unsubscribe')), array (  '_controller' => 'Usn\\NewsletterBundle\\Controller\\DefaultController::unsubscribeAction',));
                }

                // usn_newsletter_unsubscribe_complete
                if (0 === strpos($pathinfo, '/newsletter/unsubscribe_complete') && preg_match('#^/newsletter/unsubscribe_complete/(?P<access_key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usn_newsletter_unsubscribe_complete')), array (  '_controller' => 'Usn\\NewsletterBundle\\Controller\\DefaultController::unsubscribeCompleteAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
