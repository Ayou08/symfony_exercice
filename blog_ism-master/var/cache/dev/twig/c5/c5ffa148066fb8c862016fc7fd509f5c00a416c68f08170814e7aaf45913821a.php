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

/* base.html.twig */
class __TwigTemplate_4081af0fb262770e1a985cbd00cde46aa29c14642f1ae3b9f2c28a210cfc0b34 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

         <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "


</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

      <!-- Sidebar - Brand -->
      <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
          <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Admin Blog </div>
      </a>

      <!-- Divider -->
      <hr class=\"sidebar-divider my-0\">

      <!-- Nav Item - Dashboard -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"index.html\">
          <i class=\"fas fa-fw fa-tachometer-alt\"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Heading -->
      <div class=\"sidebar-heading\">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Components</span>
        </a>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <h6 class=\"collapse-header\">Custom Components:</h6>
            <a class=\"collapse-item\" href=\"buttons.html\">Buttons</a>
            <a class=\"collapse-item\" href=\"cards.html\">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\" aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
          <i class=\"fas fa-fw fa-wrench\"></i>
          <span>Utilities</span>
        </a>
        <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <h6 class=\"collapse-header\">Custom Utilities:</h6>
            <a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
            <a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
            <a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
            <a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Heading -->
      <div class=\"sidebar-heading\">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
          <i class=\"fas fa-fw fa-folder\"></i>
          <span>Pages</span>
        </a>
        <div id=\"collapsePages\" class=\"collapse show\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <h6 class=\"collapse-header\">Login Screens:</h6>
            <a class=\"collapse-item\" href=\"login.html\">Login</a>
            <a class=\"collapse-item\" href=\"register.html\">Register</a>
            <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
            <div class=\"collapse-divider\"></div>
            <h6 class=\"collapse-header\">Other Pages:</h6>
            <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
            <a class=\"collapse-item active\" href=\"blank.html\">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_show");
        echo "\">
          <i class=\"fas fa-fw fa-chart-area\"></i>
          <span>Categorie</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"tables.html\">
          <i class=\"fas fa-fw fa-table\"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider d-none d-md-block\">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

          <!-- Sidebar Toggle (Topbar) -->
          <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
          </button>

          <!-- Topbar Search -->
          <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                  <i class=\"fas fa-search fa-sm\"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class=\"nav-item dropdown no-arrow d-sm-none\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-search fa-fw\"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                    <div class=\"input-group-append\">
                      <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <!-- Counter - Alerts -->
                <span class=\"badge badge-danger badge-counter\">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                  Alerts Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-primary\">
                      <i class=\"fas fa-file-alt text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 12, 2019</div>
                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-success\">
                      <i class=\"fas fa-donate text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 7, 2019</div>
                    \$290.29 has been deposited into your account!
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-warning\">
                      <i class=\"fas fa-exclamation-triangle text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-envelope fa-fw\"></i>
                <!-- Counter - Messages -->
                <span class=\"badge badge-danger badge-counter\">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
                <h6 class=\"dropdown-header\">
                  Message Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-success\"></div>
                  </div>
                  <div class=\"font-weight-bold\">
                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\" alt=\"\">
                    <div class=\"status-indicator\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-warning\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-success\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
              </div>
            </li>

            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Valerie Luna</span>
                <img class=\"img-profile rounded-circle\" src=\"https://source.unsplash.com/QAB-WJcbgJk/60x60\">
              </a>
              <!-- Dropdown - User Information -->
              <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Settings
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Activity Log
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                  <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <h1 class=\"h3 mb-4 text-gray-800\">Blank Page</h1>
           ";
        // line 339
        $this->displayBlock('body', $context, $blocks);
        // line 343
        echo "
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class=\"sticky-footer bg-white\">
        <div class=\"container my-auto\">
          <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Logout Modal-->
  <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
          <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
        <div class=\"modal-footer\">
          <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
          <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
        </div>
      </div>
    </div>
  </div>
";
        // line 389
        $this->displayBlock('javascripts', $context, $blocks);
        // line 400
        echo "</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion Blog";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "              <!-- Custom fonts for this template-->
                <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
                <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
                  <!-- Custom styles for this template-->
               <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 339
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 340
        echo "          
        
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 389
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 390
        echo "  <!-- Bootstrap core JavaScript-->
  <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 398,  551 => 395,  545 => 392,  541 => 391,  538 => 390,  528 => 389,  516 => 340,  506 => 339,  494 => 19,  488 => 16,  485 => 15,  475 => 14,  456 => 13,  442 => 400,  440 => 389,  392 => 343,  390 => 339,  170 => 122,  67 => 21,  65 => 14,  61 => 13,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

         <title>{% block title %}Gestion Blog{% endblock %}</title>
        {% block stylesheets %}
              <!-- Custom fonts for this template-->
                <link href=\"{{asset(\"vendor/fontawesome-free/css/all.min.css\")}}\" rel=\"stylesheet\" type=\"text/css\">
                <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
                  <!-- Custom styles for this template-->
               <link href=\"{{asset(\"css/sb-admin-2.min.css\")}}\" rel=\"stylesheet\">
        {% endblock %}



