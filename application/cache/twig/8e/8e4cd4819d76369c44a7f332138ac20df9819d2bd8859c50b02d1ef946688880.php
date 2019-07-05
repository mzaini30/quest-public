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

/* include/sidebar.twig */
class __TwigTemplate_0f632bcd03e7e5758dfea400b2ef44643a66d5320b718be1fab420a56d257f76 extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">Quest</div>
\t<div class=\"list-group\">
\t\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "quest-baru\" class=\"list-group-item\">Buat Baru</a>
\t\t<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "quest-selesai\" class=\"list-group-item\">Quest Selesai</a>
\t</div>
</div>
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">Penukaran Koin</div>
\t<div class=\"list-group\">
\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "tambah-hadiah\" class=\"list-group-item\">Tambah Hadiah</a>
\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "edit-hadiah\" class=\"list-group-item\">Edit Hadiah</a>
\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "tukar-koin\" class=\"list-group-item\">Tukar Koin</a>
\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "koin-terpakai\" class=\"list-group-item\">Koin Terpakai</a>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "include/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  56 => 13,  52 => 12,  48 => 11,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">Quest</div>
\t<div class=\"list-group\">
\t\t<a href=\"{{ site_url() }}quest-baru\" class=\"list-group-item\">Buat Baru</a>
\t\t<a href=\"{{ site_url() }}quest-selesai\" class=\"list-group-item\">Quest Selesai</a>
\t</div>
</div>
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">Penukaran Koin</div>
\t<div class=\"list-group\">
\t\t<a href=\"{{ site_url() }}tambah-hadiah\" class=\"list-group-item\">Tambah Hadiah</a>
\t\t<a href=\"{{ site_url() }}edit-hadiah\" class=\"list-group-item\">Edit Hadiah</a>
\t\t<a href=\"{{ site_url() }}tukar-koin\" class=\"list-group-item\">Tukar Koin</a>
\t\t<a href=\"{{ site_url() }}koin-terpakai\" class=\"list-group-item\">Koin Terpakai</a>
\t</div>
</div>
", "include/sidebar.twig", "/mnt/C48455A884559E2C/web/quest/application/views/include/sidebar.twig");
    }
}
