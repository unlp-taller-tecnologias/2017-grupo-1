<?php

/* :common:content.html.twig */
class __TwigTemplate_f4a0ef5de641cbc34b8d82d03b721cb2f9940243508f73b07593055964a71118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d9e063e20fe01067213c4f281e4e86c1c2e2731dc89f74b7bfece4de4752e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9e063e20fe01067213c4f281e4e86c1c2e2731dc89f74b7bfece4de4752e0a->enter($__internal_7d9e063e20fe01067213c4f281e4e86c1c2e2731dc89f74b7bfece4de4752e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":common:content.html.twig"));

        // line 1
        echo "<!-- start: MAIN CONTAINER -->
<div class=\"main-container inner\">
    <!-- start: PAGE -->
    <div class=\"main-content\">
        <!-- start: PANEL CONFIGURATION MODAL FORM -->
        <div class=\"modal fade\" id=\"panel-config\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                            &times;
                        </button>
                        <h4 class=\"modal-title\">Panel Configuration</h4>
                    </div>
                    <div class=\"modal-body\">
                        Here will be a configuration form
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
                            Close
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\">
                            Save changes
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- end: SPANEL CONFIGURATION MODAL FORM -->
        <div class=\"container\">
            <!-- start: PAGE HEADER -->
            <!-- start: TOOLBAR -->
            <div class=\"toolbar row\">
                <div class=\"col-sm-6 hidden-xs\">
                    <div class=\"page-header\">
                        <h1>Dashboard <small>overview &amp; stats </small></h1>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xs-12\">
                    <a href=\"#\" class=\"back-subviews\">
                        <i class=\"fa fa-chevron-left\"></i> BACK
                    </a>
                    <a href=\"#\" class=\"close-subviews\">
                        <i class=\"fa fa-times\"></i> CLOSE
                    </a>
                    <div class=\"toolbar-tools pull-right\">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class=\"nav navbar-right\">
                            <!-- start: TO-DO DROPDOWN -->
                            <li class=\"dropdown\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
                                    <i class=\"fa fa-plus\"></i> SUBVIEW
                                    <div class=\"tooltip-notification hide\">
                                        <div class=\"tooltip-notification-arrow\"></div>
                                        <div class=\"tooltip-notification-inner\">
                                            <div>
                                                <div class=\"semi-bold\">
                                                    HI THERE!
                                                </div>
                                                <div class=\"message\">
                                                    Try the Subview Live Experience
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-light dropdown-subview\">
                                    <li class=\"dropdown-header\">
                                        Notes
                                    </li>
                                    <li>
                                        <a href=\"#newNote\" class=\"new-note\"><span class=\"fa-stack\"> <i class=\"fa fa-file-text-o fa-stack-1x fa-lg\"></i> <i class=\"fa fa-plus fa-stack-1x stack-right-bottom text-danger\"></i> </span> Add new note</a>
                                    </li>
                                    <li>
                                        <a href=\"#readNote\" class=\"read-all-notes\"><span class=\"fa-stack\"> <i class=\"fa fa-file-text-o fa-stack-1x fa-lg\"></i> <i class=\"fa fa-share fa-stack-1x stack-right-bottom text-danger\"></i> </span> Read all notes</a>
                                    </li>
                                    <li class=\"dropdown-header\">
                                        Calendar
                                    </li>
                                    <li>
                                        <a href=\"#newEvent\" class=\"new-event\"><span class=\"fa-stack\"> <i class=\"fa fa-calendar-o fa-stack-1x fa-lg\"></i> <i class=\"fa fa-plus fa-stack-1x stack-right-bottom text-danger\"></i> </span> Add new event</a>
                                    </li>
                                    <li>
                                        <a href=\"#showCalendar\" class=\"show-calendar\"><span class=\"fa-stack\"> <i class=\"fa fa-calendar-o fa-stack-1x fa-lg\"></i> <i class=\"fa fa-share fa-stack-1x stack-right-bottom text-danger\"></i> </span> Show calendar</a>
                                    </li>
                                    <li class=\"dropdown-header\">
                                        Contributors
                                    </li>
                                    <li>
                                        <a href=\"#newContributor\" class=\"new-contributor\"><span class=\"fa-stack\"> <i class=\"fa fa-user fa-stack-1x fa-lg\"></i> <i class=\"fa fa-plus fa-stack-1x stack-right-bottom text-danger\"></i> </span> Add new contributor</a>
                                    </li>
                                    <li>
                                        <a href=\"#showContributors\" class=\"show-contributors\"><span class=\"fa-stack\"> <i class=\"fa fa-user fa-stack-1x fa-lg\"></i> <i class=\"fa fa-share fa-stack-1x stack-right-bottom text-danger\"></i> </span> Show all contributor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
                                    <span class=\"messages-count badge badge-default hide\">3</span> <i class=\"fa fa-envelope\"></i> MESSAGES
                                </a>
                                <ul class=\"dropdown-menu dropdown-light dropdown-messages\">
                                    <li>
                                        <span class=\"dropdown-header\"> You have 9 messages</span>
                                    </li>
                                    <li>
                                        <div class=\"drop-down-wrapper ps-container\">
                                            <ul>
                                                <li class=\"unread\">
                                                    <a href=\"javascript:;\" class=\"unread\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"thread-image\">
                                                                <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                            </div>
                                                            <div class=\"thread-content\">
                                                                <span class=\"author\">Nicole Bell</span>
                                                                <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                <span class=\"time\"> Just Now</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\" class=\"unread\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"thread-image\">
                                                                <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                            </div>
                                                            <div class=\"thread-content\">
                                                                <span class=\"author\">Steven Thompson</span>
                                                                <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                <span class=\"time\">8 hrs</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"thread-image\">
                                                                <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                            </div>
                                                            <div class=\"thread-content\">
                                                                <span class=\"author\">Kenneth Ross</span>
                                                                <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                <span class=\"time\">14 hrs</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"view-all\">
                                        <a href=\"pages_messages.html\">
                                            See All
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-search\">
                                <a href=\"#\">
                                    <i class=\"fa fa-search\"></i> SEARCH
                                </a>
                                <!-- start: SEARCH POPOVER -->
                                <div class=\"popover bottom search-box transition-all\">
                                    <div class=\"arrow\"></div>
                                    <div class=\"popover-content\">
                                        <!-- start: SEARCH FORM -->
                                        <form class=\"\" id=\"searchform\" action=\"#\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-main-color btn-squared\" type=\"button\">
                                                        <i class=\"fa fa-search\"></i>
                                                    </button> </span>
                                            </div>
                                        </form>
                                        <!-- end: SEARCH FORM -->
                                    </div>
                                </div>
                                <!-- end: SEARCH POPOVER -->
                            </li>
                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>
                </div>
            </div>
            <!-- end: TOOLBAR -->
            <!-- end: PAGE HEADER -->
            <!-- start: BREADCRUMB -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ol class=\"breadcrumb\">
                        <li>
                            <a href=\"#\">
                                Dashboard
                            </a>
                        </li>
                        <li class=\"active\">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class=\"row\">
                <div class=\"col-md-6 col-lg-3 col-sm-6\">
                    <div class=\"panel panel-default panel-white core-box\">
                        <div class=\"panel-tools\">
                            <a href=\"#\" class=\"btn btn-xs btn-link panel-close\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-green padding-20 text-center core-icon\">
                                <i class=\"fa fa-bar-chart-o fa-2x icon-big\"></i>
                            </div>
                            <div class=\"padding-20 core-content\">
                                <h3 class=\"title block no-margin\">SEO</h3>
                                <span class=\"subtitle\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                            </div>
                        </div>
                        <div class=\"panel-footer clearfix no-padding\">
                            <div class=\"\"></div>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More Options\"><i class=\"fa fa-cog\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add Content\"><i class=\"fa fa-plus\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"View More\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 col-sm-6\">
                    <div class=\"panel panel-default panel-white core-box\">
                        <div class=\"panel-tools\">
                            <a href=\"#\" class=\"btn btn-xs btn-link panel-close\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-blue padding-20 text-center core-icon\">
                                <i class=\"fa fa-code fa-2x icon-big\"></i>
                            </div>
                            <div class=\"padding-20 core-content\">
                                <h3 class=\"title block no-margin\">Programming</h3>
                                <span class=\"subtitle\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                            </div>
                        </div>
                        <div class=\"panel-footer clearfix no-padding\">
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More Options\"><i class=\"fa fa-cog\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add Content\"><i class=\"fa fa-plus\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"View More\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 col-sm-6\">
                    <div class=\"panel panel-default panel-white core-box\">
                        <div class=\"panel-tools\">
                            <a href=\"#\" class=\"btn btn-xs btn-link panel-close\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-red padding-20 text-center core-icon\">
                                <i class=\"fa fa-desktop fa-2x icon-big\"></i>
                            </div>
                            <div class=\"padding-20 core-content\">
                                <h3 class=\"title block no-margin\">Web design</h3>
                                <span class=\"subtitle\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                            </div>
                        </div>
                        <div class=\"panel-footer clearfix no-padding\">
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More Options\"><i class=\"fa fa-cog\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add Content\"><i class=\"fa fa-plus\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"View More\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 col-sm-6\">
                    <div class=\"panel panel-default panel-white core-box\">
                        <div class=\"panel-tools\">
                            <a href=\"#\" class=\"btn btn-xs btn-link panel-close\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-azure padding-20 text-center core-icon\">
                                <i class=\"fa fa-shopping-cart fa-2x icon-big\"></i>
                            </div>
                            <div class=\"padding-20 core-content\">
                                <h3 class=\"title block no-margin\">Orders</h3>
                                <span class=\"subtitle\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                            </div>
                        </div>
                        <div class=\"panel-footer clearfix no-padding\">
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More Options\"><i class=\"fa fa-cog\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add Content\"><i class=\"fa fa-plus\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"View More\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-lg-4 col-sm-6\">
                    <div class=\"panel panel-blue core-box\">
                        <div class=\"e-slider owl-carousel owl-theme\">
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold\">
                                            Working on
                                        </div>
                                        <div class=\"text-white space15\">
                                            Navigation Illustration (<i>corporate website redesign</i>)
                                        </div>
                                        <div class=\"progress progress-xs transparent-black no-radius space5\">
                                            <div aria-valuetransitiongoal=\"88\" class=\"progress-bar progress-bar-success partition-white animate-progress-bar\" ></div>
                                        </div>
                                        <div class=\"text-light\">
                                            Leave Time
                                        </div>
                                        <div class=\"text-white text-extra-large pull-left\">
                                            2h 38m
                                        </div>
                                        <div class=\"text-white text-large pull-right\">
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-pause\"></i> Pause</a>
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-check\"></i> Complete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold\">
                                            Working on
                                        </div>
                                        <div class=\"text-white space15\">
                                            Prepare Commercial Offer For Mobile App
                                        </div>
                                        <div class=\"progress progress-xs transparent-black no-radius space5\">
                                            <div aria-valuetransitiongoal=\"59\" class=\"progress-bar progress-bar-success partition-white animate-progress-bar\" ></div>
                                        </div>
                                        <div class=\"text-light\">
                                            Leave Time
                                        </div>
                                        <div class=\"text-white text-extra-large pull-left\">
                                            8h 56m
                                        </div>
                                        <div class=\"text-white text-large pull-right\">
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-pause\"></i> Pause</a>
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-check\"></i> Complete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold\">
                                            Working on
                                        </div>
                                        <div class=\"text-white space15\">
                                            Release iPhone Update
                                        </div>
                                        <div class=\"progress progress-xs transparent-black no-radius space5\">
                                            <div aria-valuetransitiongoal=\"78\" class=\"progress-bar progress-bar-success partition-white animate-progress-bar\" ></div>
                                        </div>
                                        <div class=\"text-light\">
                                            Leave Time
                                        </div>
                                        <div class=\"text-white text-extra-large pull-left\">
                                            48h 32m
                                        </div>
                                        <div class=\"text-white text-large pull-right\">
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-pause\"></i> Pause</a>
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-check\"></i> Complete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 col-sm-6\">
                    <div class=\"panel panel-green\">
                        <div class=\"e-slider owl-carousel owl-theme\">
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold space15\">
                                            SOCIAL
                                        </div>
                                        <div class=\"space5\">
                                            <i class=\"fa fa-github fa-4x pull-left\"></i>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                            <br/>
                                            Ut enim ad minim veniam...
                                        </div>
                                        <span class=\"text-light text-small block pull-right\"> <i class=\"fa fa-clock-o\"></i> 11 min ago </span>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold space15\">
                                            SOCIAL
                                        </div>
                                        <div class=\"space5\">
                                            <i class=\"fa fa-facebook fa-4x pull-left\"></i>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy ibh euismod tincidunt.
                                        </div>
                                        <span class=\"text-light text-small block pull-right\"> <i class=\"fa fa-clock-o\"></i> 27 min ago </span>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold space15\">
                                            SOCIAL
                                        </div>
                                        <div class=\"space5\">
                                            <i class=\"fa fa-twitter fa-4x pull-left\"></i>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy ibh euismod tincidunt.
                                        </div>
                                        <span class=\"text-light text-small block pull-right\"> <i class=\"fa fa-clock-o\"></i> 56 min ago </span>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4 col-sm-12\">
                    <div id=\"notes\">
                        <div class=\"panel panel-note\">
                            <div class=\"e-slider owl-carousel owl-theme\">
                                <div class=\"item\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"no-margin\">This is a Note</h4>
                                    </div>
                                    <div class=\"panel-body space10\">
                                        <div class=\"note-short-content\">
                                            Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                                        </div>
                                        <div class=\"note-content\">
                                            Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
                                            Quis aute iure reprehenderit in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur.
                                            <br>
                                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            <br>
                                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                            <br>
                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                            <br>
                                            Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                            <br>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                            <br>
                                            Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                            <br>
                                            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        <div class=\"avatar-note\"><img src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-2-small.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <span class=\"author-note\">Nicole</span>
                                        <time class=\"timestamp\" title=\"2014-02-18T00:00:00-05:00\">
                                            2014-02-18T00:00:00-05:00
                                        </time>
                                        <div class=\"note-options pull-right\">
                                            <a href=\"#readNote\" class=\"read-note\" data-subviews-options='{\"startFrom\": \"right\", \"onShow\": \"readNote(subViewElement)\", \"onHide\": \"hideNote()\"}'><i class=\"fa fa-chevron-circle-right\"></i> Read</a><a href=\"#\" class=\"delete-note\"><i class=\"fa fa-times\"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"no-margin\">This is the second Note</h4>
                                    </div>
                                    <div class=\"panel-body space10\">
                                        <div class=\"note-short-content\">
                                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem, quia voluptas sit...
                                        </div>
                                        <div class=\"note-content\">
                                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            <br>
                                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                            <br>
                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                            <br>
                                            Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                            <br>
                                            Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                            <br>
                                            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        <div class=\"note-options pull-right\">
                                            <a href=\"#readNote\" class=\"show-subviews read-note\" data-subviews-options='{\"startFrom\": \"right\", \"onShow\": \"readNote(subViewElement)\", \"onHide\": \"hideNote()\"}'><i class=\"fa fa-chevron-circle-right\"></i> Read</a><a href=\"#\" class=\"delete-note\"><i class=\"fa fa-times\"></i> Delete</a>
                                        </div>
                                        <div class=\"avatar-note\"><img src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-3-small.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <span class=\"author-note\">Steven</span>
                                        <time class=\"timestamp\" title=\"2014-02-18T00:00:00-05:00\">
                                            2014-02-18T00:00:00-05:00
                                        </time>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"no-margin\">This is yet another Note</h4>
                                    </div>
                                    <div class=\"panel-body space10\">
                                        <div class=\"note-short-content\">
                                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores...
                                        </div>
                                        <div class=\"note-content\">
                                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                            <br>
                                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            <br>
                                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                            <br>
                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        <div class=\"note-options pull-right\">
                                            <a href=\"#readNote\" class=\"show-subviews read-note\" data-subviews-options='{\"startFrom\": \"right\", \"onShow\": \"readNote(subViewElement)\", \"onHide\": \"hideNote()\"}'><i class=\"fa fa-chevron-circle-right\"></i> Read</a><a href=\"#\" class=\"delete-note\"><i class=\"fa fa-times\"></i> Delete</a>
                                        </div>
                                        <div class=\"avatar-note\"><img src=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-4-small.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <span class=\"author-note\">Ella</span>
                                        <time class=\"timestamp\" title=\"2014-02-18T00:00:00-05:00\">
                                            2014-02-18T00:00:00-05:00
                                        </time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-7\">
                    <div class=\"panel panel-white\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Earnings</h4>
                            <ul class=\"panel-heading-tabs border-light\">
                                <li>
                                    <div id=\"reportrange\" class=\"pull-right\">
                                        <span>This Week </span><i class=\"fa fa-angle-down\"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-up text-green\"></i><span class=\"value\">15</span><span class=\"percentage\">%</span>
                                    </div>
                                </li>
                                <li class=\"panel-tools\">
                                    <div class=\"dropdown\">
                                        <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                            <i class=\"fa fa-cog\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                            <li>
                                                <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-refresh\" href=\"#\">
                                                    <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                    <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-expand\" href=\"#\">
                                                    <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                        <i class=\"fa fa-times\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-body no-padding partition-green\">
                            <div class=\"col-md-3 col-lg-2 no-padding\">
                                <div class=\"partition-body padding-15\">
                                    <ul class=\"mini-stats\">
                                        <li class=\"col-md-12 col-sm-4 col-xs-4 no-padding\">
                                            <div class=\"sparkline-bar sparkline-1\">
                                                <span></span>
                                            </div>
                                            <div class=\"values\">
                                                <strong>18304</strong>
                                                Sales
                                            </div>
                                        </li>
                                        <li class=\"col-md-12 col-sm-4 col-xs-4 no-padding\">
                                            <div class=\"sparkline-bar sparkline-2\">
                                                <span></span>
                                            </div>
                                            <div class=\"values\">
                                                <strong>&#36;3,833</strong>
                                                Earnings
                                            </div>
                                        </li>
                                        <li class=\"col-md-12 col-sm-4 col-xs-4 no-padding\">
                                            <div class=\"sparkline-bar sparkline-3\">
                                                <span></span>
                                            </div>
                                            <div class=\"values\">
                                                <strong>&#36;848</strong>
                                                Referrals
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-9 col-lg-10 no-padding partition-white\">
                                <div class=\"partition\">
                                    <div class=\"partition-body padding-15\">
                                        <div class=\"height-300\">
                                            <div id=\"chart1\" class='with-3d-shadow with-transitions'>
                                                <svg></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5\">
                    <div class=\"panel panel-red panel-calendar\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Appointments</h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"height-300\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"actual-date\">
                                            <span class=\"actual-day\"></span>
                                            <span class=\"actual-month\"></span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <div class=\"clock-wrapper\">
                                                    <div class=\"clock\">
                                                        <div class=\"circle\">
                                                            <div class=\"face\">
                                                                <div id=\"hour\"></div>
                                                                <div id=\"minute\"></div>
                                                                <div id=\"second\"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <div class=\"weather text-light\">
                                                    <i class=\"wi-day-sunny\"></i>
                                                    25°
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"row\">
                                            <div class=\"appointments border-top border-bottom border-light space15\">
                                                <a class=\"btn btn-sm owl-prev text-light\">
                                                    <i class=\"fa fa-chevron-left\"></i>
                                                </a>
                                                <div class=\"e-slider owl-carousel owl-theme\" data-plugin-options='{\"transitionStyle\": \"goDown\", \"pagination\": false}'>
                                                    <div class=\"item\">
                                                        <div class=\"inline-block padding-10 border-right border-light\">
                                                            <span class=\"bold-text text-small\"><i class=\"fa fa-clock-o\"></i> 17:00</span>
                                                            <span class=\"text-light text-extra-small\">1 hour</span>
                                                        </div>
                                                        <div class=\"inline-block padding-10\">
                                                            <span class=\"bold-text text-small\">NETWORKING</span>
                                                            <span class=\"text-light text-small\">Out to design conference</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"item\">
                                                        <div class=\"inline-block padding-10 border-right border-light\">
                                                            <span class=\"bold-text text-small\"><i class=\"fa fa-clock-o\"></i> 18:30</span>
                                                            <span class=\"text-light text-extra-small\">30 mins</span>
                                                        </div>
                                                        <div class=\"inline-block padding-10\">
                                                            <span class=\"bold-text text-small\">BOOTSTRAP SEMINAR</span>
                                                            <span class=\"text-light text-small\">Problem Solving</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"item\">
                                                        <div class=\"inline-block padding-10 border-right border-light\">
                                                            <span class=\"bold-text text-small\"><i class=\"fa fa-clock-o\"></i> 20:00</span>
                                                            <span class=\"text-light text-extra-small\">2 hour</span>
                                                        </div>
                                                        <div class=\"inline-block padding-10\">
                                                            <span class=\"bold-text text-small\">Lunch with Nicole</span>
                                                            <span class=\"text-light text-small\">Next on Tuesday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class=\"btn btn-sm owl-next text-light\"><i class=\"fa fa-chevron-right\"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"pull-right\">
                                            <a href=\"#newEvent\" class=\"btn btn-sm btn-transparent-white new-event\"><i class=\"fa fa-plus\"></i> New Event </a>
                                            <a href=\"#showCalendar\" class=\"btn btn-sm btn-transparent-white show-calendar\"><i class=\"fa fa-calendar-o\"></i> Calendar </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-7 col-lg-4\">
                    <div class=\"panel panel-dark\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">Browser</h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-green padding-15 text-center\">
                                <h4 class=\"no-margin\">Monthly Statistics</h4>
                                <span class=\"text-light\">based on the major browsers</span>
                            </div>
                            <div id=\"accordion\" class=\"panel-group accordion accordion-white no-margin\">
                                <div class=\"panel no-radius\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a href=\"#collapseOne\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle padding-15\">
                                                <i class=\"icon-arrow\"></i>
                                                This Month <span class=\"label label-danger pull-right\">3</span>
                                            </a></h4>
                                    </div>
                                    <div class=\"panel-collapse collapse in\" id=\"collapseOne\">
                                        <div class=\"panel-body no-padding partition-light-grey\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\">1</td>
                                                        <td>Google Chrome</td>
                                                        <td class=\"center\">4909</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">2</td>
                                                        <td>Mozilla Firefox</td>
                                                        <td class=\"center\">3857</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">3</td>
                                                        <td>Safari</td>
                                                        <td class=\"center\">1789</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">4</td>
                                                        <td>Internet Explorer</td>
                                                        <td class=\"center\">612</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel no-radius\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a href=\"#collapseTwo\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle padding-15 collapsed\">
                                                <i class=\"icon-arrow\"></i>
                                                Last Month
                                            </a></h4>
                                    </div>
                                    <div class=\"panel-collapse collapse\" id=\"collapseTwo\">
                                        <div class=\"panel-body no-padding partition-light-grey\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\">1</td>
                                                        <td>Google Chrome</td>
                                                        <td class=\"center\">5228</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">2</td>
                                                        <td>Mozilla Firefox</td>
                                                        <td class=\"center\">2853</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">3</td>
                                                        <td>Safari</td>
                                                        <td class=\"center\">1948</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">4</td>
                                                        <td>Internet Explorer</td>
                                                        <td class=\"center\">456</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel no-radius\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a href=\"#collapseThree\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle padding-15 collapsed\">
                                                <i class=\"icon-arrow\"></i>
                                                Two Months Ago
                                            </a></h4>
                                    </div>
                                    <div class=\"panel-collapse collapse\" id=\"collapseThree\">
                                        <div class=\"panel-body no-padding partition-light-grey\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\">1</td>
                                                        <td>Google Chrome</td>
                                                        <td class=\"center\">4256</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">2</td>
                                                        <td>Mozilla Firefox</td>
                                                        <td class=\"center\">3557</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">3</td>
                                                        <td>Safari</td>
                                                        <td class=\"center\">1435</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">4</td>
                                                        <td>Internet Explorer</td>
                                                        <td class=\"center\">423</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"panel panel-blue\">
                                <div class=\"panel-body padding-20 text-center\">
                                    <div class=\"space10\">
                                        <h5 class=\"text-white semi-bold no-margin p-b-5\">Today</h5>
                                        <h3 class=\"text-white no-margin\"><span class=\"text-small\">&#36;</span>1,450</h3>
                                        253 Sales
                                    </div>
                                    <div class=\"sparkline-4 space10\">
                                        <span ></span>
                                    </div>
                                    <span class=\"text-light\"><i class=\"fa fa-clock-o\"></i> 1 hour ago</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"panel panel-green\">
                                <div class=\"panel-body padding-20 text-center\">
                                    <div class=\"space10\">
                                        <h5 class=\"text-white semi-bold no-margin p-b-5\">Yesterday</h5>
                                        <h3 class=\"text-white no-margin\"><span class=\"text-small\">&#36;</span>1,250</h3>
                                        198 Sales
                                    </div>
                                    <div class=\"sparkline-5 space10\">
                                        <span></span>
                                    </div>
                                    <span class=\"text-light\"><i class=\"fa fa-clock-o\"></i> 1 hour ago</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"panel\">
                                <div class=\"panel-body\">
                                    <div class=\"easy-pie-chart\">
                                        <span class=\"cpu number appear\" data-percent=\"82\" data-plugin-options='{\"barColor\": \"#ff0000\"}'> <span class=\"percent\"></span> </span>
                                        <div class=\"label-chart\">
                                            <h4 class=\"no-margin\">Disk Space</h4>
                                        </div>
                                    </div>
                                    <div class=\"small-text text-center space15\">
                                        <span class=\"block\">Recommended</span><span class=\"label label-danger vertical-align-bottom\">85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"panel\">
                                <div class=\"panel-body\">
                                    <div class=\"easy-pie-chart\">
                                        <span class=\"bounce number appear\" data-percent=\"44\" data-plugin-options='{\"barColor\": \"#35aa47\"}'> <span class=\"percent\"></span> </span>
                                        <div class=\"label-chart\">
                                            <h4 class=\"no-margin\">CPU</h4>
                                        </div>
                                    </div>
                                    <div class=\"text-center space15\">
                                        <span class=\"block\">Recommended</span><span class=\"label label-danger vertical-align-bottom\">58%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"panel panel-white\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Users</h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"padding-10\">
                                <img width=\"50\" height=\"50\" alt=\"\" class=\"img-circle pull-left\" src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-1-big.jpg"), "html", null, true);
        echo "\">
                                <h4 class=\"no-margin inline-block padding-5\">Peter Clark <span class=\"block text-small text-left\">UI Designer</span></h4>
                                <div class=\"pull-right padding-15\">
                                    <span class=\"text-small text-bold text-green\"><i class=\"fa fa-dot-circle-o\"></i> on-line</span>
                                </div>
                            </div>
                            <div class=\"clearfix padding-5 space5\">
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <div class=\"border-right border-dark\">
                                        <a href=\"#\" class=\"text-dark\">
                                            <i class=\"fa fa-heart-o text-red\"></i> 250
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <div class=\"border-right border-dark\">
                                        <a href=\"#\" class=\"text-dark\">
                                            <i class=\"fa fa-bookmark-o text-green\"></i> 20
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <a href=\"#\" class=\"text-dark\"><i class=\"fa fa-comment-o text-azure\"></i> 544</a>
                                </div>
                            </div>
                            <div class=\"tabbable no-margin no-padding partition-dark\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"active\">
                                        <a data-toggle=\"tab\" href=\"#users_tab_example1\">
                                            All
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a data-toggle=\"tab\" href=\"#users_tab_example2\">
                                            View and Edit
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a data-toggle=\"tab\" href=\"#users_tab_example3\">
                                            View Only
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"tab-content partition-white\">
                                    <div id=\"users_tab_example1\" class=\"tab-pane padding-bottom-5 active\">
                                        <div class=\"panel-scroll height-230\">
                                            <table class=\"table table-striped table-hover\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">UI Designer</span><span class=\"text-large\">Peter Clark</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Content Designer</span><span class=\"text-large\">Nicole Bell</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Visual Designer</span><span class=\"text-large\">Steven Thompson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Senior Designer</span><span class=\"text-large\">Kenneth Ross</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Web Editor</span><span class=\"text-large\">Ella Patterson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id=\"users_tab_example2\" class=\"tab-pane padding-bottom-5\">
                                        <div class=\"panel-scroll height-230\">
                                            <table class=\"table table-striped table-hover\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Visual Designer</span><span class=\"text-large\">Steven Thompson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Senior Designer</span><span class=\"text-large\">Kenneth Ross</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Web Editor</span><span class=\"text-large\">Ella Patterson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id=\"users_tab_example3\" class=\"tab-pane padding-bottom-5\">
                                        <div class=\"panel-scroll height-230\">
                                            <table class=\"table table-striped table-hover\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Content Designer</span><span class=\"text-large\">Nicole Bell</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Visual Designer</span><span class=\"text-large\">Steven Thompson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Senior Designer</span><span class=\"text-large\">Kenneth Ross</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"";
        // line 1463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Web Editor</span><span class=\"text-large\">Ella Patterson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-7 col-lg-4\">
                    <div class=\"panel panel-bricky\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Next <span class=\"text-bold\">Orders</span></h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-5\">
                                    <div id='chart3'>
                                        <svg></svg>
                                    </div>
                                </div>
                                <div class=\"col-md-7\">
                                    <div class=\"space20 padding-5 border-bottom border-light\">
                                        <h4 class=\"pull-left no-margin space5\">32.16K &euro;</h4>
                                        <span class=\"text-dark pull-right\">12:30</span>
                                        <div class=\"clearfix\"></div>
                                        <span class=\"text-light\">Supply acc. for Emea Region</span>
                                    </div>
                                    <div class=\"space20 padding-5 border-bottom border-light\">
                                        <h4 class=\"pull-left no-margin space5\">127.52K \$</h4>
                                        <span class=\"text-dark pull-right\">12:30</span>
                                        <div class=\"clearfix\"></div>
                                        <span class=\"text-light\">London HQ Account</span>
                                    </div>
                                    <div class=\"space20 padding-5 border-bottom border-light\">
                                        <h4 class=\"pull-left no-margin space5\">127.52K \$</h4>
                                        <span class=\"text-dark pull-right\">12:30</span>
                                        <div class=\"clearfix\"></div>
                                        <span class=\"text-light\">London HQ Account</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-footer partition-white\">
                            <div class=\"clearfix padding-5 space5\">
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <div class=\"border-right border-dark\">
                                        <span class=\"text-bold block text-extra-large\">90%</span>
                                        <span class=\"text-light\">Satisfied</span>
                                    </div>
                                </div>
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <div class=\"border-right border-dark\">
                                        <span class=\"text-bold block text-extra-large\">2%</span>
                                        <span class=\"text-light\">Unsatisfied</span>
                                    </div>
                                </div>
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <span class=\"text-bold block text-extra-large\">8%</span>
                                    <span class=\"text-light\">NA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5\">
                    <div class=\"panel uploads\">
                        <div class=\"panel-body panel-portfolio no-padding\">
                            <div class=\"portfolio-grid portfolio-hover\">
                                <div class=\"overlayer bottom-left fullwidth\">
                                    <div class=\"overlayer-wrapper\">
                                        <div class=\"padding-20\">
                                            <h4 class=\"text-white no-margin\">Recent Uploads</h4>
                                            <h5 class=\"text-white\">Take a look at what other users are uploading right now</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"e-slider owl-carousel owl-theme portfolio-grid portfolio-hover\" data-plugin-options='{\"pagination\": false, \"stopOnHover\": true}'>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 1602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/image01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"caption\">
                                            <h2 class=\"caption-title\">Hover Style #10</h2>
                                            <p class=\"caption-description\">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                            </p>
                                            <a href=\"#\" class=\"caption-button\">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 1614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/image02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"caption\">
                                            <h2 class=\"caption-title\">Hover Style #10</h2>
                                            <p class=\"caption-description\">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                            </p>
                                            <a href=\"#\" class=\"caption-button\">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 1626
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/image03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"caption\">
                                            <h2 class=\"caption-title\">Hover Style #10</h2>
                                            <p class=\"caption-description\">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                            </p>
                                            <a href=\"#\" class=\"caption-button\">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"";
        // line 1638
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rapido/images/image04.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"caption\">
                                            <h2 class=\"caption-title\">Hover Style #10</h2>
                                            <p class=\"caption-description\">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                            </p>
                                            <a href=\"#\" class=\"caption-button\">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"partition partition-white padding-15\">
                                <div class=\"navigator\">
                                    <a href=\"#\" class=\"circle-50 partition-white owl-prev\"><i class=\"fa fa-chevron-left text-extra-large\"></i></a>
                                    <a href=\"#\" class=\"circle-50 partition-white owl-next\"><i class=\"fa fa-chevron-right text-extra-large\"></i></a>
                                </div>
                                <div class=\"clearfix space5\">
                                    <div class=\"col-xs-12 text-center no-padding space10\">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </div>
                                    <div class=\"col-xs-12 text-center no-padding\">
                                        <a class=\"tags\">
                                            New York
                                        </a>
                                        <a class=\"tags\">
                                            London
                                        </a>
                                        <a class=\"tags\">
                                            Rome
                                        </a>
                                        <a class=\"tags\">
                                            Paris
                                        </a>
                                        <a class=\"tags\">
                                            Berlin
                                        </a>
                                        <a class=\"tags\">
                                            Amsterdam
                                        </a>
                                        <a class=\"tags\">
                                            Madrid
                                        </a>
                                    </div>
                                </div>
                                <div class=\"clearfix padding-5\">
                                    <div class=\"col-xs-4 text-center no-padding\">
                                        <div class=\"border-right border-dark\">
                                            <a href=\"#\" class=\"text-dark\">
                                                <i class=\"fa fa-heart-o text-red\"></i> 250
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-4 text-center no-padding\">
                                        <div class=\"border-right border-dark\">
                                            <a href=\"#\" class=\"text-dark\">
                                                <i class=\"fa fa-bookmark-o text-green\"></i> 20
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-4 text-center no-padding\">
                                        <a href=\"#\" class=\"text-dark\"><i class=\"fa fa-comment-o text-azure\"></i> 544</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"panel panel-green\">
                        <div class=\"panel-heading border-light\">
                            <span class=\"text-extra-small text-dark\">LAST PROJECT: </span><span class=\"text-large text-white\">Luxury Store</span>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"row no-margin\">
                                <div class=\"padding-10 col-md-12\">
                                    <div class=\"progress progress-xs transparent-black no-radius space5\">
                                        <div aria-valuetransitiongoal=\"88\" class=\"progress-bar progress-bar-success partition-white animate-progress-bar\" ></div>
                                    </div>
                                    <span class=\"text-extra-small\">88% status</span>
                                </div>
                                <div class=\"padding-10 col-md-12\">
                                    <div class=\"pull-left\">
                                        <span class=\"background-dark padding-5 radius-5 text-small inline-block\"><i class=\"fa fa-clock-o\"></i> 43 days</span>
                                        <span class=\"background-dark padding-5 radius-5 text-small inline-block\"><i class=\"fa fa-calendar-o\"></i> January 04</span>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-transparent-white\"><i class=\"fa fa-plus\"></i> New Projext </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tabbable no-margin no-padding partition-dark\">
                                <ul class=\"nav nav-tabs\" id=\"myTab2\">
                                    <li class=\"active\">
                                        <a data-toggle=\"tab\" href=\"#todo_tab_example1\">
                                            To-do
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a data-toggle=\"tab\" href=\"#todo_tab_example2\">
                                            Next Week
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a data-toggle=\"tab\" href=\"#todo_tab_example3\">
                                            Next Month
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"tab-content partition-white\">
                                    <div id=\"todo_tab_example1\" class=\"tab-pane padding-bottom-5 active\">
                                        <div class=\"panel-scroll height-180\">
                                            <ul class=\"todo\">
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Staff Meeting</span><span class=\"label label-danger\"> today</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 13:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">New frontend layout</span><span class=\"label label-danger\"> today</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 20:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Hire developers</span><span class=\"label label-warning\"> tommorow</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 7:00 AM Tomorrow</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Staff Meeting</span><span class=\"label label-success\"> this week</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 12:00 AM this week</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id=\"todo_tab_example2\" class=\"tab-pane padding-bottom-5\">
                                        <div class=\"panel-scroll height-180\">
                                            <ul class=\"todo\">
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Hire developers</span><span class=\"label label-success\"> Monday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 12:00 AM this week</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Lunch with Nicole</span><span class=\"label label-danger\"> Wednesday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 20:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">New frontend layout</span><span class=\"label label-warning\"> Wednesday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 7:00 AM Tomorrow</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Staff Meeting</span><span class=\"label label-danger\"> Friday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 13:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id=\"todo_tab_example3\" class=\"tab-pane padding-bottom-5\">
                                        <div class=\"panel-scroll height-180\">
                                            <ul class=\"todo\">
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Lunch with Boss</span><span class=\"label label-warning\"> 01 monday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 12:00 AM this week</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Bootstrap Seminar</span><span class=\"label label-success\"> 05 wednesday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 20:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">New frontend layout</span><span class=\"label label-warning\"> 05 Wednesday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 7:00 AM Tomorrow</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Staff Meeting</span><span class=\"label label-danger\"> 07 Friday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 13:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-7\">
                    <div class=\"panel panel-white\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Site <span class=\"text-bold\">Visits</span></h4>
                            <ul class=\"panel-heading-tabs border-light\">
                                <li>
                                    <div class=\"pull-right\">
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-green dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                Tools <span class=\"caret\"></span>
                                            </a>
                                            <ul role=\"menu\" class=\"dropdown-menu\">
                                                <li class=\"dropdown-header\" role=\"presentation\">
                                                    Dropdown header
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        Action
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        Another action
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        Something else here
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li class=\"dropdown-header\" role=\"presentation\">
                                                    Dropdown header
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        Separated link
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-up text-green\"></i><span class=\"value\">11</span><span class=\"percentage\">%</span>
                                    </div>
                                </li>
                                <li class=\"panel-tools\">
                                    <div class=\"dropdown\">
                                        <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                            <i class=\"fa fa-cog\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                            <li>
                                                <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-refresh\" href=\"#\">
                                                    <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                    <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-expand\" href=\"#\">
                                                    <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                        <i class=\"fa fa-times\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-body partition-green\">
                            <div class=\"col-md-12\">
                                <div class=\"height-350\">
                                    <div id=\"chart4\" class='with-3d-shadow with-transitions'>
                                        <svg></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5\">
                    <div class=\"panel\">
                        <div class=\"panel-heading\">
                            <i class=\"clip-bars\"></i>
                            <h4 class=\"panel-title\">Pageviews <span class=\"text-bold\">real-time</span></h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <h3 class=\"inline\">26</h3> visitors on-line
                            <div class=\"progress progress-xs transparent-black no-radius\">
                                <div aria-valuetransitiongoal=\"12\" class=\"progress-bar progress-bar-success partition-green animate-progress-bar\" ></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h4>15</h4>
                                    <div class=\"progress progress-xs transparent-black no-margin no-radius\">
                                        <div aria-valuetransitiongoal=\"37\" class=\"progress-bar progress-bar-success partition-green animate-progress-bar\" ></div>
                                    </div>
                                    Direct
                                </div>
                                <div class=\"col-sm-4\">
                                    <h4>7</h4>
                                    <div class=\"progress progress-xs transparent-black no-margin no-radius\">
                                        <div aria-valuetransitiongoal=\"23\" class=\"progress-bar progress-bar-success partition-green animate-progress-bar\" ></div>
                                    </div>
                                    Sites
                                </div>
                                <div class=\"col-sm-4\">
                                    <h4>4</h4>
                                    <div class=\"progress progress-xs transparent-black no-margin no-radius\">
                                        <div aria-valuetransitiongoal=\"13\" class=\"progress-bar progress-bar-success partition-green animate-progress-bar\" ></div>
                                    </div>
                                    Search
                                </div>
                            </div>
                            <div class=\"row space10\">
                                <div class=\"col-sm-4 text-center\">
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-up text-green\"></i><span class=\"value\">26</span><span class=\"percentage\">%</span>
                                    </div>
                                    Mac OS X
                                </div>
                                <div class=\"col-sm-4 text-center\">
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-up text-green\"></i><span class=\"value\">62</span><span class=\"percentage\">%</span>
                                    </div>
                                    Windows
                                </div>
                                <div class=\"col-sm-4 text-center\">
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-down text-red\"></i><span class=\"value\">12</span><span class=\"percentage\">%</span>
                                    </div>
                                    Other OS
                                </div>
                            </div>
                            <div class=\"height-155\">
                                <div id='chart2' class='chart half with-transitions'>
                                    <svg></svg>
                                    <!--
                                    <button id='start-stop-button'>
                                    Start/Stop Stream
                                    </button>
                                    !-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: PAGE CONTENT-->
        </div>
        <div class=\"subviews\">
            <div class=\"subviews-container\"></div>
        </div>
    </div>
    <!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->";
        
        $__internal_7d9e063e20fe01067213c4f281e4e86c1c2e2731dc89f74b7bfece4de4752e0a->leave($__internal_7d9e063e20fe01067213c4f281e4e86c1c2e2731dc89f74b7bfece4de4752e0a_prof);

    }

    public function getTemplateName()
    {
        return ":common:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1727 => 1638,  1712 => 1626,  1697 => 1614,  1682 => 1602,  1540 => 1463,  1508 => 1434,  1476 => 1405,  1444 => 1376,  1404 => 1339,  1372 => 1310,  1340 => 1281,  1300 => 1244,  1268 => 1215,  1236 => 1186,  1204 => 1157,  1172 => 1128,  1120 => 1079,  611 => 573,  578 => 543,  538 => 506,  172 => 143,  155 => 129,  138 => 115,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- start: MAIN CONTAINER -->
<div class=\"main-container inner\">
    <!-- start: PAGE -->
    <div class=\"main-content\">
        <!-- start: PANEL CONFIGURATION MODAL FORM -->
        <div class=\"modal fade\" id=\"panel-config\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                            &times;
                        </button>
                        <h4 class=\"modal-title\">Panel Configuration</h4>
                    </div>
                    <div class=\"modal-body\">
                        Here will be a configuration form
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
                            Close
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\">
                            Save changes
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- end: SPANEL CONFIGURATION MODAL FORM -->
        <div class=\"container\">
            <!-- start: PAGE HEADER -->
            <!-- start: TOOLBAR -->
            <div class=\"toolbar row\">
                <div class=\"col-sm-6 hidden-xs\">
                    <div class=\"page-header\">
                        <h1>Dashboard <small>overview &amp; stats </small></h1>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xs-12\">
                    <a href=\"#\" class=\"back-subviews\">
                        <i class=\"fa fa-chevron-left\"></i> BACK
                    </a>
                    <a href=\"#\" class=\"close-subviews\">
                        <i class=\"fa fa-times\"></i> CLOSE
                    </a>
                    <div class=\"toolbar-tools pull-right\">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class=\"nav navbar-right\">
                            <!-- start: TO-DO DROPDOWN -->
                            <li class=\"dropdown\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
                                    <i class=\"fa fa-plus\"></i> SUBVIEW
                                    <div class=\"tooltip-notification hide\">
                                        <div class=\"tooltip-notification-arrow\"></div>
                                        <div class=\"tooltip-notification-inner\">
                                            <div>
                                                <div class=\"semi-bold\">
                                                    HI THERE!
                                                </div>
                                                <div class=\"message\">
                                                    Try the Subview Live Experience
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-light dropdown-subview\">
                                    <li class=\"dropdown-header\">
                                        Notes
                                    </li>
                                    <li>
                                        <a href=\"#newNote\" class=\"new-note\"><span class=\"fa-stack\"> <i class=\"fa fa-file-text-o fa-stack-1x fa-lg\"></i> <i class=\"fa fa-plus fa-stack-1x stack-right-bottom text-danger\"></i> </span> Add new note</a>
                                    </li>
                                    <li>
                                        <a href=\"#readNote\" class=\"read-all-notes\"><span class=\"fa-stack\"> <i class=\"fa fa-file-text-o fa-stack-1x fa-lg\"></i> <i class=\"fa fa-share fa-stack-1x stack-right-bottom text-danger\"></i> </span> Read all notes</a>
                                    </li>
                                    <li class=\"dropdown-header\">
                                        Calendar
                                    </li>
                                    <li>
                                        <a href=\"#newEvent\" class=\"new-event\"><span class=\"fa-stack\"> <i class=\"fa fa-calendar-o fa-stack-1x fa-lg\"></i> <i class=\"fa fa-plus fa-stack-1x stack-right-bottom text-danger\"></i> </span> Add new event</a>
                                    </li>
                                    <li>
                                        <a href=\"#showCalendar\" class=\"show-calendar\"><span class=\"fa-stack\"> <i class=\"fa fa-calendar-o fa-stack-1x fa-lg\"></i> <i class=\"fa fa-share fa-stack-1x stack-right-bottom text-danger\"></i> </span> Show calendar</a>
                                    </li>
                                    <li class=\"dropdown-header\">
                                        Contributors
                                    </li>
                                    <li>
                                        <a href=\"#newContributor\" class=\"new-contributor\"><span class=\"fa-stack\"> <i class=\"fa fa-user fa-stack-1x fa-lg\"></i> <i class=\"fa fa-plus fa-stack-1x stack-right-bottom text-danger\"></i> </span> Add new contributor</a>
                                    </li>
                                    <li>
                                        <a href=\"#showContributors\" class=\"show-contributors\"><span class=\"fa-stack\"> <i class=\"fa fa-user fa-stack-1x fa-lg\"></i> <i class=\"fa fa-share fa-stack-1x stack-right-bottom text-danger\"></i> </span> Show all contributor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
                                    <span class=\"messages-count badge badge-default hide\">3</span> <i class=\"fa fa-envelope\"></i> MESSAGES
                                </a>
                                <ul class=\"dropdown-menu dropdown-light dropdown-messages\">
                                    <li>
                                        <span class=\"dropdown-header\"> You have 9 messages</span>
                                    </li>
                                    <li>
                                        <div class=\"drop-down-wrapper ps-container\">
                                            <ul>
                                                <li class=\"unread\">
                                                    <a href=\"javascript:;\" class=\"unread\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"thread-image\">
                                                                <img src=\"{{ asset('rapido/images/avatar-2.jpg') }}\" alt=\"\">
                                                            </div>
                                                            <div class=\"thread-content\">
                                                                <span class=\"author\">Nicole Bell</span>
                                                                <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                <span class=\"time\"> Just Now</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\" class=\"unread\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"thread-image\">
                                                                <img src=\"{{ asset('rapido/images/avatar-3.jpg') }}\" alt=\"\">
                                                            </div>
                                                            <div class=\"thread-content\">
                                                                <span class=\"author\">Steven Thompson</span>
                                                                <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                <span class=\"time\">8 hrs</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <div class=\"clearfix\">
                                                            <div class=\"thread-image\">
                                                                <img src=\"{{ asset('rapido/images/avatar-5.jpg') }}\" alt=\"\">
                                                            </div>
                                                            <div class=\"thread-content\">
                                                                <span class=\"author\">Kenneth Ross</span>
                                                                <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                                <span class=\"time\">14 hrs</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"view-all\">
                                        <a href=\"pages_messages.html\">
                                            See All
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-search\">
                                <a href=\"#\">
                                    <i class=\"fa fa-search\"></i> SEARCH
                                </a>
                                <!-- start: SEARCH POPOVER -->
                                <div class=\"popover bottom search-box transition-all\">
                                    <div class=\"arrow\"></div>
                                    <div class=\"popover-content\">
                                        <!-- start: SEARCH FORM -->
                                        <form class=\"\" id=\"searchform\" action=\"#\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-main-color btn-squared\" type=\"button\">
                                                        <i class=\"fa fa-search\"></i>
                                                    </button> </span>
                                            </div>
                                        </form>
                                        <!-- end: SEARCH FORM -->
                                    </div>
                                </div>
                                <!-- end: SEARCH POPOVER -->
                            </li>
                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>
                </div>
            </div>
            <!-- end: TOOLBAR -->
            <!-- end: PAGE HEADER -->
            <!-- start: BREADCRUMB -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ol class=\"breadcrumb\">
                        <li>
                            <a href=\"#\">
                                Dashboard
                            </a>
                        </li>
                        <li class=\"active\">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- end: BREADCRUMB -->
            <!-- start: PAGE CONTENT -->
            <div class=\"row\">
                <div class=\"col-md-6 col-lg-3 col-sm-6\">
                    <div class=\"panel panel-default panel-white core-box\">
                        <div class=\"panel-tools\">
                            <a href=\"#\" class=\"btn btn-xs btn-link panel-close\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-green padding-20 text-center core-icon\">
                                <i class=\"fa fa-bar-chart-o fa-2x icon-big\"></i>
                            </div>
                            <div class=\"padding-20 core-content\">
                                <h3 class=\"title block no-margin\">SEO</h3>
                                <span class=\"subtitle\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                            </div>
                        </div>
                        <div class=\"panel-footer clearfix no-padding\">
                            <div class=\"\"></div>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More Options\"><i class=\"fa fa-cog\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add Content\"><i class=\"fa fa-plus\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"View More\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 col-sm-6\">
                    <div class=\"panel panel-default panel-white core-box\">
                        <div class=\"panel-tools\">
                            <a href=\"#\" class=\"btn btn-xs btn-link panel-close\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-blue padding-20 text-center core-icon\">
                                <i class=\"fa fa-code fa-2x icon-big\"></i>
                            </div>
                            <div class=\"padding-20 core-content\">
                                <h3 class=\"title block no-margin\">Programming</h3>
                                <span class=\"subtitle\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                            </div>
                        </div>
                        <div class=\"panel-footer clearfix no-padding\">
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More Options\"><i class=\"fa fa-cog\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add Content\"><i class=\"fa fa-plus\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"View More\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 col-sm-6\">
                    <div class=\"panel panel-default panel-white core-box\">
                        <div class=\"panel-tools\">
                            <a href=\"#\" class=\"btn btn-xs btn-link panel-close\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-red padding-20 text-center core-icon\">
                                <i class=\"fa fa-desktop fa-2x icon-big\"></i>
                            </div>
                            <div class=\"padding-20 core-content\">
                                <h3 class=\"title block no-margin\">Web design</h3>
                                <span class=\"subtitle\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                            </div>
                        </div>
                        <div class=\"panel-footer clearfix no-padding\">
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More Options\"><i class=\"fa fa-cog\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add Content\"><i class=\"fa fa-plus\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"View More\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 col-sm-6\">
                    <div class=\"panel panel-default panel-white core-box\">
                        <div class=\"panel-tools\">
                            <a href=\"#\" class=\"btn btn-xs btn-link panel-close\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-azure padding-20 text-center core-icon\">
                                <i class=\"fa fa-shopping-cart fa-2x icon-big\"></i>
                            </div>
                            <div class=\"padding-20 core-content\">
                                <h3 class=\"title block no-margin\">Orders</h3>
                                <span class=\"subtitle\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
                            </div>
                        </div>
                        <div class=\"panel-footer clearfix no-padding\">
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-green\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More Options\"><i class=\"fa fa-cog\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-blue\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add Content\"><i class=\"fa fa-plus\"></i></a>
                            <a href=\"#\" class=\"col-xs-4 padding-10 text-center text-white tooltips partition-red\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"View More\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-lg-4 col-sm-6\">
                    <div class=\"panel panel-blue core-box\">
                        <div class=\"e-slider owl-carousel owl-theme\">
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold\">
                                            Working on
                                        </div>
                                        <div class=\"text-white space15\">
                                            Navigation Illustration (<i>corporate website redesign</i>)
                                        </div>
                                        <div class=\"progress progress-xs transparent-black no-radius space5\">
                                            <div aria-valuetransitiongoal=\"88\" class=\"progress-bar progress-bar-success partition-white animate-progress-bar\" ></div>
                                        </div>
                                        <div class=\"text-light\">
                                            Leave Time
                                        </div>
                                        <div class=\"text-white text-extra-large pull-left\">
                                            2h 38m
                                        </div>
                                        <div class=\"text-white text-large pull-right\">
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-pause\"></i> Pause</a>
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-check\"></i> Complete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold\">
                                            Working on
                                        </div>
                                        <div class=\"text-white space15\">
                                            Prepare Commercial Offer For Mobile App
                                        </div>
                                        <div class=\"progress progress-xs transparent-black no-radius space5\">
                                            <div aria-valuetransitiongoal=\"59\" class=\"progress-bar progress-bar-success partition-white animate-progress-bar\" ></div>
                                        </div>
                                        <div class=\"text-light\">
                                            Leave Time
                                        </div>
                                        <div class=\"text-white text-extra-large pull-left\">
                                            8h 56m
                                        </div>
                                        <div class=\"text-white text-large pull-right\">
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-pause\"></i> Pause</a>
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-check\"></i> Complete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold\">
                                            Working on
                                        </div>
                                        <div class=\"text-white space15\">
                                            Release iPhone Update
                                        </div>
                                        <div class=\"progress progress-xs transparent-black no-radius space5\">
                                            <div aria-valuetransitiongoal=\"78\" class=\"progress-bar progress-bar-success partition-white animate-progress-bar\" ></div>
                                        </div>
                                        <div class=\"text-light\">
                                            Leave Time
                                        </div>
                                        <div class=\"text-white text-extra-large pull-left\">
                                            48h 32m
                                        </div>
                                        <div class=\"text-white text-large pull-right\">
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-pause\"></i> Pause</a>
                                            <a href=\"#\" class=\"btn btn-xs btn-light-blue\"><i class=\"fa fa-check\"></i> Complete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4 col-sm-6\">
                    <div class=\"panel panel-green\">
                        <div class=\"e-slider owl-carousel owl-theme\">
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold space15\">
                                            SOCIAL
                                        </div>
                                        <div class=\"space5\">
                                            <i class=\"fa fa-github fa-4x pull-left\"></i>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                            <br/>
                                            Ut enim ad minim veniam...
                                        </div>
                                        <span class=\"text-light text-small block pull-right\"> <i class=\"fa fa-clock-o\"></i> 11 min ago </span>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold space15\">
                                            SOCIAL
                                        </div>
                                        <div class=\"space5\">
                                            <i class=\"fa fa-facebook fa-4x pull-left\"></i>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy ibh euismod tincidunt.
                                        </div>
                                        <span class=\"text-light text-small block pull-right\"> <i class=\"fa fa-clock-o\"></i> 27 min ago </span>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"panel-body\">
                                    <div class=\"core-box\">
                                        <div class=\"text-dark text-bold space15\">
                                            SOCIAL
                                        </div>
                                        <div class=\"space5\">
                                            <i class=\"fa fa-twitter fa-4x pull-left\"></i>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy ibh euismod tincidunt.
                                        </div>
                                        <span class=\"text-light text-small block pull-right\"> <i class=\"fa fa-clock-o\"></i> 56 min ago </span>
                                    </div>
                                </div>
                                <div class=\"padding-10\">
                                    <span class=\"bold-text\">1527</span><span class=\"text-light\"> people share this goal </span>
                                    <a href=\"#\" class=\"view-more pull-right text-dark text-bold\">
                                        View More <i class=\"fa fa-angle-right text-light\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4 col-sm-12\">
                    <div id=\"notes\">
                        <div class=\"panel panel-note\">
                            <div class=\"e-slider owl-carousel owl-theme\">
                                <div class=\"item\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"no-margin\">This is a Note</h4>
                                    </div>
                                    <div class=\"panel-body space10\">
                                        <div class=\"note-short-content\">
                                            Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                                        </div>
                                        <div class=\"note-content\">
                                            Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
                                            Quis aute iure reprehenderit in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur.
                                            <br>
                                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            <br>
                                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                            <br>
                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                            <br>
                                            Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                            <br>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                            <br>
                                            Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                            <br>
                                            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        <div class=\"avatar-note\"><img src=\"{{ asset('rapido/images/avatar-2-small.jpg') }}\" alt=\"\">
                                        </div>
                                        <span class=\"author-note\">Nicole</span>
                                        <time class=\"timestamp\" title=\"2014-02-18T00:00:00-05:00\">
                                            2014-02-18T00:00:00-05:00
                                        </time>
                                        <div class=\"note-options pull-right\">
                                            <a href=\"#readNote\" class=\"read-note\" data-subviews-options='{\"startFrom\": \"right\", \"onShow\": \"readNote(subViewElement)\", \"onHide\": \"hideNote()\"}'><i class=\"fa fa-chevron-circle-right\"></i> Read</a><a href=\"#\" class=\"delete-note\"><i class=\"fa fa-times\"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"no-margin\">This is the second Note</h4>
                                    </div>
                                    <div class=\"panel-body space10\">
                                        <div class=\"note-short-content\">
                                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem, quia voluptas sit...
                                        </div>
                                        <div class=\"note-content\">
                                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            <br>
                                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                            <br>
                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                            <br>
                                            Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                            <br>
                                            Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                            <br>
                                            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        <div class=\"note-options pull-right\">
                                            <a href=\"#readNote\" class=\"show-subviews read-note\" data-subviews-options='{\"startFrom\": \"right\", \"onShow\": \"readNote(subViewElement)\", \"onHide\": \"hideNote()\"}'><i class=\"fa fa-chevron-circle-right\"></i> Read</a><a href=\"#\" class=\"delete-note\"><i class=\"fa fa-times\"></i> Delete</a>
                                        </div>
                                        <div class=\"avatar-note\"><img src=\"{{ asset('rapido/images/avatar-3-small.jpg') }}\" alt=\"\">
                                        </div>
                                        <span class=\"author-note\">Steven</span>
                                        <time class=\"timestamp\" title=\"2014-02-18T00:00:00-05:00\">
                                            2014-02-18T00:00:00-05:00
                                        </time>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"no-margin\">This is yet another Note</h4>
                                    </div>
                                    <div class=\"panel-body space10\">
                                        <div class=\"note-short-content\">
                                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores...
                                        </div>
                                        <div class=\"note-content\">
                                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                            <br>
                                            Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            <br>
                                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                            <br>
                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        <div class=\"note-options pull-right\">
                                            <a href=\"#readNote\" class=\"show-subviews read-note\" data-subviews-options='{\"startFrom\": \"right\", \"onShow\": \"readNote(subViewElement)\", \"onHide\": \"hideNote()\"}'><i class=\"fa fa-chevron-circle-right\"></i> Read</a><a href=\"#\" class=\"delete-note\"><i class=\"fa fa-times\"></i> Delete</a>
                                        </div>
                                        <div class=\"avatar-note\"><img src=\"{{ asset('rapido/images/avatar-4-small.jpg') }}\" alt=\"\">
                                        </div>
                                        <span class=\"author-note\">Ella</span>
                                        <time class=\"timestamp\" title=\"2014-02-18T00:00:00-05:00\">
                                            2014-02-18T00:00:00-05:00
                                        </time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-7\">
                    <div class=\"panel panel-white\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Earnings</h4>
                            <ul class=\"panel-heading-tabs border-light\">
                                <li>
                                    <div id=\"reportrange\" class=\"pull-right\">
                                        <span>This Week </span><i class=\"fa fa-angle-down\"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-up text-green\"></i><span class=\"value\">15</span><span class=\"percentage\">%</span>
                                    </div>
                                </li>
                                <li class=\"panel-tools\">
                                    <div class=\"dropdown\">
                                        <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                            <i class=\"fa fa-cog\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                            <li>
                                                <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-refresh\" href=\"#\">
                                                    <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                    <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-expand\" href=\"#\">
                                                    <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                        <i class=\"fa fa-times\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-body no-padding partition-green\">
                            <div class=\"col-md-3 col-lg-2 no-padding\">
                                <div class=\"partition-body padding-15\">
                                    <ul class=\"mini-stats\">
                                        <li class=\"col-md-12 col-sm-4 col-xs-4 no-padding\">
                                            <div class=\"sparkline-bar sparkline-1\">
                                                <span></span>
                                            </div>
                                            <div class=\"values\">
                                                <strong>18304</strong>
                                                Sales
                                            </div>
                                        </li>
                                        <li class=\"col-md-12 col-sm-4 col-xs-4 no-padding\">
                                            <div class=\"sparkline-bar sparkline-2\">
                                                <span></span>
                                            </div>
                                            <div class=\"values\">
                                                <strong>&#36;3,833</strong>
                                                Earnings
                                            </div>
                                        </li>
                                        <li class=\"col-md-12 col-sm-4 col-xs-4 no-padding\">
                                            <div class=\"sparkline-bar sparkline-3\">
                                                <span></span>
                                            </div>
                                            <div class=\"values\">
                                                <strong>&#36;848</strong>
                                                Referrals
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-9 col-lg-10 no-padding partition-white\">
                                <div class=\"partition\">
                                    <div class=\"partition-body padding-15\">
                                        <div class=\"height-300\">
                                            <div id=\"chart1\" class='with-3d-shadow with-transitions'>
                                                <svg></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5\">
                    <div class=\"panel panel-red panel-calendar\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Appointments</h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"height-300\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"actual-date\">
                                            <span class=\"actual-day\"></span>
                                            <span class=\"actual-month\"></span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <div class=\"clock-wrapper\">
                                                    <div class=\"clock\">
                                                        <div class=\"circle\">
                                                            <div class=\"face\">
                                                                <div id=\"hour\"></div>
                                                                <div id=\"minute\"></div>
                                                                <div id=\"second\"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <div class=\"weather text-light\">
                                                    <i class=\"wi-day-sunny\"></i>
                                                    25°
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"row\">
                                            <div class=\"appointments border-top border-bottom border-light space15\">
                                                <a class=\"btn btn-sm owl-prev text-light\">
                                                    <i class=\"fa fa-chevron-left\"></i>
                                                </a>
                                                <div class=\"e-slider owl-carousel owl-theme\" data-plugin-options='{\"transitionStyle\": \"goDown\", \"pagination\": false}'>
                                                    <div class=\"item\">
                                                        <div class=\"inline-block padding-10 border-right border-light\">
                                                            <span class=\"bold-text text-small\"><i class=\"fa fa-clock-o\"></i> 17:00</span>
                                                            <span class=\"text-light text-extra-small\">1 hour</span>
                                                        </div>
                                                        <div class=\"inline-block padding-10\">
                                                            <span class=\"bold-text text-small\">NETWORKING</span>
                                                            <span class=\"text-light text-small\">Out to design conference</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"item\">
                                                        <div class=\"inline-block padding-10 border-right border-light\">
                                                            <span class=\"bold-text text-small\"><i class=\"fa fa-clock-o\"></i> 18:30</span>
                                                            <span class=\"text-light text-extra-small\">30 mins</span>
                                                        </div>
                                                        <div class=\"inline-block padding-10\">
                                                            <span class=\"bold-text text-small\">BOOTSTRAP SEMINAR</span>
                                                            <span class=\"text-light text-small\">Problem Solving</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"item\">
                                                        <div class=\"inline-block padding-10 border-right border-light\">
                                                            <span class=\"bold-text text-small\"><i class=\"fa fa-clock-o\"></i> 20:00</span>
                                                            <span class=\"text-light text-extra-small\">2 hour</span>
                                                        </div>
                                                        <div class=\"inline-block padding-10\">
                                                            <span class=\"bold-text text-small\">Lunch with Nicole</span>
                                                            <span class=\"text-light text-small\">Next on Tuesday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class=\"btn btn-sm owl-next text-light\"><i class=\"fa fa-chevron-right\"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"pull-right\">
                                            <a href=\"#newEvent\" class=\"btn btn-sm btn-transparent-white new-event\"><i class=\"fa fa-plus\"></i> New Event </a>
                                            <a href=\"#showCalendar\" class=\"btn btn-sm btn-transparent-white show-calendar\"><i class=\"fa fa-calendar-o\"></i> Calendar </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-7 col-lg-4\">
                    <div class=\"panel panel-dark\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">Browser</h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"partition-green padding-15 text-center\">
                                <h4 class=\"no-margin\">Monthly Statistics</h4>
                                <span class=\"text-light\">based on the major browsers</span>
                            </div>
                            <div id=\"accordion\" class=\"panel-group accordion accordion-white no-margin\">
                                <div class=\"panel no-radius\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a href=\"#collapseOne\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle padding-15\">
                                                <i class=\"icon-arrow\"></i>
                                                This Month <span class=\"label label-danger pull-right\">3</span>
                                            </a></h4>
                                    </div>
                                    <div class=\"panel-collapse collapse in\" id=\"collapseOne\">
                                        <div class=\"panel-body no-padding partition-light-grey\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\">1</td>
                                                        <td>Google Chrome</td>
                                                        <td class=\"center\">4909</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">2</td>
                                                        <td>Mozilla Firefox</td>
                                                        <td class=\"center\">3857</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">3</td>
                                                        <td>Safari</td>
                                                        <td class=\"center\">1789</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">4</td>
                                                        <td>Internet Explorer</td>
                                                        <td class=\"center\">612</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel no-radius\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a href=\"#collapseTwo\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle padding-15 collapsed\">
                                                <i class=\"icon-arrow\"></i>
                                                Last Month
                                            </a></h4>
                                    </div>
                                    <div class=\"panel-collapse collapse\" id=\"collapseTwo\">
                                        <div class=\"panel-body no-padding partition-light-grey\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\">1</td>
                                                        <td>Google Chrome</td>
                                                        <td class=\"center\">5228</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">2</td>
                                                        <td>Mozilla Firefox</td>
                                                        <td class=\"center\">2853</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">3</td>
                                                        <td>Safari</td>
                                                        <td class=\"center\">1948</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">4</td>
                                                        <td>Internet Explorer</td>
                                                        <td class=\"center\">456</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"panel no-radius\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">
                                            <a href=\"#collapseThree\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle padding-15 collapsed\">
                                                <i class=\"icon-arrow\"></i>
                                                Two Months Ago
                                            </a></h4>
                                    </div>
                                    <div class=\"panel-collapse collapse\" id=\"collapseThree\">
                                        <div class=\"panel-body no-padding partition-light-grey\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\">1</td>
                                                        <td>Google Chrome</td>
                                                        <td class=\"center\">4256</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">2</td>
                                                        <td>Mozilla Firefox</td>
                                                        <td class=\"center\">3557</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">3</td>
                                                        <td>Safari</td>
                                                        <td class=\"center\">1435</td>
                                                        <td><i class=\"fa fa-caret-up text-green\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\">4</td>
                                                        <td>Internet Explorer</td>
                                                        <td class=\"center\">423</td>
                                                        <td><i class=\"fa fa-caret-down text-red\"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"panel panel-blue\">
                                <div class=\"panel-body padding-20 text-center\">
                                    <div class=\"space10\">
                                        <h5 class=\"text-white semi-bold no-margin p-b-5\">Today</h5>
                                        <h3 class=\"text-white no-margin\"><span class=\"text-small\">&#36;</span>1,450</h3>
                                        253 Sales
                                    </div>
                                    <div class=\"sparkline-4 space10\">
                                        <span ></span>
                                    </div>
                                    <span class=\"text-light\"><i class=\"fa fa-clock-o\"></i> 1 hour ago</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"panel panel-green\">
                                <div class=\"panel-body padding-20 text-center\">
                                    <div class=\"space10\">
                                        <h5 class=\"text-white semi-bold no-margin p-b-5\">Yesterday</h5>
                                        <h3 class=\"text-white no-margin\"><span class=\"text-small\">&#36;</span>1,250</h3>
                                        198 Sales
                                    </div>
                                    <div class=\"sparkline-5 space10\">
                                        <span></span>
                                    </div>
                                    <span class=\"text-light\"><i class=\"fa fa-clock-o\"></i> 1 hour ago</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"panel\">
                                <div class=\"panel-body\">
                                    <div class=\"easy-pie-chart\">
                                        <span class=\"cpu number appear\" data-percent=\"82\" data-plugin-options='{\"barColor\": \"#ff0000\"}'> <span class=\"percent\"></span> </span>
                                        <div class=\"label-chart\">
                                            <h4 class=\"no-margin\">Disk Space</h4>
                                        </div>
                                    </div>
                                    <div class=\"small-text text-center space15\">
                                        <span class=\"block\">Recommended</span><span class=\"label label-danger vertical-align-bottom\">85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"panel\">
                                <div class=\"panel-body\">
                                    <div class=\"easy-pie-chart\">
                                        <span class=\"bounce number appear\" data-percent=\"44\" data-plugin-options='{\"barColor\": \"#35aa47\"}'> <span class=\"percent\"></span> </span>
                                        <div class=\"label-chart\">
                                            <h4 class=\"no-margin\">CPU</h4>
                                        </div>
                                    </div>
                                    <div class=\"text-center space15\">
                                        <span class=\"block\">Recommended</span><span class=\"label label-danger vertical-align-bottom\">58%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"panel panel-white\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Users</h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"padding-10\">
                                <img width=\"50\" height=\"50\" alt=\"\" class=\"img-circle pull-left\" src=\"{{ asset('rapido/images/avatar-1-big.jpg') }}\">
                                <h4 class=\"no-margin inline-block padding-5\">Peter Clark <span class=\"block text-small text-left\">UI Designer</span></h4>
                                <div class=\"pull-right padding-15\">
                                    <span class=\"text-small text-bold text-green\"><i class=\"fa fa-dot-circle-o\"></i> on-line</span>
                                </div>
                            </div>
                            <div class=\"clearfix padding-5 space5\">
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <div class=\"border-right border-dark\">
                                        <a href=\"#\" class=\"text-dark\">
                                            <i class=\"fa fa-heart-o text-red\"></i> 250
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <div class=\"border-right border-dark\">
                                        <a href=\"#\" class=\"text-dark\">
                                            <i class=\"fa fa-bookmark-o text-green\"></i> 20
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <a href=\"#\" class=\"text-dark\"><i class=\"fa fa-comment-o text-azure\"></i> 544</a>
                                </div>
                            </div>
                            <div class=\"tabbable no-margin no-padding partition-dark\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"active\">
                                        <a data-toggle=\"tab\" href=\"#users_tab_example1\">
                                            All
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a data-toggle=\"tab\" href=\"#users_tab_example2\">
                                            View and Edit
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a data-toggle=\"tab\" href=\"#users_tab_example3\">
                                            View Only
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"tab-content partition-white\">
                                    <div id=\"users_tab_example1\" class=\"tab-pane padding-bottom-5 active\">
                                        <div class=\"panel-scroll height-230\">
                                            <table class=\"table table-striped table-hover\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-1.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">UI Designer</span><span class=\"text-large\">Peter Clark</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-2.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Content Designer</span><span class=\"text-large\">Nicole Bell</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-3.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Visual Designer</span><span class=\"text-large\">Steven Thompson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-5.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Senior Designer</span><span class=\"text-large\">Kenneth Ross</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-4.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Web Editor</span><span class=\"text-large\">Ella Patterson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id=\"users_tab_example2\" class=\"tab-pane padding-bottom-5\">
                                        <div class=\"panel-scroll height-230\">
                                            <table class=\"table table-striped table-hover\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-3.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Visual Designer</span><span class=\"text-large\">Steven Thompson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-5.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Senior Designer</span><span class=\"text-large\">Kenneth Ross</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-4.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Web Editor</span><span class=\"text-large\">Ella Patterson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id=\"users_tab_example3\" class=\"tab-pane padding-bottom-5\">
                                        <div class=\"panel-scroll height-230\">
                                            <table class=\"table table-striped table-hover\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-2.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Content Designer</span><span class=\"text-large\">Nicole Bell</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-3.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Visual Designer</span><span class=\"text-large\">Steven Thompson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-5.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Senior Designer</span><span class=\"text-large\">Kenneth Ross</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"center\"><img src=\"{{ asset('rapido/images/avatar-4.jpg') }}\" class=\"img-circle\" alt=\"image\"/></td>
                                                        <td><span class=\"text-small block text-light\">Web Editor</span><span class=\"text-large\">Ella Patterson</span><a href=\"#\" class=\"btn\"><i class=\"fa fa-pencil\"></i></a></td>
                                                        <td class=\"center\">
                                                            <div>
                                                                <div class=\"btn-group\">
                                                                    <a class=\"btn btn-transparent-grey dropdown-toggle btn-sm\" data-toggle=\"dropdown\" href=\"#\">
                                                                        <i class=\"fa fa-cog\"></i> <span class=\"caret\"></span>
                                                                    </a>
                                                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-dark pull-right\">
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-edit\"></i> Edit
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-share\"></i> Share
                                                                            </a>
                                                                        </li>
                                                                        <li role=\"presentation\">
                                                                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                                                <i class=\"fa fa-times\"></i> Remove
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-7 col-lg-4\">
                    <div class=\"panel panel-bricky\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Next <span class=\"text-bold\">Orders</span></h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-5\">
                                    <div id='chart3'>
                                        <svg></svg>
                                    </div>
                                </div>
                                <div class=\"col-md-7\">
                                    <div class=\"space20 padding-5 border-bottom border-light\">
                                        <h4 class=\"pull-left no-margin space5\">32.16K &euro;</h4>
                                        <span class=\"text-dark pull-right\">12:30</span>
                                        <div class=\"clearfix\"></div>
                                        <span class=\"text-light\">Supply acc. for Emea Region</span>
                                    </div>
                                    <div class=\"space20 padding-5 border-bottom border-light\">
                                        <h4 class=\"pull-left no-margin space5\">127.52K \$</h4>
                                        <span class=\"text-dark pull-right\">12:30</span>
                                        <div class=\"clearfix\"></div>
                                        <span class=\"text-light\">London HQ Account</span>
                                    </div>
                                    <div class=\"space20 padding-5 border-bottom border-light\">
                                        <h4 class=\"pull-left no-margin space5\">127.52K \$</h4>
                                        <span class=\"text-dark pull-right\">12:30</span>
                                        <div class=\"clearfix\"></div>
                                        <span class=\"text-light\">London HQ Account</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-footer partition-white\">
                            <div class=\"clearfix padding-5 space5\">
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <div class=\"border-right border-dark\">
                                        <span class=\"text-bold block text-extra-large\">90%</span>
                                        <span class=\"text-light\">Satisfied</span>
                                    </div>
                                </div>
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <div class=\"border-right border-dark\">
                                        <span class=\"text-bold block text-extra-large\">2%</span>
                                        <span class=\"text-light\">Unsatisfied</span>
                                    </div>
                                </div>
                                <div class=\"col-xs-4 text-center no-padding\">
                                    <span class=\"text-bold block text-extra-large\">8%</span>
                                    <span class=\"text-light\">NA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5\">
                    <div class=\"panel uploads\">
                        <div class=\"panel-body panel-portfolio no-padding\">
                            <div class=\"portfolio-grid portfolio-hover\">
                                <div class=\"overlayer bottom-left fullwidth\">
                                    <div class=\"overlayer-wrapper\">
                                        <div class=\"padding-20\">
                                            <h4 class=\"text-white no-margin\">Recent Uploads</h4>
                                            <h5 class=\"text-white\">Take a look at what other users are uploading right now</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"e-slider owl-carousel owl-theme portfolio-grid portfolio-hover\" data-plugin-options='{\"pagination\": false, \"stopOnHover\": true}'>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('rapido/images/image01.jpg') }}\" alt=\"\">
                                        <div class=\"caption\">
                                            <h2 class=\"caption-title\">Hover Style #10</h2>
                                            <p class=\"caption-description\">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                            </p>
                                            <a href=\"#\" class=\"caption-button\">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('rapido/images/image02.jpg') }}\" alt=\"\">
                                        <div class=\"caption\">
                                            <h2 class=\"caption-title\">Hover Style #10</h2>
                                            <p class=\"caption-description\">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                            </p>
                                            <a href=\"#\" class=\"caption-button\">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('rapido/images/image03.jpg') }}\" alt=\"\">
                                        <div class=\"caption\">
                                            <h2 class=\"caption-title\">Hover Style #10</h2>
                                            <p class=\"caption-description\">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                            </p>
                                            <a href=\"#\" class=\"caption-button\">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"item\">
                                        <img src=\"{{ asset('rapido/images/image04.jpg') }}\" alt=\"\">
                                        <div class=\"caption\">
                                            <h2 class=\"caption-title\">Hover Style #10</h2>
                                            <p class=\"caption-description\">
                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                            </p>
                                            <a href=\"#\" class=\"caption-button\">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"partition partition-white padding-15\">
                                <div class=\"navigator\">
                                    <a href=\"#\" class=\"circle-50 partition-white owl-prev\"><i class=\"fa fa-chevron-left text-extra-large\"></i></a>
                                    <a href=\"#\" class=\"circle-50 partition-white owl-next\"><i class=\"fa fa-chevron-right text-extra-large\"></i></a>
                                </div>
                                <div class=\"clearfix space5\">
                                    <div class=\"col-xs-12 text-center no-padding space10\">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </div>
                                    <div class=\"col-xs-12 text-center no-padding\">
                                        <a class=\"tags\">
                                            New York
                                        </a>
                                        <a class=\"tags\">
                                            London
                                        </a>
                                        <a class=\"tags\">
                                            Rome
                                        </a>
                                        <a class=\"tags\">
                                            Paris
                                        </a>
                                        <a class=\"tags\">
                                            Berlin
                                        </a>
                                        <a class=\"tags\">
                                            Amsterdam
                                        </a>
                                        <a class=\"tags\">
                                            Madrid
                                        </a>
                                    </div>
                                </div>
                                <div class=\"clearfix padding-5\">
                                    <div class=\"col-xs-4 text-center no-padding\">
                                        <div class=\"border-right border-dark\">
                                            <a href=\"#\" class=\"text-dark\">
                                                <i class=\"fa fa-heart-o text-red\"></i> 250
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-4 text-center no-padding\">
                                        <div class=\"border-right border-dark\">
                                            <a href=\"#\" class=\"text-dark\">
                                                <i class=\"fa fa-bookmark-o text-green\"></i> 20
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-4 text-center no-padding\">
                                        <a href=\"#\" class=\"text-dark\"><i class=\"fa fa-comment-o text-azure\"></i> 544</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"panel panel-green\">
                        <div class=\"panel-heading border-light\">
                            <span class=\"text-extra-small text-dark\">LAST PROJECT: </span><span class=\"text-large text-white\">Luxury Store</span>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-white\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body no-padding\">
                            <div class=\"row no-margin\">
                                <div class=\"padding-10 col-md-12\">
                                    <div class=\"progress progress-xs transparent-black no-radius space5\">
                                        <div aria-valuetransitiongoal=\"88\" class=\"progress-bar progress-bar-success partition-white animate-progress-bar\" ></div>
                                    </div>
                                    <span class=\"text-extra-small\">88% status</span>
                                </div>
                                <div class=\"padding-10 col-md-12\">
                                    <div class=\"pull-left\">
                                        <span class=\"background-dark padding-5 radius-5 text-small inline-block\"><i class=\"fa fa-clock-o\"></i> 43 days</span>
                                        <span class=\"background-dark padding-5 radius-5 text-small inline-block\"><i class=\"fa fa-calendar-o\"></i> January 04</span>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"#\" class=\"btn btn-sm btn-transparent-white\"><i class=\"fa fa-plus\"></i> New Projext </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tabbable no-margin no-padding partition-dark\">
                                <ul class=\"nav nav-tabs\" id=\"myTab2\">
                                    <li class=\"active\">
                                        <a data-toggle=\"tab\" href=\"#todo_tab_example1\">
                                            To-do
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a data-toggle=\"tab\" href=\"#todo_tab_example2\">
                                            Next Week
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a data-toggle=\"tab\" href=\"#todo_tab_example3\">
                                            Next Month
                                        </a>
                                    </li>
                                </ul>
                                <div class=\"tab-content partition-white\">
                                    <div id=\"todo_tab_example1\" class=\"tab-pane padding-bottom-5 active\">
                                        <div class=\"panel-scroll height-180\">
                                            <ul class=\"todo\">
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Staff Meeting</span><span class=\"label label-danger\"> today</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 13:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">New frontend layout</span><span class=\"label label-danger\"> today</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 20:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Hire developers</span><span class=\"label label-warning\"> tommorow</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 7:00 AM Tomorrow</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Staff Meeting</span><span class=\"label label-success\"> this week</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 12:00 AM this week</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id=\"todo_tab_example2\" class=\"tab-pane padding-bottom-5\">
                                        <div class=\"panel-scroll height-180\">
                                            <ul class=\"todo\">
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Hire developers</span><span class=\"label label-success\"> Monday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 12:00 AM this week</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Lunch with Nicole</span><span class=\"label label-danger\"> Wednesday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 20:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">New frontend layout</span><span class=\"label label-warning\"> Wednesday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 7:00 AM Tomorrow</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Staff Meeting</span><span class=\"label label-danger\"> Friday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 13:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id=\"todo_tab_example3\" class=\"tab-pane padding-bottom-5\">
                                        <div class=\"panel-scroll height-180\">
                                            <ul class=\"todo\">
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Lunch with Boss</span><span class=\"label label-warning\"> 01 monday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 12:00 AM this week</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Bootstrap Seminar</span><span class=\"label label-success\"> 05 wednesday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 20:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">New frontend layout</span><span class=\"label label-warning\"> 05 Wednesday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 7:00 AM Tomorrow</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"todo-actions\">
                                                        <i class=\"fa fa-square-o\"></i>
                                                        <div class=\"padding-horizontal-5\">
                                                            <div class=\"block space5\">
                                                                <span class=\"desc\">Staff Meeting</span><span class=\"label label-danger\"> 07 Friday</span>
                                                            </div>
                                                            <div class=\"block\">
                                                                <span class=\"desc text-small text-light\"><i class=\"fa fa-clock-o\"></i> 13:00 PM Today</span>
                                                                <div class=\"btn-group btn-group-sm todo-tools\">
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                                    </a>
                                                                    <a class=\"btn\" href=\"javascript:;\">
                                                                        <i class=\"fa fa-trash-o\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-7\">
                    <div class=\"panel panel-white\">
                        <div class=\"panel-heading border-light\">
                            <h4 class=\"panel-title\">Site <span class=\"text-bold\">Visits</span></h4>
                            <ul class=\"panel-heading-tabs border-light\">
                                <li>
                                    <div class=\"pull-right\">
                                        <div class=\"btn-group\">
                                            <a class=\"btn btn-green dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                Tools <span class=\"caret\"></span>
                                            </a>
                                            <ul role=\"menu\" class=\"dropdown-menu\">
                                                <li class=\"dropdown-header\" role=\"presentation\">
                                                    Dropdown header
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        Action
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        Another action
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        Something else here
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li class=\"dropdown-header\" role=\"presentation\">
                                                    Dropdown header
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        Separated link
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-up text-green\"></i><span class=\"value\">11</span><span class=\"percentage\">%</span>
                                    </div>
                                </li>
                                <li class=\"panel-tools\">
                                    <div class=\"dropdown\">
                                        <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                            <i class=\"fa fa-cog\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                            <li>
                                                <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-refresh\" href=\"#\">
                                                    <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                    <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"panel-expand\" href=\"#\">
                                                    <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                        <i class=\"fa fa-times\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-body partition-green\">
                            <div class=\"col-md-12\">
                                <div class=\"height-350\">
                                    <div id=\"chart4\" class='with-3d-shadow with-transitions'>
                                        <svg></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5\">
                    <div class=\"panel\">
                        <div class=\"panel-heading\">
                            <i class=\"clip-bars\"></i>
                            <h4 class=\"panel-title\">Pageviews <span class=\"text-bold\">real-time</span></h4>
                            <div class=\"panel-tools\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"btn btn-xs dropdown-toggle btn-transparent-grey\">
                                        <i class=\"fa fa-cog\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-light pull-right\" role=\"menu\">
                                        <li>
                                            <a class=\"panel-collapse collapses\" href=\"#\"><i class=\"fa fa-angle-up\"></i> <span>Collapse</span> </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-refresh\" href=\"#\">
                                                <i class=\"fa fa-refresh\"></i> <span>Refresh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-config\" href=\"#panel-config\" data-toggle=\"modal\">
                                                <i class=\"fa fa-wrench\"></i> <span>Configurations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"panel-expand\" href=\"#\">
                                                <i class=\"fa fa-expand\"></i> <span>Fullscreen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class=\"btn btn-xs btn-link panel-close\" href=\"#\">
                                    <i class=\"fa fa-times\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <h3 class=\"inline\">26</h3> visitors on-line
                            <div class=\"progress progress-xs transparent-black no-radius\">
                                <div aria-valuetransitiongoal=\"12\" class=\"progress-bar progress-bar-success partition-green animate-progress-bar\" ></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <h4>15</h4>
                                    <div class=\"progress progress-xs transparent-black no-margin no-radius\">
                                        <div aria-valuetransitiongoal=\"37\" class=\"progress-bar progress-bar-success partition-green animate-progress-bar\" ></div>
                                    </div>
                                    Direct
                                </div>
                                <div class=\"col-sm-4\">
                                    <h4>7</h4>
                                    <div class=\"progress progress-xs transparent-black no-margin no-radius\">
                                        <div aria-valuetransitiongoal=\"23\" class=\"progress-bar progress-bar-success partition-green animate-progress-bar\" ></div>
                                    </div>
                                    Sites
                                </div>
                                <div class=\"col-sm-4\">
                                    <h4>4</h4>
                                    <div class=\"progress progress-xs transparent-black no-margin no-radius\">
                                        <div aria-valuetransitiongoal=\"13\" class=\"progress-bar progress-bar-success partition-green animate-progress-bar\" ></div>
                                    </div>
                                    Search
                                </div>
                            </div>
                            <div class=\"row space10\">
                                <div class=\"col-sm-4 text-center\">
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-up text-green\"></i><span class=\"value\">26</span><span class=\"percentage\">%</span>
                                    </div>
                                    Mac OS X
                                </div>
                                <div class=\"col-sm-4 text-center\">
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-up text-green\"></i><span class=\"value\">62</span><span class=\"percentage\">%</span>
                                    </div>
                                    Windows
                                </div>
                                <div class=\"col-sm-4 text-center\">
                                    <div class=\"rate\">
                                        <i class=\"fa fa-caret-down text-red\"></i><span class=\"value\">12</span><span class=\"percentage\">%</span>
                                    </div>
                                    Other OS
                                </div>
                            </div>
                            <div class=\"height-155\">
                                <div id='chart2' class='chart half with-transitions'>
                                    <svg></svg>
                                    <!--
                                    <button id='start-stop-button'>
                                    Start/Stop Stream
                                    </button>
                                    !-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: PAGE CONTENT-->
        </div>
        <div class=\"subviews\">
            <div class=\"subviews-container\"></div>
        </div>
    </div>
    <!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->", ":common:content.html.twig", "/var/www/html/scv/app/Resources/views/common/content.html.twig");
    }
}
