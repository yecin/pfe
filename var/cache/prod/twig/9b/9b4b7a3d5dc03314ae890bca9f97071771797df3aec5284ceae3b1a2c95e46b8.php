<?php

/* BOOccasionBundle:Advert:login.html.twig */
class __TwigTemplate_9c7c6b9c839d5620271a1b1667df2a7034cd2885b39afc8a2cdd40506f9257b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BOOccasionBundle:Advert:login.html.twig", 1);
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
    Connexion
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
\t\t\t\t\t<div class=\"sign-in-form\">
\t\t\t\t\t\t<div class=\"sign-in-form-top\">
\t\t\t\t\t\t\t<h1>Connexion</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"signin\">
\t\t\t\t\t\t\t<div class=\"signin-rit\">
\t\t\t\t\t\t\t\t<span class=\"checkbox1\">
\t\t\t\t\t\t\t\t\t <label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked=\"\">Mot de passe oubliée?</label>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p><a href=\"#\">Cliquer ici</a> </p>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"log-input\">
\t\t\t\t\t\t\t\t<div class=\"log-input-left\">
\t\t\t\t\t\t\t\t   <input type=\"text\" class=\"user\" value=\"nom@serveur.com\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Your Email';}\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"checkbox2\">
\t\t\t\t\t\t\t\t\t <label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked=\"\"><i> </i></label>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"log-input\">
\t\t\t\t\t\t\t\t<div class=\"log-input-left\">
\t\t\t\t\t\t\t\t   <input type=\"password\" class=\"lock\" value=\"password\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email address:';}\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"checkbox2\">
\t\t\t\t\t\t\t\t\t <label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked=\"\"><i> </i></label>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Se connecter\">
\t\t\t\t\t\t</form>\t 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"new_people\">
\t\t\t\t\t\t\t<h2>Pour les nouveaux annonceurs</h2>
\t\t\t\t\t\t\t<p>Pour échanger, vendre ou acheter des débarrs, inscrivez vous sur notre site.</p>
\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_register");
        echo "\">Enregistrer</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 55,  56 => 15,  53 => 14,  44 => 8,  41 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:login.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/login.html.twig");
    }
}