</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

      <!-- Sidebar - Brand -->
      <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
          <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Admin Blog </div>
      </a>

      <!-- Divider -->
      <hr class=\"sidebar-divider my-0\">

      <!-- Nav Item - Dashboard -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"index.html\">
          <i class=\"fas fa-fw fa-tachometer-alt\"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Heading -->
      <div class=\"sidebar-heading\">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
          <i class=\"fas fa-fw fa-cog\"></i>
          <span>Components</span>
        </a>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <h6 class=\"collapse-header\">Custom Components:</h6>
            <a class=\"collapse-item\" href=\"buttons.html\">Buttons</a>
            <a class=\"collapse-item\" href=\"cards.html\">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\" aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
          <i class=\"fas fa-fw fa-wrench\"></i>
          <span>Utilities</span>
        </a>
        <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <h6 class=\"collapse-header\">Custom Utilities:</h6>
            <a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
            <a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
            <a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
            <a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Heading -->
      <div class=\"sidebar-heading\">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
          <i class=\"fas fa-fw fa-folder\"></i>
          <span>Pages</span>
        </a>
        <div id=\"collapsePages\" class=\"collapse show\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <h6 class=\"collapse-header\">Login Screens:</h6>
            <a class=\"collapse-item\" href=\"login.html\">Login</a>
            <a class=\"collapse-item\" href=\"register.html\">Register</a>
            <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
            <div class=\"collapse-divider\"></div>
            <h6 class=\"collapse-header\">Other Pages:</h6>
            <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
            <a class=\"collapse-item active\" href=\"blank.html\">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path(\"categorie_show\")}}\">
          <i class=\"fas fa-fw fa-chart-area\"></i>
          <span>Categorie</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"tables.html\">
          <i class=\"fas fa-fw fa-table\"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider d-none d-md-block\">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

          <!-- Sidebar Toggle (Topbar) -->
          <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
          </button>

          <!-- Topbar Search -->
          <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                  <i class=\"fas fa-search fa-sm\"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class=\"nav-item dropdown no-arrow d-sm-none\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-search fa-fw\"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                    <div class=\"input-group-append\">
                      <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <!-- Counter - Alerts -->
                <span class=\"badge badge-danger badge-counter\">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                  Alerts Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-primary\">
                      <i class=\"fas fa-file-alt text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 12, 2019</div>
                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-success\">
                      <i class=\"fas fa-donate text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 7, 2019</div>
                    \$290.29 has been deposited into your account!
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-warning\">
                      <i class=\"fas fa-exclamation-triangle text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-envelope fa-fw\"></i>
                <!-- Counter - Messages -->
                <span class=\"badge badge-danger badge-counter\">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
                <h6 class=\"dropdown-header\">
                  Message Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-success\"></div>
                  </div>
                  <div class=\"font-weight-bold\">
                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\" alt=\"\">
                    <div class=\"status-indicator\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-warning\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-success\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
              </div>
            </li>

            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Valerie Luna</span>
                <img class=\"img-profile rounded-circle\" src=\"https://source.unsplash.com/QAB-WJcbgJk/60x60\">
              </a>
              <!-- Dropdown - User Information -->
              <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Settings
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Activity Log
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                  <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <h1 class=\"h3 mb-4 text-gray-800\">Blank Page</h1>
           {% block body %}
          
        
            {% endblock %}

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class=\"sticky-footer bg-white\">
        <div class=\"container my-auto\">
          <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Logout Modal-->
  <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
          <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
        <div class=\"modal-footer\">
          <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
          <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
        </div>
      </div>
    </div>
  </div>
{% block javascripts %}
  <!-- Bootstrap core JavaScript-->
  <script src=\"{{asset(\"vendor/jquery/jquery.min.js\")}}\"></script>
  <script src=\"{{asset(\"vendor/bootstrap/js/bootstrap.bundle.min.js\")}}\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"{{asset(\"vendor/jquery-easing/jquery.easing.min.js\")}}\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"{{asset(\"js/sb-admin-2.min.js\")}}\"></script>
{% endblock %}
</body>

</html>

", "base.html.twig", "C:\\Users\\ASUS\\Downloads\\blog_ism-master\\blog_ism-master\\templates\\base.html.twig");
    }
}
