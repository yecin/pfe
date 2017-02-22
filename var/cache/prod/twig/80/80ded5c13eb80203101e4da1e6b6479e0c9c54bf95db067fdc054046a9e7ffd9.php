<?php

/* BOOccasionBundle:Advert:index.html.twig */
class __TwigTemplate_b5ba269aea2e1b83b972c013440f2b227ba602342f3889add5037c463916876c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BOOccasionBundle::layout.html.twig", "BOOccasionBundle:Advert:index.html.twig", 2);
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
    Accueil
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

    <div class=\"content\">
        
        
        <div class=\"categories\">
                    <div class=\"container\">
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/mobiles\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-mobile-phone\"></i></div>
                                                            <h4 class=\"clrchg\">Mobiles</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/electromenagers\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"material-icons\">kitchen</i></div>
                                                            <h4 class=\"clrchg\"> Électroménagers</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>
                            <!--div class=\"col-md-2 focus-grid\">
                                    <a href=\"category.html#parentVerticalTab3\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-car\"></i></div>
                                                            <h4 class=\"clrchg\">Voitures</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>\t
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"category.html#parentVerticalTab4\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-motorcycle\"></i></div>
                                                            <h4 class=\"clrchg\">Motos</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>\t
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"category.html#parentVerticalTab5\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-wheelchair\"></i></div>
                                                            <h4 class=\"clrchg\">Meubles</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div-->
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/cuisine\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-cutlery\"></i></div>
                                                            <h4 class=\"clrchg\">Cuisine</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>\t
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/loisirs\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-book\"></i></div>
                                                            <h4 class=\"clrchg\">Livres, Sports & Loisirs</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>\t
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/vetements\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-asterisk\"></i></div>
                                                            <h4 class=\"clrchg\">Vêtements </h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>\t\t
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/jadin\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-wrench\"></i></div>
                                                            <h4 class=\"clrchg\">Jardinage & Bricolage</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/autres\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-lightbulb-o\"></i></div>
                                                            <h4 class=\"clrchg\">Autres</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/meubles\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"material-icons\">event_seat</i></div>
                                                            <h4 class=\"clrchg\"> Meubles </h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/beaute\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                            <div class=\"focus-image\"><i class=\"fa fa-clock-o\"></i></div>
                                                            <h4 class=\"clrchg\">Accessoires & Beauté</h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>
                            <div class=\"col-md-2 focus-grid\">
                                    <a href=\"occasion/category/bebe\">
                                            <div class=\"focus-border\">
                                                    <div class=\"focus-layout\">
                                                        <div class=\"focus-image\"><i class=\"fa fa-child\"></i></div>
                                                            <h4 class=\"clrchg\">Bébé & Puériculture </h4>
                                                    </div>
                                            </div>
                                    </a>
                            </div>                            
                            <div class=\"clearfix\"></div>
                    </div>
            </div>
        
        
        <!--
            <div class=\"trending-ads\">
                    <div class=\"container\">
                    <!-- slider --
                    <div class=\"trend-ads\">
                            <h2>LES OFFRES À LA UNE</h2>
                                            <ul id=\"flexiselDemo3\">
                                                    <li>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p1.jpg\"/>
                                                                            <span class=\"price\">&#36; 450</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>There are many variations of passages</h5>
                                                                            <span>1 hour ago</span>
                                                                    </div>
                                                            </div>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p2.jpg\"/>
                                                                            <span class=\"price\">&#36; 399</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>Lorem Ipsum is simply dummy</h5>
                                                                            <span>3 hour ago</span>
                                                                    </div>
                                                            </div>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p3.jpg\"/>
                                                                            <span class=\"price\">&#36; 199</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>It is a long established fact that a reader</h5>
                                                                            <span>8 hour ago</span>
                                                                    </div>
                                                            </div>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p4.jpg\"/>
                                                                            <span class=\"price\">&#36; 159</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>passage of Lorem Ipsum you need to be</h5>
                                                                            <span>19 hour ago</span>
                                                                    </div>
                                                            </div>
                                                    </li>
                                                    <li>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p5.jpg\"/>
                                                                            <span class=\"price\">&#36; 1599</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>There are many variations of passages</h5>
                                                                            <span>1 hour ago</span>
                                                                    </div>
                                                            </div>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p6.jpg\"/>
                                                                            <span class=\"price\">&#36; 1099</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>passage of Lorem Ipsum you need to be</h5>
                                                                            <span>1 day ago</span>
                                                                    </div>
                                                            </div>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p7.jpg\"/>
                                                                            <span class=\"price\">&#36; 109</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>It is a long established fact that a reader</h5>
                                                                            <span>9 hour ago</span>
                                                                    </div>
                                                            </div>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p8.jpg\"/>
                                                                            <span class=\"price\">&#36; 189</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>Lorem Ipsum is simply dummy</h5>
                                                                            <span>3 hour ago</span>
                                                                    </div>
                                                            </div>
                                                    </li>
                                                    <li>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p9.jpg\"/>
                                                                            <span class=\"price\">&#36; 2599</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>Lorem Ipsum is simply dummy</h5>
                                                                            <span>3 hour ago</span>
                                                                    </div>
                                                            </div>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p10.jpg\"/>
                                                                            <span class=\"price\">&#36; 3999</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>It is a long established fact that a reader</h5>
                                                                            <span>9 hour ago</span>
                                                                    </div>
                                                            </div>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p11.jpg\"/>
                                                                            <span class=\"price\">&#36; 2699</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>passage of Lorem Ipsum you need to be</h5>
                                                                            <span>1 day ago</span>
                                                                    </div>
                                                            </div>
                                                            <div class=\"col-md-3 biseller-column\">
                                                                    <a href=\"single.html\">
                                                                            <img src=\"images/p12.jpg\"/>
                                                                            <span class=\"price\">&#36; 899</span>
                                                                    </a> 
                                                                    <div class=\"ad-info\">
                                                                            <h5>There are many variations of passages</h5>
                                                                            <span>1 hour ago</span>
                                                                    </div>
                                                            </div>
                                                    </li>
                                    </ul>
                            <script type=\"text/javascript\">
                                     \$(window).load(function() {
                                            \$(\"#flexiselDemo3\").flexisel({
                                                    visibleItems:1,
                                                    animationSpeed: 1000,
                                                    autoPlay: true,
                                                    autoPlaySpeed: 5000,    \t\t
                                                    pauseOnHover: true,
                                                    enableResponsiveBreakpoints: true,
                                                    responsiveBreakpoints: { 
                                                            portrait: { 
                                                                    changePoint:480,
                                                                    visibleItems:1
                                                            }, 
                                                            landscape: { 
                                                                    changePoint:640,
                                                                    visibleItems:1
                                                            },
                                                            tablet: { 
                                                                    changePoint:768,
                                                                    visibleItems:1
                                                            }
                                                    }
                                            });

                                    });
                               </script>
                            </div>   
            </div>
            -- //slider -->\t\t\t\t
    </div>


";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  53 => 15,  44 => 9,  41 => 8,  33 => 4,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:index.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/index.html.twig");
    }
}
