<?php

/* BOOccasionBundle:Advert:register.html.twig */
class __TwigTemplate_8ca1514bbbde826e15d5da9e8abbda98f9a0f403a89a2b03e95dd50b730211ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BOOccasionBundle:Advert:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
    Enregistrement
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
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    
    <div id=\"page-wrapper\" class=\"sign-in-wrapper\">
\t\t\t\t<div class=\"graphs\">
\t\t\t\t\t<div class=\"sign-up\">
\t\t\t\t\t\t<h1>Créer un compte</h1>
\t\t\t\t\t\t<p class=\"creating\">Avez vous des débarrs à échanger, à vendre ou vous voulez acheter un.</p>
\t\t\t\t\t\t<h2>Information personnel</h2>
\t\t\t\t\t\t<div class=\"sign-u\">
\t\t\t\t\t\t\t<div class=\"sign-up1\">
\t\t\t\t\t\t\t\t<h4>Adresse mail* :</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sign-up2\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\" \" required=\" \"/>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sign-u\">
\t\t\t\t\t\t\t<div class=\"sign-up1\">
\t\t\t\t\t\t\t\t<h4>Mot de passe* :</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sign-up2\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\" \" required=\" \"/>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sign-u\">
\t\t\t\t\t\t\t<div class=\"sign-up1\">
\t\t\t\t\t\t\t\t<h4>Confirmation de mot de passe* :</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sign-up2\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\" \" required=\" \"/>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sub_home\">
\t\t\t\t\t\t\t<div class=\"sub_home_left\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Create\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sub_home_right\">
\t\t\t\t\t\t\t\t<p>Retour vers <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_home");
        echo "\">\">Accueil</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>    

";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 62,  56 => 15,  53 => 14,  44 => 8,  41 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:register.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/register.html.twig");
    }
}
