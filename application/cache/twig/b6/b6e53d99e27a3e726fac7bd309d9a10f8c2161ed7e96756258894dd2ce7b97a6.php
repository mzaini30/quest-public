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

/* koin/terpakai.twig */
class __TwigTemplate_20dc5035a42ff9028e88206db7956a1d9722a8c754354a69c8ed13585d987fbf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'judul' => [$this, 'block_judul'],
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
        $this->parent = $this->loadTemplate("layout/kosongan.twig", "koin/terpakai.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_judul($context, array $blocks = [])
    {
        // line 4
        echo "    Koin Terpakai -
";
    }

    // line 7
    public function block_isi($context, array $blocks = [])
    {
        // line 8
        echo "\t";
        if ((($context["data"] ?? null) != null)) {
            // line 9
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"list-group\">
\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 12
                echo "\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "judul", []), "html", null, true);
                echo "\t\t\t
\t\t\t\t\t\t<div class=\"badge\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "koin", []), "html", null, true);
                echo " koin</div>
\t\t\t\t\t</div>    
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "koin/terpakai.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  69 => 14,  65 => 13,  62 => 12,  58 => 11,  54 => 9,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  30 => 1,);
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

{% block judul %}
    Koin Terpakai -
{% endblock %}

{% block isi %}
\t{% if data != null %}
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"list-group\">
\t\t\t\t{% for x in data %}
\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t{{ x.judul }}\t\t\t
\t\t\t\t\t\t<div class=\"badge\">{{ x.koin }} koin</div>
\t\t\t\t\t</div>    
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t{% endif %}
{% endblock %}", "koin/terpakai.twig", "/mnt/C48455A884559E2C/web/quest/application/views/koin/terpakai.twig");
    }
}
