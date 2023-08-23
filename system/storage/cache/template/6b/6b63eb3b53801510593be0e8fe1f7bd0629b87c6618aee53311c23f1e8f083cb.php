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

/* default/template/extension/module/test_module.twig */
class __TwigTemplate_74c10464447a85853ea32d91c0b0f7aeb90807511a70c83f13fb83a04db8d4c8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div>";
        if (($context["heading_title"] ?? null)) {
            // line 2
            echo "                123123123213
        <h2>";
            // line 3
            echo ($context["heading_title"] ?? null);
            echo "</h2>
    ";
        }
        // line 5
        echo "    ";
        echo ($context["text"] ?? null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/test_module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/test_module.twig", "");
    }
}
