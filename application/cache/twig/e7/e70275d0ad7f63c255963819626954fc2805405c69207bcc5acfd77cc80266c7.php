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

/* include/jumlah_koin.twig */
class __TwigTemplate_46c8b936b4104caac8552d63367fc3607692ca7155c506673a86bdd1d2911a91 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((($context["jumlah_koin"] ?? null) != null)) {
            // line 2
            echo "\t<div class=\"alert alert-warning\">
\t    Jumlah semua koin
\t    <div class=\"badge pull-right\">";
            // line 4
            echo twig_escape_filter($this->env, ($context["jumlah_koin"] ?? null), "html", null, true);
            echo " koin</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "include/jumlah_koin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if jumlah_koin != null %}
\t<div class=\"alert alert-warning\">
\t    Jumlah semua koin
\t    <div class=\"badge pull-right\">{{ jumlah_koin }} koin</div>
\t</div>
{% endif %}", "include/jumlah_koin.twig", "/mnt/C48455A884559E2C/web/quest/application/views/include/jumlah_koin.twig");
    }
}
