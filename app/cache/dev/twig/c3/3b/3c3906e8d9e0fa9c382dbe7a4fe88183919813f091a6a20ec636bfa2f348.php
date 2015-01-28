<?php

/* EventFormBundle:Categoria:new.html.twig */
class __TwigTemplate_c33b3c3906e8d9e0fa9c382dbe7a4fe88183919813f091a6a20ec636bfa2f348 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nome", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Nome da Categoria"));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Descricao", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Descrição da Categoria"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ExigeCompParaLiberarPagamento", array()), 'row', array("attr" => array("class" => "bootstrap-switch bootstrap-switch-on bootstrap-switch-small bootstrap-switch-animate"), "label" => "Exigir comprovante e validar para liberar o método de pagamento? "));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <hr />
    <a class=\"btn btn-lg btn-success\"  onclick=\"adicionaMaisCategorias()\" > Adicionar Mais Categorias</a>
    <a class=\"btn btn-lg btn-primary\"  onclick=\"proximoPasso()\" > <i class=\"icon-plus icon-white\"></i> Proximo Passo  </a>
<script>
    form=document.getElementById(\"formTwoActions\");
    function adicionaMaisCategorias() {
        form.action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_adicionarMaisCategorias", array("evento_id" => (isset($context["evento_id"]) ? $context["evento_id"] : $this->getContext($context, "evento_id")))), "html", null, true);
        echo "\";
        form.submit();
    }
    function proximoPasso() {
        form.action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_PersisteEProximo", array("evento_id" => (isset($context["evento_id"]) ? $context["evento_id"] : $this->getContext($context, "evento_id")))), "html", null, true);
        echo "\";
        form.submit();
    }
 
</script>
";
    }

    public function getTemplateName()
    {
        return "EventFormBundle:Categoria:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  69 => 16,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
