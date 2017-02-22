<?php

/* BOOccasionBundle:Advert:show.html.twig */
class __TwigTemplate_9d9a4b3ea0bdc1edecf360a00657c65db07531271bf2d53458f569aa57ba3c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BOOccasionBundle::layout.html.twig", "BOOccasionBundle:Advert:show.html.twig", 1);
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
    débarras
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

\t<!--single-page-->
\t<div class=\"single-page main-grid-border\">
\t\t<div class=\"container\">
\t\t\t<ol class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_home");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a href=\" ../";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ad"] ?? null), "category", array()), "name", array()), "html", null, true);
        echo " \"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ad"] ?? null), "category", array()), "name", array()), "html", null, true);
        echo " </a></li>
\t\t\t\t<li class=\"active\">";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["ad"] ?? null), "title", array())), "html", null, true);
        echo "</li>
\t\t\t</ol>
\t\t\t<div class=\"product-desc\">
\t\t\t\t<div class=\"col-md-7 product-view\">
\t\t\t\t\t<h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ad"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t<!--p> <i class=\"glyphicon glyphicon-map-marker\"></i><a href=\"#\">state</a>, <a href=\"#\">city</a>| Added at 06:55 pm, Ad ID: 987654321</p-->
\t\t\t\t\t<div class=\"flexslider\">
\t\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t\t<li data-thumb=\"images/ss1.jpg\">
\t\t\t\t\t\t\t\t<img src=\"images/ss1.jpg\" />
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-thumb=\"images/ss2.jpg\">
\t\t\t\t\t\t\t\t<img src=\"images/ss2.jpg\" />
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-thumb=\"images/ss3.jpg\">
\t\t\t\t\t\t\t\t<img src=\"images/ss3.jpg\" />
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- FlexSlider -->
\t\t\t\t\t  <script defer src=\"js/jquery.flexslider.js\"></script>
\t\t\t\t\t<link rel=\"stylesheet\" href=\"css/flexslider.css\" type=\"text/css\" media=\"screen\" />

\t\t\t\t\t\t<script>
\t\t\t\t\t// Can also be used with \$(document).ready()
\t\t\t\t\t\$(window).load(function() {
\t\t\t\t\t  \$('.flexslider').flexslider({
\t\t\t\t\t\tanimation: \"slide\",
\t\t\t\t\t\tcontrolNav: \"thumbnails\"
\t\t\t\t\t  });
\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t\t<!-- //FlexSlider -->
\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t<h4>Marque : <a href=\"#\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ad"] ?? null), "brand", array()), "html", null, true);
        echo "</a></h4>
\t\t\t\t\t\t<h4>Vues : <strong>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ad"] ?? null), "nbview", array()), "html", null, true);
        echo "</strong></h4>
\t\t\t\t\t\t<p><strong>Déscription</strong> : ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ad"] ?? null), "content", array()), "html", null, true);
        echo ".</p>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 product-details-grid\">
\t\t\t\t\t<div class=\"item-price\">
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<p class=\"p-price\">Prix</p>
\t\t\t\t\t\t\t<h3 class=\"rate\"> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ad"] ?? null), "price", array()), "html", null, true);
        echo " DT</h3>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"condition\">
\t\t\t\t\t\t\t<p class=\"p-price\">Etat</p>
\t\t\t\t\t\t\t<h4>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ad"] ?? null), "state", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"itemtype\">
\t\t\t\t\t\t\t<p class=\"p-price\">Type</p>
\t\t\t\t\t\t\t<h4> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ad"] ?? null), "category", array()), "name", array()), "html", null, true);
        echo "  </h4>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"interested text-center\">
\t\t\t\t\t\t<h4>Intéresser par l'annonce?<small> Contacter l'annonceur!</small></h4>
\t\t\t\t\t\t<p><i class=\"glyphicon glyphicon-earphone\"></i>";
        // line 83
        if (($this->getAttribute(($context["ad"] ?? null), "showphone", array()) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ad"] ?? null), "customer", array()), "telcust", array()), "html", null, true);
            echo " ";
        } else {
            echo " messagerie privée";
        }
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tips\">
\t\t\t\t\t\t<h4>Conseils de sécurité pour les acheteurs.  Pour ne pas tomber dans le piège des fraudeurs</h4>
\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Comment puis-je déceler la fraude?</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Rassemblez des informations sur l'objet</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"> Enquêtez sur la valeur de l'objet</a></li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--//single-page-->


";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 83,  149 => 77,  141 => 72,  133 => 67,  122 => 59,  118 => 58,  114 => 57,  81 => 27,  74 => 23,  68 => 22,  64 => 21,  56 => 15,  53 => 14,  44 => 8,  41 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:show.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/show.html.twig");
    }
}
