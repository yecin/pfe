<?php

/* BOOccasionBundle:Advert:howitworks.html.twig */
class __TwigTemplate_4129bb95c3f66e2a0917a0c8a367e1bf728a26e1ff92e9cc794c84cdbb955849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BOOccasionBundle::layout.html.twig", "BOOccasionBundle:Advert:howitworks.html.twig", 2);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
    Comment ça fonctionne
";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "

    
";
    }

    // line 15
    public function block_bodyoccasion($context, array $blocks = array())
    {
        // line 16
        echo "


\t<!-- How it works -->
\t\t<div class=\"work-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2 class=\"head\">Comment ça fonctionne</h2>
\t\t\t\t\t<div class=\"work-section-head text-center\">
\t\t\t\t\t\t<p>Rapide, facile et gratuit pour publier une annonce et vous trouverez ce que vous cherchez.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"work-section-grids text-center\">
\t\t\t\t\t\t<div class=\"col-md-3 work-section-grid\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil-square-o\"></i>
\t\t\t\t\t\t\t<h4>Publier une annonce</h4>
\t\t\t\t\t\t\t<p>Pour publier une annonce éfficace, il suffit tout simplement de sélectionner la catégorie d'annonce à publier et de remplir chaque champ du formulaire. </p>
\t\t\t\t\t\t\t<span class=\"arrow1\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/occasion/images/arrow1.png"), "html", null, true);
        echo "\"  /></span>
\t\t\t\t\t\t</div>
                                                
\t\t\t\t\t\t<div class=\"col-md-3 work-section-grid\">
\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t<h4>Trouver une annonce</h4>
\t\t\t\t\t\t\t<p>Vous pouvez faire apparaître les annonces de façon ciblée en choisissant la région, la catégorie et la recherche libre. </p>
\t\t\t\t\t\t\t<span class=\"arrow2\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/occasion/images/arrow2.png"), "html", null, true);
        echo "\"  /></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 work-section-grid\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t<h4>Contactez le vendeur</h4>
\t\t\t\t\t\t\t<p>Vous pouvez utiliser un formulaire dédié pour contacter l'annonceur du bien par messagerie privée ou son numéro de téléphone s'il est renseigné</p>
\t\t\t\t\t\t\t<span class=\"arrow1\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/occasion/images/arrow1.png"), "html", null, true);
        echo "\"  /></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 work-section-grid\">
\t\t\t\t\t\t\t<i class=\"fa fa-money\"></i>
\t\t\t\t\t\t\t<h4>Effectuer des transactions</h4>
\t\t\t\t\t\t\t<p>L'annceur et le vendeur se mettent d'accord concernant le délai/mode de livraison et de paiement.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<a class=\"work\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_add");
        echo "\">Commencer maintenant</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>\t
\t\t
\t<!-- // How it works -->


";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:howitworks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 52,  92 => 44,  83 => 38,  73 => 31,  56 => 16,  53 => 15,  44 => 9,  41 => 8,  33 => 4,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:howitworks.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/howitworks.html.twig");
    }
}
