<?php

/* UserBundle:Login:login.html.twig */
class __TwigTemplate_24bfff2ff61039526e211cb47eb916e0f68615854e03b5001930f7c28513aae8 extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "<div class=\"row\">
    <div class=\"col-md-4\">
        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class='form-signin'>
            <h2 class=\"form-signin-heading\">
                Please sign in
            </h2>
            <label class=\"sr-only\" for=\"username\">Username</label>
            <input class='form-control' type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"  placeholder=\"Username or Email address\" />
            
            <label class=\"sr-only\" for=\"password\"></label>
            <input class='form-control' type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\" />

            ";
        // line 24
        echo "            <hr />
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">login</button>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  59 => 14,  51 => 9,  47 => 7,  41 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
