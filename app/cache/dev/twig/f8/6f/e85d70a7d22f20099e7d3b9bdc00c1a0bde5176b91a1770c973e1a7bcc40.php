<?php

/* EventFormBundle::sidebar.html.twig */
class __TwigTemplate_f86fe85d70a7d22f20099e7d3b9bdc00c1a0bde5176b91a1770c973e1a7bcc40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Project name</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Help</a></li>
              </ul>
            </div>
        </div>
    </nav>
    <div class=\"col-sm-3 col-md-2 sidebar\">
        <ul class=\"nav nav-sidebar\">
            <li><a>Dados do Evento</a></li>
            <li><a>Categorias</a></li>
            <li><a>Metodo de Pagamento</a></li>
            <li><a>Regras</a></li>
        </ul>
    </div>
    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    ";
        // line 25
        $this->displayBlock('main', $context, $blocks);
        // line 27
        echo "    </div>
";
    }

    // line 25
    public function block_main($context, array $blocks = array())
    {
        // line 26
        echo "    ";
    }

    public function getTemplateName()
    {
        return "EventFormBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  70 => 25,  65 => 27,  63 => 25,  40 => 4,  37 => 3,  11 => 1,);
    }
}
