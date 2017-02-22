<?php

/* BOOccasionBundle::layout.html.twig */
class __TwigTemplate_a8106e858a89efb0c06b20fd5277e0fd543fa270af30cc2a682a196eda0a8074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "BOOccasionBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'bodyoccasion' => array($this, 'block_bodyoccasion'),
            'footer' => array($this, 'block_footer'),
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | 
";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "        <div class=\"main-banner banner text-center\">
            <div class=\"container\">
                <h1>Vendre, Acheter ou Echanger
                    <span class=\"segment-heading\"> sur </span> BonneOccasion</h1>
                <p>La manière la plus facile pour la vente, l'achat et l'échange des
                    biens d'occasion</p>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_add");
        echo "\">Publier gratuitement une annonce</a>
            </div>
        </div>
    
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('bodyoccasion', $context, $blocks);
        // line 26
        echo "    
";
    }

    // line 24
    public function block_bodyoccasion($context, array $blocks = array())
    {
        // line 25
        echo "        
    ";
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        echo "    
        
        <div class=\"footer-top\">
            <div class=\"container\">
                    <div class=\"foo-grids\">
                            <div class=\"col-md-3 footer-grid\">
                                    <h4 class=\"footer-head\">Qui sommes nous</h4>
                                    <p>Le site est créer dans le cadre d'un projet de fin d'étude de mastere commerce électronique.</p>
                                    <p>Ecole superieure de commerce de Sfax, Tunisie.</p>
                            </div>
                            <div class=\"col-md-3 footer-grid\">
                                    <h4 class=\"footer-head\">Aide</h4>
                                    <ul>
                                            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_howitworks");
        echo "\">Comment ça fonctionne</a></li>\t\t\t\t\t\t
                                            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_mobileapp");
        echo "\">Mobile</a></li>
                                            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_feedback");
        echo "\">Votre avis</a></li>
                                            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_contact");
        echo "\">Contact</a></li>
                                    </ul>
                            </div>
                            <div class=\"col-md-3 footer-grid\">
                                    <h4 class=\"footer-head\">Information</h4>
                                    <ul>
                                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_error");
        echo "\">Plan du site</a></li>\t
                                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_terms");
        echo "\">Conditions d'utilisation</a></li>
                                            <li><a href=\"popular-search.html\">Recherche fréquente</a></li>\t
                                            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_privacy");
        echo "\">Politique de confidentialité</a></li>\t
                                    </ul>
                            </div>
                            <div class=\"col-md-3 footer-grid\">
                                    <h4 class=\"footer-head\">Nous contacter</h4>
                                    <span class=\"hq\">Notre siège</span>
                                    <address>
                                            <ul class=\"location\">
                                                    <li><span class=\"glyphicon glyphicon-map-marker\"></span></li>
                                                    <li>CENTRE D'ASSISTANCE</li>
                                                    <div class=\"clearfix\"></div>
                                            </ul>\t
                                            <ul class=\"location\">
                                                    <li><span class=\"glyphicon glyphicon-earphone\"></span></li>
                                                    <li>+216 ********</li>
                                                    <div class=\"clearfix\"></div>
                                            </ul>\t
                                            <ul class=\"location\">
                                                    <li><span class=\"glyphicon glyphicon-envelope\"></span></li>
                                                    <li><a href=\"mailto:info@example.com\">mail@example.com</a></li>
                                                    <div class=\"clearfix\"></div>
                                            </ul>\t\t\t\t\t\t
                                    </address>
                            </div>
                            <div class=\"clearfix\"></div>
                    </div>\t\t\t\t\t\t
            </div>\t
\t</div>\t
";
    }

    // line 82
    public function block_icon($context, array $blocks = array())
    {
        // line 83
        echo "        <div class=\"footer-logo\">
                <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_home");
        echo "\"><span>Bonne</span>Occasion</a>
        </div>
        <div class=\"footer-social-icons\">
                <ul>
                        <li><a class=\"facebook\" href=\"#\"><span>Facebook</span></a></li>
                        <li><a class=\"twitter\" href=\"#\"><span>Twitter</span></a></li>
                        <li><a class=\"flickr\" href=\"#\"><span>Flickr</span></a></li>
                        <li><a class=\"googleplus\" href=\"#\"><span>Google+</span></a></li>
                        <li><a class=\"dribbble\" href=\"#\"><span>Dribbble</span></a></li>
                </ul>
        </div>
";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 84,  167 => 83,  164 => 82,  131 => 53,  126 => 51,  122 => 50,  113 => 44,  109 => 43,  105 => 42,  101 => 41,  84 => 28,  79 => 25,  76 => 24,  71 => 26,  69 => 24,  66 => 23,  63 => 22,  54 => 15,  46 => 9,  43 => 8,  36 => 5,  33 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle::layout.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/layout.html.twig");
    }
}
