<?php

/* BOOccasionBundle:Advert:contact.html.twig */
class __TwigTemplate_5a7c7d5a3568cc0369d3234997281e5da5da6d9dd6d974d39344ea3bbe05c803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BOOccasionBundle::layout.html.twig", "BOOccasionBundle:Advert:contact.html.twig", 1);
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
    Contact
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
        echo "\t<!-- Terms of use -->
\t<div class=\"contact main-grid-border\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"head text-center\">Contacter nous</h2>
\t\t\t<section id=\"hire\">    
\t\t\t\t<form id=\"filldetails\">
\t\t\t\t\t  <div class=\"field name-box\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" placeholder=\"vous etes qui?\"/>
\t\t\t\t\t\t\t<label for=\"name\">Prénom</label>
\t\t\t\t\t\t\t<span class=\"ss-icon\">check</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"field email-box\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"email\" placeholder=\"example@email.com\"/>
\t\t\t\t\t\t\t<label for=\"email\">E-mail</label>
\t\t\t\t\t\t\t<span class=\"ss-icon\">check</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"field ad-ID\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"adid\" placeholder=\"Ad ID\"/>
\t\t\t\t\t\t\t<label for=\"email\">Ad ID</label>
\t\t\t\t\t\t\t<span class=\"ss-icon\">check</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"field phonenum-box\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"phone\" placeholder=\"Numéro du téléphone\"/>
\t\t\t\t\t\t\t<label for=\"email\">Téléphone</label>
\t\t\t\t\t\t\t<span class=\"ss-icon\">check</span>
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"field msg-box\">
\t\t\t\t\t\t\t<textarea id=\"msg\" rows=\"4\" placeholder=\"Décrivez précisément votre bien, en indiquant son état, ses caractéristiques, ainsi que toute autre information importante pour l'acheteur.\"/></textarea>
\t\t\t\t\t\t\t<label for=\"msg\">Texte d'annonce</label>
\t\t\t\t\t\t\t<span class=\"ss-icon\">check</span>
\t\t\t\t\t  </div>
\t\t\t\t 
\t\t\t  </form>
\t\t\t<div class=\"upload\">
\t\t\t\t\t\t <h3 class=\"tlt\">Ajoutez une pièce jointe</h3>
\t\t\t\t\t\t<form id=\"upload\" method=\"post\" action=\"upload.php\" enctype=\"multipart/form-data\">
\t\t\t<div id=\"drop\">
\t\t\t\t<a>Ajoutez une photo</a>
\t\t\t\t<input type=\"file\" name=\"upl\" multiple />
\t\t\t</div>

\t\t\t<ul class=\"show\">
\t\t\t\t<!-- The file uploads will be shown here -->
\t\t\t</ul>
\t\t</form>\t
\t\t<div class=\"clear\"></div>
\t\t<form class=\"submit\">
\t\t<input class=\"button\" type=\"submit\" value=\"Envoyer\" />
\t\t</form>
\t\t<!-- JavaScript Includes 
\t\t<script src=\"js/jquery.knob.js\"></script>

\t\t<!-- jQuery File Upload Dependencies 
\t\t<script src=\"js/jquery.ui.widget.js\"></script>
\t\t<script src=\"js/jquery.fileupload.js\"></script>
\t\t-->
\t\t<!-- Our main JS file 
\t\t<script src=\"js/script.js\"></script>-->
\t\t</div>
\t\t\t</section>
\t\t\t<script>
\t\t\t\t  \$('textarea').blur(function () {
\t\t\t\t\$('#hire textarea').each(function () {
\t\t\t\t\t\$this = \$(this);
\t\t\t\t\tif (this.value != '') {
\t\t\t\t\t\t\$this.addClass('focused');
\t\t\t\t\t\t\$('textarea + label + span').css({ 'opacity': 1 });
\t\t\t\t\t} else {
\t\t\t\t\t\t\$this.removeClass('focused');
\t\t\t\t\t\t\$('textarea + label + span').css({ 'opacity': 0 });
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t\$('#hire .field:first-child input').blur(function () {
\t\t\t\t\$('#hire .field:first-child input').each(function () {
\t\t\t\t\t\$this = \$(this);
\t\t\t\t\tif (this.value != '') {
\t\t\t\t\t\t\$this.addClass('focused');
\t\t\t\t\t\t\$('.field:first-child input + label + span').css({ 'opacity': 1 });
\t\t\t\t\t} else {
\t\t\t\t\t\t\$this.removeClass('focused');
\t\t\t\t\t\t\$('.field:first-child input + label + span').css({ 'opacity': 0 });
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t\$('#hire .field:nth-child(2) input').blur(function () {
\t\t\t\t\$('#hire .field:nth-child(2) input').each(function () {
\t\t\t\t\t\$this = \$(this);
\t\t\t\t\tif (this.value != '') {
\t\t\t\t\t\t\$this.addClass('focused');
\t\t\t\t\t\t\$('.field:nth-child(2) input + label + span').css({ 'opacity': 1 });
\t\t\t\t\t} else {
\t\t\t\t\t\t\$this.removeClass('focused');
\t\t\t\t\t\t\$('.field:nth-child(2) input + label + span').css({ 'opacity': 0 });
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t\$('#hire .field:nth-child(3) input').blur(function () {
\t\t\t\t\$('#hire .field:nth-child(3) input').each(function () {
\t\t\t\t\t\$this = \$(this);
\t\t\t\t\tif (this.value != '') {
\t\t\t\t\t\t\$this.addClass('focused');
\t\t\t\t\t\t\$('.field:nth-child(3) input + label + span').css({ 'opacity': 1 });
\t\t\t\t\t} else {
\t\t\t\t\t\t\$this.removeClass('focused');
\t\t\t\t\t\t\$('.field:nth-child(3) input + label + span').css({ 'opacity': 0 });
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t\$('#hire .field:nth-child(4) input').blur(function () {
\t\t\t\t\$('#hire .field:nth-child(4) input').each(function () {
\t\t\t\t\t\$this = \$(this);
\t\t\t\t\tif (this.value != '') {
\t\t\t\t\t\t\$this.addClass('focused');
\t\t\t\t\t\t\$('.field:nth-child(4) input + label + span').css({ 'opacity': 1 });
\t\t\t\t\t} else {
\t\t\t\t\t\t\$this.removeClass('focused');
\t\t\t\t\t\t\$('.field:nth-child(4) input + label + span').css({ 'opacity': 0 });
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t  //@ sourceURL=pen.js
\t\t</script>    
\t\t<script>
\t  if (document.location.search.match(/type=embed/gi)) {
\t\twindow.parent.postMessage(\"resize\", \"*\");
\t  }
\t</script>
\t\t</div>\t
\t</div>
\t<!-- // Terms of use -->    
    

";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:contact.html.twig";
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
        return new Twig_Source("", "BOOccasionBundle:Advert:contact.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/contact.html.twig");
    }
}
