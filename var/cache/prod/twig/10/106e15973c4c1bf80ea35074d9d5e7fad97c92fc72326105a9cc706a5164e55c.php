<?php

/* BOOccasionBundle:Advert:mobileapp.html.twig */
class __TwigTemplate_7ef05e682f8146eedcc26a54c790bc1b0a3a797b6635a58cca8c25aab1894671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BOOccasionBundle::layout.html.twig", "BOOccasionBundle:Advert:mobileapp.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'bodyoccasion' => array($this, 'block_bodyoccasion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BOOccasionBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
    Application Mobile
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "

    
";
    }

    // line 14
    public function block_bodyoccasion($context, array $blocks = array())
    {
        // line 15
        echo "

<!-- Terms of use -->
<div class=\"mobilaapp main-grid-border\">
        <div class=\"container\">
                <div class=\"app\">
                        <div class=\"col-md-5 app-left mpl\">
                                <h2>L'application BonneOccasion mobile sur votre smartphone!</h2>
                                <p>Acheter, Revendre et échanger vos articles d'occasion rapidement et facilement directement depuis votre téléphone.</p>
                                <div class=\"app-devices\">
                                        <h5>Obtenir l'application de</h5>
                                        <a href=\"#\">
                                            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/booccasion/images/1.png"), "html", null, true);
        echo "\" alt=\"google play\">
                                        </a>
                                        <a href=\"#\">
                                            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/booccasion/images/2.png"), "html", null, true);
        echo "\" alt=\"app store\">
                                        </a>
                                        <div class=\"clearfix\"> </div>
                                </div>
                        </div>
                        <div class=\"col-md-7 app-image\">
                                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/booccasion/images/mob2.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"clearfix\"></div>
                </div>
        </div>
        <div class=\"app-bottom-grids text-center\">
                <div class=\"container\">
                        <div class=\"col-md-3 app-bottom-grid\">
                                <i class=\"fa fa-search\"></i>
                                <h3>Rechercher</h3>
                                <p>Vous êtes à la recherche d’un article d'occasion ?</p>
                        </div>
                        <div class=\"col-md-3 app-bottom-grid\">
                                <i class=\"fa fa-bell-o\"></i>
                                <h3>Notifications</h3>
                                <p> Les nouvelles annonces parues depuis la mise en place des alertes.</p>
                        </div>
                        <div class=\"col-md-3 app-bottom-grid\">
                                <i class=\"fa fa-plus\"></i>
                                <h3>Publier</h3>
                                <p>Déposer gratuitement vos petites annonces dans plusieurs catégories</p>
                        </div>
                        <div class=\"col-md-3 app-bottom-grid\">
                                <i class=\"fa fa-question\"></i>
                                <h3>Répondre</h3>
                                <p>Poser les bonnes questions au annonceur </p>
                        </div>
                        <div class=\"clearfix\"> </div>
                </div>
        </div>\t
</div>
<!-- // Terms of use -->
    

";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:mobileapp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 36,  76 => 30,  70 => 27,  56 => 15,  53 => 14,  44 => 8,  41 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:mobileapp.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/mobileapp.html.twig");
    }
}
