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

/* koin/tukar.twig */
class __TwigTemplate_979c79f271165198f035ca15cc45c881087e8199810dbd38dcebaf6cd700dfb9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/kosongan.twig", "koin/tukar.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_judul($context, array $blocks = [])
    {
        // line 4
        echo "    Tukar Koin -
";
    }

    // line 7
    public function block_isi($context, array $blocks = [])
    {
        // line 8
        echo "\t";
        $this->loadTemplate("include/jumlah_koin.twig", "koin/tukar.twig", 8)->display($context);
        // line 9
        echo "    ";
        if ((($context["data"] ?? null) != null)) {
            // line 10
            echo "        <div class=\"panel panel-default\">
            <div class=\"list-group\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 13
                echo "                    <a href=\"";
                if (($this->getAttribute($context["h"], "koin", []) <= ($context["jumlah_koin"] ?? null))) {
                    echo "#!aktif";
                } else {
                    // line 14
                    echo "                        #!pasif";
                }
                echo "\" class=\"list-group-item ";
                if (($this->getAttribute($context["h"], "koin", []) > ($context["jumlah_koin"] ?? null))) {
                    echo "disabled";
                }
                echo "\">
                        ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "judul", []), "html", null, true);
                echo " 
                        <span class=\"badge\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "koin", []), "html", null, true);
                echo " koin</span>
                        ";
                // line 17
                if (($this->getAttribute($context["h"], "koin", []) > ($context["jumlah_koin"] ?? null))) {
                    // line 18
                    echo "                            <span class=\"badge\">terkunci</span>
                        ";
                }
                // line 20
                echo "                    </a>    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "koin/tukar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  93 => 20,  89 => 18,  87 => 17,  83 => 16,  79 => 15,  70 => 14,  65 => 13,  61 => 12,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  30 => 1,);
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
    Tukar Koin -
{% endblock %}

{% block isi %}
\t{% include 'include/jumlah_koin.twig' %}
    {% if data != null %}
        <div class=\"panel panel-default\">
            <div class=\"list-group\">
                {% for h in data %}
                    <a href=\"{% if h.koin <= jumlah_koin %}#!aktif{% else %}
                        #!pasif{% endif %}\" class=\"list-group-item {% if h.koin > jumlah_koin %}disabled{% endif %}\">
                        {{ h.judul }} 
                        <span class=\"badge\">{{ h.koin }} koin</span>
                        {% if h.koin > jumlah_koin %}
                            <span class=\"badge\">terkunci</span>
                        {% endif %}
                    </a>    
                {% endfor %}
            </div>
        </div>
    {% endif %}
{% endblock %}", "koin/tukar.twig", "/mnt/C48455A884559E2C/web/quest/application/views/koin/tukar.twig");
    }
}
