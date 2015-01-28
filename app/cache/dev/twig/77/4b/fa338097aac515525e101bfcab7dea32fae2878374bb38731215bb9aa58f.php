<?php

/* EventFormBundle:MetodoDePagamento:new.html.twig */
class __TwigTemplate_774bfa338097aac515525e101bfcab7dea32fae2878374bb38731215bb9aa58f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("EventFormBundle::sidebar.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EventFormBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "<h1> Nova Categoria </h1>
<form id=\"formTwoActions\" action=\"\" method=\"POST\" >
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nome", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Nome do Metodo"));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Tipo", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Tipo do Metodo"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <hr />
    <input type=\"submit\" class=\"btn btn-lg btn-primary \" value=\"Prosseguir\" formnovalidate />
";
    }

    public function getTemplateName()
    {
        return "EventFormBundle:MetodoDePagamento:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  51 => 7,  47 => 6,  43 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
