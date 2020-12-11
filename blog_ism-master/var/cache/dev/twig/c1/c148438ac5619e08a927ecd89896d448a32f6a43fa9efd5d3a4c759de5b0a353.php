<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* categorie/index.html.twig */
class __TwigTemplate_c78aca56eb7c427ec211d903eed3f4464a88af01bc68ed6180c226319ceb7a99 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "
\t";
        // line 5
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<!-- Page level plugins -->
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

\t<!-- Page level custom scripts -->

\t<script>
\t\t\$(document).ready(function () {
\$('#dataTable').DataTable({
language: {
processing: \"Traitement en cours...\",
search: \"Rechercher&nbsp;:\",
lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
infoPostFix: \"\",
loadingRecords: \"Chargement en cours...\",
zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
emptyTable: \"Aucune donnée disponible dans le tableau\",
paginate: {
first: \"Premier\",
previous: \"Pr&eacute;c&eacute;dent\",
next: \"Suivant\",
last: \"Dernier\"
},
aria: {
sortAscending: \": activer pour trier la colonne par ordre croissant\",
sortDescending: \": activer pour trier la colonne par ordre décroissant\"
}
},
lengthMenu: [
5,
10,
25,
50,
100
]

});
});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "\t<!-- DataTales Example -->
\t<div class=\"card shadow mb-4\">
\t\t<div class=\"card-header py-3\">
\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Liste des catégories</h6>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"w-25\">Id</th>
\t\t\t\t\t\t\t<th class=\"w-25\">libelle</th>
\t\t\t\t\t\t\t<th class=\"w-50\">Actions</th>


\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t<th>libelle</th>
\t\t\t\t\t\t\t<th>Actions</th>


\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 79
            echo "

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-icon-split\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon text-white-50\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-info\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Articles</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-warning btn-icon-split\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon text-white-50\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle\"></i>

\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Modifier</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger btn-icon-split\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon text-white-50\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Supprimer</span>
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 112,  184 => 83,  180 => 82,  175 => 79,  171 => 78,  142 => 51,  132 => 50,  81 => 8,  77 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascripts %}

\t{{parent()}}
\t<!-- Page level plugins -->
\t<script src=\"{{asset(\"vendor/datatables/jquery.dataTables.min.js\")}}\"></script>
\t<script src=\"{{asset(\"vendor/datatables/dataTables.bootstrap4.min.js\")}}\"></script>

\t<!-- Page level custom scripts -->

\t<script>
\t\t\$(document).ready(function () {
\$('#dataTable').DataTable({
language: {
processing: \"Traitement en cours...\",
search: \"Rechercher&nbsp;:\",
lengthMenu: \"Afficher _MENU_ &eacute;l&eacute;ments\",
info: \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
infoEmpty: \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
infoFiltered: \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
infoPostFix: \"\",
loadingRecords: \"Chargement en cours...\",
zeroRecords: \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
emptyTable: \"Aucune donnée disponible dans le tableau\",
paginate: {
first: \"Premier\",
previous: \"Pr&eacute;c&eacute;dent\",
next: \"Suivant\",
last: \"Dernier\"
},
aria: {
sortAscending: \": activer pour trier la colonne par ordre croissant\",
sortDescending: \": activer pour trier la colonne par ordre décroissant\"
}
},
lengthMenu: [
5,
10,
25,
50,
100
]

});
});
\t</script>
{% endblock %}

{% block body %}
\t<!-- DataTales Example -->
\t<div class=\"card shadow mb-4\">
\t\t<div class=\"card-header py-3\">
\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Liste des catégories</h6>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"w-25\">Id</th>
\t\t\t\t\t\t\t<th class=\"w-25\">libelle</th>
\t\t\t\t\t\t\t<th class=\"w-50\">Actions</th>


\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t<th>libelle</th>
\t\t\t\t\t\t\t<th>Actions</th>


\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for categorie in categories %}


\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{  categorie.id }}</td>
\t\t\t\t\t\t\t\t<td>{{categorie.libelle}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-icon-split\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon text-white-50\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-info\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Articles</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-warning btn-icon-split\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon text-white-50\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle\"></i>

\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Modifier</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger btn-icon-split\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon text-white-50\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Supprimer</span>
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "categorie/index.html.twig", "C:\\Users\\ASUS\\Downloads\\blog_ism-master\\blog_ism-master\\templates\\categorie\\index.html.twig");
    }
}
