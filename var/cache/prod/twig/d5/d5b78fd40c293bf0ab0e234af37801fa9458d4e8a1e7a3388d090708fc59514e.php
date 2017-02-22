<?php

/* BOOccasionBundle:Advert:privacy.html.twig */
class __TwigTemplate_a59e622357eb6ea894106c9291d0f4d81c8ea9f082c33e6d8b2f6fabd17f5e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BOOccasionBundle::layout.html.twig", "BOOccasionBundle:Advert:privacy.html.twig", 1);
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
    Politique de confidentialité
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
\t<!-- Terms of use -->
<div class=\"privacy main-grid-border\">
<div class=\"container\">
<h2 class=\"head\">Politique de confidentialité</h2>
  
<p>Les présentes conditions d’utilisation datent d’October 2016. BonneOccasion est un site d’annonces classées GRATUIT.  Vendeurs et acheteurs potentiels se rencontrent pour procéder à une transaction. Nous avons donc établi des termes et conditions d’utilisation à respecter pour que BonneOccasion demeure un endroit plaisant pour tout le monde.
</p>


<h4>Termes et conditions d’utilisation :</h4>
<ol class=\"listeterm\">
<li>L’utilisation du site est réservée aux personnes physiques âgées de 18 ans ou plus. </li>
<li>Il est obligatoire de supprimer une ancienne annonce avant d’en insérer une nouvelle relative au même article.</li>
<li>Le site permet aux Membres de publier et consulter des Annonces ainsi que d’interagir entre eux pour la revente, l’achat et l’échange des produits.</li>
<li>Il est interdit d’insérer une même annonce dans plusieurs catégories.</li>
<li>Aucun texte (langage) vulgaire, pornographique, déplacé, à caractère racial, haineux et religieux n’est toléré.</li>
<li>Il est interdit d’insérer des mots-clés dans une annonce qui n’ont aucun lien avec l’article à vendre de celle-ci pour améliorer les chances qu’elle soit choisie lors d’une recherche.
<li>Il est interdit d’ajouter une annonce qui n’offre pas un produit.</li>
<li>Les annonces avec photos à caractère sexuel et pornographique ne sont pas acceptez.</li>
<li>Autrement, aucune annonce avec photo à caractère sexuel et pornographique ne seront toléré dans les autres catégories.</li>
<li>Toute annonce jugée dans une mauvaise catégorie sera soit relocalisée dans une autre catégorie ou effacée.</li>
<li>Toute annonce jugée comme étant une arnaque, une fraude, sera immédiatement effacée et le compte de son propriétaire fermé sans aucun préavis et reporté aux autorités.</li>
<li>Toute annonce affichée à intervalle régulier pour demeurer dans les premières annonces dans les catégories sera automatiquement effacée.</li>
<li>Toute annonce dont la photo ne reflète pas le service ou le produit annoncé sera automatiquement effacée.</li>
<li>Votre annonce sera retirée si le titre ne décrit pas précisément le produit ou service que vous offrez / recherchez.</li>
<li>Il est interdit d’utiliser les formulaires de contact aux vendeurs pour faire la promotion de vos produits / services.</li>
<li>Aucune annonce de la concurrence (annonces classées) n’est tolérée.</li>
</ol> 

<p>Tout usager ou toute annonce ne respectant pas ces termes et conditions d’utilisation sera automatiquement effacé et interdit d’accès à BonneOccasion sans aucun préavis! À vous d’y voir!<br />
Merci de votre compréhension.<br />
N.B. Ces termes et conditions d’utilisation sont sujets à changement sans préavis.
</p>
</div>
</div>
\t<!-- // Terms of use -->    

";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:privacy.html.twig";
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
        return new Twig_Source("", "BOOccasionBundle:Advert:privacy.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/privacy.html.twig");
    }
}
