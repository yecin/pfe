<?php

/* BOOccasionBundle::layout.html.twig */
class __TwigTemplate_bcbfc9f191e23f36059cd0b05efd354af1d4f9d124d83af7e3dcdc859614b5c1 extends Twig_Template
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
        $__internal_7b29ce8920f9b1f79e737b50e847b1d5324f211a2027c0359a3a191e44ec967c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b29ce8920f9b1f79e737b50e847b1d5324f211a2027c0359a3a191e44ec967c->enter($__internal_7b29ce8920f9b1f79e737b50e847b1d5324f211a2027c0359a3a191e44ec967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BOOccasionBundle::layout.html.twig"));

        $__internal_e9ee007fa5a606902773dddb70cd9eb8f13e68eeacfeaa1a9d0539f5877318a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ee007fa5a606902773dddb70cd9eb8f13e68eeacfeaa1a9d0539f5877318a8->enter($__internal_e9ee007fa5a606902773dddb70cd9eb8f13e68eeacfeaa1a9d0539f5877318a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BOOccasionBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b29ce8920f9b1f79e737b50e847b1d5324f211a2027c0359a3a191e44ec967c->leave($__internal_7b29ce8920f9b1f79e737b50e847b1d5324f211a2027c0359a3a191e44ec967c_prof);

        
        $__internal_e9ee007fa5a606902773dddb70cd9eb8f13e68eeacfeaa1a9d0539f5877318a8->leave($__internal_e9ee007fa5a606902773dddb70cd9eb8f13e68eeacfeaa1a9d0539f5877318a8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9fc6e4555380aa2e33f96bff650cff712e74d6735be3e390857c989151e0011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fc6e4555380aa2e33f96bff650cff712e74d6735be3e390857c989151e0011->enter($__internal_b9fc6e4555380aa2e33f96bff650cff712e74d6735be3e390857c989151e0011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d8d06a373fed2eb89ad064442137b06b87f868b467961ab21460c16e1640816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8d06a373fed2eb89ad064442137b06b87f868b467961ab21460c16e1640816->enter($__internal_2d8d06a373fed2eb89ad064442137b06b87f868b467961ab21460c16e1640816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | 
";
        
        $__internal_2d8d06a373fed2eb89ad064442137b06b87f868b467961ab21460c16e1640816->leave($__internal_2d8d06a373fed2eb89ad064442137b06b87f868b467961ab21460c16e1640816_prof);

        
        $__internal_b9fc6e4555380aa2e33f96bff650cff712e74d6735be3e390857c989151e0011->leave($__internal_b9fc6e4555380aa2e33f96bff650cff712e74d6735be3e390857c989151e0011_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_0d853082497dfaede0699e4996a0f5ad801efa36f92ce727398a3eecf3a7182a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d853082497dfaede0699e4996a0f5ad801efa36f92ce727398a3eecf3a7182a->enter($__internal_0d853082497dfaede0699e4996a0f5ad801efa36f92ce727398a3eecf3a7182a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3bfd0db65d3c12ebdf9f2d5b0677fab6fde731174a5af83c17e8e448ad58ed9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfd0db65d3c12ebdf9f2d5b0677fab6fde731174a5af83c17e8e448ad58ed9c->enter($__internal_3bfd0db65d3c12ebdf9f2d5b0677fab6fde731174a5af83c17e8e448ad58ed9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_3bfd0db65d3c12ebdf9f2d5b0677fab6fde731174a5af83c17e8e448ad58ed9c->leave($__internal_3bfd0db65d3c12ebdf9f2d5b0677fab6fde731174a5af83c17e8e448ad58ed9c_prof);

        
        $__internal_0d853082497dfaede0699e4996a0f5ad801efa36f92ce727398a3eecf3a7182a->leave($__internal_0d853082497dfaede0699e4996a0f5ad801efa36f92ce727398a3eecf3a7182a_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_a27d592aea7b522910752a43d1237a5515728138692e7aeec4813ff02a625aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27d592aea7b522910752a43d1237a5515728138692e7aeec4813ff02a625aee->enter($__internal_a27d592aea7b522910752a43d1237a5515728138692e7aeec4813ff02a625aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f23624089b8e2a26ab9c2f71e7ad6354bb7903f901df224dc099f73966072f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23624089b8e2a26ab9c2f71e7ad6354bb7903f901df224dc099f73966072f4b->enter($__internal_f23624089b8e2a26ab9c2f71e7ad6354bb7903f901df224dc099f73966072f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('bodyoccasion', $context, $blocks);
        // line 26
        echo "    
";
        
        $__internal_f23624089b8e2a26ab9c2f71e7ad6354bb7903f901df224dc099f73966072f4b->leave($__internal_f23624089b8e2a26ab9c2f71e7ad6354bb7903f901df224dc099f73966072f4b_prof);

        
        $__internal_a27d592aea7b522910752a43d1237a5515728138692e7aeec4813ff02a625aee->leave($__internal_a27d592aea7b522910752a43d1237a5515728138692e7aeec4813ff02a625aee_prof);

    }

    // line 24
    public function block_bodyoccasion($context, array $blocks = array())
    {
        $__internal_4630ef3fc98686ba41eddf2417f24f84196c8b6de96a68ee18a62cc65ed19171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4630ef3fc98686ba41eddf2417f24f84196c8b6de96a68ee18a62cc65ed19171->enter($__internal_4630ef3fc98686ba41eddf2417f24f84196c8b6de96a68ee18a62cc65ed19171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyoccasion"));

        $__internal_7058d6a727eeb8353dab25388920a720cec893d5a0ec9061946881ac971e77d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7058d6a727eeb8353dab25388920a720cec893d5a0ec9061946881ac971e77d7->enter($__internal_7058d6a727eeb8353dab25388920a720cec893d5a0ec9061946881ac971e77d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyoccasion"));

        // line 25
        echo "        
    ";
        
        $__internal_7058d6a727eeb8353dab25388920a720cec893d5a0ec9061946881ac971e77d7->leave($__internal_7058d6a727eeb8353dab25388920a720cec893d5a0ec9061946881ac971e77d7_prof);

        
        $__internal_4630ef3fc98686ba41eddf2417f24f84196c8b6de96a68ee18a62cc65ed19171->leave($__internal_4630ef3fc98686ba41eddf2417f24f84196c8b6de96a68ee18a62cc65ed19171_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ba497ddbf4c0bd0b1de43f08bb18284b6e47e18eaf321d322a848b8586412cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba497ddbf4c0bd0b1de43f08bb18284b6e47e18eaf321d322a848b8586412cb3->enter($__internal_ba497ddbf4c0bd0b1de43f08bb18284b6e47e18eaf321d322a848b8586412cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_975f89ea50e43faee21ed0b99ad91f1d3d1328ef415a63ca469ebb694fc59545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975f89ea50e43faee21ed0b99ad91f1d3d1328ef415a63ca469ebb694fc59545->enter($__internal_975f89ea50e43faee21ed0b99ad91f1d3d1328ef415a63ca469ebb694fc59545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_975f89ea50e43faee21ed0b99ad91f1d3d1328ef415a63ca469ebb694fc59545->leave($__internal_975f89ea50e43faee21ed0b99ad91f1d3d1328ef415a63ca469ebb694fc59545_prof);

        
        $__internal_ba497ddbf4c0bd0b1de43f08bb18284b6e47e18eaf321d322a848b8586412cb3->leave($__internal_ba497ddbf4c0bd0b1de43f08bb18284b6e47e18eaf321d322a848b8586412cb3_prof);

    }

    // line 82
    public function block_icon($context, array $blocks = array())
    {
        $__internal_6db4e32aa22df6471f4b6f8c09477c7e193b65fd9e5a0d146bdb609d8ca19989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db4e32aa22df6471f4b6f8c09477c7e193b65fd9e5a0d146bdb609d8ca19989->enter($__internal_6db4e32aa22df6471f4b6f8c09477c7e193b65fd9e5a0d146bdb609d8ca19989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        $__internal_cb61b1a5e169f51eedf55d14432ccd854eb7a3f8bb9734843646e224ee9612a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb61b1a5e169f51eedf55d14432ccd854eb7a3f8bb9734843646e224ee9612a2->enter($__internal_cb61b1a5e169f51eedf55d14432ccd854eb7a3f8bb9734843646e224ee9612a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

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
        
        $__internal_cb61b1a5e169f51eedf55d14432ccd854eb7a3f8bb9734843646e224ee9612a2->leave($__internal_cb61b1a5e169f51eedf55d14432ccd854eb7a3f8bb9734843646e224ee9612a2_prof);

        
        $__internal_6db4e32aa22df6471f4b6f8c09477c7e193b65fd9e5a0d146bdb609d8ca19989->leave($__internal_6db4e32aa22df6471f4b6f8c09477c7e193b65fd9e5a0d146bdb609d8ca19989_prof);

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
        return array (  248 => 84,  245 => 83,  236 => 82,  197 => 53,  192 => 51,  188 => 50,  179 => 44,  175 => 43,  171 => 42,  167 => 41,  144 => 28,  133 => 25,  124 => 24,  113 => 26,  111 => 24,  108 => 23,  99 => 22,  84 => 15,  76 => 9,  67 => 8,  54 => 5,  45 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/bo/occasionbundle/Resources/views/layout.html.twig #}
{% extends \"::layout.html.twig\" %}

{% block title %}
   {{ parent() }} | 
{% endblock %}

{% block header %}
        <div class=\"main-banner banner text-center\">
            <div class=\"container\">
                <h1>Vendre, Acheter ou Echanger
                    <span class=\"segment-heading\"> sur </span> BonneOccasion</h1>
                <p>La manière la plus facile pour la vente, l'achat et l'échange des
                    biens d'occasion</p>
                <a href=\"{{ path('bo_occasion_add') }}\">Publier gratuitement une annonce</a>
            </div>
        </div>
    
{% endblock %}


{% block body %}

    {% block bodyoccasion %}
        
    {% endblock %}    
{% endblock %} 
{% block footer %}    
        
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
                                            <li><a href=\"{{ path('bo_occasion_howitworks') }}\">Comment ça fonctionne</a></li>\t\t\t\t\t\t
                                            <li><a href=\"{{ path('bo_occasion_mobileapp') }}\">Mobile</a></li>
                                            <li><a href=\"{{ path('bo_occasion_feedback') }}\">Votre avis</a></li>
                                            <li><a href=\"{{ path('bo_occasion_contact') }}\">Contact</a></li>
                                    </ul>
                            </div>
                            <div class=\"col-md-3 footer-grid\">
                                    <h4 class=\"footer-head\">Information</h4>
                                    <ul>
                                            <li><a href=\"{{ path('bo_occasion_error') }}\">Plan du site</a></li>\t
                                            <li><a href=\"{{ path('bo_occasion_terms') }}\">Conditions d'utilisation</a></li>
                                            <li><a href=\"popular-search.html\">Recherche fréquente</a></li>\t
                                            <li><a href=\"{{ path('bo_occasion_privacy') }}\">Politique de confidentialité</a></li>\t
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
{% endblock %}
{% block icon %}
        <div class=\"footer-logo\">
                <a href=\"{{ path('bo_occasion_home') }}\"><span>Bonne</span>Occasion</a>
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
{% endblock %}
        
", "BOOccasionBundle::layout.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/layout.html.twig");
    }
}
