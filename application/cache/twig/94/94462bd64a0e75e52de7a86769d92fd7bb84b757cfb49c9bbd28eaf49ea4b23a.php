<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* quest/beranda.twig */
class __TwigTemplate_63ae3a3eeb68a2642973f9ee97756da9eb34e5f0e10be3b567fc74c0fbae07c7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'isi' => [$this, 'block_isi'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/kosongan.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layout/kosongan.twig", "quest/beranda.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_isi($context, array $blocks = [])
    {
        // line 4
        echo "\t";
        $this->loadTemplate("include/jumlah_koin.twig", "quest/beranda.twig", 4)->display($context);
        // line 5
        echo "    ";
        if ((($context["data"] ?? null) != null)) {
            // line 6
            echo "        <div class=\"panel panel-default\">
        \t<div class=\"list-group\">
        \t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 9
                echo "        \t\t\t<a href=\"";
                echo twig_escape_filter($this->env, site_url(), "html", null, true);
                echo "tantangan/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", []), "html", null, true);
                echo "\" class=\"list-group-item\">
        \t\t\t\t";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "judul", []), "html", null, true);
                echo "
        \t\t\t\t<span class=\"badge\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "koin", []), "html", null, true);
                echo " koin</span>
        \t\t\t</a>    
        \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        \t</div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "quest/beranda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  67 => 11,  63 => 10,  56 => 9,  52 => 8,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/kosongan.twig' %}

{% block isi %}
\t{% include 'include/jumlah_koin.twig' %}
    {% if data != null %}
        <div class=\"panel panel-default\">
        \t<div class=\"list-group\">
        \t\t{% for a in data %}
        \t\t\t<a href=\"{{ site_url() }}tantangan/{{ a.id }}\" class=\"list-group-item\">
        \t\t\t\t{{ a.judul }}
        \t\t\t\t<span class=\"badge\">{{ a.koin }} koin</span>
        \t\t\t</a>    
        \t\t{% endfor %}
        \t</div>
        </div>
    {% endif %}
{% endblock %}", "quest/beranda.twig", "/mnt/C48455A884559E2C/web/quest/application/views/quest/beranda.twig");
    }
}
