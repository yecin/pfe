<?php

/* BOOccasionBundle:Advert:error.html.twig */
class __TwigTemplate_88ad2499c4ec9f743fe4a573c86a04ffdf63835078a79af469a772ba17fc3dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BOOccasionBundle:Advert:error.html.twig", 1);
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
    Erreur 404
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
\t<!-- 404page of use -->
        <div class=\"background404\">
                    <div class=\"title404 wrap404\">
                        <h1>Nous sommes désolés. Cette page est introuvable.</h1>
                        <h2>Erreur 404!</h2>
                    </div>
                    <div class=\"wrap404\">
                        <div class=\"gray404\">
                            <a href=\"javascript:history.go(-1)\" class=\"ag-3d_button404 orange404\">Retour </a>
                         </div>
                    </div>
        </div>
\t<!-- // 404page of use -->    

";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:error.html.twig";
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
        return new Twig_Source("", "BOOccasionBundle:Advert:error.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/error.html.twig");
    }
}
