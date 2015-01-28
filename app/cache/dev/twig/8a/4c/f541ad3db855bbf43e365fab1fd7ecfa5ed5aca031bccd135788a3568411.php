<?php

/* ::base.html.twig */
class __TwigTemplate_8a4cf541ad3db855bbf43e365fab1fd7ecfa5ed5aca031bccd135788a3568411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta Access-Control-Allow-Origin>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fddb9b6_part_1.css");
            // line 8
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            <link href=\"bootstrap.css\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"/css/dashboard.css\"/>
        ";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fddb9b6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fddb9b6.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            <link href=\"bootstrap.css\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"/css/dashboard.css\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    </head>
    <body>
        <div class=\"container-fluid\">
            <div class=\"row\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "            </div>
        </div>
        ";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 21
            echo "            <script src=\"jquery.js\"></script>
            <script type=\"text/javascript\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94_part_2.js");
            // line 21
            echo "            <script src=\"jquery.js\"></script>
            <script type=\"text/javascript\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a56fa94.js");
            // line 21
            echo "            <script src=\"jquery.js\"></script>
            <script type=\"text/javascript\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "EventWeb - Form";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 17,  109 => 16,  103 => 6,  98 => 24,  92 => 22,  89 => 21,  82 => 22,  79 => 21,  73 => 22,  70 => 21,  66 => 20,  62 => 18,  60 => 16,  54 => 12,  36 => 8,  32 => 7,  28 => 6,  21 => 1,);
    }
}
