<?php

/* BOOccasionBundle:Advert:feedback.html.twig */
class __TwigTemplate_48ef86bcf9100c8c6381ff36149c9ef9b1c2cfe0e9a861428d8552b6b7425d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BOOccasionBundle::layout.html.twig", "BOOccasionBundle:Advert:feedback.html.twig", 1);
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

\t<!-- Feedback -->
\t<div class=\"feedback main-grid-border\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"head\">Votre avis</h2>
\t\t\t<div class=\"feed-back\">
\t\t\t\t<h3>Dites-nous ce que vous pensez du BonneOccasion!</h3>
\t\t\t\t<p>Existe-t-il quelque chose à propos de notre site web que vous aimez particulièrement ? Quelque chose que vous aimeriez au contraire voir changer ?

Vos commentaires nous aideront à améliorer votre expérience sur notre site Web.

Si vous signalez un problème technique, merci d'en fournir une description précise.
                                </p>
\t\t\t\t<div class=\"feed-back-form\">
\t\t\t\t\t<form>
\t\t\t\t\t<span>Informations personnel</span>
\t\t\t\t\t\t\t<input type=\"text\" value=\"Votre prénom\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Prénom';}\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"Votre nom\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Nom';}\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"nom@courrierélectronique.com\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Adresse courriel';}\">
\t\t\t\t\t\t\t<!--input type=\"text\" value=\"Numéro téléphone\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Numéro téléphone';}\"-->
\t\t\t\t\t\t\t<span>Avez-vous quelque chose à nous dire?</span>
\t\t\t\t\t\t\t<textarea type=\"text\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Message...';}\" required=\"\">Message...</textarea>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Envoyer\">
\t\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<!-- // Feedback -->
    

";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:feedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  53 => 14,  44 => 8,  41 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:feedback.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/feedback.html.twig");
    }
}
